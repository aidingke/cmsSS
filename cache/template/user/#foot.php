<?php defined('ROOT') or exit('Can\'t Access !'); ?>


<div class="blank30"></div>
<div class="blank30"></div>
<div class="blank30"></div>
<div id="copyright">Copyright &copy;  <?php echo get('sitename');?>，
<?php echo getCopyRight();?>
</div>

</div>
</div>
</div>
</div>


<div class="servers-wap">
<?php if(config::get('wap_foot_nav')=='1') { ?>
<?php echo template('system/foot_nav_a.html'); ?>
<?php } elseif (config::get('wap_foot_nav')=='2') { ?>
<?php echo template('system/foot_nav_b.html'); ?>
<?php } elseif (config::get('wap_foot_nav')=='3') { ?>
<?php echo template('system/foot_nav_c.html'); ?>
<?php } else { ?>
<?php } ?> 
</div>


<!-- Bootstrap Js -->
    <script src="<?php echo $skin_path;?>/js/bootstrap.min.js"></script>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="<?php echo $skin_path;?>/js/ie10-viewport-bug-workaround.js"></script>
<script type="text/javascript" src="<?php echo $skin_path;?>/js/jquery.metisMenu.js"></script>
    <!-- Custom Js -->
    <script src="<?php echo $skin_path;?>/js/custom-scripts.js"></script> 

  </body>
</html>
