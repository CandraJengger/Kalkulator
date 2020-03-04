<?php
$a = $_POST['a'];
$b = $_POST['b'];

if($_POST["tidakSama"] == "1") {
    $c = ($a != $b)? "true":"false";
    echo $c;
} 

?>