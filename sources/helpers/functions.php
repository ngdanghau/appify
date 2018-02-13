<?php
# Lấy thông tin cấu hình của cache
function get_jsonconfig($config_name,$file) {
	$table = str_replace('site','',$file);
	$file = CACHE_PATH."config/$file".CACHE_EXT;
	$data = Cache::BEGIN_CACHE($file);
	if(!$data) {
		$arr = MySql::dbselect('config_name,config_content',"$table","config_name != ''");
		for($i=0;$i<count($arr);$i++) {
			$_config_name = $arr[$i][0];
			$_config_content = $arr[$i][1];
			$data[$_config_name] = $_config_content;
		}
		$data = json_encode($data);
		Cache::END_CACHE($data,$file);
	}
	$html = json_decode($data);
	$rs = $html->$config_name;
	return $rs;
}
# Info head
function head_site($data,$config_name) {
	$html = get_jsonconfig($config_name,'siteconfig_other');
	$html = str_replace('%name%',$data,$html);
	return $html;
}
# Loại bỏ những ký tự dư thừa
function doStripslashes() {
	if (get_magic_quotes_gpc()) {
		$_GET = stripslashesDeep($_GET);
		$_POST = stripslashesDeep($_POST);
		$_COOKIE = stripslashesDeep($_COOKIE);
		$_REQUEST = stripslashesDeep($_REQUEST);
	}
}
# Nén dữ liệu trang
function sanitize_output($buffer) {
    $html = Cache::SanitizeOutput($buffer);
    return $html;
}
# Chống hành động xấu khi nhập dữ liệu
function RemoveHack($str) {
	$str = htmlchars(stripslashes(trim(urldecode($str))));
	return $str;
}
# Chuyển đổi chars sang html
function UnHtmlChars($str) {
    $data = str_replace(array('&lt;','&gt;','&quot;','&amp;','&#92;','&#39','&#039;'), array('<','>','"','&',chr(92),"'",chr(39)), $str);
	return $data;
}
# Chuyển đổi html sang chars
function HtmlChars($str) {
    $data = str_replace(array('&','<','>','"',chr(92),chr(39)), array('&amp;','&lt;','&gt;','&quot;','&#92;','&#39'), $str);
	return $data;
}
# Chuyển đổi ký tự tiếng việt sang dạng ascii
function VietChar($str) {
    $vietChar    = 'á|à|ả|ã|ạ|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ|é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ|ó|ò|ỏ|õ|ọ|ơ|ớ|ờ|ở|ỡ|ợ|ô|ố|ồ|ổ|ỗ|ộ|ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự|í|ì|ỉ|ĩ|ị|ý|ỳ|ỷ|ỹ|ỵ|đ|Á|À|Ả|Ã|Ạ|Ă|Ắ|Ằ|Ẳ|Ẵ|Ặ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ|É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ|Ó|Ò|Ỏ|Õ|Ọ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự|Í|Ì|Ỉ|Ĩ|Ị|Ý|Ỳ|Ỷ|Ỹ|Ỵ|Đ';
    $engChar     = 'a|a|a|a|a|a|a|a|a|a|a|a|a|a|a|a|a|e|e|e|e|e|e|e|e|e|e|e|o|o|o|o|o|o|o|o|o|o|o|o|o|o|o|o|o|u|u|u|u|u|u|u|u|u|u|u|i|i|i|i|i|y|y|y|y|y|d|A|A|A|A|A|A|A|A|A|A|A|A|A|A|A|A|A|E|E|E|E|E|E|E|E|E|E|E|O|O|O|O|O|O|O|O|O|O|O|O|O|O|O|O|O|U|U|U|U|U|U|U|U|U|U|U|I|I|I|I|I|Y|Y|Y|Y|Y|D';
    $arrVietChar = explode("|", $vietChar);
    $arrEngChar  = explode("|", $engChar);
    $data = str_replace(array('&lt;','&gt;','&quot;','&amp;','&#92;','&#39','&#039;'), array('<','>','"','&',chr(92),"'",chr(39)), $str);
    return str_replace($arrVietChar, $arrEngChar, $data, $str);
}
# Thay thế khoảng trắng sang dấu gạch ngang, loại bỏ ký tự đặc biệt
function Replace($string) {
    $string = strtolower($string);
    $string = str_replace('.','-',$string);
    $string = preg_replace(array('/[^a-zA-Z0-9 -]/','/[ -]+/','/^-|-$/'), array('','-',''), htmlspecialchars_decode($string));
    return $string;
}
# Cắt chữ
function CutName($str, $len) {
    $str = trim($str);
    if (strlen($str) <= $len)
        return $str;
    $str = substr($str, 0, $len);
    if ($str != "") {
        if (!substr_count($str, " "))
            return $str . " ...";
        while (strlen($str) && ($str[strlen($str) - 1] != " "))
            $str = substr($str, 0, -1);
        $str = substr($str, 0, -1) . " ...";
    }
    return $str;
}
# Loại bỏ html
function RemoveHtml($document) {
    $search = array(
        '@<script[^>]*?>.*?</script>@si', // Chứa javascript
        '@<[\/\!]*?[^<>]*?>@si', // Chứa các thẻ HTML
        '@<style[^>]*?>.*?</style>@siU', // Chứa các thẻ style
        '@<![\s\S]*?--[ \t\n\r]*>@' // Xóa toàn bộ dữ liệu bên trong các dấu ngoặc "<" và ">"
    );
    $text   = preg_replace($search, '', $document);
    $text   = strip_tags($text);
	$text   = trim($text);
    return $text;
}
# Chống fool, Spam
function AntiSpam() {
    $_SESSION['current_message_post'] = time();
    $timeDiff_post                    = $_SESSION['current_message_post'] - $_SESSION['prev_message_post'];
    $floodInterval_post               = 10;
    $wait_post                        = $floodInterval_post - $timeDiff_post;
    if ($timeDiff_post <= $floodInterval_post) return true;
    else return false;
}
# Decode uf8
function unescapeUTF8EscapeSeq($str) {
    return preg_replace_callback("/\\\u([0-9a-f]{4})/i",create_function('$matches','return html_entity_decode(\'&#x\'.$matches[1].\';\', ENT_QUOTES, \'UTF-8\');'), $str);
}
# Get BY Curl
function curlGet($URL) {
    $ch = curl_init();
    $timeout = 3;
    curl_setopt( $ch , CURLOPT_URL , $URL );
    curl_setopt( $ch , CURLOPT_RETURNTRANSFER , 1 );
    curl_setopt( $ch , CURLOPT_CONNECTTIMEOUT , $timeout );
	/* if you want to force to ipv6, uncomment the following line */ 
	//curl_setopt( $ch , CURLOPT_IPRESOLVE , 'CURLOPT_IPRESOLVE_V6');
    $tmp = curl_exec( $ch );
    curl_close( $ch );
    return $tmp;
}
function curl($url){
  $ch = @curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  $head[] = "Connection: keep-alive";
  $head[] = "Keep-Alive: 300";
  $head[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
  $head[] = "Accept-Language: en-us,en;q=0.5";
  curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/37.0.2062.124 Safari/537.36');
  curl_setopt($ch, CURLOPT_ENCODING, 'gzip');
  curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
  curl_setopt($ch, CURLOPT_TIMEOUT, 15);
  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 15);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
  $page = curl_exec($ch);
  curl_close($ch);
  return $page;
}
# Gữi Mail
function phpmailer($html,$email,$subject){
    require 'mailer/PHPMailerAutoload.php';
    require 'mailer/class.phpmailer.php';
    include('mailer/class.smtp.php'); 
        $mail = new PHPMailer(); // create a new object
        $mail->CharSet = 'UTF-8';
        $mail->IsSMTP(); // enable SMTP
        $mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only
        $mail->SMTPAuth = true; // authentication enabled
        $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 465; // or 587
        $mail->IsHTML(true);
        $mail->Username = 'dasdasdasdasdasd';//Nhap mail của bạn
        $mail->Password = 'dasdasdasdasdasd';///Password mail
        $mail->SetFrom('no-reply@gmail.com',"Trà Dây - Đơn Đặt Hàng");
        $mail->Subject = $subject;
        $mail->Body = $html;
        $mail->AddAddress($email);
        $mail->AddAddress('00xshen00@gmail.com');
         if(!$mail->Send()) {
            $err =  0;
         } else {
            $err =  1;
         }
        return $err; 
}
?>