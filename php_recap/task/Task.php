<?php

class Task{
    protected $description;
    protected $complete =false;
    public function __construct($description)
    {
        $this->description= $description;
    }
    public function complete()
    {
      $this->complete=true;
    }
    public function isComplete()
    {
        return $this->complete;
    }
    public function description()
    {
        return $this->description;
    }

}
$tasks =[
   new Task( 'go to teh store'),
   new Task( 'go to teh store'),
   new Task( 'go to teh store')
];
$tasks[2]->complete();