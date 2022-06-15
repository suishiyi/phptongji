
<br/><br/><br/><br/><br/><br/>
php统计
<?php
header("content-type:text/html;charset=utf-8");
if(file_exists("tongji2.txt")) {
echo "存在";
$count=file_get_contents("tongji2.txt"); 
$count= $count+1;
echo "php".$count;
$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
$fp = fopen("$DOCUMENT_ROOT/tongji2.txt",'w+');
fclose($fp);
//unlink("tongji.txt");
file_put_contents("tongji.txt",$count); 
?>



