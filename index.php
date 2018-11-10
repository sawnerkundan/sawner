<?php 
class calc {
	function add() {
		
	}
}
if(isset($_POST['add'])){
	$num1=$_POST['val1'];
	$num2=$_POST['val2'];
	$sss=$num1+$num2;
	echo "addition is".$sss;
}
if(isset($_POST['add2'])){
	$num1=$_POST['val1'];
	$num2=$_POST['val2'];
	$sss=$num1-$num2;
	echo "addition2 is".$sss;
}
?>
<form method="post">
	Number 1 <input type="int" name="val1"><br/><br/>
	Number 2 <input type="int" name="val2"><br/><br/>
	<input type="submit" name="add" value="Addition">
	<input type="submit" name="add2" value="Addition2">
</form>
<?php


 ?>