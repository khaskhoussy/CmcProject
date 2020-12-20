<?php



class PersonScored
{
    public $name;
    public $score;


    public function  __construct($name,$score){
        $this->name = $name;
        $this->score = $score;
    }

    public function getScore(){
        return $this->score;
    }



}