<?php if(!class_exists('raintpl')){exit;}?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php  echo PROGRAM_NAME;?> <?php  echo PROGRAM_VERSION;?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/x-icon" href="./templates/default/img/favicon.ico">

    <!-- Le styles -->
    <link href="./templates/default/css/bootstrap.css" rel="stylesheet">
    <link href="./templates/default/css/jquery-ui-1.10.3.custom.css" rel="stylesheet">
    <link href="./templates/default/css/style.css" rel="stylesheet">
    <?php echo Plugin::callLink(); ?>
    <?php echo Plugin::callCss(); ?>

    <link href="./templates/default/css/bootstrap-responsive.css" rel="stylesheet">
    <link rel="shortcut icon" href="./templates/default/ico/favicon.png">
  </head>

  <body>
    <div class="hidden" id="UPDATE_URL"><?php  echo UPDATE_URL;?></div>
    <div class="hidden" id="PROGRAM_VERSION"><?php  echo PROGRAM_VERSION;?></div>
    <div class="navbar navbar-inverse navbar-fixed-top" id="header">
      
      <div class="navbar-inner">

        <div class="container">

          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
         <div class="logo"><span class="badge badge-warning" id="notification">&nbsp;</span><?php  echo PROGRAM_VERSION;?></div>
          
          <?php if( $myUser!=false ){ ?>
          <div class="nav-collapse collapse">
            <ul class="nav">
             
              <li><a href="index.php"><i class="icon-home"></i> Accueil</a></li>
              <?php $counter1=-1; if( isset($menuItems) && is_array($menuItems) && sizeof($menuItems) ) foreach( $menuItems as $key1 => $value1 ){ $counter1++; ?>
              <li><?php echo $value1["content"];?></li>
              <?php } ?>
              <?php if( $myUser!=false && $myUser->can('configuration','r') ){ ?>
                <li><a href="setting.php"><i class="icon-wrench"></i> Configuration</a></li>
              <?php } ?>
              <?php if( $myUser!=false ){ ?>
              <li class="loggedUserMenu">Connecté avec <span><?php echo $myUser->getFullName();?></span> (<?php echo $rank->getLabel();?>)</li>
              <li><a href="action.php?action=logout"><i class="icon-remove-circle"></i> Déconnexion</a></li>
              <?php } ?>
            </ul>
          </div><!--/.nav-collapse -->
          <?php } ?>


        </div>
      </div>
    </div>



    <div id="body" class="container">

  <?php if( $error!=false ){ ?>
  <div class="alert alert-error">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <?php echo $error;?>
  </div>
  <?php } ?>
  <?php if( $notice!=false ){ ?>
    <div class="alert alert-info">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <?php echo $notice;?>
  </div>
  <?php } ?>

  <?php echo Plugin::callHook("header_post_notices", array()); ?>