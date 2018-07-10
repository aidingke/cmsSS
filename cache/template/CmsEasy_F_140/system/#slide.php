<?php defined('ROOT') or exit('Can\'t Access !'); ?>
 <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
 <?php if(get('slide_number')=='1') { ?>
<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
<?php } elseif (get('slide_number')=='2') { ?>
<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
<?php } elseif (get('slide_number')=='3') { ?>
<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
<?php } elseif (get('slide_number')=='4') { ?>
<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
<li data-target="#myCarousel" data-slide-to="3"></li>
<?php } else { ?>
<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
<li data-target="#myCarousel" data-slide-to="3"></li>
<li data-target="#myCarousel" data-slide-to="4"></li>
 <?php } ?>
      </ol>
      <div class="carousel-inner" role="listbox">

 <?php if(get('slide_number')=='1') { ?>
 <div class="item active">
          <img class="first-slide" src="<?php echo get(slide_pic1);?>" alt="<?php echo get(slide_pic1_title);?>">
          <div class="container">
            <div class="carousel-caption">
              <h3><?php echo get(slide_pic1_title);?></h3>
              <p><?php echo get(slide_pic1_info);?></p>
              <p><a class="btn btn-lg btn-primary" href="<?php echo get(slide_pic1_url);?>" role="button"><?php echo lang(more);?></a></p>
            </div>
          </div>
        </div>
 <?php } elseif (get('slide_number')=='2') { ?>
<div class="item active">
          <img class="first-slide" src="<?php echo get(slide_pic1);?>" alt="<?php echo get(slide_pic1_title);?>">
          <div class="container">
            <div class="carousel-caption">
              <h3><?php echo get(slide_pic1_title);?></h3>
              <p><?php echo get(slide_pic1_info);?></p>
              <p><a class="btn btn-lg btn-primary" href="<?php echo get(slide_pic1_url);?>" role="button"><?php echo lang(more);?></a></p>
            </div>
          </div>
        </div>

        <div class="item">
          <img class="first-slide" src="<?php echo get(slide_pic2);?>" alt="<?php echo get(slide_pic2_title);?>">
          <div class="container">
            <div class="carousel-caption">
              <h3><?php echo get(slide_pic2_title);?></h3>
              <p><?php echo get(slide_pic2_info);?></p>
              <p><a class="btn btn-lg btn-primary" href="<?php echo get(slide_pic2_url);?>" role="button"><?php echo lang(more);?></a></p>
            </div>
          </div>
        </div>
 <?php } elseif (get('slide_number')=='3') { ?>
<div class="item active">
          <img class="first-slide" src="<?php echo get(slide_pic1);?>" alt="<?php echo get(slide_pic1_title);?>">
          <div class="container">
            <div class="carousel-caption">
              <h3><?php echo get(slide_pic1_title);?></h3>
              <p><?php echo get(slide_pic1_info);?></p>
              <p><a class="btn btn-lg btn-primary" href="<?php echo get(slide_pic1_url);?>" role="button"><?php echo lang(more);?></a></p>
            </div>
          </div>
        </div>

        <div class="item">
          <img class="first-slide" src="<?php echo get(slide_pic2);?>" alt="<?php echo get(slide_pic2_title);?>">
          <div class="container">
            <div class="carousel-caption">
              <h3><?php echo get(slide_pic2_title);?></h3>
              <p><?php echo get(slide_pic2_info);?></p>
              <p><a class="btn btn-lg btn-primary" href="<?php echo get(slide_pic2_url);?>" role="button"><?php echo lang(more);?></a></p>
            </div>
          </div>
        </div>

        <div class="item">
         <img class="first-slide" src="<?php echo get(slide_pic3);?>" alt="<?php echo get(slide_pic3_title);?>">
          <div class="container">
            <div class="carousel-caption">
              <h3><?php echo get(slide_pic3_title);?></h3>
              <p><?php echo get(slide_pic3_info);?></p>
              <p><a class="btn btn-lg btn-primary" href="<?php echo get(slide_pic3_url);?>" role="button"><?php echo lang(more);?></a></p>
            </div>
          </div>
        </div>
 <?php } elseif (get('slide_number')=='4') { ?>
 <div class="item active">
          <img class="first-slide" src="<?php echo get(slide_pic1);?>" alt="<?php echo get(slide_pic1_title);?>">
          <div class="container">
            <div class="carousel-caption">
              <h3><?php echo get(slide_pic1_title);?></h3>
              <p><?php echo get(slide_pic1_info);?></p>
              <p><a class="btn btn-lg btn-primary" href="<?php echo get(slide_pic1_url);?>" role="button"><?php echo lang(more);?></a></p>
            </div>
          </div>
        </div>

        <div class="item">
          <img class="first-slide" src="<?php echo get(slide_pic2);?>" alt="<?php echo get(slide_pic2_title);?>">
          <div class="container">
            <div class="carousel-caption">
              <h3><?php echo get(slide_pic2_title);?></h3>
              <p><?php echo get(slide_pic2_info);?></p>
              <p><a class="btn btn-lg btn-primary" href="<?php echo get(slide_pic2_url);?>" role="button"><?php echo lang(more);?></a></p>
            </div>
          </div>
        </div>

        <div class="item">
         <img class="first-slide" src="<?php echo get(slide_pic3);?>" alt="<?php echo get(slide_pic3_title);?>">
          <div class="container">
            <div class="carousel-caption">
              <h3><?php echo get(slide_pic3_title);?></h3>
              <p><?php echo get(slide_pic3_info);?></p>
              <p><a class="btn btn-lg btn-primary" href="<?php echo get(slide_pic3_url);?>" role="button"><?php echo lang(more);?></a></p>
            </div>
          </div>
        </div>

<div class="item">
        <img class="first-slide" src="<?php echo get(slide_pic4);?>" alt="<?php echo get(slide_pic4_title);?>">
          <div class="container">
            <div class="carousel-caption">
              <h3><?php echo get(slide_pic4_title);?></h3>
              <p><?php echo get(slide_pic4_info);?></p>
              <p><a class="btn btn-lg btn-primary" href="<?php echo get(slide_pic4_url);?>" role="button"><?php echo lang(more);?></a></p>
            </div>
          </div>
        </div>
<?php } else { ?>
 <div class="item active">
          <img class="first-slide" src="<?php echo get(slide_pic1);?>" alt="<?php echo get(slide_pic1_title);?>">
          <div class="container">
            <div class="carousel-caption">
              <h3><?php echo get(slide_pic1_title);?></h3>
              <p><?php echo get(slide_pic1_info);?></p>
              <p><a class="btn btn-lg btn-primary" href="<?php echo get(slide_pic1_url);?>" role="button"><?php echo lang(more);?></a></p>
            </div>
          </div>
        </div>

        <div class="item">
          <img class="first-slide" src="<?php echo get(slide_pic2);?>" alt="<?php echo get(slide_pic2_title);?>">
          <div class="container">
            <div class="carousel-caption">
              <h3><?php echo get(slide_pic2_title);?></h3>
              <p><?php echo get(slide_pic2_info);?></p>
              <p><a class="btn btn-lg btn-primary" href="<?php echo get(slide_pic2_url);?>" role="button"><?php echo lang(more);?></a></p>
            </div>
          </div>
        </div>

        <div class="item">
         <img class="first-slide" src="<?php echo get(slide_pic3);?>" alt="<?php echo get(slide_pic3_title);?>">
          <div class="container">
            <div class="carousel-caption">
              <h3><?php echo get(slide_pic3_title);?></h3>
              <p><?php echo get(slide_pic3_info);?></p>
              <p><a class="btn btn-lg btn-primary" href="<?php echo get(slide_pic3_url);?>" role="button"><?php echo lang(more);?></a></p>
            </div>
          </div>
        </div>

<div class="item">
        <img class="first-slide" src="<?php echo get(slide_pic4);?>" alt="<?php echo get(slide_pic4_title);?>">
          <div class="container">
            <div class="carousel-caption">
              <h3><?php echo get(slide_pic4_title);?></h3>
              <p><?php echo get(slide_pic4_info);?></p>
              <p><a class="btn btn-lg btn-primary" href="<?php echo get(slide_pic4_url);?>" role="button"><?php echo lang(more);?></a></p>
            </div>
          </div>
        </div>

<div class="item">
         <img class="first-slide" src="<?php echo get(slide_pic5);?>" alt="<?php echo get(slide_pic5_title);?>">
          <div class="container">
            <div class="carousel-caption">
              <h3><?php echo get(slide_pic5_title);?></h3>
              <p><?php echo get(slide_pic5_info);?></p>
              <p><a class="btn btn-lg btn-primary" href="<?php echo get(slide_pic5_url);?>" role="button"><?php echo lang(more);?></a></p>
            </div>
          </div>
        </div>
 <?php } ?>
       

      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->



<!-- Large modal -->

