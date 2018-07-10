<?php defined('ROOT') or exit('Can\'t Access !'); ?>
<?php echo template('head.html'); ?>
    <script type="text/javascript" charset="utf-8" src="<?php echo $base_url;?>/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="<?php echo $base_url;?>/ueditor/ueditor.all.js"> </script>
    <script type="text/javascript" charset="utf-8" src="<?php echo $base_url;?>/ueditor/lang/zh-cn/zh-cn.js"></script>
    <script type="text/javascript" charset="utf-8" src="<?php echo $base_url;?>/ueditor/addCustomizeButton.js"></script>

<div class="t_1 wow bounceIn">
<div>
<h3><?php echo lang(addcontent);?></h3>
<p>Add Content</p>
</div>
</div>

<div class="p10">

<div class="blank10"></div>

<script>
    function checkform() {
        if(document.form1.catid.value=="0") {
            alert('<?php echo lang(pselectcat);?>');
            document.form1.catid.focus();
            return false;
        }
        if(!document.form1.title.value) {
            alert('<?php echo lang(pinput);?><?php echo lang(title);?>');
            document.form1.title.focus();
            return false;
        }
        <?php if(is_array($field))
foreach($field as $f) { ?>
<?php

if(!preg_match('/^my_/',$f['name']) || !$f['notnull']) {
    //unset($field[$f['name']]);
    continue;
}
?>
        if(!document.form1.<?php echo $f['name'];?>.value){
            alert("<?php echo lang(pinput);?><?php echo setting::$var['archive'][$f['name']]['cname']; ?>");
            $("#lm7").css("display","block");
            document.form1.<?php echo $f['name'];?>.focus();
            return false;
        }
        <?php } ?>
        return true;
    }
</script>



<form method="post" name="form1" action="<?php if(front::$act=='edit') $id="/id/".$data[$primary_key]; else $id=''; echo modify("/act/".front::$act."/manage/".$manage.$id);?>" enctype="multipart/form-data" onsubmit="return checkform();">

    <input type="hidden" name="onlymodify" value=""/>
    
  

    <script>
        $(document).ready(function(){
            $("#catid").change( function(){
                get_field($("#catid").val());
            });
        });
function getEditor(name) {
return FCKeditorAPI.GetInstance(name);
}
        function attachment_delect(id) {
            $.ajax({
                url: '<?php echo url('tool/deleteattachment',false);?>&id='+id,
                type: 'GET',
                dataType: 'text',
                timeout: 1000,
                error: function(){
                    //	alert('Error loading XML document');
                },
                success: function(data){
                    document.form1.attachment_id.value=0;
                    get('attachment_path').innerHTML='';
                    get('file_info').innerHTML='';
                }
            });
        }

        function get_field(catid) {
            $.ajax({
                url: '<?php echo url('table/getfield/table/archive/',true);?>&catid='+catid,
                type: 'GET',
                dataType: 'text',
                timeout: 1000,
                error: function(){
                    alert('Error loading XML document');
                },
                success: function(data){
                    $("#lm7").html(data);
                }
            });
        }
    </script>



    <div class="clearBoth">
        <strong><?php echo lang(addcategory);?></strong>
        <div class="clearBoth" style="background:none;">
            <?php echo form::getform('catid',$form,$field,$data);?>
        </div>
    </div>

    <div class="clearBoth">
        <strong><?php echo lang(addtype);?></strong>
        <div class="clearBoth" style="background:none;">
            <?php echo form::getform('typeid',$form,$field,$data,'class="input"');?>
        </div>
    </div>

    <div class="clearBoth">
        <strong><?php echo lang(title);?></strong>
        <div class="clearBoth" style="background:none;">
            <?php echo form::getform('title',$form,$field,$data,'class="input"');?>
        </div>
    </div>



    <div class="clearBoth" style="height:750px;">
        <strong><?php echo lang(content);?></strong>
        <div class="clearBoth" style="background:none;">
            <script id="content" name="content" type="text/plain" style="width:100%;max-height:500px;"></script>
 <script type="text/javascript">
window.UEDITOR_HOME_URL = "<?php echo $base_url;?>/ueditor/";
$(function(){
var ue_content = UE.getEditor('content',{
autoHeightEnabled : false
 });
});
</script>            
<div style="width: 100%;margin-top: 0px;">
<div class="fieldset flash" id="fsUploadProgress">
<span class="legend"></span>
</div>
<div id="divStatus"></div>
</div>
<div class="blank30"></div>
        </div>
    </div>

<style type="text/css">
#content {height:300px;}
</style>
<div class="blank5"></div>

    <div class="clearBoth">
        <strong><?php echo lang(tag);?></strong>
        <div class="clearBoth" style="background:none;">
            <div style="width:99%;">
                <?php echo form::getform('tag',$form,$field,$data);?>
            </div>
        </div>



   
    <div class="blank10"></div>
    <div class="blank10"></div>
    <input type="submit" name="submit" value=" <?php echo lang(submit_on);?> " class="btn btn-primary btn-lg disabled" />

</form>
<div class="blank10"></div>


<?php echo template('foot.html'); ?>