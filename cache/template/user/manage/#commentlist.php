<?php defined('ROOT') or exit('Can\'t Access !'); ?>
<?php echo template('head.html'); ?>

<div class="t_1 wow bounceIn">
<div>
<h3><?php echo lang(my);?><?php echo lang(comment);?></h3>
<p>Comment List</p>
</div>
</div>

<div class="p10">

<div class="blank10"></div>

<form name="listform" id="listform"  action="<?php echo uri();?>" method="post">
<table class="table table-striped table-hover">
<thead>
<tr class="th">
<!-- <th><input title="点击可全选本页的所有项目"  onclick="CheckAll(this.form)" type="checkbox" name="chkall"> </th> -->
<th align="center"><!--id--><?php echo lang(id);?></th>
<th align="center"><!--content--><?php echo lang(title);?></th>
<th align="center"><!--content--><?php echo lang(content);?></th>
<!-- <th align="center"> --><!--username--><!-- 用户名</th> -->
<th align="center"><?php echo lang(tatus);?></th>
<th align="center"><?php echo lang(dosomething);?></th>
</tr>
</thead>
<tbody>
<?php if(is_array($data))
foreach($data as $d) { ?>
<tr>
<!-- <td align="center" >
<input onclick="c_chang(this)" type="checkbox" value="<?php echo $d[$primary_key];?>" name="select[]" class="checkbox" />
</td> -->

<td align="center"><?php echo cut($d['id']);?></td>
<td align="left" style="padding-left:10px;"><a href="<?php echo $d['aurl'];?>" target="_blank"><?php echo $d['title'];?></a></td>
<td align="left" style="padding-left:10px;"><?php echo cut($d['content']);?></td>
<td align="center"><?php if($d['state']) { ?><font color="#006600"><?php echo lang('alreadycheckedcontent');?></font><?php } else { ?><font color="#990000"><?php echo lang('waitcheckedcontent');?></font><?php } ?></td>

<td align="center">
<a onclick="javascript: return confirm('<?php echo lang(confirm);?><?php echo lang(delete);?>?');" href="<?php echo url('comment/del/id/'.$d['id']);?>" class="a_del"><?php echo lang('delete');?></a>
</td>
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
<script>
$(function(){
$('#btn_add').click(function(e) {
        $('#listform').attr('action','<?php echo url('invite/add',true);?>');
$('#listform').submit();
    });
});
</script>
<?php echo template('foot.html'); ?>