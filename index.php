<!DOCTYPE HTML>
<html>
<head>
<title>吾爱破解Pap  西城Westcity</title>
<meta charset="UTF-8">
<meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" id="viewport" name="viewport">
</head>
<?php

$lj=file_get_contents("yz.txt"); 

?>
<body>
    当前状态： <a style="color:red"><? echo($lj); ?></a>   （1=循环运行 2=暂停运行）
<form method="post">
<input type="submit" name="sub" value="开始循环获取">
<input type="submit" name="sub2" value="停止循环获取">
</form>
by Westcity <br>
点击后刷新缓存生效

<?php
if(isset($_POST["sub"])){
$files=fopen("yz.txt","w") or die("非法操作！");
$txt=1;
fwrite($files,$txt);
fclose($files);
  
}
if(isset($_POST["sub2"])){
$files2=fopen("yz.txt","w") or die("非法操作！");
$txt2=2;
fwrite($files2,$txt2);
fclose($files2);
   
}
?>
</body>
</html>