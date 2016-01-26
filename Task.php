<?php
/**
 * Created by PhpStorm.
 * User: Vitaly
 * Date: 1/26/2016
 * Time: 21:42
 */

class Task {
    public $title;
    public $description;
    public $completed = false;

    public function __construct($title, $description)
    {
        $this->title = $title;
        $this->description = $description;
    }

    public function completed()
    {
        $this->completed = true;
    }
}

$task = new Task('Learn OOP', 'Learning OOP with Laracasts :)');

var_dump($task->description);
var_dump($task->title);
$task->completed();
var_dump($task->completed);