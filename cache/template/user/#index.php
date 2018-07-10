<?php defined('ROOT') or exit('Can\'t Access !'); ?>
<?php echo template('head.html'); ?>

<div class="header"> 
                        <h1 class="page-header">
                            <?php echo get('sitename');?><?php echo lang('membercenter');?>
                        </h1>
<ol class="breadcrumb">
  <li class="active"><a href="/index.php?vmod=User&vact=Index">平台首页</a></li>
</ol> 

</div>

<div id="page-inner">
<div class="row placeholders">

 <div class="user_welcome">
<img src="<?php echo $skin_path;?>/images/user/avatar.png" />
<span>
<?php echo lang(welcomeyou);?>，<?php echo $user['username'];?> [	<a href="<?php echo url('user/logout');?>" class="logout"><?php echo lang(logout);?></a>	]
</span>

</div>

            <div class="col-xs-6 col-sm-3 placeholder">
              <a href="<?php echo url('user/edit/table/user');?>">
  <span class="glyphicon glyphicon-edit"></span>
              <h4><?php echo lang(edituserinfo);?></h4>
              <span class="text-muted">Edit data</span>
  </a>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <a href="<?php echo url('user/changepassword');?>">
  <span class="glyphicon glyphicon-lock"></span>
              <h4><?php echo lang(changepassword);?></h4>
              <span class="text-muted">Change password</span>
  </a>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
  <a href="<?php echo url('manage/orderslist/manage/orders');?>">
              <span class="glyphicon glyphicon-list-alt"></span>
              <h4><?php echo lang(vieworders);?></h4>
              <span class="text-muted">Query order</span>
  </a>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <a href="<?php echo url('archive/orders');?>">
  <span class="glyphicon glyphicon-shopping-cart"></span>
              <h4><?php echo lang(shoppingcart);?></h4>
              <span class="text-muted">Shopping Cart</span>
  </a>
            </div>
          </div>

<div class="t_1">
<div>
<h3><?php echo lang(memeberinfo);?></h3>
<p>Member Info</p>
</div>
</div>


<div class="row">
<table class="table table-striped table-hover">
<tbody>
<tr>
<td align="right" class="col-xs-4 col-sm-4 col-md-2 col-lg-2">ID：</td>
<td class="col-xs-8 col-sm-8 col-md-10 col-lg-10"><?php echo $user['userid'];?></td>
</tr>

<tr>
<td align="right"><?php echo lang(username);?>：</td>
<td align="left"><?php echo $user['username'];?></td>
</tr>

<tr>
<td align="right"><?php echo lang(question);?>：</td>
<td align="left"><?php echo $user['question'];?></td>
</tr>

<tr>
<td align="right"><?php echo lang(answer);?>：</td>
<td align="left"><?php echo $user['answer'];?></td>
</tr>

<tr>
<td align="right"><?php echo lang(tel);?>：</td>
<td align="left"><?php echo $user['tel'];?></td>
</tr>

<tr>
<td align="right"><?php echo lang(e_mail);?>：</td>
<td align="left"><?php echo $user['e_mail'];?></td>
</tr>

<tr>
<td align="right"><?php echo lang(address);?>：</td>
<td align="left"><?php echo $user['address'];?></td>
</tr>

<tr>
<td align="right"><?php echo lang(qq);?>：</td>
<td align="left"><?php echo $user['qq'];?></td>
</tr>

<tr>
<td align="right"><?php echo lang(intro);?>：</td>
<td align="left">&nbsp;<?php echo $user['intro'];?></td>
</tr>
 <?php if(is_array($field))
foreach($field as $f) { ?>
            <?php
            $name=$f['name'];
            if(!preg_match('/^my_/',$name)) {
            unset($field[$name]);
            continue;
            }
            if(!isset($data[$name])) $data[$name]='';
            ?>
            <tr>
                <td align="right" class="col-xs-4 col-sm-4 col-md-2 col-lg-2"><?php echo setting::$var['user'][$name]['cname']; ?>：</td>
                <td align="left" class="col-xs-8 col-sm-8 col-md-10 col-lg-10">
                   <?php echo $data[$name];?>
                </td>
            </tr>
            <?php } ?>
          <tr>
<td align="right"><?php echo lang('quick-login');?>：</td>
<td align="left"><?php if($user['qqlogin']){echo '<?php echo lang(has-opened-QQ-quick-login);?>';}?> <?php if($user['alipaylogin']){echo '<?php echo lang(alipay-has-opened-a-quick-login);?>';}?></td>
</tr>  
      </tbody>
    </table>
</div>

<?php echo template('foot.html'); ?>