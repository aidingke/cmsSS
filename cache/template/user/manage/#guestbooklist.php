<?php defined('ROOT') or exit('Can\'t Access !'); ?>
<?php echo template('head.html'); ?>

<div class="t_1 wow bounceIn">
<div>
<h3><?php echo lang(my);?><?php echo lang(guestbook);?></h3>
</div>
</div>

<div class="p10">

<div class="blank10"></div>

<form name="listform" id="listform"  action="<?php echo uri();?>" method="post">
<table class="table table-striped table-hover">
<thead>
<tr class="th">

<th><?php echo lang('id');?></th>
<th><?php echo lang('title');?></th>
<th><?php echo lang('content');?></th>
<th><?php echo lang('reply');?></th>
</tr>
</thead>
<tbody>
<?php if(is_array($data))
foreach($data as $d) { ?>
<tr>

<td align="left" style="padding-left:10px;"><?php echo cut($d['id']);?></td>
<td align="left" style="padding-left:10px;"><?php echo $d['title'];?></td>
<td align="left" style="padding-left:10px;"><?php echo cut($d['content']);?></td>
<td align="left" style="padding-left:10px;"><?php echo $d['reply'];?></td>
</tr>
<?php } ?>

</tbody>
</table>
<div class="blank30"></div>

    <input type="hidden" name="batch" value="">


</form>
<div class="blank10"></div>
    <div class="blank10"></div>

<div class="pages">
<?php if(get('table')!='type' && front::get('case')!='field') echo pagination::html($record_count); ?>
</div>
<div class="blank10"></div>
<div class="blank30"></div>
<div class="blank30"></div>
<?php echo template('foot.html'); ?>