<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 11.01.16
 * Time: 14:44
 */

include 'ObjectIterator.php';
include 'Object.php';

$oi = new ObjectIterator();

$oi->add(new Object('First'));
$oi->add(new Object('Second'));
$oi->add(new Object('Third'));
$oi->add(new Object('Fourth'));

foreach ($oi as $k => $v) {
    echo $k, ' - ', $v->get(), "\n";
}

