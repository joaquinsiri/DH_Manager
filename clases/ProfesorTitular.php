<?php 

namespace DH_Manager;

class ProfesorTitular extends Profesor {
    
    private $especialidad;

    public function __construct(string $nombre, string $apellido, int $codigo_profesor,  string $especialidad)
    {   
        parent::__construct($nombre, $apellido, $codigo_profesor);
        $this->cantidad_horas = $especialidad;
        
    }


    public function setEspecialidad(string $especialidad)
    {
        $this->especialidad = $especialidad;
    }

    public function getEspecialidad()
    {
      return  $this->especialidad;
    }

    public function getNombre()
    {
        return $this->nombre;
    }
    
}

?>