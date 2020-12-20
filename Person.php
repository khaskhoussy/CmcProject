<?php
 require_once ('Activity.php');

class Person 
{
    private $name;

    private  $myActivitys = [];

    public Function __construct( $name)
    {
        $this->name = $name;
    }

    public Function personScore(){
        $pourcentage1 = ($this->myActivitys[0]->getNumberOfActivityPerPerson()/($this->myActivitys[0]->getTotalActivityNumber()/100)) *0.2;
        $pourcentage2 = ($this->myActivitys[1]->getNumberOfActivityPerPerson()/($this->myActivitys[0]->getTotalActivityNumber()/100)) *0.3;
        $pourcentage3 = ($this->myActivitys[2]->getNumberOfActivityPerPerson()/($this->myActivitys[0]->getTotalActivityNumber()/100)) *0.2;
        $pourcentage4 = ($this->myActivitys[3]->getNumberOfActivityPerPerson()/($this->myActivitys[0]->getTotalActivityNumber()/100)) *0.3;
        return $pourcentage4+$pourcentage3+$pourcentage2+$pourcentage1;
    }







    public function setActivity(?Activity $Activity){
        array_push($this->myActivitys,$Activity);
    } 
    public function getName()
    {
        return $this->name;
    }
    public function getActivitys(){
        return $this->myActivitys;
    }

}
