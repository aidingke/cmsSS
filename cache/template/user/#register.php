<?php defined('ROOT') or exit('Can\'t Access !'); ?>
<!DOCTYPE html>
<html>
<head>
<meta name="Generator" content="CmsEasy 6_2_0_20180611_UTF8" />
<title><?php echo lang(register);?><?php echo lang(user);?></title>
<meta name="renderer" content="webkit">
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

<meta name="author" content="CmsEasy Team" />
<link rel="icon" href="<?php echo $base_url;?>/favicon.ico" type="image/x-icon" />
<script type="text/javascript" src="<?php echo $skin_path;?>/js/jquery-1.8.3.min.js"></script>
<script language="javascript">
$(function() {
    if (window.PIE) {
        $('.rounded').each(function() {
            PIE.attach(this);
        });
    }
});
</script>
<style type="text/css">
* {
margin:0px;
padding:0px;
}

body {
line-height:180%;
  padding-top: 88px;
  padding-bottom: 40px;
  background-color: #fff;
  font-size:1.0em;
  color:#333;
}

/* 通用 */

.blank5,.blank10,.blank20,.blank30,.blank50,.blank60 {clear:both;height:5px;overflow:hidden;}
.blank10 {height:10px;}
.blank20 {height:20px;}
.blank30 {height:30px;}
.blank50 {height:50px;}
.blank60 {height:60px;}

.login input {
width: 268px;
height:26px;
line-height:26px; 
padding:6px 15px;
border:1px solid #ccc;
-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075);
box-shadow:inset 0 1px 1px rgba(0,0,0,.075);
-webkit-transition:border-color ease-in-out .15s,
-webkit-box-shadow ease-in-out .15s;
-o-transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s;
transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s;
color:#888;
}
.login input:focus{
border-color:#66afe9;
outline:0;
-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6);
box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6);
}

.login #username {border-radius:3px;}
.login #password {border-radius:3px;}

input[type="button"], input[type="submit"], input[type="reset"] {
-webkit-appearance: none;
}

textarea {  -webkit-appearance: none;}   
.button{ border-radius: 0; } 

.copyright {padding-top:55px; text-align:center;font-size:10px;color:#888;}

.login {
width:300px;
margin:0px auto;
}

#reg,
#btn_reg {
width: 300px;
height:46px;
line-height:46px; 
margin-top:30px;
text-align:center;
color:white;
border:none;
background:#337ab7;
border-radius:3px;
}

#reg:hover
 {
background:#286090;
}
#btn_reg {line-height:36px; margin-top:8px; background:white;border:1px solid #ccc;color:#333;}
#btn_reg:hover {
background:#e6e6e6;
}

#frmLogin #u_loginname {border-radius:3px 3px 0px 0px;}
#frmLogin #u_loginpwd {border-top:none; border-radius:0px 0px 0px 0px;}
#frmLogin #u_loginpwd1 {border-top:none; border-radius:0px 0px 3px 3px;}


.copyright {padding-top:55px; text-align:center;font-size:10px;color:#888;}


.input,#select,.form-control {width:298px;
  height:30px;
  line-height:30px;
  padding:0px 10px;
  border:1px solid #ccc;
  font-weight:bold;
  font-size:12px;
  border-radius: 3px 3px 3px 3px; }
#select {width:320px;}



#mobilenum { float:left; width:140px; border:1px solid #ccc; height:38px; line-height:38px; padding:0px 10px;border-radius: 3px 3px 3px 3px;}
#btm_sendMobileCode { float:right; width:130px; border:1px solid #ccc; height:40px; line-height:40px; padding:0px 10px;border-radius: 3px 3px 3px 3px;}


#checkcode {float:left;margin:10px 0px;}
#verify {
float:left;
 width:208px;
  height:28px;
  line-height:28px;
  margin:10px 0px;
  padding:0px 15px;
  border:1px solid #ccc;
border-radius: 3px 0px 0px 3px;
}
#verify:hover {
border:1px solid #A5C7FE;
-moz-box-shadow:0px 0px 10px #A5C7FE;
-webkit-box-shadow:0px 0px 10px #A5C7FE;
box-shadow:0px 0px 10px #A5C7FE;

}

img#logo {max-width:300px;}


@media (max-width: 468px) {
body {padding-top:20px;}
}
</style>


 <script type="text/javascript" LANGUAGE="javascript">
function checkEmail(e_mail) {
 //对电子邮件的验证
  var myreg = /^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;
  return myreg.test(e_mail);
}

function isMobile(tel){
return /^1([0-9]+){5,}$/g.test(tel);
}

  function check()
   {
       if(document.login_form.username.value.length==0){
  alert("<?php echo lang(please_enter_your_user_name);?>");
  document.login_form.username.focus();
  return false;
       }

       if(document.login_form.password.value.length==0){
  alert("<?php echo lang(please_set_a_password);?>");
  document.login_form.password.focus();
  return false;
       }

       if(document.login_form.password2.value.length==0){
  alert("<?php echo lang(enter_confirm_password);?>");
  document.login_form.password2.focus();
  return false;
       }

       <?php if(config::get('invitation_registration')=='1') { ?>
       if(document.login_form.invite.value.length==0){
           alert("<?php echo lang('enter');?><?php echo lang('invitation-code');?>");
           document.login_form.invite.focus();
           return false;
       }
       <?php } ?>


       if(document.login_form.aquestion.value.length==0){
  alert("<?php echo lang(set_security);?>");
  document.login_form.aquestion.focus();
  return false;
       }

       if(document.login_form.question.value.length==0){
  alert("<?php echo lang(please_set_the_security_answer);?>");
  document.login_form.question.focus();
  return false;
       }

       if(document.login_form.answer.value.length==0){
  alert("<?php echo lang(please_enter_the_custom_security_answer);?>");
  document.login_form.answer.focus();
  return false;
       }

if(document.login_form.tel.value.length==0){
  alert("<?php echo lang(p_m_content);?>");
  document.login_form.tel.focus();
  return false;
       }

           if(!isMobile(document.login_form.tel.value)){
               alert("请输入正确的电话");
               document.login_form.tel.focus();
               return false;
           }

           if(!checkEmail(document.login_form.e_mail.value)){
               alert("请输入正确的邮箱");
               document.login_form.e_mail.focus();
               return false;
           }



<?php if(config::get('mobilechk_enable') && config::get('mobilechk_reg')) { ?>
if(document.login_form.mobilenum.value.length==0){
  alert("<?php echo lang('cell_phone_parity_error');?>");
  document.login_form.mobilenum.focus();
  return false;
       }
<?php } ?>

       if(document.login_form.verify.value.length==0){
  alert("<?php echo lang(enter);?><?php echo lang(verifycode);?>!");
  document.login_form.verify.focus();
  return false;
       }
return true; 
} 
function set_question(value)
   {
       document.getElementById("question").value=value;
       document.getElementById("question").focus();
   }
</script>
<script type="text/javascript">
<!--

var JPlaceHolder = {
    //检测
    _check : function(){
        return 'placeholder' in document.createElement('input');
    },
    //初始化
    init : function(){
        if(!this._check()){
            this.fix();
        }
    },
    //修复
    fix : function(){
        jQuery(':input[placeholder]').each(function(index, element) {
            var self = $(this), txt = self.attr('placeholder');
            self.wrap($('<div></div>').css({position:'relative', zoom:'1', border:'none', background:'none', padding:'none', margin:'none'}));
            var pos = self.position(), h = self.outerHeight(true), paddingleft = self.css('padding-left');
            var holder = $('<span></span>').text(txt).css({position:'absolute', left:pos.left, top:pos.top, height:h, lienHeight:h, paddingLeft:paddingleft, color:'#aaa'}).appendTo(self.parent());
            self.focusin(function(e) {
                holder.hide();
            }).focusout(function(e) {
                if(!self.val()){
                    holder.show();
                }
            });
            holder.click(function(e) {
                holder.hide();
                self.focus();
            });
        });
    }
};
//执行
jQuery(function(){
    JPlaceHolder.init();    
});
//-->
</script>

</head>
<body>

<div class="login">
<center>
<img id="logo" src="<?php echo get('site_logo');?>" />
</center>
<div style="clear:both;height:30px;"></div>

    <form id="login_form"   name="login_form" method="post"  action="<?php echo url('user/register') ?>" onsubmit="return check()">
     
<strong style="font-size:14px;color:red;"><?php echo message();?></strong>
<?php if(config::get(reg_on)) { ?>
        <input type="text" class="form-control" value="<?php echo lang(enter);?><?php echo lang(username);?>" placeholder="<?php echo lang(enter);?><?php echo lang(username);?>" onfocus="if(this.value=='<?php echo lang(enter);?><?php echo lang(username);?>') {this.value=''}" onblur="if(this.value=='') this.value='<?php echo lang(enter);?><?php echo lang(username);?>'" data-errortxt="<?php echo lang(enter);?><?php echo lang(username);?>" name="username" id="username" tabindex="1">
<div class="blank10"></div>
        <input type="password" class="form-control" value="<?php echo lang(enter);?><?php echo lang(password);?>" placeholder="<?php echo lang(enter);?><?php echo lang(password);?>" onfocus="if(this.value=='<?php echo lang(enter);?><?php echo lang(password);?>') {this.value=''}" onblur="if(this.value=='') this.value='<?php echo lang(enter);?><?php echo lang(password);?>'" data-errortxt="<?php echo lang(enter);?><?php echo lang(password);?>" name="password" id="password" tabindex="2">
<div class="blank10"></div>
<input type="password" class="form-control" name="password2" id="password2" value="<?php echo lang(enter);?><?php echo lang(againpassword);?>" placeholder="<?php echo lang(enter);?><?php echo lang(againpassword);?>" onfocus="if(this.value=='<?php echo lang(enter);?><?php echo lang(againpassword);?>') {this.value=''}" onblur="if(this.value=='') this.value='<?php echo lang(enter);?><?php echo lang(againpassword);?>'" data-errortxt="<?php echo lang(enter);?><?php echo lang(againpassword);?>" tabindex="3">
<div class="blank10"></div>

<input value="<?php echo lang(e_mail);?>" onfocus="if(this.value=='<?php echo lang(e_mail);?>') {this.value=''}" onblur="if(this.value=='') this.value='<?php echo lang(e_mail);?>'"  placeholder="<?php echo lang(e_mail);?>" type='text' id="e_mail"  name="e_mail" tabindex="4"  class="form-control" />
<div class="blank10"></div>

<?php if(config::get('invitation_registration')=='1') { ?>
<input  placeholder="<?php echo lang(invitation_code);?>"  value="<?php echo lang(invitation_code);?>" onfocus="if(this.value=='<?php echo lang(invitation_code);?>') {this.value=''}" onblur="if(this.value=='') this.value='<?php echo lang(invitation_code);?>'" type='text' id="invite" name="invite" tabindex="4"  class="input" />
<div class="blank10"></div>
<?php } ?>

<!-- <select name="aquestion" onchange="set_question(this.value);" id="aquestion" class="select">
    <option value="<?php echo lang(select_security);?>"><?php echo lang(select_security);?></option>
    <option value="<?php echo lang(father_was_born);?>"><?php echo lang(father_was_born);?></option>
    <option value="<?php echo lang(mother_was_born);?>"><?php echo lang(mother_was_born);?></option>
    <option value="<?php echo lang(elementary_school_name);?>"><?php echo lang(elementary_school_name);?></option>
    <option value="<?php echo lang(name_in_the_school);?>"><?php echo lang(name_in_the_school);?></option>
    <option value="<?php echo lang(favorite_sport);?>"><?php echo lang(favorite_sport);?></option>
    <option value="<?php echo lang(favorite_songs);?>"><?php echo lang(favorite_songs);?></option>
    <option value="<?php echo lang(favorite_movies);?>"><?php echo lang(favorite_movies);?></option>
    <option value="<?php echo lang(favorite_color);?>" ><?php echo lang(favorite_color);?></option>
    <option value="<?php echo lang(custom_questions);?>" ><?php echo lang(custom_questions);?></option>
</select>
<div class="blank10"></div>


<div style="display:none;">
<input placeholder="" type='text' id="question"  name="question" value="" tabindex="5" class="input" />
</div>
 
<div class="blank10"></div>
<input value="" placeholder="<?php echo lang(answer);?>" type='text' id="answer"  name="answer" tabindex="6" class="input" /> -->

<input placeholder="<?php echo lang(tel);?>" type='text' id="tel" value="<?php echo lang(tel);?>" onfocus="if(this.value=='<?php echo lang(tel);?>') {this.value=''}" onblur="if(this.value=='') this.value='<?php echo lang(tel);?>'"  name="tel" tabindex="8"  class="input" />
<div class="blank10"></div>
<?php if(config::get('mobilechk_enable') && config::get('mobilechk_reg')) { ?>
<script src="<?php echo $base_url;?>/js/mobilechk.js"></script>
<input id="btm_sendMobileCode" onclick="sendMobileCode('<?php echo url('tool/smscode');?>',$('#tel'));" type="button" value="<?php echo lang(send_cell_phone_verification_code);?>" />
<input type='text' placeholder="<?php echo lang(please_enter_the_phone_verification_code);?>" value="<?php echo lang(please_enter_the_phone_verification_code);?>" onfocus="if(this.value=='<?php echo lang(please_enter_the_phone_verification_code);?>') {this.value=''}" onblur="if(this.value=='') this.value='<?php echo lang(please_enter_the_phone_verification_code);?>'" id="mobilenum" name="mobilenum" />
<div class="blank10"></div>
<?php } ?>

<!-- <?php echo lang(address);?>：
<div class="blank10"></div>
<input placeholder="<?php echo lang(address);?>"  type='text' id="address"  name="address" value="" tabindex="3"  class="input" /> -->


 <?php if(is_array($field))
foreach($field as $f) { ?>
 <?php
 $name=$f['name'];
 if(!preg_match('/^my_/',$name)) {
 unset($field[$name]);
 continue;
}
if(!setting::$var['user'][$name]['showinreg']) {
  continue;
 }
 ?>
<div class="blank5"></div>
<?php echo setting::$var['user'][$name]['cname']; ?>：
<div class="blank5"></div>
<?php echo form::getform($name,setting::$var['user'],$field,array()); ?>
<div class="blank10"></div>
<?php } ?>


<?php if(config::get('verifycode')=='1') { ?>
<input type='text' id="verify"  tabindex="3"  name="verify" /><?php echo verify();?>
<div class="blank10"></div>
<?php } ?>
<?php if(config::get('verifycode')=='2') { ?> 
<div class="blank10"></div>
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

   
<?php } else { ?>
<div class="blank10"></div>
<?php echo lang(tips);?>：<?php echo lang(sitecloseregister);?>
       
<?php } ?>



<input id="reg" type="submit" name="submit" value=" <?php echo lang(register);?> " class="register_btn"   />



<input name="btn_login" type="button" id="btn_reg" value="已有帐号点这里登录" onclick="location.href='<?php echo url('user/login');?>'" />

      </form>

  <div style="clear:both;height:30px;"></div>

<div class="copyright"><?php echo get(site_right);?> <a title="<?php echo get('sitename');?>" href="<?php echo $base_url;?>/"><?php echo get('sitename');?></a>. <?php echo getCopyRight();?></div>

    </div>
    

</body>
</html>