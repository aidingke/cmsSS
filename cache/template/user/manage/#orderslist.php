<?php defined('ROOT') or exit('Can\'t Access !'); ?>
<?php echo template('head.html'); ?>

<div class="t_1 wow bounceIn">
<div>
<h3><?php echo lang(vieworders);?></h3>
<p>Query Order</p>
</div>
</div>

<div class="p10">



<form name="listform" id="listform"  action="<?php echo uri();?>" method="post">

<table class="table table-striped table-hover">
        
        <thead>
            <tr class="th">
                <th class="orders-list-id"><!--oid--><?php echo lang(id);?></th>
                <th class="orders-list-title"><?php echo lang(title);?></th>
                <th class="orders-list-status"><!--status--><?php echo lang(orderstatus);?></th>               
                <th class="orders-list-adddate"><!--adddate--><?php echo lang(adddate);?></th>
                <th class="orders-list-dosomething"><?php echo lang(dosomething);?></th>
            </tr>

        </thead>
        <tbody>
            <?php if(is_array($data))
foreach($data as $d) { ?>

<?php
switch($d['status']){
case 1:
$d['status']="<font color='green'>".lang('complete')."</font>";
break;
case 2:
$d['status']="<font color='blue'>".lang('processing)')."</font>";
break;
case 3:
$d['status']=lang('shipped');
break;
case 4:
$d['status']=lang('pending_audit_payment');
break;
case 5:
$d['status']="<font color='red'>".lang('check_payment')."</font>";
break;
default:
$d['status']=lang('ordersnotalreadydo');
break;	
}
?>
            <tr class="s_out">

                <td class="orders-list-id"><?php echo cut($d['oid']);?></td>
                <td class="orders-list-title"><?php echo getArchiveTitle($d['aid']);?></td>
                <td class="orders-list-status"><?php echo $d['status'];?></td>
                <td class="orders-list-adddate"><?php echo cut(date('Y-m-d H:i:s',$d['adddate']));?></td>
                <td class="orders-list-dosomething">
                    <a href='<?php echo url("archive/orders/oid/".$d['oid'],false);?>' target="_blank" ><?php echo lang(look);?></a>                   
                </td>
            </tr>
            <?php } ?>


        </tbody>
    </table>


    <div class="blank30"></div>
   

</form>


<div class="pages">
<?php if(get('table')!='type' && front::get('case')!='field') echo pagination::html($record_count); ?>
</div>
<div class="blank10"></div>
<div class="blank30"></div>
<div class="blank30"></div>

<?php echo template('foot.html'); ?>