<?php defined('ROOT') or exit('Can\'t Access !'); ?>

<div style="margin:30px auto;line-height:30px;font-size: 14px;text-align:center;font-size:14px;font-weight:bold;">

<strong style="color:red;font-size:14px;font-weight:normal;"><?php echo lang(loginsuccess);?></strong>
<br /><br />
<?php if($from) { ?>
<a href="<?php echo $from;?>"><?php echo lang(backuppage);?></a>&nbsp;&nbsp;
<a href="<?php echo $base_url;?>/"><?php echo lang(homepage);?></a>&nbsp;&nbsp;
<a href="<?php echo url('user');?>"><?php echo lang(membercenter);?></a>
<?php } ?>
</div>
