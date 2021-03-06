<?php

namespace ZendTest\AMF\TestAsset;

class IntrospectorTest
{
    /**
     * Constructor
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Overloading: get properties
     *
     * @param  string $name
     * @return mixed
     */
    public function __get($name)
    {
        $prop = '_' . $name;
        if (!isset($this->$prop)) {
            return null;
        }
        return $this->$prop;
    }

    /**
     * Foobar
     *
     * @param  string|int $arg
     * @return string|stdClass
     */
    public function foobar($arg)
    {
    }

    /**
     * Barbaz
     *
     * @param  ZendTest\AMF\TestAsset\IntrospectorTestCustomType $arg
     * @return boolean
     */
    public function barbaz($arg)
    {
    }

    /**
     * Bazbat
     *
     * @return ZendTest\AMF\TestAsset\IntrospectorTestExplicitType
     */
    public function bazbat()
    {
    }
}

