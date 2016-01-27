<?php

/**
 * Created by PhpStorm.
 * User: Vitaly
 * Date: 1/27/2016
 * Time: 14:50
 */
class Person
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

}

class Business
{

    protected $staff;

    public function __construct(Staff $staff)
    {
        $this->staff = $staff;
    }

    public function hire(Person $person)
    {
        //add $person to the staff collection
        $this->staff->add($person);

    }

    public function getStaffMembers()
    {
       return $this->staff->members();
    }
}

class Staff
{

    protected $members = [];

    public function __construct($members = [])
    {
        $this->members = $members;
    }

    public function add(Person $person)
    {
        $this->members[] = $person;
    }

    public function members()
    {
        return $this->members;
    }

}

$vitaly = new Person('Vitaly Vyrodov');

$staff = new Staff([$vitaly]);

$myBusiness = new Business($staff);

$myBusiness->hire(new Person('Jane Doe'));

var_dump($myBusiness->getStaffMembers());