<?php

use Persona as GlobalPersona;

    class Persona{ #abstracto
        private $nombre, $tel;
        
        public function __construct($nombre, $tel){
          $this->nombre = $nombre;
          $this->tel = $tel;
        }
        
        #debe ser abstracto
        public function get_datos(){
            return " nombre: " .$this-> nombre." Télefono ".$this->tel;
        }    
    }

    class Alumno extends Persona{
        private $grado, $turno;

        public function __construct($nombre, $tel, $grado, $turno){
            parent::__construct($nombre, $tel);
            $this->grado = $grado;
            $this->turno = $turno;
        }

        public function get_datos(){
            return parent::get_datos(). " Grado: ".$this->grado. " Turno: " .$this->turno;
        }
    }
    
    $alumno2 = new Persona("Jasmin", "00000", "6", "Mañana");
    $alumnos[0] = new Alumno("Moises", "096234768", "6", "Mañana");
    $alumnos [1] = new Alumno("Tania", "0984649652", "6", "Mañana");
    $alumnos [2] = new Alumno("Juan", "0971569264", "6", "Mañana");

    for($x = 0 ; $x < count($alumnos); $x++){
        echo "<br> Datos del alumno" .$alumnos[$x]->get_datos();
    }
    ?>
        
    