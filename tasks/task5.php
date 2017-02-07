<?php
/**
 * Created by PhpStorm.
 * User: Roma
 * Date: 07.02.2017
 * Time: 1:39
 */

$a= 10;
$b= "20 приветов";
define("Rt",23.56,true);

echo $a.$b.Rt."<br/>";

echo ($a xor $a)."<br/>";

$a1= 19 xor 5>6;
echo var_dump($a1)."<br/>";
echo ((2<3) xor (5!=5))."<br/>";
echo (true xor true)."<br/>";
echo (true xor false)."<br/>";
echo (false xor false)."<br/>";
echo (false xor true)."<br/>";
