<html>
<head>
	<meta charset="UTF-8">
	<title>浏览计数器-ljccccccccccc@163.com</title>
</head>
<body>
	<?php
		//数字输出网页计数器
		$max_len = 9;
		$CounterFile = "counter.dat";
		if(!file_exists($CounterFile)){		//如果计数器文件不存在
			$counter = 0;					
			$cf = fopen($CounterFile,"w");	//打开文件
			fputs($cf,'0');					//初始化计数器
			fclose($cf);					//关闭文件
		}
		else{										//取回当前计数器的值
			$cf = fopen($CounterFile,"r");
			$counter = trim(fgets($cf,$max_len));
			fclose($cf);
		}
		$counter++;									//计数器加一
		$cf = fopen($CounterFile,"w");				//写入新的数据
		fputs($cf,$counter);
		fclose($cf);
	?>
	<div id="dd" align="center">
		<span>欢迎您!</span>
		<span>您是本站的第
			<?php
			 echo $counter;							//输出计数器
			?>
		位访客！</span>
	</div>
	
</body>
</html>


tongji







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
