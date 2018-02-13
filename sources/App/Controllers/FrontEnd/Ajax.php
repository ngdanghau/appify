<?php
class Ajax
{
    public static function post($page)
    {
    	if (!$page) 	$page = 1;
		$limit 		= 	($page-1)*6;
		if($limit<0) 	$limit=0;
        $post = Post_Model::get($limit,6,'id > 0');
        $html = '';
        foreach ($post as $item){
            if (!empty($item->featured)){ 
                $featured =  $item->featured; 
            }else{ 
                $featured = 'images/blog/1.jpg';
            }
            $html .= '<!-- post single -->
            <article class="post masonry-item">
                <div class="post-inner">
                    <a href="'.get_url($item->id,$item->title,'blog').'" class="post-thumb">
                        <img class="img-responsive" src="'.$featured.'" alt="Blog Image">
                    </a>
                    <h3 class="post-title"><a href="'.get_url($item->id,$item->title,'blog').'">'.$item->title.'</a></h3>
                    <div class="post-metas">
                        <span class="date-meta post-meta"><i class="fa fa-calendar"></i> '.date('d F Y',$item->timeupdate).' </span>
                    </div>
                    <p class="post-excerpt">
                        '.CutName($item->description,100).'
                    </p>
                </div>
            </article>';
        }
        return $html;
    }

    public static function tagPost($page,$tag)
    {
        if (!$page)     $page = 1;
        $limit      =   ($page-1)*6;
        if($limit<0)    $limit=0;
        $tag = RemoveHack($tag);
        $post = Post_Model::get($limit,6,"tags LIKE '%$tag%'");
        $html = '';
        foreach ($post as $item){
            if (!empty($item->featured)){ 
                $featured =  $item->featured; 
            }else{ 
                $featured = 'images/blog/1.jpg';
            }
            $html .= '<!-- post single -->
            <article class="post masonry-item">
                <div class="post-inner">
                    <a href="'.get_url($item->id,$item->title,'blog').'" class="post-thumb">
                        <img class="img-responsive" src="'.$featured.'" alt="Blog Image">
                    </a>
                    <h3 class="post-title"><a href="'.get_url($item->id,$item->title,'blog').'">'.$item->title.'</a></h3>
                    <div class="post-metas">
                        <span class="date-meta post-meta"><i class="fa fa-calendar"></i> '.date('d F Y',$item->timeupdate).' </span>
                    </div>
                    <p class="post-excerpt">
                        '.CutName($item->description,100).'
                    </p>
                </div>
            </article>';
        }
        return $html;
    }

    public static function categoryPost($page,$category)
    {
        if (!$page)     $page = 1;
        $limit      =   ($page-1)*6;
        if($limit<0)    $limit=0;
        $catid = Category_Model::getid(RemoveHack($category));
        $post = Post_Model::get($limit,6,"category = $catid");
        $html = '';
        foreach ($post as $item){
            if (!empty($item->featured)){ 
                $featured =  $item->featured; 
            }else{ 
                $featured = 'images/blog/1.jpg';
            }
            $html .= '<!-- post single -->
            <article class="post masonry-item">
                <div class="post-inner">
                    <a href="'.get_url($item->id,$item->title,'blog').'" class="post-thumb">
                        <img class="img-responsive" src="'.$featured.'" alt="Blog Image">
                    </a>
                    <h3 class="post-title"><a href="'.get_url($item->id,$item->title,'blog').'">'.$item->title.'</a></h3>
                    <div class="post-metas">
                        <span class="date-meta post-meta"><i class="fa fa-calendar"></i> '.date('d F Y',$item->timeupdate).' </span>
                    </div>
                    <p class="post-excerpt">
                        '.CutName($item->description,100).'
                    </p>
                </div>
            </article>';
        }
        return $html;
    }

    public static function searchPost($page,$search)
    {
        if (!$page)     $page = 1;
        $limit      =   ($page-1)*6;
        if($limit<0)    $limit=0;
        $search = str_replace('-',' ',RemoveHack($search));
        $post = Post_Model::get($limit,6,"title LIKE '%$search%'");
        $html = '';
        foreach ($post as $item){
            if (!empty($item->featured)){ 
                $featured =  $item->featured; 
            }else{ 
                $featured = 'images/blog/1.jpg';
            }
            $html .= '<!-- post single -->
            <article class="post masonry-item">
                <div class="post-inner">
                    <a href="'.get_url($item->id,$item->title,'blog').'" class="post-thumb">
                        <img class="img-responsive" src="'.$featured.'" alt="Blog Image">
                    </a>
                    <h3 class="post-title"><a href="'.get_url($item->id,$item->title,'blog').'">'.$item->title.'</a></h3>
                    <div class="post-metas">
                        <span class="date-meta post-meta"><i class="fa fa-calendar"></i> '.date('d F Y',$item->timeupdate).' </span>
                    </div>
                    <p class="post-excerpt">
                        '.CutName($item->description,100).'
                    </p>
                </div>
            </article>';
        }
        return $html;
    }

    public static function faq($name,$email,$message){
        // Variables
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $subject = "A message from Appify";
        $message = trim($_POST['message']);
        // Email address validation - works with php 5.2+
        function is_email_valid($email) {
            return filter_var($email, FILTER_VALIDATE_EMAIL);
        }
        if( isset($name) && isset($email) && isset($subject) && isset($message) && is_email_valid($email) ) {
            // Avoid Email Injection and Mail Form Script Hijacking
            $pattern = "/(content-type|bcc:|cc:|to:)/i";
            if( preg_match($pattern, $name) || preg_match($pattern, $email) || preg_match($pattern, $message) ) {
                exit;
            }
        $html = 'Name: '.$name.' -  Email: '.$email.' - Message: '.$message;
        $mail = phpmailer($html,$email,$subject);    
            
        }
        return true;
    }
}