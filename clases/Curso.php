<?php 

namespace DH_Manager;

class Curso {

    private $nombre;
    private $codigo_curso;
    private $profesor_titular;
    private $profesor_adjunto;
    private $cupo_maximo_alumnos = 0;
    private $alumnos = [];


    public function __construct(string $nombre,int $codigo_curso,int $cupo_maximo_alumnos)
    {
        $this->nombre = $nombre;
        $this->codigo_curso = $codigo_curso;
        $this->cupo_maximo_alumnos = $cupo_maximo_alumnos;
    }

    public function setNombre(string $nombre)
    {
        $this->nombre = $nombre;
    }

    public function getNombre()
    {
      return  $this->nombre;
    }

    public function setCodigoCurso(int $codigo_curso)
    {
        $this->codigo_curso = $codigo_curso;
    }

    public function getCodigoCurso()
    {
      return  $this->codigo_curso;
    }

    public function agregarUnAlumno(Alumno $un_alumno)
    {   
        if (count($this->alumnos) < $this->cupo_maximo_alumnos) {
            $this->alumnos[] = $un_alumno;
            return true;
        } else {
            echo 'No se pudo agregar a ' . $un_alumno->getNombre() . ' ' . $un_alumno->getApellido() . ' porque el cupo maximo del curso ' . $this->getNombre() . ' es de ' . $this->cupo_maximo_alumnos . ' alumnos.</br>';
            return false;
        }
    }

    public function getAlumnos()
    {
        return $this->alumnos;
    }

    public function setProfesorTitular(ProfesorTitular $profesor_titular)
    {
        $this->profesor_titular = $profesor_titular;
    }

    public function setProfesorAdjunto(ProfesorAdjunto $profesor_adjunto)
    {
        $this->profesor_adjunto = $profesor_adjunto;
    }

    public function getProfesores()
    {
        $profesores[] = $this->profesor_titular->getNombre(); 
        $profesores[] = $this->profesor_adjunto->getNombre(); 
        return $profesores;
    }
}

?>