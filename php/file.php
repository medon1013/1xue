<?php
   	$content = $_POST['text'];
   	
   $filename = "test.txt";
   $fp= fopen($filename, "w");  //w是写入模式，文件不存在则创建文件写入。
   $len = fwrite($fp, $content);
   fclose($fp);
   print $len .'字节被写入了\n';
?>