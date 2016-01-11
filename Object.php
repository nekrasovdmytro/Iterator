<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 11.01.16
 * Time: 14:45
 */

class Object
{
    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function get()
    {
        return $this->data;
    }
}