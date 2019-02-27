<?php 

namespace DH_Manager;

class ProfesorAdjunto extends Profesor {
    private $cantidad_horas;

    public function __construct(string $nombre, string $apellido, int $codigo_profesor,  int $cantidad_horas)
    {   
        parent::__construct($nombre, $apellido, $codigo_profesor);
        $this->cantidad_horas = $cantidad_horas;
        
    }


    public function setCantidadHoras(int $cantidad_horas)
    {
        $this->especialidad = $cantidad_horas;
    }

    public function getCantidadHoras()
    {
      return  $this->cantidad_horas;
    }

    public function getNombre()
    {
        return $this->nombre;
    }
    
}

?>