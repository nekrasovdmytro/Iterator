<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 11.01.16
 * Time: 14:28
 */

class ObjectIterator implements Countable, Iterator
{
    protected $objects = [];

    public function add($object)
    {
        $this->objects[] = $object;
    }

    public function rewind()
    {
        reset($this->objects);
    }
    public function key()
    {
        return key($this->objects);
    }

    public function next()
    {
        return next($this->objects);
    }

    public function current()
    {
        return current($this->objects);
    }

    public function valid()
    {
        $key = $this->key();

        return $key !== null && $key !== false;
    }

    public function count()
    {
        return count($this->objects);
    }
}