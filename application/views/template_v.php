<html>
<head >
    <?php $this -> load -> view('tmpl_head_v'); ?>
</head>
<body class="">  

    <div id="title">
        <?php $this -> load -> view('tmpl_title_v'); ?>
    </div>
    <div id="header">
        <?php
        if(isset($hide_menu)==false){
            $this -> load -> view('tmpl_header_v');
        } ?>
    </div>
    <div id="content_view" >
        <div class= "row" >
            <div id="sidemenu" class="col-md-2 sidemenu" > <?php $this -> load -> view('tmpl_side_menu_v'); ?></div>
            <div id="main" class="col-md-10 main"><?php $this -> load -> view($content_view); ?></div>
        </div>
    </div>
    <div id="footer">
        <?php $this -> load -> view('tmpl_footer_v'); ?>
    </div>
    <?php $this -> load -> view('modals'); ?>
</body>
</html>
