<?php
/**
 * Created by PhpStorm.
 * User: Vitaly
 * Date: 1/27/2016
 * Time: 20:20
 */

namespace Acme\Users;


class Person
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

}