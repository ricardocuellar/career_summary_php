<?php

namespace App\Models;



class Job extends BaseElement{

    //Si dejamos vacio el construct este se sobreescribe
    public function __construct($title, $description){
        $newTitle = 'Job: ' . $title;
        //llamar constructor del padre
        parent::__construct($newTitle, $description);
        
    }

    public function getDurationAsString(){
        $years = floor($this->months / 12);
        $months_left = $this->months%12;
        if($years == 0){
            return "Job duration: $months months";
        }else if($months_left != 0){
            return "Job duration: $years years, $months_left months";
        }else{
            return "Job duration: $years years";
        }
    }

    public function getDescription(){
        return $this->description;
    }
}