<?php defined('ROOT') or exit('Can\'t Access !'); ?>
<?php echo template('header.html'); ?>

<?php echo template('system/slide.html'); ?>

<div class="about" id="about">
<!--about--><?php echo templatetag::tag('首页第一行栏目');?>

<div class="container">

<div class="about-grids">
<?php echo templatetag::tag('首页第一行栏目图片说明');?>
<div class="clearfix"> </div>
</div>
</div>
</div>
<!--/abouot-->
<!--services-->
<div class="services" id="services">
<!-- container -->
<div class="container-fluid">
   <h6><?php echo templatetag::tag('首页第二行栏目');?></h6>
<div class="serve-grids">
<div class="serve-grids-top">
<div class="col-md-3 service-box">
<figure class="icon">
  <i class="glyphicon glyphicon-modal-window"> </i>
</figure>
<?php echo templatetag::tag('首页第二行子栏目一');?>
</div>
<div class="col-md-3 service-box">
<figure class="icon">
 <i class="glyphicon glyphicon-tent"> </i>
</figure>
<?php echo templatetag::tag('首页第二行子栏目二');?>
</div>
<div class="col-md-3 service-box">
<figure class="icon">
 <i class="glyphicon glyphicon-asterisk"> </i>
</figure>
<?php echo templatetag::tag('首页第二行子栏目三');?>
</div>
<div class="col-md-3 service-box">
<figure class="icon">
 <i class="glyphicon glyphicon-map-marker"> </i>
</figure>
<?php echo templatetag::tag('首页第二行子栏目四');?>
</div>
<div class="clearfix"> </div>
</div>
</div>
<!-- //container -->
</div>
</div>
<!--/services-->
<!--spl-grid-->
<div class="container-fluid">

<div class="banner-bottom2">
<div class="col-xs-12 col-sm-4 col-md-4 banner-bottom-right1">
<div class="banner-bottom-right-info">
<?php echo templatetag::tag('首页第三行栏目说明更多');?>
</div>
<div class="cate Nam  col-xs-12">
<ul>
<?php echo templatetag::tag('首页第三行左侧栏目列表6条');?>
</ul>
</div>
</div>
<div class="col-xs-12 col-sm-5 col-md-5 banner-bottom-left1">

<?php echo templatetag::tag('首页第三行右侧图文说明3条');?>

</div>
<div class="col-xs-12 col-sm-3 col-md-3">

<?php echo templatetag::tag('首页第三行右侧栏目列表4条');?>

</div>
<div class="clearfix"> </div>
</div>
</div>

<!--/spl-grid-->
<div class="mid-section">
    <div class="container">
     <div class="mid-top">	
<!-- 专题开始 -->
<?php if(is_array(special::listdata(1)))
foreach(special::listdata(1) as $special) { ?>
        <h2><a href="<?php echo $special['url'];?>" title="<?php echo $special['title'];?>"><?php echo $special['title'];?></a></h2>
<p><?php echo cut(strip_tags($special['description']),200);?></p>
<?php } ?>
<!-- 专题结束 -->
     </div>
</div>
</div>
<link rel="stylesheet" href="<?php echo $skin_path;?>/css/gallery.css">

<!--start-gallery-->
<div class="gallery" id="gallery">
<div class="container-fluid">
  <h6><?php echo templatetag::tag('首页第五行栏目');?></h6>
<div class="gallery-pic">
     <?php echo templatetag::tag('首页第五行栏目图片8条');?>
                <div class="clearfix"> </div>
            </div>
</div>
</div>


<!--//gallery-->



<?php echo template('footer.html'); ?>