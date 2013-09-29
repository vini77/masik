<?php
class Observer {
    
    public $state;
    
    public function __construct(){
        $this->state = false;
    }
    
    public function notify($message) {
        if($message == true){
            $this->state = true;
        }
    }
};