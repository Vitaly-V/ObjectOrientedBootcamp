<?php

/**
 * Created by PhpStorm.
 * User: Vitaly
 * Date: 1/27/2016
 * Time: 14:50
 */


use Acme\Users\Person;
use Acme\Business;
use Acme\Staff;

$vitaly = new Person('Vitaly Vyrodov');

$staff = new Staff([$vitaly]);

$myBusiness = new Business($staff);

$myBusiness->hire(new Person('Jane Doe'));

var_dump($myBusiness->getStaffMembers());