<?php

namespace DefaultDict;

class DefaultDict
{

    private $defaultValue;

    private $array = [];

    public function __construct($defaultValue)
    {
        $this->defaultValue = $defaultValue;
    }

    public function has($key)
    {
        return array_key_exists($key, $this->array);
    }

    public function get($key)
    {
        if (!$this->has($key)) {
            $this->array[$key] = $this->defaultValue;
        }
        return $this->array[$key];
    }

    public function increment($key)
    {
        return $this->set($key, $this->get($key) + 1);
    }

    public function pushToKey($key, $value)
    {
        $this->array[$key] [] = $value;
    }

    public function shiftFirstFromKey($key)
    {
        return array_shift($this->array[$key]);
    }

    public function decrement($key)
    {
        return $this->set($key, $this->get($key) - 1);
    }

    public function set($key, $value)
    {
        $this->array[$key] = $value;
        return $value;
    }

    public function countOfKey($key)
    {
        return count($this->array[$key]);
    }


}
