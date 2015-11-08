<?php 

$arr=['name'=>'Serg','surname'=>'Antonec','city'=>'Odess'];
$resutl=serialize($arr);
setcookie('arr',$resutl);
?>