<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<link rel="stylesheet" href="/Public/Admin/css/base.css" />
<link rel="stylesheet" href="/Public/Admin/css/info-reg.css" />
    <title>Document</title>
</head>
<body>
<div class="title"><h2>发送邮件</h2></div>
<form action ="" method="post" enctype="multipart/form-data">
    <div class="main">
        <p class="short-input ue-clear">
            <label>收件人</label>
            <!-- <div class="select-wrap"> -->
                <select name="to_id" id="">
                    <option value="0">请选择收件人</option>
                    <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vol["id"]); ?>"><?php echo ($vol["truename"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
            <!-- </div> -->
        </p>
        <p class="short-input select ue-clear">
            <label>标题</label>
            <input type="text" name="title" placeholder="标题">
        </p>
        <p class="short-input ue-clear">
            <label>附件</label>
            <input type="file" name="file" >
        </p>
        <p class="short-input ue-clear">
            <label>内容：</label>
            <textarea placeholder="内容" name="content"> </textarea>
        </p>
    </div>
    <div class="btn ue-clear">
        <a href="javascript:;" class="confirm">确定</a>
        <a href="javascript:;" class="clear">清空内容</a>
    </div>
</form>
</body>
<script src="/Public/Admin/js/jquery.js"></script>
<script src="/Public/Admin/js/common.js"></script>
<script src="/Public/Admin/js/WdatePicker.js"></script>
<script>
$(".select-title").on("click",function(){
    $(".select-list").toggle();
    return false;
})
$(".select-list").on("click",function(){
    var txt = $(this).text();
    $(".select-title").find("span").text(txt);
});
showRemind('input[type=text],textarea','placeholder');


$(function(){
    $(".confirm").on("click",function(){
        $('form').submit();
    })
    $(".clear").on("click",function(){
        $("form").get(0).reset();
    })
})



</script>
</html>