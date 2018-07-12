<?php defined('ROOT') or exit('Can\'t Access !'); ?>
<!DOCTYPE html>
<html>
<head>
<meta name="Generator" content="CmsEasy 6_2_0_20180611_UTF8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title><?php echo lang(ordersinfo);?>-<?php echo lang(tipsinfo);?></title>
<meta name="keywords" content="<?php if(isset($archive['keyword'])) { ?><?php echo $archive['keyword'];?>,<?php } ?><?php if(isset($catid)) { ?><?php echo $type[$catid]['keyword'];?>,<?php } ?><?php echo get('site_keyword');?>" />
<meta name="description" content="<?php if(isset($archive['description'])) { ?><?php echo $archive['description'];?>,<?php } ?><?php if(isset($catid)) { ?><?php echo $type[$catid]['description'];?>,<?php } ?><?php echo get('site_description');?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta content="telephone=no" name="format-detection">
<meta http-equiv="x-rim-auto-match" content="none">
</head>
<body>

<style>

.copyright {width:300px;margin:0px auto;padding:0px auto;text-align:right;font-size:10px;color:gray;}
.copyright a  {color:#999;}

.table{ width:300px; margin:66px auto 5px;text-align:center; font-size:12px;  border:1px solid #DDD; border-collapse:collapse; background:white;}
.table * td{ padding:3px 6px; border:1px solid #EEE; }
.table thead * th{ background:#F5F5F5; border:1px solid #E3E3E3; padding:0px 6px; color:#999; } 
.table tbody * th{  background:#F5F5F5; border:1px solid #DDD; }
.table tbody * th strong{ line-height:21px; text-indent:10px; color:#999; }
.td1{ text-align:right; color:#666; }
.td2,.td3,.td4,.td5,.td6,.td7,.td8,.td9{ text-align:center; } 
.td5{ background:#F5F5F5; }
.td6,.td7,.td8,.td9{ background:#F5F5F5; }
.abctxt {padding:10px;}
</style>


<table cellspacing="1" cellpadding="3" border="1" align="center" class="table">
<tbody>
<th>
<?php echo lang(ordersinfo);?>
</th>
   <tr onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="#ffffff">
    <td>
   
    <?php if($orders['oid']) { ?>
    <table width="100%" border="0" cellspacing="1" cellpadding="0"> 
      <tr onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="#ffffff"> 
        <td width="30%" align="right"><?php echo lang(orderid);?>：</td> 
        <td width="70%"><font color="red"><?php echo $orders['oid'];?></font></td> 
      </tr>  
      <tr onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="#ffffff"> 
        <td width="30%" align="right"><?php echo lang(orderadddate);?>：</td> 
        <td width="70%"><?php echo date('Y-m-d H:i:s',$orders['adddate']);?></td> 
      </tr> 
      <tr onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="#ffffff"> 
        <td align="right"><?php echo lang('product');?>：</td> 
        <td><?php echo getArchiveTitle($orders['aid']);?></td> 
      </tr> 
      <tr onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="#ffffff"> 
        <td align="right"><?php echo lang(ordercontactname);?>：</td> 
        <td><?php echo $orders['pname'];?></td> 
      </tr> 
      <tr onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="#ffffff"> 
        <td align="right"><?php echo lang(ordertel);?>：</td> 
        <td><?php echo $orders['telphone'];?></td> 
      </tr> 
      <tr onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="#ffffff"> 
        <td align="right"><?php echo lang(orderaddress);?>：</td> 
        <td><?php echo $orders['address'];?></td> 
      </tr> 
            <tr onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="#ffffff"> 
        <td align="right"><?php echo lang(postcode);?>：</td> 
        <td><?php echo $orders['postcode'];?></td> 
      </tr> 
            <tr onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="#ffffff"> 
        <td align="right"><?php echo lang(ordercontent);?>：</td> 
        <td><?php echo $orders['content'];?></td> 
      </tr> 
      <tr onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="#ffffff"> 
        <td align="right"><?php echo lang(orderstatus);?>：</td> 
        <td><font color="red"><?php echo $orders['status'];?></font></td> 
      </tr>
      <?php if($gotopaygateway) { ?>
      <tr onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="#ffffff"> 
        <td align="right"></td> 
        <td><font color="red"><?php echo $gotopaygateway;?></font></td> 
      </tr>
      <?php } ?>
      <tr onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="#ffffff"> 
        <td align="right">&nbsp;</td> 
        <td><input type="submit" value="<?php echo lang(shutwin);?>" onClick="window.close()"/></td> 
      </tr> 
    </table>   
    <?php } else { ?>
    <?php echo lang(ordersnot);?>
<meta http-equiv="refresh" content="1;URL=<?php echo get(site_url);?>">
    <?php } ?>
    
    </td>
   </tr>
</tbody>
</table>
<div  style="display:none"><?php echo getCopyRight();?></div>

</body>
</html>