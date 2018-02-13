<?php 
$comment = Comment_Model::getUnread();
$count = Comment_Model::countUnread();
?>
<li class="dropdown hidden-xs">
    <a href="javascript:void(0);" class="btn btn-icon-toggle btn-default" data-toggle="dropdown">
        <i class="fa fa-bell"></i><sup class="badge style-danger"><?= $count;?></sup>
    </a>
    <ul class="dropdown-menu animation-expand">
        <li class="dropdown-header">Bình Luận Chưa Duyệt</li>
        <?php foreach ($comment as $item): ?>
        <li>
            <a class="alert alert-callout alert-info" href="javascript:void(0);">
                <strong><?= $item->email;?></strong><br/>
                <small><?= Cutname($item->comment,50);?>.</small>
            </a>
        </li>
        <?php endforeach ?>
        <li class="dropdown-header">Options</li>
        <li><a href="?action=comment">Toàn Danh Sách <span class="pull-right"><i class="fa fa-arrow-right"></i></span></a></li>
        <li><a href="?action=comment&mode=mask">Duyệt Toàn Bộ <span class="pull-right"><i class="fa fa-arrow-right"></i></span></a></li>
    </ul><!--end .dropdown-menu -->
</li><!--end .dropdown -->
<!--end .dropdown -->