





<?php

/* 


header('Access-Control-Allow-Origin:*');
date_default_timezone_set ("Asia/Shanghai");
echo '当前时间是：'.date('Y-m-d H:i:s');
*/


?>






<br/><br/><br/>







<?php



header("content-type:text/html;charset=utf-8");



header("content-type:text/html;charset=utf-8");
 //$count=0;
  if(file_exists("tongji.txt"))   //判断是否存在tongji.txt文件
  {
    $count=file_get_contents("tongji.txt");  //取出文件tongji.txt中的内容
    echo "存在";
    while($count  === "")
   {
    $count=file_get_contents("tongji.txt");  //取出文件tongji.txt中的内容
   }
  }

  $count= $count+1;
  echo "php".$count;
  
 
   //打开关闭txt操作，以前的必须手动打开txt，删除内容
  $DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
  $fp = fopen("$DOCUMENT_ROOT/tongji.txt",'w+');
  fclose($fp);
  
  //unlink("tongji.txt");删除文件
  file_put_contents("tongji.txt",$count);  //讲$count的值写入tongji.txt文件中
  unset($count);
  
  
?>




<br>

51啦统计https://sanliuyi101phptongji.herokuapp.com/  <br>
<script type="text/javascript" src="//js.users.51.la/21350923.js"></script>



百度统计https://sanliuyi101phptongji.herokuapp.com/  <br>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?bff297dc194268a8f519bed00c0e7d69";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>

临时统计<br>
<a href="https://www.mfwztj.com/" target="_blank"><img src="https://www.mfwztj.com/hit.php?id=zmrkxkk&nd=6&style=1" border="0" alt="免费计数器"></a>
