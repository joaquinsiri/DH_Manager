<?php 

namespace DH_Manager;

abstract class Profesor {

    private $nombre;
    private $apellido;
    private $antiguedad = 0;
    private $codigo_profesor;


    public function __construct(string $nombre, string $apellido, int $codigo_profesor)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->codigo_profesor = $codigo_profesor;
    }
    public function setNombre(string $nombre)
    {
        $this->nombre = $nombre;
    }
    
    public function getNombre()
    {
      return  $this->nombre;
    }

    public function setApellido(string $apellido)
    {
        $this->apellido = $apellido;
    }
    
    public function getApellido()
    {
      return  $this->apellido;
    }
    

    public function setAntiguedad(int $antiguedad)
    {
        $this->antiguedad = $antiguedad;
    }

    public function getAntiguedad()
    {
      return  $this->antiguedad;
    }


    public function setCodigoProfesor(int $codigo_profesor)
    {
        $this->codigo_profesor = $codigo_profesor;
    }

    public function getCodigoProfesor()
    {
      return  $this->codigo_profesor;
    }



}

?>