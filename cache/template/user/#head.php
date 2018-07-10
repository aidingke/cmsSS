<?php defined('ROOT') or exit('Can\'t Access !'); ?>
<!DOCTYPE html>
<html>
<head>
<meta name="Generator" content="CmsEasy 6_2_0_20180611_UTF8" />
<title><?php echo lang(membercenter);?></title>
<meta name="renderer" content="webkit">
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <link href="<?php echo $skin_path;?>/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo $skin_path;?>/css/font-awesome.css" rel="stylesheet" />
    <link href="<?php echo $skin_path;?>/css/user.css" rel="stylesheet">
<script src="<?php echo $skin_path;?>/js/jquery.min.js"></script>
<!--[if lt IE 9]><!-->
<script src="<?php echo $skin_path;?>/js/ie/html5shiv.min.js"></script>
<script src="<?php echo $skin_path;?>/js/ie/respond.min.js"></script>
<![endif]-->
  </head>

  <body>
<!--[if lte IE 8]>
<div class="text-center padding-top-50 padding-bottom-50 bg-blue-grey-100">
<p style="font-size:18px;color:#888;">你正在使用一个<strong>过时</strong>的浏览器。请	<a href="http://browsehappy.com/" target="_blank" style="color:red;font-weight:blod;">升级您的浏览器</a>	 ，以提高您的体验。</p>
</div>
<![endif]-->

<div id="wrapper" class="container-fluid">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle waves-effect waves-dark" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand waves-effect waves-dark" href="<?php echo $base_url;?>/index.php?case=user&act=index"><img src="<?php echo get('site_logo');?>" alt="logo" /></a>

<div id="sideNav" href=""><span class="glyphicon glyphicon-th-list"></span></div>
            </div>

<div class="navbar-right btn-group member-btn">
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
    <i class="fa fa-user fa-fw"></i> <?php echo lang('welcomeyou');?>， <b><?php echo $user['username'];?></b> 
<span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a href="<?php echo url('user/edit/table/user');?>"><i class="fa fa-gear fa-fw"></i>	<?php echo lang('edituserinfo');?></a></li>
<li><a href="<?php echo url('user/changepassword');?>"><i class="fa fa-user fa-fw"></i>	<?php echo lang('changepassword');?></a></li>
    <li class="divider"></li>
    <li><a href="<?php echo url('user/logout');?>" class="logout"><i class="fa fa-sign-out fa-fw"></i>	<?php echo lang('logout');?></a></li>
  </ul>
</div>
        </nav>


        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

 <li><a href="<?php echo $base_url;?>/"><i class="fa fa-sitemap"></i> <?php echo lang('backhome');?></a></li>

 <li style="background:#ddd;"><a href="#" class="waves-effect waves-dark"><i class="fa fa-desktop"></i>	<?php echo lang('managecontent');?></a>
                        <ul class="nav nav-second-level">

          	<?php if(chkfpw('add_archive',$user['groupid'])) { ?><li><a href="<?php echo url('manage/add/manage/archive');?>"><?php echo lang('addcontent');?></a></li><?php } ?>
              <li><a href="<?php echo url('/manage/list/manage/archive/needcheck/1');?>"><?php echo lang('waitcheckedcontent');?></a></li>
              <li><a href="<?php echo url('/manage/list/manage/archive/needcheck/0');?>"><?php echo lang('alreadycheckedcontent');?></a></li>
          </ul>
        </li>
        
    <li style="background:#ccc;">
                        <a href="#" class="waves-effect waves-dark"><i class="fa fa-bar-chart-o"></i><?php echo lang('form_management');?></a>
                        <ul class="nav nav-second-level">
<li><a href="<?php echo url('manage/orderslist/manage/orders');?>"><?php echo lang('vieworders');?></a></li>
<li><a href="<?php echo url('archive/orders');?>"><?php echo lang('shoppingcart');?></a></li>
           <li><a href="<?php echo url('/manage/commentlist/manage/comment');?>"><?php echo lang('comment');?></a></li>
  <li><a href="<?php echo url('/manage/guestbooklist/manage/guestbook');?>"><?php echo lang('guestbook');?></a></li>
              <li><a href="<?php echo url('/manage/zanlist/manage/zanlog');?>"><?php echo lang('praise');?></a></li>
  <li><a href="<?php echo url('/form/list');?>"><?php echo lang('submission_form');?></a></li>
          </ul>
        </li>

 <?php if(config::get('extension_type')) { ?>
 <li>
                <a href="#" class="waves-effect waves-dark"><i class="fa fa-edit"></i>	<?php echo lang('promotion_of_alliances');?></a>
                    <ul class="nav nav-second-level">
              <li><a href="<?php echo url('union/stats/manage/union');?>"><?php echo lang('stats');?></a></li>
              <li><a href="<?php echo url('union/getcode/manage/union');?>"><?php echo lang('access_code');?></a></li>
              <li><a href="<?php echo url('union/visit/manage/union');?>"><?php echo lang('access_statistics');?></a></li>
              <li><a href="<?php echo url('union/reguser/manage/union');?>"><?php echo lang('registered_users');?></a></li>
              <li><a href="<?php echo url('union/pay/manage/union');?>"><?php echo lang('promotion_of_settlement');?></a></li>
  </ul>
        </li>
 <?php } ?>
        
         <li>
                        <a href="#" class="waves-effect waves-dark"><i class="fa fa-user"></i>	<?php echo lang('memeberinfo');?></a>
                        <ul class="nav nav-second-level">
            <li><a href="<?php echo url('/manage/invitelist/manage/invite');?>"><?php echo lang('invitation-code');?></a></li>
<li><a href="<?php echo url('user/edit/table/user');?>"><?php echo lang('modify');?></a></li>
<li><a href="<?php echo url('user/changepassword');?>"><?php echo lang('changepassword');?></a></li>
          </ul>
        </li>
<li><a href="<?php echo url('user/logout');?>"><i class="fa fa-sign-out fa-fw"></i>	<?php echo lang('logout');?></a></li>

          </ul>
        </li>


  
  
              
             
              

      </ul>

            </div>

        </nav>




<div id="page-wrapper">


<div id="page-inner">
<div class="row placeholders">



 
            <?php
if(hasflash()){
$showmessage = showflash();
//var_dump($showmessage);exit;
if(strlen($showmessage)>200){
            ?>
            <div id='message'><span style="color:red;float:left"><?php echo $showmessage; ?></span>
                <span style="color:blue;float:right"><a href="#" onClick="javascript:turnoff('#message');">(×)</a></span></div><div class="blank20"></div>
            <?php
    }else{
?>
            <link rel="stylesheet" href="<?php echo $base_url;?>/js/dialog.css">
            <script type="text/javascript" src="<?php echo $base_url;?>/js/dialog.js"></script>
            <script type="text/javascript">
                var d = dialog({
                    title: '<?php echo lang(prompted);?>',
                    content: '<?php echo $showmessage; ?>',
                    ok: function () {}
                });
                d.showModal();
            </script>
            <?php
    }
}
?>