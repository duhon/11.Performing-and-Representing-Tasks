<?php
namespace Command;

class Context
{
    private $params = [];
    private $error = "";

    function __construct()
    {
        $this->params = $_REQUEST;
    }

    function addParam($key, $val)
    {
        $this->params[$key] = $val;
    }

    function get($key)
    {
        if (isset($this->params[$key])) {
            return $this->params[$key];
        }
        return null;
    }

    function getError()
    {
        return $this->error;
    }

    function setError($error)
    {
        $this->error = $error;
    }
}