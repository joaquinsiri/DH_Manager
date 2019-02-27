<?php 

namespace DH_Manager;

class Alumno {
    private $nombre;
    private $apellido;
    private $codigo_alumno;

    public function __construct(string $nombre, string $apellido, int $codigo_alumno)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->codigo_alumno = $codigo_alumno;

    }

    
    public function setNombre(string $nombre)
    {
            $this->nombre = $nombre;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    
    public function setApellido(string $apellido)
    {
        $this->apellido = $apellido;
    }

    public function getApellido()
    {
        return $this->apellido;
    }

    
    public function setCodigoAlumno(int $codigo_alumno)
    {
        $this->codigo_alumno = $codigo_alumno;
    }

    public function getCodigoAlumno()
    {
        return $this->codigo_alumno;
    }


}


?>