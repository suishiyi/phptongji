
<br/><br/><br/><br/><br/><br/>
php统计
<?php
$filetxt="tongji2.txt"
header("content-type:text/html;charset=utf-8");
if(file_exists($filetxt)) {
echo "存在";
$count=file_get_contents($filetxt); 
$count= $count+1;
echo "php".$count;
$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
$fp = fopen("$DOCUMENT_ROOT/".$filetxt,'w+');
fclose($fp);
//unlink("tongji.txt");
file_put_contents($filetxt,$count); 
?>



