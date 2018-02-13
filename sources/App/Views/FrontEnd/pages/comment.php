<!-- Given Comment -->
<div class="given-comment">
	<?php if (Comment_Model::count($post->id) == null){ ?>
    <h3 class="given-comment-title">No Comments</h3>
    <?php }else{ ?>
    <h3 class="given-comment-title"><?php echo Comment_Model::count($post->id);?> Comments</h3>
    <ul class="comments">
        <?php 
        $comment =  Comment_Model::get($post->id,'parent_id = 0');
        foreach ($comment as $item) {
        $comment_child =  Comment_Model::get($post->id,"parent_id = $item->id");
        if (empty($comment_child)) {
        ?>
        <li class="comment">
            <div class="comment-wrap" id="<?php echo $item->id;?>">
                <div class="commenter-thumb">
                    <img src="<?php echo User_Model::avatar($item->user_id);?>" alt="commenter Photo">
                </div>
                <div class="comment-body">
                    <h6 class="comment-title">
                        <span class="commenter-name"><?php echo $item->name;?> /</span>
                        <span class="comment-date"><?php echo date('d F Y',$item->timeupdate);?></span>
                    </h6>
                    <div class="comment-content">
                        <p><?php echo UnHtmlChars($item->comment);?></p>
                    </div>
                    <a class="comment-reply" href="javascript:void(0);"><i class="fa fa-reply"></i> Reply</a>
                </div>
            </div>
        </li>
        <?php }else{ ?>
        <li class="comment">
            <div class="comment-wrap" id="<?php echo $item->id;?>">
                <div class="commenter-thumb">
                    <img src="<?php echo User_Model::avatar($item->user_id);?>" alt="commenter Photo">
                </div>
                <div class="comment-body">
                    <h6 class="comment-title">
                        <span class="commenter-name"><?php echo $item->name;?> /</span>
                        <span class="comment-date"><?php echo date('d F Y',$item->timeupdate);?></span>
                    </h6>
                    <div class="comment-content">
                        <p><?php echo UnHtmlChars($item->comment);?></p>
                    </div>
                    <a class="comment-reply" href="javascript:void(0);"><i class="fa fa-reply"></i> Reply</a>
                </div>
            </div>
            <?php foreach ($comment_child as $items) { ?>
            <ul class="comments child-comments">
                <li class="comment">
                    <div class="comment-wrap">
                        <div class="commenter-thumb">
                            <img src="<?php echo User_Model::avatar($items->user_id);?>" alt="commenter Photo">
                        </div>
                        <div class="comment-body">
                            <h6 class="comment-title">
                                <span class="commenter-name"><?php echo $items->name ?> /</span>
                                <span class="comment-date"><?php echo date('d F Y',$items->timeupdate);?></span>
                            </h6>
                            <div class="comment-content">
                                <p><?php echo UnHtmlChars($items->comment);?></p>
                            </div>
                            <a class="comment-reply" href="javascript:void(0);"><i class="fa fa-reply"></i> Reply</a>
                        </div>
                    </div>
                </li>
            </ul>
            <?php } ?>
        <?php } ?>
        <?php } ?>
    </ul>
    <?php } ?>
</div>
<!-- Given Comment End -->
<?php 
if (isset($_POST['comment-submit'])) {
    $condition = 'name, email, comment, user_id, post_id, timeupdate';
    $value = ':name, :email, :comment, :user_id, :post_id, :timeupdate';
    $data = array(
            ':name' => RemoveHack($_POST['name']),
            ':email' => RemoveHack($_POST['email']),
            ':comment' => RemoveHack($_POST['comment']),
            ':user_id' => 0,
            ':post_id' => $post->id,
            'timeupdate' =>time()
        );
    $id = Comment_Model::create($condition,$value,$data)-1;
    if (!empty($id)) {
        header('Location: '.get_url($post->id,$post->title,'blog').'#'.$id);
    }else{
        echo '<div class="alert alert-danger" role="alert"><strong>Oh!</strong> Có Lỗi xảy ra, hãy xem lại.</div>';
    }
}
?>
<!-- Comment form -->
<div class="commenting-wrap">
    <h4 class="comment-form-title">Bình Luận</h4>
    <p>Bình Luận luôn được kiểm duyệt, đừng spam</p>
    <form id="comment-form" class="comment-form" method="post">
        <input type="text" name="name" placeholder="Your name" required="">
        <input type="email" name="email" placeholder="Your email" required="">
        <textarea name="comment" placeholder="Your Comment" rows="4"></textarea>
        <button class="btn btn-submit" type="submit" name="comment-submit">Submit</button>
    </form>
</div>
<!-- Comment form end -->