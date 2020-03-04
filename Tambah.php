<?php
$a = $_POST['a'];
$b = $_POST['b'];

if($_POST["tambah"] == "1") {
    $c = $a + $b;
    echo $c;
} 

?>