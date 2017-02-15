<?php 
$num=$_GET['cs'];
$c="cked{$num}";
//var_dump($$c);
$$c="checked='checked'";
//var_dump($$c);
//var_dump($cked3);

echo "<br>";
//获取数值
//选择变量赋值


?>

111<input type="radio" <?php echo $cked1;?> name="a"/>
222<input type="radio" <?php echo $cked2;?> name="a"/>
333<input type="radio" <?php echo $cked3;?> name="a"/>
444<input type="radio" <?php echo $cked4;?> name="a"/>
555<input type="radio" <?php echo $cked5;?> name="a"/>
