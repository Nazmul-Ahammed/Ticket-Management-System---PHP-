
<<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>

  <img width="2370px"src="homeup.PNG"></img>

  <h1>All Comments</h1><br><br>

</body>
</html>


<?php

session_start();
if(isset($_POST['post'])){

$name=$_POST['name'];
$text=$_POST['mes'];
$post=$_POST['post'];

$write=fopen("text.txt","a+") 
or die("unable to open a file");
fwrite($write,"<b><u>$name</u></b><br>$text<br><br>");
fclose($write);

$read=fopen("text.txt","r+t") or die("unable to open it");

echo fread($read,filesize("text.txt"));

fclose($read);

}

else{

$read=fopen("text.txt","r+t") or die("unable to open it");

echo fread($read,filesize("text.txt"));

fclose($read);
  
}



  ?>