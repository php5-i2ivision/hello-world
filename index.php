<style type="text/css" src="css/style.css"></style>

<?php 
$name = "Walid";
echo "hello $name";
$val1 = 5;
$val2= 10;
add($val1,$val2);
function add($a,$b) {
	return $a+$b;
}
?>