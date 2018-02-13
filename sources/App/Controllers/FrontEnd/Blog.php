<?php

class Blog
{
    public function listPost()
    {
    	$title = 'Danh Sách Bài Viết';
    	$description = 'blog';
        $tags = 'blog';
    	$post = Post_Model::get(0,6,'id > 0');
        include View::Template('lists/blog');
    }

    public function get($id)
    {
    	$post = Post_Model::show($id);
    	$description = $post->description;
    	$title = $post->title;
        $tags = $post->tags;
        include View::Template('pages/blog');
    }

    public function tagPost($tag)
    {
    	$tag = RemoveHack($tag);
    	$title = 'Danh Sách Bài Viết Theo Tag: '.$tag;
        $description = $tag;
        $tags = $tag;
        $post = Post_Model::get(0,6,"tags LIKE '%$tag%'");
        include View::Template('lists/blog');
    }

    public function categoryPost($category)
    {
        $catid = Category_Model::getid(RemoveHack($category)); 
        $post = Post_Model::get(0,6,"category = $catid");
        $title = 'Danh Sách Bài Viết Theo Thể Loại: '.Category_Model::show($catid)->name;
        $description = Category_Model::show($catid)->description;
        $tags = $category;
        include View::Template('lists/blog');
    }

    public function searchPost($search)
    {
        $search = str_replace('-',' ',RemoveHack($search));
        $title = 'Danh Sách Bài Viết Theo Từ Khóa: '.$search;
        $description = $search;
        $tags = $search;
        $post = Post_Model::get(0,6,"title LIKE '%$search%'");
        include View::Template('lists/blog');
    }

}