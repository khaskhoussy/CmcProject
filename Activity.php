<?php

 class Activity 
{
   private $activityName ;
   private $totalNumberOfActivity;
   private $numberOfActivityPerPerson;

   public function  __construct($activityName,$totalNumberOfActivity,$numberOfActivityPerPerson){
       $this->activityName = $activityName;
       $this->totalNumberOfActivity = $totalNumberOfActivity;
       $this->numberOfActivityPerPerson = $numberOfActivityPerPerson;
   }

   public function setActivityName ($activityName){
       $this->activityName = $activityName ;
   }

   public function setTotalActivityNumber ($totalNumberOfActivity){
    $this->totalNumberOfActivity = $totalNumberOfActivity ;
}
    public function setNumberOfActivityPerPerson ($numberOfActivityPerPerson){
    $this->numberOfActivityPerPerson = $numberOfActivityPerPerson ;
}
    public function getActivityName (){
    return $this->activityName ;
}

    public function getTotalActivityNumber (){
    return $this->totalNumberOfActivity;
}
    public function getNumberOfActivityPerPerson (){
     return $this->numberOfActivityPerPerson;
}

    
}
