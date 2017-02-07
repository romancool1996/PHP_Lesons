<?php
/**
 * Created by PhpStorm.
 * User: Roma
 * Date: 05.02.2017
 * Time: 23:03
 */



define("Exm",3.55,true);

echo exm."<br/>";

if (defined('exm')){
    echo "yes<br/>";
}

define("Exm",4.23,true);

echo exm;