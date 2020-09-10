<?php 

namespace App\Models;





// Nombre de la clase identico al del archivo.
class BaseElement implements Printable{
    private $title;
    public $description;
    public $visible = true;
    public $months;


    //Constructor: Inicializar valore so enviarle valores como parametro.
    // FUnciones con dos guines bajos son métodos mágicos: construct, destruct, 
    public function __construct($title, $description){
        $this->setTitle($title); 
        $this->description = $description;
    }

    public function setTitle($title){
        if($title == ''){
            $this->title = "N/A";
        }else{
            $this->title = $title;
        }
        
    }

    public function getTitle(){
        return $this->title;
    }

    //Usamos un método interno de la clase ya no se le pasan parametros
    function getDurationAsString(){
        $years = floor($this->months / 12);
        $months_left = $this->months%12;
        if($years == 0){
            return "$this->months months";
        }else if($months_left != 0){
            return "$years years, $months_left months";
        }else{
            return "$years years";
        }
    }

    public function getDescription(){
        return $this->description;
    }

}   