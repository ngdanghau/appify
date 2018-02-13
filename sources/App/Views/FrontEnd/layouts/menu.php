<nav class="navbar navbar-default navbar-fixed" data-spy="affix" data-offset-top="120">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-collapse" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo Config::SITE_URL;?>">
                <img src="<?php echo Config_Model::get('site_logo');?>" alt="Logo">
            </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="nav-collapse">
            <ul class="nav navbar-nav navbar-right" id="one-page-nav">
                <?php 
                    $menu = Menu_Model::get('parent_id = 0');
                    foreach ($menu as $item) {
                        $menus = Menu_Model::get("parent_id = $item->id");
                        if (!empty($menus)) {
                            $html = '<li class="dropdown"><a href="'.$item->hyperlink.'">'.$item->name.'</a><ul class="dropdown-menu">';
                            foreach ($menus as $items) {
                                $html .= '<li><a class="external" href="'.$items->hyperlink.'">'.$items->name.'</a></li>';
                            }
                            $html .= '</ul></li>';
                            echo $html;
                        }else{
                            echo '<li><a href="'.$item->hyperlink.'">'.$item->name.'</a></li>';
                        } 
                    }
                ?>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>