<?php defined('ROOT') or exit('Can\'t Access !'); ?>
<?php echo template('header.html'); ?>

<!-- 面包屑导航开始 -->
<?php echo template('position.html'); ?>
<!-- 面包屑导航结束 -->


<link href="<?php echo $skin_path;?>/css/guestbook.css" rel="stylesheet">

<script type="text/javascript">
<!--
function isMobile(mobile){
return /^1([0-9]+){5,}$/g.test(mobile);
}
var sec = 30;
var o_dsq = null;
function senddjs(){
sec--;
$('#btm_sendMobileCode').val(sec+lang('seconds_after_you_can_re_send'));
if(sec == 0){
clearInterval(o_dsq);
$('#btm_sendMobileCode').val(lang('resend_the_checksum'));
$('#btm_sendMobileCode').attr('disabled',false);
sec = 30;
}
}
function sendMobileCode(mobile){
if(isMobile(mobile)){
$('#btm_sendMobileCode').attr('disabled',true);
$.post("<?php echo url('tool/smscode');?>",{'mobile':mobile},function(data){
alert(data);
},'text');
o_dsq = setInterval("senddjs()",1000);
}else{
alert("<?php echo lang('phone_number_format_is_wrong');?>");
$('#guesttele').focus();	
}
}
$(function(){
$('#frmGuestbookSubmit').submit(function(e) {
if($('#nickname').val() == ''){
alert("<?php echo lang('please_enter_your_user_name');?>");	
$('#nickname').focus();
return false;
}
if($('#guesttel').val() == ''){
alert(<?php echo lang('p_m_content');?>);	
$('#guesttel').focus();
return false;
}
<?php if(config::get('mobilechk_enable') && config::get('mobilechk_guestbook')) { ?>
if($('#mobilenum').val() == ''){
alert("<?php echo lang('cell_phone_parity_error');?>");	
$('#mobilenum').focus();
return false;
}
<?php } ?>
if($('#guestemail').val() == ''){
alert("lang('please_fill_in_the_mailbox')");	
$('#guestemail').focus();
return false;
}
if($('#title').val() == ''){
alert("<?php echo lang('please_enter_the_title');?>");	
$('#title').focus();
return false;
}
if($('#content').val() == ''){
alert("lang('p_content')");	
$('#content').focus();
return false;
}
<?php if(config::get('verifycode')) { ?> 
//if($('#verify').val() == ''){
if(!verify::checkGee()){
alert("<?php echo lang('please_enter_code');?>");	
$('#verify').focus();
return false;
}
<?php } ?>
});
});
//-->
</script>

<!-- 页面标题开始 -->
<div class="title">
<h3><a><?php echo lang('guestbook');?><small>Guestbook</small></a></h3>
<p></p>
<span>——</span>
</div>
<!-- 页面标题结束 -->

<hr class="featurette-divider">


<!-- 中部开始 -->
<div class="container">
<div class="row">
<div class="blank30"></div>

<div class="col-md-4 guestbook-left-contactus">
<address>
<strong><?php echo lang(contactus);?></strong>
<ul>
<li><abbr title="Tel">Tel:</abbr> <?php echo get(tel);?></li>
<li><abbr title="Fax">Fax:</abbr> <?php echo get(fax);?></li>
<li><abbr title="Email">Email:</abbr> <a href="mailto:<?php echo get(email);?>"><?php echo get(email);?></a></li>
</ul>
<hr class="featurette-divider">
</address>
<address>
<strong><?php echo lang(address);?></strong>
<ul>
<li><abbr title="Address">Address:</abbr> <?php echo get(address);?></li>
</ul>
<hr class="featurette-divider">
</address>
<address>
<strong><?php echo lang(leftservers);?></strong>
<ul>
<?php if(config::get('qq1')) { ?>
<li class="col-xs-6 "><a rel="nofollow" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo get(qq1);?>&site=qq&menu=yes" target="_blank"><?php echo get(qq1name);?></a></li>
<?php } ?>
<?php if(config::get('qq2')) { ?>
<li class="col-xs-6"><a rel="nofollow" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo get(qq2);?>&site=qq&menu=yes" target="_blank"><?php echo get(qq2name);?></a></li>
<?php } ?>
<?php if(config::get('qq3')) { ?>
<li class="col-xs-6"><a rel="nofollow" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo get(qq3);?>&site=qq&menu=yes" target="_blank"><?php echo get(qq3name);?></a></li>
<?php } ?>
<?php if(config::get('qq4')) { ?>
<li class="col-xs-6"><a rel="nofollow" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo get(qq4);?>&site=qq&menu=yes" target="_blank"><?php echo get(qq4name);?></a></li>
<?php } ?>
<?php if(config::get('qq5')) { ?>
<li class="col-xs-6"><a rel="nofollow" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo get(qq5);?>&site=qq&menu=yes" target="_blank"><?php echo get(qq5name);?></a></li>
<?php } ?>
</ul>
<hr class="featurette-divider">
</address>
<div class="blank30"></div>
<address>
<strong><?php echo lang(attention);?><?php echo lang(official);?><?php echo lang(wechat);?></strong>
<hr class="featurette-divider">
<img src="<?php echo get(weixin_pic);?>" width="170" onerror='this.src="<?php echo config::get('onerror_pic');?>"' />
</address>
<div class="blank60"></div>
</div><!-- /col-md-4 -->

<div class="col-md-8">

<div style="text-align:center;color:red;">
<?php if(hasflash()) { ?>
<?php echo showflash(); ?>
<?php } ?>
</div>

<form method="post" action="" name="frmGuestbookSubmit" id="frmGuestbookSubmit" class="form_message">

<div class="form-group">
<label for="<?php echo lang('contactname');?>"><?php echo lang('contactname');?></label>
<?php echo form::input('nickname',get('username'));?>
</div>

<div class="form-group">
<label for="<?php echo lang('guesttel');?>"><?php echo lang('guesttel');?></label>
<?php echo form::input('guesttel',get('guesttel'));?>
</div>

<?php if(config::get('mobilechk_enable') && config::get('mobilechk_login')) { ?>
<script src="<?php echo $base_url;?>/js/mobilechk.js"></script>
<div class="blank10"></div>
<input id="btm_sendMobileCode" onclick="sendMobileCode($('#tel').val());" type="button" value="<?php echo lang(please_enter_the_phone_verification_code);?>" />
<input type='text' id="mobilenum"tabindex="4" placeholder="<?php echo lang(send_cell_phone_verification_code);?>"name="mobilenum" />
<div class="blank10"></div>
<?php } ?>

<div class="form-group">
<label for="<?php echo lang('guestemail');?>"><?php echo lang('guestemail');?></label>
<?php echo form::input('guestemail',get('guestemail'));?>
</div>

<div class="form-group">
<label for="<?php echo lang('guestqq');?>"><?php echo lang('guestqq');?></label>
<?php echo form::input('guestqq',get('guestqq'));?>
</div>


<div class="form-group">
<label for="<?php echo lang('title');?>"><?php echo lang('title');?></label>
<?php echo form::input('title',get('title'));?>
</div>

<div class="form-group">
<label for="<?php echo lang('content');?>"><?php echo lang('content');?></label>
<?php echo form::textarea('content',get('content'));?>
</div>

<div class="form-group">
<label for="<?php echo lang('title');?>"><?php echo lang('title');?></label>
<?php echo form::input('title',get('title'));?>
</div>

<div class="form-group">
<label for="<?php echo lang('content');?>"><?php echo lang('content');?></label>
<?php echo form::textarea('content',get('content'));?>
</div>

<div class="form-group">
<label for="<?php echo lang('content');?>"><?php echo lang('title');?></label>
<?php echo form::input('title',get('title'));?>
</div>

<div class="form-group">
<label for="<?php echo lang('content');?>"><?php echo lang('content');?></label>
<?php echo form::textarea('content',get('content'));?>
</div>


<style type="text/css">
input#title,textarea#content {border:1px solid #999; background:white;}
.form-control,input#title {height:26px; line-height:26px;}
</style>

<?php if(config::get('verifycode')=='1') { ?>
<div class="balnk10"></div>
<input type='text' id="verify"tabindex="3"name="verify" /><?php echo verify();?>
<div class="balnk10"></div>
<?php } ?>

<?php if(config::get('verifycode')=='2') { ?>
<div class="balnk10"></div>
<div id="verifycode_embed"></div>
<script src="http://api.geetest.com/get.php"></script>
<script>
var loadGeetest = function(config) {
window.gt_captcha_obj = new window.Geetest({
gt : config.gt,
challenge : config.challenge,
product : 'float',
offline : !config.success
});
gt_captcha_obj.appendTo("#verifycode_embed");
};

$.ajax({
url : '<?php echo url('tool/geetest');?>',
type : "get",
dataType : 'JSON',
success : function(result) {
//console.log(result);
loadGeetest(result)
}
});
</script>
<?php } ?>

<div class="blank60"></div>

<button class="btn btn-primary"  type="submit" name="submit" value="<?php echo lang('submit_on');?>"><?php echo lang('submit_on');?> <span class="badge">Guestbook</span></button>

</form>

</div><!-- /col-md-8 -->

</div><!-- /row -->
</div><!-- /container -->



<div class="blank60"></div>


<?php if(config::get('guestbook_list')=='1') { ?>

<div class="blank60"></div>

<!-- 页面标题开始 -->
<div class="title">
<h3><a>Guestbook List<small><?php echo lang('guestlist');?></small></a></h3>
<p></p>
<span>——</span>
</div>

<hr class="featurette-divider">


<div class="container">


<?php if(config::get('guestbook_user')=='1') { ?> 
<?php if(isset($user) && is_array($user)) { ?>
<div class="row comment_list" style="border:none;">
<?php if(is_array($data))
foreach($data as $d) { ?>
<div class="comm_head col-xs-3 col-sm-1 col-md-1"></div>
<div class="comm_content col-xs-9 col-sm-11 col-md-11">
<div id="comm_content"></div>
<p><?php echo $d['content'];?></p>
<?php if($d['reply']) { ?><dd class="admin_reply">
<?php echo lang('adminreply');?>：
<?php echo $d['reply'];?>
</dd>
<?php } ?>
<p><strong><?php echo $d['username'];?></strong><span><?php echo sdate($comment['adddate'],'Y-m-d H:i');?></span></p>
</div>
<div class="blank10"></div>
<?php } ?>
</div>

<div class="blank30"></div>

<div class="pages">
<?php echo pagination::html($record_count); ?>
</div>
<?php
}else{
?>
<div class="container">
<input type="button" value=" <?php echo lang(please);?><?php echo lang(login);?> " onclick="window.open('<?php echo url('user/login');?>')" class="btn" />
</div>
<?php
}
?>

<?php } else { ?>
<div class="row comment_list" style="border:none;">
<?php if(is_array($data))
foreach($data as $d) { ?>
<div class="comm_head col-xs-3 col-sm-1 col-md-1"></div>
<div class="comm_content col-xs-9 col-sm-11 col-md-11">
<div id="comm_content"></div>
<p><?php echo $d['content'];?></p>
<?php if($d['reply']) { ?><dd class="admin_reply">
<?php echo lang('adminreply');?>：
<?php echo $d['reply'];?>
</dd>
<?php } ?>
<p><strong><?php echo $d['username'];?></strong><span><?php echo sdate($comment['adddate'],'Y-m-d H:i');?></span></p>
</div>
<div class="blank10"></div>
<?php } ?>
</div>

<div class="blank30"></div>

<div class="pages">
<?php echo pagination::html($record_count); ?>
</div>
<?php } ?>

</div><!-- /container -->

<?php } ?>


<div class="blank60"></div>


<?php echo template('footer.html'); ?>