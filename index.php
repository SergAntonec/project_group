<?php
if(isset($_POST['name'])&&!empty($_POST['name']))
{
$name=$_POST['name'];
setcookie('name',$name,time()+3600);
}
elseif (isset($_COOKIE['name']))
{
	$name=$_COOKIE['name'];
}
else 
{
	$name='Гость';
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>

<h1>Page index.html</h1>
<br/>
<p> <?php echo 'привет, '.$name ?></p>
<a href="page.php"> Page page.html</a>
<br>
<form  method="post">
<input type="text" name="name"/>
<input type="submit" value="Submit"/>
</form>
</body>
</html>