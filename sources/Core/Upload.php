<?php
class Upload {
    public static function image($file,$name) {
        $allowed = array('image/jpeg', 'image/jpg', 'image/png', 'images/x-png');
            if(in_array(strtolower($file['type']), $allowed)) {
                $ext = end(explode('.', $file['name']));
                $renamed = Replace(VietChar($name)).time().'.'.$ext;
                move_uploaded_file($file['tmp_name'], Config::RESOURCE_PATH.$renamed);
                $name = Config::RESOURCE_URL.$renamed;
        }
        return $name;
    }
}