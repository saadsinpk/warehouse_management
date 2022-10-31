<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Icon Choose</title>
        <!-- Bootstrap -->
        <link href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <!-- Font Awesome -->
        <link href="<?php echo base_url() ?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <!-- Themify icons -->
        <link href="<?php echo base_url() ?>assets/themify-icons/themify-icons.min.css" rel="stylesheet" type="text/css"/>
        <!-- Pe-icon -->
        <link href="<?php echo base_url() ?>assets/pe-icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet" type="text/css"/>
        <!-- Theme style -->
        <link href="<?php echo base_url() ?>assets/dist/css/styleBD.min.css" rel="stylesheet" type="text/css"/>
        <!-- jQuery -->
        <script src="<?php echo base_url() ?>assets/plugins/jQuery/jquery-1.12.4.min.js" type="text/javascript"></script>
    </head>
    <!-- Add User start -->
    <div class="">
        <section class="content-header">
            <div class="header-icon">
                <i class="pe-7s-note2"></i>
            </div>
            <div class="header-title">
                <h1><?php echo display('icon') ?></h1>
                <small><?php echo display('all_icon') ?></small>
                <ol class="breadcrumb">
                    <li><a href=""><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                    <li><a href="#"><?php echo display('icon') ?></a></li>
                    <li class="active"><?php echo display('all_icon') ?></li>
                </ol>
            </div>
        </section>

        <section class="content">
            <div class="">
                <?php
                $error = $this->session->flashdata('error');
                $success = $this->session->flashdata('success');
                if ($error != '') {
                    echo $error;
                }
                if ($success != '') {
                    echo $success;
                }
                ?>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4><?php echo display('bootstrap_icon') ?> </h4>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="flag-icon-inner">
                                <ul class="icon_list">
                                    <li class='sendClass'>
                                        <i class="glyphicon glyphicon-asterisk"></i>
                                        <span class="icon_name">glyphicon-asterisk</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-plus"></i>
                                        <span class="icon_name">glyphicon-plus</span>
                                    </li>
                                    <li class='sendClass'>
                                        <i class="glyphicon glyphicon-euro"></i>
                                        <span class="icon_name">glyphicon-euro</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-eur"></i>
                                        <span class="icon_name">glyphicon-eur</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-minus"></i>
                                        <span class="icon_name">glyphicon-minus</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-cloud"></i>
                                        <span class="icon_name">glyphicon-cloud</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-envelope"></i>
                                        <span class="icon_name">glyphicon-envelope</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-pencil"></i>
                                        <span class="icon_name">glyphicon-pencil</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-glass"></i>
                                        <span class="icon_name">glyphicon-glass</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-music"></i>
                                        <span class="icon_name">glyphicon-music</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-search"></i>
                                        <span class="icon_name">glyphicon-search</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-heart"></i>
                                        <span class="icon_name">glyphicon-heart</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-star"></i>
                                        <span class="icon_name">glyphicon-star</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-star-empty"></i>
                                        <span class="icon_name">glyphicon-star-empty</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-user"></i>
                                        <span class="icon_name">glyphicon-user</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-film"></i>
                                        <span class="icon_name">glyphicon-film</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-th-large"></i>
                                        <span class="icon_name">glyphicon-th-large</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-th"></i>
                                        <span class="icon_name">glyphicon-th</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-th-list"></i>
                                        <span class="icon_name">glyphicon-th-list</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-ok"></i>
                                        <span class="icon_name">glyphicon-ok</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-remove"></i>
                                        <span class="icon_name">glyphicon-remove</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-zoom-in"></i>
                                        <span class="icon_name">glyphicon-zoom-in</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-zoom-out"></i>
                                        <span class="icon_name">glyphicon-zoom-out</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-off"></i>
                                        <span class="icon_name">glyphicon-off</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-signal"></i>
                                        <span class="icon_name">glyphicon-signal</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-cog"></i>
                                        <span class="icon_name">glyphicon-cog</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-trash"></i>
                                        <span class="icon_name">glyphicon-trash</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-home"></i>
                                        <span class="icon_name">glyphicon-home</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-file"></i>
                                        <span class="icon_name">glyphicon-file</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-time"></i>
                                        <span class="icon_name">glyphicon-time</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-road"></i>
                                        <span class="icon_name">glyphicon-road</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-download-alt"></i>
                                        <span class="icon_name">glyphicon-download-alt</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-download"></i>
                                        <span class="icon_name">glyphicon-download</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-upload"></i>
                                        <span class="icon_name">glyphicon-upload</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-inbox"></i>
                                        <span class="icon_name">glyphicon-inbox</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-play-circle"></i>
                                        <span class="icon_name">glyphicon-play-circle</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-repeat"></i>
                                        <span class="icon_name">glyphicon-repeat</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-refresh"></i>
                                        <span class="icon_name">glyphicon-refresh</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-list-alt"></i>
                                        <span class="icon_name">glyphicon-list-alt</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-lock"></i>
                                        <span class="icon_name">glyphicon-lock</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-flag"></i>
                                        <span class="icon_name">glyphicon-flag</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-headphones"></i>
                                        <span class="icon_name">glyphicon-headphones</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-volume-off"></i>
                                        <span class="icon_name">glyphicon-volume-off</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-volume-down"></i>
                                        <span class="icon_name">glyphicon-volume-down</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-volume-up"></i>
                                        <span class="icon_name">glyphicon-volume-up</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-qrcode"></i>
                                        <span class="icon_name">glyphicon-qrcode</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-barcode"></i>
                                        <span class="icon_name">glyphicon-barcode</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-tag"></i>
                                        <span class="icon_name">glyphicon-tag</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-tags"></i>
                                        <span class="icon_name">glyphicon-tags</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-book"></i>
                                        <span class="icon_name">glyphicon-book</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-bookmark"></i>
                                        <span class="icon_name">glyphicon-bookmark</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-print"></i>
                                        <span class="icon_name">glyphicon-print</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-camera"></i>
                                        <span class="icon_name">glyphicon-camera</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-font"></i>
                                        <span class="icon_name">glyphicon-font</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-bold"></i>
                                        <span class="icon_name">glyphicon-bold</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-italic"></i>
                                        <span class="icon_name">glyphicon-italic</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-text-height"></i>
                                        <span class="icon_name">glyphicon-text-height</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-text-width"></i>
                                        <span class="icon_name">glyphicon-text-width</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-align-left"></i>
                                        <span class="icon_name">glyphicon-align-left</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-align-center"></i>
                                        <span class="icon_name">glyphicon-align-center</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-align-right"></i>
                                        <span class="icon_name">glyphicon-align-right</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-align-justify"></i>
                                        <span class="icon_name">glyphicon-align-justify</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-list"></i>
                                        <span class="icon_name">glyphicon-list</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-indent-left"></i>
                                        <span class="icon_name">glyphicon-indent-left</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-indent-right"></i>
                                        <span class="icon_name">glyphicon-indent-right</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-facetime-video"></i>
                                        <span class="icon_name">glyphicon-facetime-video</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-picture"></i>
                                        <span class="icon_name">glyphicon-picture</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-map-marker"></i>
                                        <span class="icon_name">glyphicon-map-marker</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-adjust"></i>
                                        <span class="icon_name">glyphicon-adjust</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-tint"></i>
                                        <span class="icon_name">glyphicon-tint</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-edit"></i>
                                        <span class="icon_name">glyphicon-edit</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-share"></i>
                                        <span class="icon_name">glyphicon-share</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-check"></i>
                                        <span class="icon_name">glyphicon-check</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-move"></i>
                                        <span class="icon_name">glyphicon-move</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-step-backward"></i>
                                        <span class="icon_name">glyphicon-step-backward</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-fast-backward"></i>
                                        <span class="icon_name">glyphicon-fast-backward</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-backward"></i>
                                        <span class="icon_name">glyphicon-backward</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-play"></i>
                                        <span class="icon_name">glyphicon-play</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-pause"></i>
                                        <span class="icon_name">glyphicon-pause</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-stop"></i>
                                        <span class="icon_name">glyphicon-stop</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-stop"></i>
                                        <span class="icon_name">glyphicon-stop</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-fast-forward"></i>
                                        <span class="icon_name">glyphicon-fast-forward</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-eject"></i>
                                        <span class="icon_name">glyphicon-eject</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-chevron-left"></i>
                                        <span class="icon_name">glyphicon-chevron-left</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-chevron-right"></i>
                                        <span class="icon_name">glyphicon-chevron-right</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-plus-sign"></i>
                                        <span class="icon_name">glyphicon-plus-sign</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-minus-sign"></i>
                                        <span class="icon_name">glyphicon-minus-sign</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-remove-sign"></i>
                                        <span class="icon_name">glyphicon-remove-sign</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-ok-sign"></i>
                                        <span class="icon_name">glyphicon-ok-sign</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-question-sign"></i>
                                        <span class="icon_name">glyphicon-question-sign</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-info-sign"></i>
                                        <span class="icon_name">glyphicon-info-sign</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-screenshot"></i>
                                        <span class="icon_name">glyphicon-screenshot</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-remove-circle"></i>
                                        <span class="icon_name">glyphicon-remove-circle</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-ok-circle"></i>
                                        <span class="icon_name">glyphicon-ok-circle</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-ban-circle"></i>
                                        <span class="icon_name">glyphicon-ban-circle</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-arrow-left"></i>
                                        <span class="icon_name">glyphicon-arrow-left</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-arrow-right"></i>
                                        <span class="icon_name">glyphicon-arrow-right</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-arrow-up"></i>
                                        <span class="icon_name">glyphicon-arrow-up</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-arrow-down"></i>
                                        <span class="icon_name">glyphicon-arrow-down</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-share-alt"></i>
                                        <span class="icon_name">glyphicon-share-alt</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-resize-full"></i>
                                        <span class="icon_name">glyphicon-resize-full</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-resize-small"></i>
                                        <span class="icon_name">glyphicon-resize-small</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-exclamation-sign"></i>
                                        <span class="icon_name">glyphicon-exclamation-sign</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-gift"></i>
                                        <span class="icon_name">glyphicon-gift</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-leaf"></i>
                                        <span class="icon_name">glyphicon-leaf</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-fire"></i>
                                        <span class="icon_name">glyphicon-fire</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-eye-open"></i>
                                        <span class="icon_name">glyphicon-eye-open</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-eye-close"></i>
                                        <span class="icon_name">glyphicon-eye-close</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-warning-sign"></i>
                                        <span class="icon_name">glyphicon-warning-sign</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-plane"></i>
                                        <span class="icon_name">glyphicon-plane</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon glyphicon-calendar"></i>
                                        <span class="icon_name">glyphicon glyphicon-calendar</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-random"></i>
                                        <span class="icon_name">glyphicon-random</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-comment"></i>
                                        <span class="icon_name">glyphicon-comment</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-magnet"></i>
                                        <span class="icon_name">glyphicon-magnet</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-chevron-up"></i>
                                        <span class="icon_name">glyphicon-chevron-up</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-chevron-down"></i>
                                        <span class="icon_name">glyphicon-chevron-down</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-retweet"></i>
                                        <span class="icon_name">glyphicon-retweet</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-shopping-cart"></i>
                                        <span class="icon_name">glyphicon-shopping-cart</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-folder-close"></i>
                                        <span class="icon_name">glyphicon-folder-close</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-folder-open"></i>
                                        <span class="icon_name">glyphicon-folder-open</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-resize-vertical"></i>
                                        <span class="icon_name">glyphicon-resize-vertical</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-resize-horizontal"></i>
                                        <span class="icon_name">glyphicon-resize-horizontal</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-hdd"></i>
                                        <span class="icon_name">glyphicon-hdd</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-bullhorn"></i>
                                        <span class="icon_name">glyphicon-bullhorn</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-bell"></i>
                                        <span class="icon_name">glyphicon-bell</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-certificate"></i>
                                        <span class="icon_name">glyphicon-certificate</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-thumbs-up"></i>
                                        <span class="icon_name">glyphicon-thumbs-up</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-thumbs-down"></i>
                                        <span class="icon_name">glyphicon-thumbs-down</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-hand-right"></i>
                                        <span class="icon_name">glyphicon-hand-right</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-hand-left"></i>
                                        <span class="icon_name">glyphicon-hand-left</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-hand-up"></i>
                                        <span class="icon_name">glyphicon-hand-up</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-hand-down"></i>
                                        <span class="icon_name">glyphicon-hand-down</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-circle-arrow-right"></i>
                                        <span class="icon_name">glyphicon-circle-arrow-right</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-circle-arrow-left"></i>
                                        <span class="icon_name">glyphicon-circle-arrow-left</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-circle-arrow-up"></i>
                                        <span class="icon_name">glyphicon-circle-arrow-up</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-circle-arrow-down"></i>
                                        <span class="icon_name">glyphicon-circle-arrow-down</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-globe"></i>
                                        <span class="icon_name">glyphicon-globe</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-wrench"></i>
                                        <span class="icon_name">glyphicon-wrench</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-tasks"></i>
                                        <span class="icon_name">glyphicon-tasks</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-filter"></i>
                                        <span class="icon_name">glyphicon-filter</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-briefcase"></i>
                                        <span class="icon_name">glyphicon-briefcase</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-fullscreen"></i>
                                        <span class="icon_name">glyphicon-fullscreen</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-dashboard"></i>
                                        <span class="icon_name">glyphicon-dashboard</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-paperclip"></i>
                                        <span class="icon_name">glyphicon-paperclip</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-heart-empty"></i>
                                        <span class="icon_name">glyphicon-heart-empty</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-link"></i>
                                        <span class="icon_name">glyphicon-link</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-phone"></i>
                                        <span class="icon_name">glyphicon-phone</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-pushpin"></i>
                                        <span class="icon_name">glyphicon-pushpin</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-usd"></i>
                                        <span class="icon_name">glyphicon-usd</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-gbp"></i>
                                        <span class="icon_name">glyphicon-gbp</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-sort"></i>
                                        <span class="icon_name">glyphicon-sort</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-sort-by-alphabet"></i>
                                        <span class="icon_name">glyphicon-sort-by-alphabet</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-sort-by-alphabet-alt"></i>
                                        <span class="icon_name">glyphicon-sort-by-alphabet-alt</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-sort-by-order"></i>
                                        <span class="icon_name">glyphicon-sort-by-order</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-sort-by-order-alt"></i>
                                        <span class="icon_name">glyphicon-sort-by-order-alt</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-sort-by-attributes"></i>
                                        <span class="icon_name">glyphicon-sort-by-attributes</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-sort-by-attributes-alt"></i>
                                        <span class="icon_name">glyphicon-sort-by-attributes-alt</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-unchecked"></i>
                                        <span class="icon_name">glyphicon-unchecked</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-expand"></i>
                                        <span class="icon_name">glyphicon-expand</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-collapse-down"></i>
                                        <span class="icon_name">glyphicon-collapse-down</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-collapse-up"></i>
                                        <span class="icon_name">glyphicon-collapse-up</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-log-in"></i>
                                        <span class="icon_name">glyphicon-log-in</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-flash"></i>
                                        <span class="icon_name">glyphicon-flash</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-log-out"></i>
                                        <span class="icon_name">glyphicon-log-out</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-new-window"></i>
                                        <span class="icon_name">glyphicon-new-window</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-record"></i>
                                        <span class="icon_name">glyphicon-record</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-save"></i>
                                        <span class="icon_name">glyphicon-save</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-open"></i>
                                        <span class="icon_name">glyphicon-open</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-saved"></i>
                                        <span class="icon_name">glyphicon-saved</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-import"></i>
                                        <span class="icon_name">glyphicon-import</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-export"></i>
                                        <span class="icon_name">glyphicon-export</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-send"></i>
                                        <span class="icon_name">glyphicon-send</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-floppy-disk"></i>
                                        <span class="icon_name">glyphicon-floppy-disk</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-floppy-saved"></i>
                                        <span class="icon_name">glyphicon-floppy-saved</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-floppy-remove"></i>
                                        <span class="icon_name">glyphicon-floppy-remove</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-floppy-save"></i>
                                        <span class="icon_name">glyphicon-floppy-save</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-floppy-open"></i>
                                        <span class="icon_name">glyphicon-floppy-open</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-credit-card"></i>
                                        <span class="icon_name">glyphicon-credit-card</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-transfer"></i>
                                        <span class="icon_name">glyphicon-transfer</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-cutlery"></i>
                                        <span class="icon_name">glyphicon-cutlery</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-header"></i>
                                        <span class="icon_name">glyphicon-header</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-compressed"></i>
                                        <span class="icon_name">glyphicon-compressed</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-earphone"></i>
                                        <span class="icon_name">glyphicon-earphone</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-phone-alt"></i>
                                        <span class="icon_name">glyphicon-phone-alt</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-tower"></i>
                                        <span class="icon_name">glyphicon-tower</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-stats"></i>
                                        <span class="icon_name">glyphicon-stats</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-sd-video"></i>
                                        <span class="icon_name">glyphicon-sd-video</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-hd-video"></i>
                                        <span class="icon_name">glyphicon-hd-video</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-subtitles"></i>
                                        <span class="icon_name">glyphicon-subtitles</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-sound-stereo"></i>
                                        <span class="icon_name">glyphicon-sound-stereo</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-sound-dolby"></i>
                                        <span class="icon_name">glyphicon-sound-dolby</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-sound-5-1"></i>
                                        <span class="icon_name">glyphicon-sound-5-1</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-sound-6-1"></i>
                                        <span class="icon_name">glyphicon-sound-6-1</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-sound-7-1"></i>
                                        <span class="icon_name">glyphicon-sound-7-1</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-copyright-mark"></i>
                                        <span class="icon_name">glyphicon-copyright-mark</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-registration-mark"></i>
                                        <span class="icon_name">glyphicon-registration-mark</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-cloud-download"></i>
                                        <span class="icon_name">glyphicon-cloud-download</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-cloud-upload"></i>
                                        <span class="icon_name">glyphicon-cloud-upload</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-tree-conifer"></i>
                                        <span class="icon_name">glyphicon-tree-conifer</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-tree-deciduous"></i>
                                        <span class="icon_name">glyphicon-tree-deciduous</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-cd"></i>
                                        <span class="icon_name">glyphicon-cd</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-save-file"></i>
                                        <span class="icon_name">glyphicon-save-file</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-open-file"></i>
                                        <span class="icon_name">glyphicon-open-file</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-level-up"></i>
                                        <span class="icon_name">glyphicon-level-up</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-copy"></i>
                                        <span class="icon_name">glyphicon-copy</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-paste"></i>
                                        <span class="icon_name">glyphicon-paste</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-alert"></i>
                                        <span class="icon_name">glyphicon-alert</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-equalizer"></i>
                                        <span class="icon_name">glyphicon-equalizer</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-king"></i>
                                        <span class="icon_name">glyphicon-king</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-queen"></i>
                                        <span class="icon_name">glyphicon-queen</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-pawn"></i>
                                        <span class="icon_name">glyphicon-pawn</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-bishop"></i>
                                        <span class="icon_name">glyphicon-bishop</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-knight"></i>
                                        <span class="icon_name">glyphicon-knight</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-baby-formula"></i>
                                        <span class="icon_name">glyphicon-baby-formula</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-tent"></i>
                                        <span class="icon_name">glyphicon-tent</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-blackboard"></i>
                                        <span class="icon_name">glyphicon-blackboard</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-bed"></i>
                                        <span class="icon_name">glyphicon-bed</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-apple"></i>
                                        <span class="icon_name">glyphicon-apple</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-erase"></i>
                                        <span class="icon_name">glyphicon-erase</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-hourglass"></i>
                                        <span class="icon_name">glyphicon-hourglass</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-lamp"></i>
                                        <span class="icon_name">glyphicon-lamp</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-duplicate"></i>
                                        <span class="icon_name">glyphicon-duplicate</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-piggy-bank"></i>
                                        <span class="icon_name">glyphicon-piggy-bank</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-scissors"></i>
                                        <span class="icon_name">glyphicon-scissors</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-bitcoin"></i>
                                        <span class="icon_name">glyphicon-bitcoin</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-btc"></i>
                                        <span class="icon_name">glyphicon-btc</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-xbt"></i>
                                        <span class="icon_name">glyphicon-xbt</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-yen"></i>
                                        <span class="icon_name">glyphicon-yen</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-jpy"></i>
                                        <span class="icon_name">glyphicon-jpy</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-ruble"></i>
                                        <span class="icon_name">glyphicon-ruble</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-rub"></i>
                                        <span class="icon_name">glyphicon-rub</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-scale"></i>
                                        <span class="icon_name">glyphicon-scale</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-ice-lolly"></i>
                                        <span class="icon_name">glyphicon-ice-lolly</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-ice-lolly-tasted"></i>
                                        <span class="icon_name">glyphicon-ice-lolly-tasted</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-education"></i>
                                        <span class="icon_name">glyphicon-education</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-option-horizontal"></i>
                                        <span class="icon_name">glyphicon-option-horizontal</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-option-vertical"></i>
                                        <span class="icon_name">glyphicon-option-vertical</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-menu-hamburger"></i>
                                        <span class="icon_name">glyphicon-menu-hamburger</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-modal-window"></i>
                                        <span class="icon_name">glyphicon-modal-window</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-oil"></i>
                                        <span class="icon_name">glyphicon-oil</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-grain"></i>
                                        <span class="icon_name">glyphicon-grain</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-sunglasses"></i>
                                        <span class="icon_name">glyphicon-sunglasses</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-text-size"></i>
                                        <span class="icon_name">glyphicon-text-size</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-text-color"></i>
                                        <span class="icon_name">glyphicon-text-color</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-text-background"></i>
                                        <span class="icon_name">glyphicon-text-background</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-object-align-top"></i>
                                        <span class="icon_name">glyphicon-object-align-top</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-object-align-bottom"></i>
                                        <span class="icon_name">glyphicon-object-align-bottom</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-object-align-horizontal"></i>
                                        <span class="icon_name">glyphicon-object-align-horizontal</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-object-align-left"></i>
                                        <span class="icon_name">glyphicon-object-align-left</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-object-align-vertical"></i>
                                        <span class="icon_name">glyphicon-object-align-vertical</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-object-align-right"></i>
                                        <span class="icon_name">glyphicon-object-align-righ</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-triangle-right"></i>
                                        <span class="icon_name">glyphicon-triangle-right</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-triangle-left"></i>
                                        <span class="icon_name">glyphicon-triangle-left</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-triangle-bottom"></i>
                                        <span class="icon_name">glyphicon-triangle-bottom</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-triangle-top"></i>
                                        <span class="icon_name">glyphicon-triangle-top</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-console"></i>
                                        <span class="icon_name">glyphicon-console</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-superscript"></i>
                                        <span class="icon_name">glyphicon-superscript</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-subscript"></i>
                                        <span class="icon_name">glyphicon-subscript</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-menu-left"></i>
                                        <span class="icon_name">glyphicon-menu-left</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-menu-right"></i>
                                        <span class="icon_name">glyphicon-menu-right</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-menu-down"></i>
                                        <span class="icon_name">glyphicon-menu-down</span>
                                    </li>
                                    <li class="sendClass">
                                        <i class="glyphicon glyphicon-menu-up"></i>
                                        <span class="icon_name">glyphicon-menu-up</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4><?php echo display('font_awesome') ?> </h4>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-12">
    <!--                                <p>Font Awesome gives you scalable vector icons that can instantly be customized — size, color, drop
                                        shadow, and anything that can be done with the power of CSS. For more info check out: <a href="http://fontawesome.io/icons/" target="_blank">http://fontawesome.io/icons/</a></p>-->
                                    <!--<h3 class="m-t-0">41 New Icons in 4.7</h3><hr>-->
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-address-book"></i>
                                        <span class="icon-name">address-book</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-address-book-o"></i>
                                        <span class="icon-name">address-book-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-address-card"></i>
                                        <span class="icon-name">address-card</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-address-card-o"></i>
                                        <span class="icon-name">address-card-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-bandcamp"></i>
                                        <span class="icon-name">bandcamp</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-bath"></i>
                                        <span class="icon-name">bath</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-bathtub"></i>
                                        <span class="icon-name">bathtub <span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-drivers-license"></i>
                                        <span class="icon-name">drivers-license  <span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-drivers-license-o"></i>
                                        <span class="icon-name">drivers-license-o <span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-eercast"></i>
                                        <span class="icon-name">eercast</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-envelope-open"></i>
                                        <span class="icon-name">envelope-open</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-envelope-open-o"></i>
                                        <span class="icon-name">envelope-open-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-etsy"></i>
                                        <span class="icon-name">etsy</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-free-code-camp"></i>
                                        <span class="icon-name">free-code-camp</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-grav"></i>
                                        <span class="icon-name">grav</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-handshake-o"></i>
                                        <span class="icon-name">handshake-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-id-badge"></i>
                                        <span class="icon-name">id-badge</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-id-card"></i>
                                        <span class="icon-name">id-card</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-id-card-o"></i>
                                        <span class="icon-name">id-card-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-imdb"></i>
                                        <span class="icon-name">imdb</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-linode"></i>
                                        <span class="icon-name">linode</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-meetup"></i>
                                        <span class="icon-name">meetup</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-microchip"></i>
                                        <span class="icon-name">microchip</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-podcast"></i>
                                        <span class="icon-name">podcast</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-quora"></i>
                                        <span class="icon-name">quora</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-ravelry"></i>
                                        <span class="icon-name">ravelry</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-s15"></i>
                                        <span class="icon-name">s15 <span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-shower"></i>
                                        <span class="icon-name">shower</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-snowflake-o"></i>
                                        <span class="icon-name">snowflake-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-superpowers"></i>
                                        <span class="icon-name">superpowers</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-telegram"></i>
                                        <span class="icon-name">telegram</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-thermometer"></i>
                                        <span class="icon-name">thermometer <span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-thermometer-0"></i>
                                        <span class="icon-name">thermometer-0 <span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-thermometer-1"></i>
                                        <span class="icon-name">thermometer-1 <span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-thermometer-2"></i>
                                        <span class="icon-name">thermometer-2  <span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-thermometer-3"></i>
                                        <span class="icon-name">thermometer-3  <span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-thermometer-4"></i>
                                        <span class="icon-name">thermometer-4 <span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-thermometer-empty"></i>
                                        <span class="icon-name">thermometer-empty</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-thermometer-full"></i>
                                        <span class="icon-name">thermometer-full</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-thermometer-half"></i>
                                        <span class="icon-name">thermometer-half</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-thermometer-quarter"></i>
                                        <span class="icon-name">thermometer-quarter</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-thermometer-three-quarters"></i>
                                        <span class="icon-name">thermometer-three-quarters</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-times-rectangle"></i>
                                        <span class="icon-name">times-rectangle <span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-times-rectangle-o"></i>
                                        <span class="icon-name">times-rectangle-o  <span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-user-circle"></i>
                                        <span class="icon-name">user-circle</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-user-circle-o"></i>
                                        <span class="icon-name">user-circle-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-user-o"></i>
                                        <span class="icon-name">user-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-vcard"></i>
                                        <span class="icon-name">vcard <span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-vcard-o"></i>
                                        <span class="icon-name">vcard-o  <span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-window-close"></i>
                                        <span class="icon-name">window-close</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-window-close-o"></i>
                                        <span class="icon-name">window-close-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-window-maximize"></i>
                                        <span class="icon-name">window-maximize</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-window-minimize"></i>
                                        <span class="icon-name">window-minimize</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-window-restore"></i>
                                        <span class="icon-name">window-restore</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-wpexplorer"></i>
                                        <span class="icon-name">wpexplorer</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row fontawesome-icon-list">
                                <div class="col-sm-12">
                                    <h3>Web Application Icons</h3><hr>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-address-book"></i>
                                        <span class="icon-name">address-book</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-address-book-o"></i>
                                        <span class="icon-name">address-book-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-address-card"></i>
                                        <span class="icon-name">address-card</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-address-card-o"></i>
                                        <span class="icon-name">address-card-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-adjust"></i>
                                        <span class="icon-name">adjust</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-american-sign-language-interpreting"></i>
                                        <span class="icon-name">american-sign ..</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-anchor"></i>
                                        <span class="icon-name">anchor</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-archive"></i>
                                        <span class="icon-name">archive</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-area-chart"></i>
                                        <span class="icon-name">area-chart</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-arrows"></i>
                                        <span class="icon-name">arrows</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-arrows-h"></i>
                                        <span class="icon-name">arrows-h</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-arrows-v"></i>
                                        <span class="icon-name">arrows-v</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-asl-interpreting"></i>
                                        <span class="icon-name">asl-interpreting <span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-assistive-listening-systems"></i>
                                        <span class="icon-name">assistive ..</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-asterisk"></i>
                                        <span class="icon-name">asterisk</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-at"></i>
                                        <span class="icon-name">at</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-audio-description"></i>
                                        <span class="icon-name">audio-description</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-automobile"></i>
                                        <span class="icon-name">automobile <span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-balance-scale"></i>
                                        <span class="icon-name">balance-scale</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-ban"></i>
                                        <span class="icon-name">ban</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-bank"></i>
                                        <span class="icon-name">bank <span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-bar-chart"></i>
                                        <span class="icon-name">bar-chart</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-bar-chart-o"></i>
                                        <span class="icon-name">bar-chart-o <span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-barcode"></i>
                                        <span class="icon-name">barcode</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-bars"></i>
                                        <span class="icon-name">bars</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-bath"></i>
                                        <span class="icon-name">bath</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-bathtub"></i>
                                        <span class="icon-name">bathtub <span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-battery"></i>
                                        <span class="icon-name">battery <span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-battery-0"></i>
                                        <span class="icon-name">battery-0 <span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-battery-1"></i>
                                        <span class="icon-name">battery-1 </span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-battery-2"></i>
                                        <span class="icon-name">battery-2   <span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-battery-3"></i>
                                        <span class="icon-name">battery-3   <span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-battery-4"></i>
                                        <span class="icon-name">battery-4   <span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-battery-empty"></i>
                                        <span class="icon-name">battery-empty</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-battery-full"></i>
                                        <span class="icon-name">battery-full</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-battery-half"></i>
                                        <span class="icon-name">battery-half</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-battery-quarter"></i>
                                        <span class="icon-name">battery-quarter</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-battery-three-quarters"></i>
                                        <span class="icon-name">battery-three-quarters</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-bed"></i>
                                        <span class="icon-name">bed</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-beer"></i>
                                        <span class="icon-name">beer</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-bell"></i>
                                        <span class="icon-name">bell</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-bell-o"></i>
                                        <span class="icon-name">bell-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-bell-slash"></i>
                                        <span class="icon-name">bell-slash</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-bell-slash-o"></i>
                                        <span class="icon-name">bell-slash-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-bicycle"></i>
                                        <span class="icon-name">bicycle</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-binoculars"></i>
                                        <span class="icon-name">binoculars</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-birthday-cake"></i>
                                        <span class="icon-name">birthday-cake</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-blind"></i>
                                        <span class="icon-name">blind</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-bluetooth"></i>
                                        <span class="icon-name">bluetooth</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-bluetooth-b"></i>
                                        <span class="icon-name">bluetooth-b</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-bolt"></i>
                                        <span class="icon-name">bolt</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-bomb"></i>
                                        <span class="icon-name">bomb</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-book"></i>
                                        <span class="icon-name">book</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-bookmark"></i>
                                        <span class="icon-name">bookmark</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-bookmark-o"></i>
                                        <span class="icon-name">bookmark-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-braille"></i>
                                        <span class="icon-name">braille</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-briefcase"></i>
                                        <span class="icon-name">briefcase</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-bug"></i>
                                        <span class="icon-name">bug</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-building"></i>
                                        <span class="icon-name">building</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-building-o"></i>
                                        <span class="icon-name">building-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-bullhorn"></i>
                                        <span class="icon-name">bullhorn</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-bullseye"></i>
                                        <span class="icon-name">bullseye</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-bus"></i>
                                        <span class="icon-name">bus</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-cab"></i>
                                        <span class="icon-name">cab <span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-calculator"></i>
                                        <span class="icon-name">calculator</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-calendar"></i>
                                        <span class="icon-name">calendar</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-calendar-check-o"></i>
                                        <span class="icon-name">calendar-check-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-calendar-minus-o"></i>
                                        <span class="icon-name">calendar-minus-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-calendar-o"></i>
                                        <span class="icon-name">calendar-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-calendar-plus-o"></i>
                                        <span class="icon-name">calendar-plus-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-calendar-times-o"></i>
                                        <span class="icon-name">calendar-times-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-camera"></i>
                                        <span class="icon-name">camera</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-camera-retro"></i>
                                        <span class="icon-name">camera-retro</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-car"></i>
                                        <span class="icon-name">car</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-caret-square-o-down"></i>
                                        <span class="icon-name">caret-square-o-down</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-caret-square-o-left"></i>
                                        <span class="icon-name">caret-square-o-left</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-caret-square-o-right"></i>
                                        <span class="icon-name">caret-square-o-right</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-caret-square-o-up"></i>
                                        <span class="icon-name">caret-square-o-up</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-cart-arrow-down"></i>
                                        <span class="icon-name">cart-arrow-down</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-cart-plus"></i>
                                        <span class="icon-name">cart-plus</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-cc"></i>
                                        <span class="icon-name">cc</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-certificate"></i>
                                        <span class="icon-name">certificate</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-check"></i>
                                        <span class="icon-name">check</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-check-circle"></i>
                                        <span class="icon-name">check-circle</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-check-circle-o"></i>
                                        <span class="icon-name">check-circle-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-check-square"></i>
                                        <span class="icon-name">check-square</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-check-square-o"></i>
                                        <span class="icon-name">check-square-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-child"></i>
                                        <span class="icon-name">child</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-circle"></i>
                                        <span class="icon-name">circle</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-circle-o"></i>
                                        <span class="icon-name">circle-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-circle-o-notch"></i>
                                        <span class="icon-name">circle-o-notch</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-circle-thin"></i>
                                        <span class="icon-name">circle-thin</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-clock-o"></i>
                                        <span class="icon-name">clock-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-clone"></i>
                                        <span class="icon-name">clone</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-close"></i>
                                        <span class="icon-name">close <span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-cloud"></i>
                                        <span class="icon-name">cloud</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-cloud-download"></i>
                                        <span class="icon-name">cloud-download</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-cloud-upload"></i>
                                        <span class="icon-name">cloud-upload</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-code"></i>
                                        <span class="icon-name">code</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-code-fork"></i>
                                        <span class="icon-name">code-fork</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-coffee"></i>
                                        <span class="icon-name">coffee</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-cog"></i>
                                        <span class="icon-name">cog</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-cogs"></i>
                                        <span class="icon-name">cogs</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-comment"></i>
                                        <span class="icon-name">comment</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-comment-o"></i>
                                        <span class="icon-name">comment-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-commenting"></i>
                                        <span class="icon-name">commenting</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-commenting-o"></i>
                                        <span class="icon-name">commenting-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-comments"></i>
                                        <span class="icon-name">comments</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-comments-o"></i>
                                        <span class="icon-name">comments-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-compass"></i>
                                        <span class="icon-name">compass</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-copyright"></i>
                                        <span class="icon-name">copyright</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-creative-commons"></i>
                                        <span class="icon-name">creative-commons</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-credit-card"></i>
                                        <span class="icon-name">credit-card</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-credit-card-alt"></i>
                                        <span class="icon-name">credit-card-alt</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-crop"></i>
                                        <span class="icon-name">crop</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-crosshairs"></i>
                                        <span class="icon-name">crosshairs</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-cube"></i>
                                        <span class="icon-name">cube</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-cubes"></i>
                                        <span class="icon-name">cubes</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-cutlery"></i>
                                        <span class="icon-name">cutlery</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-dashboard"></i>
                                        <span class="icon-name">dashboard <span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-database"></i>
                                        <span class="icon-name">database</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-deaf"></i>
                                        <span class="icon-name">deaf</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-deafness"></i>
                                        <span class="icon-name">deafness <span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-desktop"></i>
                                        <span class="icon-name">desktop</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-diamond"></i>
                                        <span class="icon-name">diamond</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-dot-circle-o"></i>
                                        <span class="icon-name">dot-circle-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-download"></i>
                                        <span class="icon-name">download</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-drivers-license"></i>
                                        <span class="icon-name">drivers-license <span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-drivers-license-o"></i>
                                        <span class="icon-name">drivers-license-o <span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-edit"></i>
                                        <span class="icon-name">edit <span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-ellipsis-h"></i>
                                        <span class="icon-name">ellipsis-h</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-ellipsis-v"></i>
                                        <span class="icon-name">ellipsis-v</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-envelope"></i>
                                        <span class="icon-name">envelope</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-envelope-o"></i>
                                        <span class="icon-name">envelope-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-envelope-open"></i>
                                        <span class="icon-name">envelope-open</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-envelope-open-o"></i>
                                        <span class="icon-name">envelope-open-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-envelope-square"></i>
                                        <span class="icon-name">envelope-square</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-eraser"></i>
                                        <span class="icon-name">eraser</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-exchange"></i>
                                        <span class="icon-name">exchange</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-exclamation"></i>
                                        <span class="icon-name">exclamation</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-exclamation-circle"></i>
                                        <span class="icon-name">exclamation-circle</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-exclamation-triangle"></i>
                                        <span class="icon-name">exclamation-triangle</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-external-link"></i>
                                        <span class="icon-name">external-link</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-external-link-square"></i>
                                        <span class="icon-name">external-link-square</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-eye"></i>
                                        <span class="icon-name">eye</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-eye-slash"></i>
                                        <span class="icon-name">eye-slash</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-eyedropper"></i>
                                        <span class="icon-name">eyedropper</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-fax"></i>
                                        <span class="icon-name">fax</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-feed"></i>
                                        <span class="icon-name">feed <span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-female"></i>
                                        <span class="icon-name">female</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-fighter-jet"></i>
                                        <span class="icon-name">fighter-jet</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-file-archive-o"></i>
                                        <span class="icon-name">file-archive-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-file-audio-o"></i>
                                        <span class="icon-name">file-audio-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-file-code-o"></i>
                                        <span class="icon-name">file-code-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-file-excel-o"></i>
                                        <span class="icon-name">file-excel-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-file-image-o"></i>
                                        <span class="icon-name">file-image-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-file-movie-o"></i>
                                        <span class="icon-name">fa fa-file-movie-o <span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-file-pdf-o"></i>
                                        <span class="icon-name">file-pdf-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-file-photo-o"></i>
                                        <span class="icon-name">file-photo-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-file-picture-o"></i>
                                        <span class="icon-name">file-picture-o <span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-file-powerpoint-o"></i>
                                        <span class="icon-name">file-powerpoint-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-file-sound-o"></i>
                                        <span class="icon-name">file-sound-o <span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-file-video-o"></i>
                                        <span class="icon-name">file-video-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-file-word-o"></i>
                                        <span class="icon-name">file-word-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-file-zip-o"></i>
                                        <span class="icon-name">file-zip-o <span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-film"></i>
                                        <span class="icon-name">film</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-filter"></i>
                                        <span class="icon-name">filter</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-fire"></i>
                                        <span class="icon-name">fire</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-fire-extinguisher"></i>
                                        <span class="icon-name">fire-extinguisher</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-flag"></i>
                                        <span class="icon-name">flag</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-flag-checkered"></i>
                                        <span class="icon-name">flag-checkered</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-flag-o"></i>
                                        <span class="icon-name">flag-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-flash"></i>
                                        <span class="icon-name">flash <span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-flask"></i>
                                        <span class="icon-name">flask</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-folder"></i>
                                        <span class="icon-name">folder</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-folder-o"></i>
                                        <span class="icon-name">folder-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-folder-open"></i>
                                        <span class="icon-name">folder-open</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-folder-open-o"></i>
                                        <span class="icon-name">folder-open-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-frown-o"></i>
                                        <span class="icon-name">frown-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-futbol-o"></i>
                                        <span class="icon-name">futbol-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-gamepad"></i>
                                        <span class="icon-name">gamepad</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-gavel"></i>
                                        <span class="icon-name">gavel</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-gear"></i>
                                        <span class="icon-name">gear <span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-gears"></i>
                                        <span class="icon-name">gears <span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-gift"></i>
                                        <span class="icon-name">gift</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-glass"></i>
                                        <span class="icon-name">glass</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-globe"></i>
                                        <span class="icon-name">globe</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-graduation-cap"></i>
                                        <span class="icon-name">graduation-cap</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-group"></i>
                                        <span class="icon-name">group <span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-hand-grab-o"></i>
                                        <span class="icon-name">hand-grab-o <span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-hand-lizard-o"></i>
                                        <span class="icon-name">hand-lizard-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-hand-paper-o"></i>
                                        <span class="icon-name">hand-paper-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-hand-peace-o"></i>
                                        <span class="icon-name">hand-peace-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-hand-pointer-o"></i>
                                        <span class="icon-name">hand-pointer-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-hand-rock-o"></i>
                                        <span class="icon-name">hand-rock-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-hand-scissors-o"></i>
                                        <span class="icon-name">hand-scissors-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-hand-spock-o"></i>
                                        <span class="icon-name">hand-spock-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-hand-stop-o"></i>
                                        <span class="icon-name">hand-stop-o <span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-handshake-o"></i>
                                        <span class="icon-name">handshake-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-hard-of-hearing"></i>
                                        <span class="icon-name">hard-of-hearing <span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-hashtag"></i>
                                        <span class="icon-name">hashtag</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-hdd-o"></i>
                                        <span class="icon-name">hdd-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-headphones"></i>
                                        <span class="icon-name">headphones</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-heart"></i>
                                        <span class="icon-name">heart</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-heart-o"></i>
                                        <span class="icon-name">heart-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-heartbeat"></i>
                                        <span class="icon-name">heartbeat</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-history"></i>
                                        <span class="icon-name">history</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-home"></i>
                                        <span class="icon-name">home</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-hotel"></i>
                                        <span class="icon-name">hotel <span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-hourglass"></i>
                                        <span class="icon-name">hourglass</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-hourglass-1"></i>
                                        <span class="icon-name">hourglass-1 <span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-hourglass-2"></i>
                                        <span class="icon-name">hourglass-2 <span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-hourglass-3"></i>
                                        <span class="icon-name">hourglass-3 <span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-hourglass-end"></i>
                                        <span class="icon-name">hourglass-end</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-hourglass-half"></i>
                                        <span class="icon-name">hourglass-half</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-hourglass-o"></i>
                                        <span class="icon-name">hourglass-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-hourglass-start"></i>
                                        <span class="icon-name">hourglass-start</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-i-cursor"></i>
                                        <span class="icon-name">i-cursor</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-id-badge"></i>
                                        <span class="icon-name">id-badge</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-id-card"></i>
                                        <span class="icon-name">id-card</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-id-card-o"></i>
                                        <span class="icon-name">id-card-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-image"></i>
                                        <span class="icon-name">image</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-inbox"></i>
                                        <span class="icon-name">inbox</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-industry"></i>
                                        <span class="icon-name">industry</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-info"></i>
                                        <span class="icon-name">info</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-info-circle"></i>
                                        <span class="icon-name">info-circle</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-institution"></i>
                                        <span class="icon-name">institution <span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-key"></i>
                                        <span class="icon-name">key</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-keyboard-o"></i>
                                        <span class="icon-name">keyboard-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-language"></i>
                                        <span class="icon-name">language</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-laptop"></i>
                                        <span class="icon-name">laptop</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-leaf"></i>
                                        <span class="icon-name">leaf</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-legal"></i>
                                        <span class="icon-name">legal <span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-lemon-o"></i>
                                        <span class="icon-name">lemon-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-level-down"></i>
                                        <span class="icon-name">level-down</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-level-up"></i>
                                        <span class="icon-name">level-up</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-life-bouy"></i>
                                        <span class="icon-name">life-bouy <span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-life-buoy"></i>
                                        <span class="icon-name">life-buoy <span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-life-ring"></i>
                                        <span class="icon-name">life-ring</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-life-saver"></i>
                                        <span class="icon-name">life-saver <span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-lightbulb-o"></i>
                                        <span class="icon-name">lightbulb-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-line-chart"></i>
                                        <span class="icon-name">line-chart</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-location-arrow"></i>
                                        <span class="icon-name">location-arrow</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-lock"></i>
                                        <span class="icon-name">lock</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-low-vision"></i>
                                        <span class="icon-name">low-vision</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-magic"></i>
                                        <span class="icon-name">magic</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-magnet"></i>
                                        <span class="icon-name">magnet</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-mail-forward"></i>
                                        <span class="icon-name">mail-forward <span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-mail-reply"></i>
                                        <span class="icon-name">mail-reply <span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-mail-reply-all"></i>
                                        <span class="icon-name">mail-reply-all <span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-male"></i>
                                        <span class="icon-name">male</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-map"></i>
                                        <span class="icon-name">map</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-map-marker"></i>
                                        <span class="icon-name">map-marker</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-map-o"></i>
                                        <span class="icon-name">map-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-map-pin"></i>
                                        <span class="icon-name">map-pin</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-map-signs"></i>
                                        <span class="icon-name">map-signs</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-meh-o"></i>
                                        <span class="icon-name">meh-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-microchip"></i>
                                        <span class="icon-name">microchip</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-microphone"></i>
                                        <span class="icon-name">microphone</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-microphone-slash"></i>
                                        <span class="icon-name">microphone-slash</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-minus"></i>
                                        <span class="icon-name">minus</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-minus-circle"></i>
                                        <span class="icon-name">minus-circle</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-minus-square"></i>
                                        <span class="icon-name">minus-square</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-minus-square-o"></i>
                                        <span class="icon-name">minus-square-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-mobile"></i>
                                        <span class="icon-name">mobile</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-mobile-phone"></i>
                                        <span class="icon-name">mobile-phone</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-money"></i>
                                        <span class="icon-name">money</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-moon-o"></i>
                                        <span class="icon-name">moon-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-mortar-board"></i>
                                        <span class="icon-name">mortar-board <span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-motorcycle"></i>
                                        <span class="icon-name">motorcycle</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-mouse-pointer"></i>
                                        <span class="icon-name">mouse-pointer</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-music"></i>
                                        <span class="icon-name">music</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-navicon"></i>
                                        <span class="icon-name">navicon <span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-newspaper-o"></i>
                                        <span class="icon-name">newspaper-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-object-group"></i>
                                        <span class="icon-name">object-group</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-object-ungroup"></i>
                                        <span class="icon-name">object-ungroup</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-paint-brush"></i>
                                        <span class="icon-name">paint-brush</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-paper-plane"></i>
                                        <span class="icon-name">paper-plane</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-paper-plane-o"></i>
                                        <span class="icon-name">paper-plane-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-paw"></i>
                                        <span class="icon-name">paw</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-pencil"></i>
                                        <span class="icon-name">pencil</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-pencil-square"></i>
                                        <span class="icon-name">pencil-square</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-pencil-square-o"></i>
                                        <span class="icon-name">pencil-square-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-percent"></i>
                                        <span class="icon-name">percent</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-phone"></i>
                                        <span class="icon-name">phone</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-phone-square"></i>
                                        <span class="icon-name">phone-square</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-photo"></i>
                                        <span class="icon-name">photo <span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-picture-o"></i>
                                        <span class="icon-name">picture-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-pie-chart"></i>
                                        <span class="icon-name">pie-chart</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-plane"></i>
                                        <span class="icon-name">plane</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-plug"></i>
                                        <span class="icon-name">plug</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-plus"></i>
                                        <span class="icon-name">plus</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-plus-circle"></i>
                                        <span class="icon-name">plus-circle</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-plus-square"></i>
                                        <span class="icon-name">plus-square</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-plus-square-o"></i>
                                        <span class="icon-name">plus-square-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-podcast"></i>
                                        <span class="icon-name">podcast</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-power-off"></i>
                                        <span class="icon-name">power-off</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-print"></i>
                                        <span class="icon-name">print</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-puzzle-piece"></i>
                                        <span class="icon-name">puzzle-piece</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-qrcode"></i>
                                        <span class="icon-name">qrcode</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-question"></i>
                                        <span class="icon-name">question</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-question-circle"></i>
                                        <span class="icon-name">question-circle</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-question-circle-o"></i>
                                        <span class="icon-name">question-circle-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-quote-left"></i>
                                        <span class="icon-name">quote-left</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-quote-right"></i>
                                        <span class="icon-name">quote-right</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-random"></i>
                                        <span class="icon-name">random</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-recycle"></i>
                                        <span class="icon-name">recycle</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-refresh"></i>
                                        <span class="icon-name">refresh</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-registered"></i>
                                        <span class="icon-name">registered</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-remove"></i>
                                        <span class="icon-name">remove <span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-reorder"></i>
                                        <span class="icon-name">reorder <span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-reply"></i>
                                        <span class="icon-name">reply</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-reply-all"></i>
                                        <span class="icon-name">reply-all</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-retweet"></i>
                                        <span class="icon-name">retweet</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-road"></i>
                                        <span class="icon-name">road</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-rocket"></i>
                                        <span class="icon-name">rocket</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-rss"></i>
                                        <span class="icon-name">rss</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-rss-square"></i>
                                        <span class="icon-name">rss-square</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-s15"></i>
                                        <span class="icon-name">s15 <span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-search"></i>
                                        <span class="icon-name">search</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-search-minus"></i>
                                        <span class="icon-name">search-minus</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-search-plus"></i>
                                        <span class="icon-name">search-plus</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-send"></i>
                                        <span class="icon-name">send <span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-send-o"></i>
                                        <span class="icon-name">send-o <span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-server"></i>
                                        <span class="icon-name">server</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-share"></i>
                                        <span class="icon-name">share</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-share-alt"></i>
                                        <span class="icon-name">share-alt</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-share-alt-square"></i>
                                        <span class="icon-name">share-alt-square</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-share-square"></i>
                                        <span class="icon-name">share-square</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-share-square-o"></i>
                                        <span class="icon-name">share-square-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-shield"></i>
                                        <span class="icon-name">shield</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-ship"></i>
                                        <span class="icon-name">ship</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-shopping-bag"></i>
                                        <span class="icon-name">shopping-bag</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-shopping-basket"></i>
                                        <span class="icon-name">shopping-basket</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-shopping-cart"></i>
                                        <span class="icon-name">shopping-cart</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-shower"></i>
                                        <span class="icon-name">shower</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-sign-in"></i>
                                        <span class="icon-name">sign-in</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-sign-language"></i>
                                        <span class="icon-name">sign-language</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-sign-out"></i>
                                        <span class="icon-name">sign-out</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-signal"></i>
                                        <span class="icon-name">signal</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-signing"></i>
                                        <span class="icon-name">signing <span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-sitemap"></i>
                                        <span class="icon-name">sitemap</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-sliders"></i>
                                        <span class="icon-name">sliders</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-smile-o"></i>
                                        <span class="icon-name">smile-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-snowflake-o"></i>
                                        <span class="icon-name">snowflake-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-soccer-ball-o"></i>
                                        <span class="icon-name">soccer-ball-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-sort"></i>
                                        <span class="icon-name">sort</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-sort-alpha-asc"></i>
                                        <span class="icon-name">sort-alpha-asc</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-sort-alpha-desc"></i>
                                        <span class="icon-name">sort-alpha-desc</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-sort-amount-asc"></i>
                                        <span class="icon-name">sort-amount-asc</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-sort-amount-desc"></i>
                                        <span class="icon-name">sort-amount-desc</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-sort-asc"></i>
                                        <span class="icon-name">sort-asc</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-sort-desc"></i>
                                        <span class="icon-name">sort-desc</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-sort-down"></i>
                                        <span class="icon-name">sort-down <span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-sort-numeric-asc"></i>
                                        <span class="icon-name">sort-numeric-asc</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-sort-numeric-desc"></i>
                                        <span class="icon-name">sort-numeric-desc</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-sort-up"></i>
                                        <span class="icon-name">sort-up <span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-space-shuttle"></i>
                                        <span class="icon-name">space-shuttle</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-spinner"></i>
                                        <span class="icon-name">spinner</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-spoon"></i>
                                        <span class="icon-name">spoon</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-square"></i>
                                        <span class="icon-name">square</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-square-o"></i>
                                        <span class="icon-name">square-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-star"></i>
                                        <span class="icon-name">star</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-star-half"></i>
                                        <span class="icon-name">star-half</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-star-half-empty"></i>
                                        <span class="icon-name">star-half-empty <span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-star-half-full"></i>
                                        <span class="icon-name">star-half-full <span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-star-half-o"></i>
                                        <span class="icon-name">star-half-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-star-o"></i>
                                        <span class="icon-name">star-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-sticky-note"></i>
                                        <span class="icon-name">sticky-note</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-sticky-note-o"></i>
                                        <span class="icon-name">sticky-note-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-street-view"></i>
                                        <span class="icon-name">street-view</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-suitcase"></i>
                                        <span class="icon-name">suitcase</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-sun-o"></i>
                                        <span class="icon-name">sun-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-support"></i>
                                        <span class="icon-name">support</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-tablet"></i>
                                        <span class="icon-name">tablet</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-tachometer"></i>
                                        <span class="icon-name">tachometer</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-tag"></i>
                                        <span class="icon-name">tag</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-tags"></i>
                                        <span class="icon-name">tags</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-tasks"></i>
                                        <span class="icon-name">tasks</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-taxi"></i>
                                        <span class="icon-name">taxi</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-television"></i>
                                        <span class="icon-name">television</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-terminal"></i>
                                        <span class="icon-name">terminal</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-thumb-tack"></i>
                                        <span class="icon-name">thumb-tack</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-thumbs-down"></i>
                                        <span class="icon-name">thumbs-down</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-thumbs-o-down"></i>
                                        <span class="icon-name">thumbs-o-down</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-thumbs-o-up"></i>
                                        <span class="icon-name">thumbs-o-up</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-thumbs-up"></i>
                                        <span class="icon-name">thumbs-up</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-ticket"></i>
                                        <span class="icon-name">ticket</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-times"></i>
                                        <span class="icon-name">times</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-times-circle"></i>
                                        <span class="icon-name">times-circle</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-times-circle-o"></i>
                                        <span class="icon-name">times-circle-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-times-rectangle"></i>
                                        <span class="icon-name">times-rectangle <span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out times-rectangle-o"></i>
                                        <span class="icon-name">fa fa-times-rectangle-o <span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-tint"></i>
                                        <span class="icon-name">tint</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-toggle-down"></i>
                                        <span class="icon-name">toggle-down <span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-toggle-left"></i>
                                        <span class="icon-name">toggle-left <span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-toggle-off"></i>
                                        <span class="icon-name">toggle-off</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-toggle-on"></i>
                                        <span class="icon-name">toggle-on</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-toggle-right"></i>
                                        <span class="icon-name">toggle-right <span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-toggle-up"></i>
                                        <span class="icon-name">toggle-up <span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-trademark"></i>
                                        <span class="icon-name">trademark</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-trash"></i>
                                        <span class="icon-name">trash</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-trash-o"></i>
                                        <span class="icon-name">trash-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-tree"></i>
                                        <span class="icon-name">tree</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-trophy"></i>
                                        <span class="icon-name">trophy</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-truck"></i>
                                        <span class="icon-name">truck</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-tty"></i>
                                        <span class="icon-name">tty</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-tv"></i>
                                        <span class="icon-name">tv <span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-umbrella"></i>
                                        <span class="icon-name">umbrella</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-universal-access"></i>
                                        <span class="icon-name">universal-access</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-university"></i>
                                        <span class="icon-name">university</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-unlock"></i>
                                        <span class="icon-name">unlock</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-unlock-alt"></i>
                                        <span class="icon-name">unlock-alt</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-unsorted"></i>
                                        <span class="icon-name">unsorted <span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-upload"></i>
                                        <span class="icon-name">upload</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-user"></i>
                                        <span class="icon-name">user</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-user-circle"></i>
                                        <span class="icon-name">user-circle</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-user-circle-o"></i>
                                        <span class="icon-name">user-circle-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-user-o"></i>
                                        <span class="icon-name">user-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-user-plus"></i>
                                        <span class="icon-name">user-plus</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-user-secret"></i>
                                        <span class="icon-name">user-secret</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-user-times"></i>
                                        <span class="icon-name">user-times</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-users"></i>
                                        <span class="icon-name">users</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-vcard"></i>
                                        <span class="icon-name">vcard <span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-vcard-o"></i>
                                        <span class="icon-name">vcard-o <span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-video-camera"></i>
                                        <span class="icon-name">video-camera</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-volume-control-phone"></i>
                                        <span class="icon-name">volume-control-phone</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-volume-down"></i>
                                        <span class="icon-name">volume-down</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-volume-off"></i>
                                        <span class="icon-name">volume-off</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-volume-up"></i>
                                        <span class="icon-name">volume-up</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-warning"></i>
                                        <span class="icon-name">warning <span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-wheelchair"></i>
                                        <span class="icon-name">wheelchair</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-wheelchair-alt"></i>
                                        <span class="icon-name">wheelchair-alt</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-wifi"></i>
                                        <span class="icon-name">wifi</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-window-close"></i>
                                        <span class="icon-name">window-close</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-window-close-o"></i>
                                        <span class="icon-name">window-close-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-window-maximize"></i>
                                        <span class="icon-name">window-maximize</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-window-minimize"></i>
                                        <span class="icon-name">window-minimize</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-window-restore"></i>
                                        <span class="icon-name">window-restore</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-wrench"></i>
                                        <span class="icon-name">wrench</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <h3>Accessibility Icons</h3><hr>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-american-sign-language-interpreting"></i>
                                        <span class="icon-name">american-sign-language-interpreting
                                        </span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-asl-interpreting"></i>
                                        <span class="icon-name">asl-interpreting
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-assistive-listening-systems"></i>
                                        <span class="icon-name">assistive-listening-systems</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-audio-description"></i>
                                        <span class="icon-name">audio-description</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-blind"></i>
                                        <span class="icon-name">blind</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-braille"></i>
                                        <span class="icon-name">braille</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-cc"></i>
                                        <span class="icon-name">cc</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-deaf"></i>
                                        <span class="icon-name">deaf</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-deafness"></i>
                                        <span class="icon-name">deafness <span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-hard-of-hearing"></i>
                                        <span class="icon-name">hard-of-hearing
                                            <span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-low-vision"></i>
                                        <span class="icon-name">low-vision</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-question-circle-o"></i>
                                        <span class="icon-name">question-circle-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-sign-language"></i>
                                        <span class="icon-name">sign-language</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-signing"></i>
                                        <span class="icon-name">signing<span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-tty"></i>
                                        <span class="icon-name">tty</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-universal-access"></i>
                                        <span class="icon-name">universal-access</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-volume-control-phone"></i>
                                        <span class="icon-name">volume-control-phone</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-wheelchair"></i>
                                        <span class="icon-name">wheelchair</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-wheelchair-alt"></i>
                                        <span class="icon-name"> wheelchair-alt</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <h3>Hand Icons</h3><hr>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-hand-grab-o"></i>
                                        <span class="icon-name"> hand-grab-o<span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-hand-lizard-o"></i>
                                        <span class="icon-name">hand-lizard-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-hand-o-down"></i>
                                        <span class="icon-name">hand-o-down</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-hand-o-left"></i>
                                        <span class="icon-name">hand-o-left</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-hand-o-right"></i>
                                        <span class="icon-name">hand-o-right</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-hand-o-up"></i>
                                        <span class="icon-name">hand-o-up</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-hand-paper-o"></i>
                                        <span class="icon-name">hand-paper-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-hand-peace-o"></i>
                                        <span class="icon-name">hand-peace-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-hand-pointer-o"></i>
                                        <span class="icon-name">hand-pointer-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-hand-rock-o"></i>
                                        <span class="icon-name">hand-rock-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-hand-scissors-o"></i>
                                        <span class="icon-name">hand-scissors-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-hand-spock-o"></i>
                                        <span class="icon-name">hand-spock-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-hand-stop-o"></i>
                                        <span class="icon-name">hand-stop-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-thumbs-down"></i>
                                        <span class="icon-name">thumbs-down</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-thumbs-o-down"></i>
                                        <span class="icon-name">humbs-o-down</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-thumbs-o-up"></i>
                                        <span class="icon-name">thumbs-o-up</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-thumbs-up"></i>
                                        <span class="icon-name">thumbs-up</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <h3>Transportation Icons</h3><hr>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-ambulance"></i>
                                        <span class="icon-name">ambulance</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-automobile"></i>
                                        <span class="icon-name">automobile<span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-bicycle"></i>
                                        <span class="icon-name">bicycle</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-bus"></i>
                                        <span class="icon-name">bus</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-cab"></i>
                                        <span class="icon-name">cab<span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-car"></i>
                                        <span class="icon-name">car</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-fighter-jet"></i>
                                        <span class="icon-name">fighter-jet</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-plane"></i>
                                        <span class="icon-name">plane</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-rocket"></i>
                                        <span class="icon-name">rocket</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-ship"></i>
                                        <span class="icon-name">ship</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-space-shuttle"></i>
                                        <span class="icon-name">space-shuttle</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-subway"></i>
                                        <span class="icon-name">subway</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-taxi"></i>
                                        <span class="icon-name">taxi</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-train"></i>
                                        <span class="icon-name">train</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-truck"></i>
                                        <span class="icon-name">truck</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-wheelchair"></i>
                                        <span class="icon-name">wheelchair</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-wheelchair-alt"></i>
                                        <span class="icon-name">wheelchair-alt</span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <h3>Gender Icons</h3><hr>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-genderless"></i>
                                        <span class="icon-name">genderless</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-intersex"></i>
                                        <span class="icon-name">intersex<span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-mars"></i>
                                        <span class="icon-name">mars</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-mars-double"></i>
                                        <span class="icon-name">mars-double</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-mars-stroke"></i>
                                        <span class="icon-name">mars-stroke</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-mars-stroke-h"></i>
                                        <span class="icon-name">mars-stroke-h</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-mars-stroke-v"></i>
                                        <span class="icon-name">mars-stroke-v</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-mercury"></i>
                                        <span class="icon-name">mercury</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-neuter"></i>
                                        <span class="icon-name">neuter</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-transgender"></i>
                                        <span class="icon-name">transgender</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-transgender"></i>
                                        <span class="icon-name">transgender</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-transgender-alt"></i>
                                        <span class="icon-name">transgender-alt</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-venus"></i>
                                        <span class="icon-name">venus</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-venus-double"></i>
                                        <span class="icon-name">venus-double</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-venus-mars"></i>
                                        <span class="icon-name">venus-mars</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <h3>File Type Icons</h3><hr>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-file"></i>
                                        <span class="icon-name">file</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-file-archive-o"></i>
                                        <span class="icon-name">file-archive-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-file-audio-o"></i>
                                        <span class="icon-name">audio-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-file-code-o"></i>
                                        <span class="icon-name">file-code-o
                                        </span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-file-excel-o"></i>
                                        <span class="icon-name">file-excel-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-file-image-o"></i>
                                        <span class="icon-name">file-image-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-file-movie-o"></i>
                                        <span class="icon-name">file-movie-o <span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-file-o"></i>
                                        <span class="icon-name">file-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-file-pdf-o"></i>
                                        <span class="icon-name">file-pdf-o
                                        </span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-file-photo-o"></i>
                                        <span class="icon-name">file-photo-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-file-picture-o"></i>
                                        <span class="icon-name">file-picture-o<span class="text-muted">(alias)</span></span>


                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-file-powerpoint-o"></i>
                                        <span class="icon-name">file-powerpoint-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-file-sound-o"></i>
                                        <span class="icon-name">file-sound-o<span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-file-text"></i>
                                        <span class="icon-name">file-text</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-file-text-o"></i>
                                        <span class="icon-name"> file-text-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-file-video-o"></i>
                                        <span class="icon-name">file-video-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-file-word-o"></i>
                                        <span class="icon-name">file-word-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-file-zip-o"></i>
                                        <span class="icon-name">
                                            file-zip-o<span class="text-muted">(alias)</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <h3>Spinner Icons</h3><hr>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-circle-o-notch"></i>
                                        <span class="icon-name">circle-o-notch</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-cog"></i>
                                        <span class="icon-name">cog</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-gear"></i>
                                        <span class="icon-name">gear</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-refresh"></i>
                                        <span class="icon-name">refresh</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-spinner"></i>
                                        <span class="icon-name">spinner</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <h3>Form Control Icons</h3><hr>
                                </div>                                      
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-check-square"></i>
                                        <span class="icon-name">check-square</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-check-square-o"></i>
                                        <span class="icon-name">check-square-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-circle"></i>
                                        <span class="icon-name">circle</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-circle-o"></i>
                                        <span class="icon-name">circle-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-dot-circle-o"></i>
                                        <span class="icon-name">dot-circle-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-minus-square"></i>
                                        <span class="icon-name">minus-square</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-minus-square-o"></i>
                                        <span class="icon-name">minus-square-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-plus-square"></i>
                                        <span class="icon-name">plus-square</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-plus-square-o"></i>
                                        <span class="icon-name">plus-square-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-square"></i>
                                        <span class="icon-name">square</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-square-o"></i>
                                        <span class="icon-name">square-o</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <h3>Payment Icons</h3><hr>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-cc-amex"></i>
                                        <span class="icon-name">cc-amex</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-cc-diners-club"></i>
                                        <span class="icon-name">cc-diners-club</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-cc-discover"></i>
                                        <span class="icon-name">cc-discover</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-cc-jcb"></i>
                                        <span class="icon-name">cc-jcb</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-cc-mastercard"></i>
                                        <span class="icon-name">cc-mastercard</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-cc-paypal"></i>
                                        <span class="icon-name">cc-paypal</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-cc-stripe"></i>
                                        <span class="icon-name">cc-stripe</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-cc-visa"></i>
                                        <span class="icon-name">cc-visa</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-credit-card"></i>
                                        <span class="icon-name">credit-card</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-credit-card-alt"></i>
                                        <span class="icon-name">credit-card-alt</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-google-wallet"></i>
                                        <span class="icon-name">google-wallet</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-paypal"></i>
                                        <span class="icon-name">paypal</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <h3>Chart Icons</h3><hr>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-area-chart"></i>
                                        <span class="icon-name">area-chart</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-bar-chart"></i>
                                        <span class="icon-name">bar-chart</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-bar-chart-o"></i>
                                        <span class="icon-name">bar-chart-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-line-chart"></i>
                                        <span class="icon-name">line-chart</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-pie-chart"></i>
                                        <span class="icon-name">pie-chart</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <h3>Currency Icons</h3><hr>
                                </div>       
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-bitcoin"></i>
                                        <span class="icon-name">bitcoin<span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-btc"></i>
                                        <span class="icon-name">btc</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-cny"></i>
                                        <span class="icon-name">cny</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-dollar"></i>
                                        <span class="icon-name">dollar<span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-eur"></i>
                                        <span class="icon-name">eur</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-euro"></i>
                                        <span class="icon-name">euro</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-gbp"></i>
                                        <span class="icon-name ">gbp</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-gg"></i>
                                        <span class="icon-name">gg</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-gg-circle"></i>
                                        <span class="icon-name">gg-circle</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-ils"></i>
                                        <span class="icon-name">fa-ils</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-inr"></i>
                                        <span class="icon-name">inr</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-jpy"></i>
                                        <span class="icon-name">jpy</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-krw"></i>
                                        <span class="icon-name">krw</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-money"></i>
                                        <span class="icon-name">money</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-rmb"></i>
                                        <span class="icon-name">rmb<span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-rouble"></i>
                                        <span class="icon-name">rouble<span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-rub"></i>
                                        <span class="icon-name">rub
                                        </span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-ruble"></i>
                                        <span class="icon-name">ruble<span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-rupee"></i>
                                        <span class="icon-name">rupee<span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-shekel"></i>
                                        <span class="icon-name">shekel<span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-sheqel"></i>
                                        <span class="icon-name">sheqel<span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-try"></i>
                                        <span class="icon-name">try</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-turkish-lira"></i>
                                        <span class="icon-name">turkish-lira</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-usd"></i>
                                        <span class="icon-name">usd</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-won"></i>
                                        <span class="icon-name">won
                                            <span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-yen"></i>
                                        <span class="icon-name">yen<span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <h3>Text Editor Icons</h3><hr>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa fa-align-center"></i>
                                        <span class="icon-name">align-center</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-align-justify"></i>
                                        <span class="icon-name">align-justify</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-align-left"></i>
                                        <span class="icon-name">align-left</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-align-right"></i>
                                        <span class="icon-name">align-right</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-bold"></i>
                                        <span class="icon-name">bold</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-chain"></i>
                                        <span class="icon-name">chain<span class="text-muted">(alias)</span>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-chain-broken"></i>
                                        <span class="icon-name">chain-broken</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-clipboard"></i>
                                        <span class="icon-name">clipboard</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-columns"></i>
                                        <span class="icon-name">columns</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-copy"></i>
                                        <span class="icon-name">copy<span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-cut"></i>
                                        <span class="icon-name">cut<span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-dedent"></i>
                                        <span class="icon-name">dedent<span class="text-muted">(alias)</span>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-eraser"></i>
                                        <span class="icon-name">eraser</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-file"></i>
                                        <span class="icon-name">file</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-file-o"></i>
                                        <span class="icon-name">file-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-file-text"></i>
                                        <span class="icon-name">file-text</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-file-text-o"></i>
                                        <span class="icon-name">text-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-files-o"></i>
                                        <span class="icon-name">files-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-floppy-o"></i>
                                        <span class="icon-name">floppy-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-font"></i>
                                        <span class="icon-name">font</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-header"></i>
                                        <span class="icon-name">header</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-indent"></i>
                                        <span class="icon-name">indent</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-italic"></i>
                                        <span class="icon-name">italic</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-link"></i>
                                        <span class="icon-name">link</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-list"></i>
                                        <span class="icon-name">list</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-list-alt"></i>
                                        <span class="icon-name">list-alt</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-list-ol"></i>
                                        <span class="icon-name">list-ol</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-list-ul"></i>
                                        <span class="icon-name">list-ul</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-outdent"></i>
                                        <span class="icon-name">outdent</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-paperclip"></i>
                                        <span class="icon-name">paperclip</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-paragraph"></i>
                                        <span class="icon-name">paragraph</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-paste"></i>
                                        <span class="icon-name">paste<span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-rotate-left"></i>
                                        <span class="icon-name">rotate-left<span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-rotate-right"></i>
                                        <span class="icon-name">rotate-right<span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-save"></i>
                                        <span class="icon-name">save</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-scissors"></i>
                                        <span class="icon-name">scissors</span>
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-strikethrough"></i>
                                        <span class="icon-name">strikethrough</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-subscript"></i>
                                        <span class="icon-name">subscript</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-superscript"></i>
                                        <span class="icon-name">superscript</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-table"></i>
                                        <span class="icon-name">table</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-text-height"></i>
                                        <span class="icon-name">text-height</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-text-width"></i>
                                        <span class="icon-name">text-width</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-th"></i>
                                        <span class="icon-name">th</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-th-large"></i>
                                        <span class="icon-name">th-large</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-th-list"></i>
                                        <span class="icon-name">th-list</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-th-large"></i>
                                        <span class="icon-name">th-large</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-underline"></i>
                                        <span class="icon-name">underline</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-th-large"></i>
                                        <span class="icon-name">th-large</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-th-large"></i>
                                        <span class="icon-name">th-large</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-undo"></i>
                                        <span class="icon-name">undo</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-unlink"></i>
                                        <span class="icon-name">unlink<span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <h3>Directional Icons</h3><hr>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-angle-double-down"></i>
                                        <span class="icon-name">angle-double-down</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-angle-double-left"></i>
                                        <span class="icon-name">angle-double-left</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-angle-double-right"></i>
                                        <span class="icon-name">angle-double-right</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-angle-double-up"></i>
                                        <span class="icon-name">angle-double-up</span>
                                    </div>
                                </div><div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-angle-down"></i>
                                        <span class="icon-name">angle-down</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-angle-left"></i>
                                        <span class="icon-name">angle-left</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-angle-right"></i>
                                        <span class="icon-name">angle-right</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-angle-up"></i>
                                        <span class="icon-name">angle-up</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-arrow-circle-down"></i>
                                        <span class="icon-name">arrow-circle-down</span>
                                    </div>
                                </div><div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-arrow-circle-left"></i>
                                        <span class="icon-name">arrow-circle-left</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-arrow-circle-o-down"></i>
                                        <span class="icon-name">arrow-circle-o-down</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-arrow-circle-o-left"></i>
                                        <span class="icon-name">arrow-circle-o-left</span>
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-arrow-circle-o-right"></i>
                                        <span class="icon-name">arrow-circle-o-right</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-arrow-circle-o-up"></i>
                                        <span class="icon-name">arrow-circle-o-up</span>
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-arrow-circle-right"></i>
                                        <span class="icon-name">arrow-circle-right</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-arrow-circle-up"></i>
                                        <span class="icon-name">arrow-circle-up</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-arrow-down"></i>
                                        <span class="icon-name">arrow-down</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-arrow-left"></i>
                                        <span class="icon-name">arrow-left</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-arrow-right"></i>
                                        <span class="icon-name">arrow-right</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-arrow-up"></i>
                                        <span class="icon-name">arrow-up</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-arrows"></i>
                                        <span class="icon-name">arrows</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-arrows-alt"></i>
                                        <span class="icon-name">arrows-alt</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-arrows-h"></i>
                                        <span class="icon-name">arrows-h</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-arrows-v"></i>
                                        <span class="icon-name">arrows-v</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-caret-down"></i>
                                        <span class="icon-name">caret-down</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-caret-left"></i>
                                        <span class="icon-name">caret-left</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-caret-right"></i>
                                        <span class="icon-name">caret-right</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-caret-square-o-down"></i>
                                        <span class="icon-name">caret-square-o-down</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-caret-square-o-left"></i>
                                        <span class="icon-name">caret-square-o-left</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-caret-square-o-right"></i>
                                        <span class="icon-name">caret-square-o-right</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-caret-square-o-up"></i>
                                        <span class="icon-name">caret-square-o-up</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-caret-up"></i>
                                        <span class="icon-name">caret-up</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-chevron-circle-down"></i>
                                        <span class="icon-name">chevron-circle-down</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-chevron-circle-left"></i>
                                        <span class="icon-name">chevron-circle-left</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-chevron-circle-right"></i>
                                        <span class="icon-name">chevron-circle-right</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-chevron-circle-up"></i>
                                        <span class="icon-name">chevron-circle-up</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-chevron-down"></i>
                                        <span class="icon-name">chevron-down</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-chevron-left"></i>
                                        <span class="icon-name">chevron-left</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-chevron-right"></i>
                                        <span class="icon-name">chevron-right</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-chevron-up"></i>
                                        <span class="icon-name">chevron-up</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-exchange"></i>
                                        <span class="icon-name">exchange</span>
                                    </div>
                                </div><div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-hand-o-down"></i>
                                        <span class="icon-name">hand-o-down</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-hand-o-left"></i>
                                        <span class="icon-name">hand-o-left</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-hand-o-right"></i>
                                        <span class="icon-name">hand-o-right</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-hand-o-left"></i>
                                        <span class="icon-name">hand-o-left</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-hand-o-left"></i>
                                        <span class="icon-name">hand-o-left</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-hand-o-right"></i>
                                        <span class="icon-name">hand-o-right</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-long-arrow-down"></i>
                                        <span class="icon-name">long-arrow-down</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-long-arrow-left"></i>
                                        <span class="icon-name">long-arrow-left</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-long-arrow-up"></i>
                                        <span class="icon-name">long-arrow-up</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-toggle-down"></i>
                                        <span class="icon-name">toggle-down<span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-toggle-left"></i>
                                        <span class="icon-name">toggle-left<span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-toggle-right"></i>
                                        <span class="icon-name">toggle-right<span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-toggle-up"></i>
                                        <span class="icon-name">toggle-up
                                            <span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <h3>Video Player Icon</h3><hr>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-arrows-alt"></i>
                                        <span class="icon-name">arrows-alt</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-backward"></i>
                                        <span class="icon-name">backward</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-compress"></i>
                                        <span class="icon-name">compress</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-eject"></i>
                                        <span class="icon-name">eject</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-expand"></i>
                                        <span class="icon-name">expand</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-fast-backward"></i>
                                        <span class="icon-name">fast-backward</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-fast-forward"></i>
                                        <span class="icon-name">fast-forward</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-forward"></i>
                                        <span class="icon-name">forward</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-pause"></i>
                                        <span class="icon-name">pause</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-pause-circle"></i>
                                        <span class="icon-name">pause-circle</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-pause-circle-o"></i>
                                        <span class="icon-name">arrows-alt</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-arrows-alt"></i>
                                        <span class="icon-name">arrows-alt</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-play"></i>
                                        <span class="icon-name">play</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-play-circle"></i>
                                        <span class="icon-name">play-circle</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-play-circle-o"></i>
                                        <span class="icon-name">play-circle-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-random"></i>
                                        <span class="icon-name">random</span>
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-step-backward"></i>
                                        <span class="icon-name">step-backward</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-step-forward"></i>
                                        <span class="icon-name">step-forward</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-stop"></i>
                                        <span class="icon-name">stop</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-stop-circle"></i>
                                        <span class="icon-name">stop-circle</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-stop-circle-o"></i>
                                        <span class="icon-name">stop-circle-o</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <h3>Brand Icons</h3><hr>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-500px"></i>
                                        <span class="icon-name">500px</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-500px"></i>
                                        <span class="icon-name">500px</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-adn"></i>
                                        <span class="icon-name">adn</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-amazon"></i>
                                        <span class="icon-name">amzon</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-android"></i>
                                        <span class="icon-name">android</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-angellist"></i>
                                        <span class="icon-name">angellist</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-apple"></i>
                                        <span class="icon-name">apple</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-bandcamp"></i>
                                        <span class="icon-name">bandcamp</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-behance"></i>
                                        <span class="icon-name">behance</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-behance-square"></i>
                                        <span class="icon-name">behance-square</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-bitbucket"></i>
                                        <span class="icon-name">bitbucket</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-bitbucket-square"></i>
                                        <span class="icon-name">bitbucket-square</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-bitcoin"></i>
                                        <span class="icon-name">bitcoin
                                            <span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-black-tie"></i>
                                        <span class="icon-name">black-tie</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-bluetooth"></i>
                                        <span class="icon-name">bluetooth</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-bluetooth-b"></i>
                                        <span class="icon-name">bluetooth-b</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-btc"></i>
                                        <span class="icon-name">btc</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-buysellads"></i>
                                        <span class="icon-name">buysellads</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-cc-amex"></i>
                                        <span class="icon-name">amex</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-cc-diners-club"></i>
                                        <span class="icon-name">cc-diners-club</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-cc-jcb"></i>
                                        <span class="icon-name">cc-jcb</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-cc-mastercard"></i>
                                        <span class="icon-name">cc-mastercard</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-cc-paypal"></i>
                                        <span class="icon-name">cc-paypal</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-cc-stripe"></i>
                                        <span class="icon-name">cc-stripe</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-cc-visa"></i>
                                        <span class="icon-name">cc-visa</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-chrome"></i>
                                        <span class="icon-name">chrome</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-codepen"></i>
                                        <span class="icon-name">codepen</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-codiepie"></i>
                                        <span class="icon-name">codiepie</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-connectdevelop"></i>
                                        <span class="icon-name">connectdevelop</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-contao"></i>
                                        <span class="icon-name">contao</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-css3"></i>
                                        <span class="icon-name">fa fa-css3</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-dashcube"></i>
                                        <span class="icon-name">dashcube</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-delicious"></i>
                                        <span class="icon-name">delicious</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-deviantart"></i>
                                        <span class="icon-name">deviantart</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-digg"></i>
                                        <span class="icon-name">digg</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-dribbble"></i>
                                        <span class="icon-name">dribbble</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-dropbox"></i>
                                        <span class="icon-name">dropbox</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-drupal"></i>
                                        <span class="icon-name">drupal</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-edge"></i>
                                        <span class="icon-name">edge</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-eercast"></i>
                                        <span class="icon-name">eercast</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-empire"></i>
                                        <span class="icon-name">empire</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-envira"></i>
                                        <span class="icon-name">envira</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-etsy"></i>
                                        <span class="icon-name">etsy</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-expeditedssl"></i>
                                        <span class="icon-name">expeditedssl</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-fa"></i>
                                        <span class="icon-name">fa<span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-facebook"></i>
                                        <span class="icon-name">facebook</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-facebook-f"></i>
                                        <span class="icon-name">facebook-f<span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-facebook-official"></i>
                                        <span class="icon-name">facebook-official</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-facebook-square"></i>
                                        <span class="icon-name">facebook-square</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-firefox"></i>
                                        <span class="icon-name">firefox</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-first-order"></i>
                                        <span class="icon-name">first-order</span>
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-flickr"></i>
                                        <span class="icon-name">flickr</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-font-awesome"></i>
                                        <span class="icon-name">font-awesome</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-fonticons"></i>
                                        <span class="icon-name">fonticons</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-fort-awesome"></i>
                                        <span class="icon-name">fort-awesome</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-forumbee"></i>
                                        <span class="icon-name">forumbee</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-foursquare"></i>
                                        <span class="icon-name">foursquare</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-ge"></i>
                                        <span class="icon-name">ge<span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-get-pocket"></i>
                                        <span class="icon-name">get-pocket</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-gg"></i>
                                        <span class="icon-name">gg</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-gg-circle"></i>
                                        <span class="icon-name">gg-circle</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-git"></i>
                                        <span class="icon-name">git</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-git-square"></i>
                                        <span class="icon-name">git-square</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-github" ></i>

                                        <span class="icon-name">github</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-github-alt"></i>
                                        <span class="icon-name">github-alt</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-github-square"></i>
                                        <span class="icon-name">github-square</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-gitlab"></i>
                                        <span class="icon-name">fa fa-gitlab</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-gittip"></i>
                                        <span class="icon-name">gittip<span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-glide"></i>
                                        <span class="icon-name">glide</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-github"></i>
                                        <span class="icon-name">github</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-glide-g"></i>
                                        <span class="icon-name">glide-g</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-google"></i>
                                        <span class="icon-name">google</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-google-plus"></i>
                                        <span class="icon-name">google-plus</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-google-plus-circle"></i>
                                        <span class="icon-name">google-plus-circle
                                            <span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-google-plus-official"></i>
                                        <span class="icon-name">google-plus-official</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-google-plus-square"></i>
                                        <span class="icon-name">google-plus-square</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-google-wallet"></i>
                                        <span class="icon-name">google-wallet</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-gratipay"></i>
                                        <span class="icon-name">gratipay</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-grav"></i>
                                        <span class="icon-name">grav</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-hacker-news"></i>
                                        <span class="icon-name">hacker-news</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-houzz"></i>
                                        <span class="icon-name">houzz</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-html5"></i>
                                        <span class="icon-name">html5</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-imdb"></i>
                                        <span class="icon-name">imdb</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-instagram"></i>
                                        <span class="icon-name">instagram</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-internet-explorer"></i>
                                        <span class="icon-name">internet-explorer</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-ioxhost"></i>
                                        <span class="icon-name">ioxhost</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-joomla"></i>
                                        <span class="icon-name">joomla</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-jsfiddle"></i>
                                        <span class="icon-name">jsfiddle</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-lastfm"></i>
                                        <span class="icon-name">lastfm</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-lastfm-square"></i>
                                        <span class="icon-name">lastfm-square</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-leanpub"></i>
                                        <span class="icon-name">leanpub</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-linkedin"></i>
                                        <span class="icon-name">linkedin</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-linkedin-square"></i>
                                        <span class="icon-name">linkedin-square</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-linode"></i>
                                        <span class="icon-name">linode</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-linux"></i>
                                        <span class="icon-name">linux</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-maxcdn"></i>
                                        <span class="icon-name">maxcdn</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-meanpath"></i>
                                        <span class="icon-name">meanpath</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-medium"></i>
                                        <span class="icon-name">medium</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-meetup"></i>
                                        <span class="icon-name">meetup</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-mixcloud"></i>
                                        <span class="icon-name">mixcloud</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-modx"></i>
                                        <span class="icon-name">modx</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-odnoklassniki"></i>
                                        <span class="icon-name">odnoklassniki</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-odnoklassniki-square"></i>
                                        <span class="icon-name">odnoklassniki-square</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-opencart"></i>
                                        <span class="icon-name">opencart</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-openid"></i>
                                        <span class="icon-name">openid</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-opera"></i>
                                        <span class="icon-name">fa fa-opera</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-optin-monster"></i>
                                        <span class="icon-name">optin-monster</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-pagelines"></i>
                                        <span class="icon-name">pagelines</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-paypal"></i>
                                        <span class="icon-name">paypal</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-pied-piper"></i>
                                        <span class="icon-name">pied-piper</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-pied-piper-alt"></i>
                                        <span class="icon-name">pied-piper-alt</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-pied-piper-pp"></i>
                                        <span class="icon-name">pied-piper-pp</span>
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-pinterest"></i>
                                        <span class="icon-name">pinterest</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-pinterest-p"></i>
                                        <span class="icon-name">pinterest-p</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-pinterest-square"></i>
                                        <span class="icon-name">pinterest-square</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-product-hunt"></i>
                                        <span class="icon-name">product-hunt</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-qq"></i>
                                        <span class="icon-name">qq</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-quora"></i>
                                        <span class="icon-name">quora</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-ra"></i>
                                        <span class="icon-name">ra<span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-ravelry"></i>
                                        <span class="icon-name">ravelry</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-rebel"></i>
                                        <span class="icon-name">rebel</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-reddit"></i>
                                        <span class="icon-name">reddit</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-reddit-alien"></i>
                                        <span class="icon-name">reddit-alien</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-reddit-square"></i>
                                        <span class="icon-name">reddit-square</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-renren"></i>
                                        <span class="icon-name">renren</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-resistance"></i>
                                        <span class="icon-name">resistance<span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-safari"></i>
                                        <span class="icon-name">safari</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-scribd"></i>
                                        <span class="icon-name">scribd</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-sellsy"></i>
                                        <span class="icon-name">sellsy</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-share-alt"></i>
                                        <span class="icon-name">share-alt</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-share-alt-square"></i>
                                        <span class="icon-name">share-alt-square</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-shirtsinbulk"></i>
                                        <span class="icon-name">shirtsinbulk</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-simplybuilt"></i>
                                        <span class="icon-name">simplybuilt</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-skyatlas"></i>
                                        <span class="icon-name">skyatlas</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-skype"></i>
                                        <span class="icon-name">skype</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-slack"></i>
                                        <span class="icon-name">slack</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-slideshare"></i>
                                        <span class="icon-name">slideshare</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-snapchat"></i>
                                        <span class="icon-name">snapchat</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-snapchat-ghost"></i>
                                        <span class="icon-name">snapchat-ghost</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-snapchat-square"></i>
                                        <span class="icon-name">snapchat-square</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-soundcloud"></i>
                                        <span class="icon-name">soundcloud</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-spotify"></i>
                                        <span class="icon-name">spotify</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-stack-exchange"></i>
                                        <span class="icon-name">stack-exchange</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-steam"></i>
                                        <span class="icon-name">steam</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-steam-square"></i>
                                        <span class="icon-name">steam-square</span>
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-stumbleupon"></i>
                                        <span class="icon-name">stumbleupon</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-stumbleupon-circle"></i>
                                        <span class="icon-name">stumbleupon-circle</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-superpowers"></i>
                                        <span class="icon-name">superpowers</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-telegram"></i>
                                        <span class="icon-name">telegram</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-tencent-weibo"></i>
                                        <span class="icon-name">tencent-weibo</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-themeisle"></i>
                                        <span class="icon-name">themeisle</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-trello"></i>
                                        <span class="icon-name">trello</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-tripadvisor"></i>
                                        <span class="icon-name">tripadvisor</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-tumblr"></i>
                                        <span class="icon-name">tumblr</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-tumblr-square"></i>
                                        <span class="icon-name">tumblr-square</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-twitch"></i>
                                        <span class="icon-name">twitch</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-twitter"></i>
                                        <span class="icon-name">twitter</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-twitter-square"></i>
                                        <span class="icon-name">twitter-square</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-usb"></i>
                                        <span class="icon-name">usb</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-viacoin"></i>
                                        <span class="icon-name">viacoin</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-viadeo"></i>
                                        <span class="icon-name">viadeo</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-viadeo-square"></i>
                                        <span class="icon-name">viadeo-square</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-vimeo"></i>
                                        <span class="icon-name">vimeo</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-vimeo-square"></i>
                                        <span class="icon-name">vimeo-square</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-vine"></i>
                                        <span class="icon-name">vine</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-vk"></i>
                                        <span class="icon-name">vk</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-wechat"></i>
                                        <span class="icon-name">wechat<span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-weibo"></i>
                                        <span class="icon-name">weibo</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-weixin"></i>
                                        <span class="icon-name">weixin</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-whatsapp"></i>
                                        <span class="icon-name">whatsapp</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-wikipedia-w"></i>
                                        <span class="icon-name">wikipedia-w</span>
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-windows"></i>
                                        <span class="icon-name">windows</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-wordpress"></i>
                                        <span class="icon-name">wordpress</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-wpbeginner"></i>
                                        <span class="icon-name">wpbeginner</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-wpexplorer"></i>
                                        <span class="icon-name">wpexplorer</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-wpforms"></i>
                                        <span class="icon-name">wpforms</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-xing"></i>
                                        <span class="icon-name">xing</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-xing-square"></i>
                                        <span class="icon-name">xing-square</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-y-combinator"></i>
                                        <span class="icon-name">y-combinator<span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-y-combinator-square"></i>
                                        <span class="icon-name">combinator-square</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-yahoo"></i>
                                        <span class="icon-name">yahoo</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-yc"></i>
                                        <span class="icon-name">yc<span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-yc-square"></i>
                                        <span class="icon-name">yc-square<span class="text-muted">(alias)</span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-yelp"></i>
                                        <span class="icon-name">yelp</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-yoast"></i>
                                        <span class="icon-name">yoast</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-youtube"></i>
                                        <span class="icon-name">youtube</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-youtube-play"></i>
                                        <span class="icon-name">youtube-play</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-youtube-square"></i>
                                        <span class="icon-name">youtube-square</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <h3>Medical Icons</h3><hr>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-ambulance"></i>
                                        <span class="icon-name">ambulance</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-h-square"></i>
                                        <span class="icon-name">h-square</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-heart"></i>
                                        <span class="icon-name">heart</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-heart-o"></i>
                                        <span class="icon-name">heart-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-heartbeat"></i>
                                        <span class="icon-name">heartbeat</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-hospital-o"></i>
                                        <span class="icon-name">hospital-o</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-medkit"></i>
                                        <span class="icon-name">medkit</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-plus-square"></i>
                                        <span class="icon-name">plus-square</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-stethoscope"></i>
                                        <span class="icon-name">stethoscope</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-user-md"></i>
                                        <span class="icon-name">user-md</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-wheelchair"></i>
                                        <span class="icon-name">wheelchair</span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                    <div class="icon_box sendClass">
                                        <i class="hvr-buzz-out fa fa-wheelchair-alt"></i>
                                        <span class="icon-name">wheelchair-alt</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- Edit user end -->
    <script type="text/javascript">
        $(".sendClass").on('click', function () {
            var getcls = $(this).children().attr('class');
            //alert(getcls);
            window.opener.document.getElementById('icon').value = getcls;
            window.close();
        });

    </script>
</html>