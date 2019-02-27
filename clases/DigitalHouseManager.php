<?php 

namespace DH_Manager;

class DigitalHouseManager{

    private $alumnos = [];
    private $profesores = [];
    private $cursos = [];

    public function setAlumnos(Alumno $alumno)
    {
        $this->alumnos[] = $alumno;
    }

    public function getAlumnos()
    {
        return $this->alumnos;
    }

    
    public function setProfesores(Profesor $profesor)
    {
        $this->profesores[] = $profesor;
    }

    public function getProfesores()
    {
        return $this->profesores;
    }

    
    public function setCursos(Curso $curso)
    {
        $this->curso[] = $curso;
    }

    public function getCursos()
    {
        return $this->cursos;
    }

    public function altaCurso(string $nombre,int $codigo_curso,int $cupo_maximo_alumnos)
    {
        $curso = new Curso($nombre, $codigo_curso, $cupo_maximo_alumnos);
        $this->cursos[] = $curso;
    }

    public function altaProfesorTitular(string $nombre,string $apellido,int $codigo_profesor,string $especialidad)
    {
        $profesor = new ProfesorTitular($nombre, $apellido, $codigo_profesor, $especialidad);
        $this->profesores[] = $profesor;
    }

    public function altaProfesorAdjunto(string $nombre,string $apellido,int $codigo_profesor,int $cantidad_horas)
    {
        $profesor = new ProfesorAdjunto($nombre, $apellido, $codigo_profesor, $cantidad_horas);
        $this->profesores[] = $profesor;
    }

    public function altaAlumno(string $nombre,string  $apellido,int $codigo_alumno)
    {
        $alumno = new Alumno($nombre, $apellido, $codigo_alumno);
        $this->alumnos[] = $alumno;
    }

    public function inscribirAlumno(int $codigo_alumno,int $codigo_curso)
    {   
       foreach ($this->cursos as $key => $curso) {
           if ($curso->getCodigoCurso() == $codigo_curso) {
               $key_curso = $key;
               break;
           }
       }
       
       foreach ($this->alumnos as $key => $alumno) {
           if ($alumno->getCodigoAlumno() == $codigo_alumno) {
               $key_alumno = $key;
               break;
           }
       }
      
       $this->cursos[$key_curso]->agregarUnAlumno($this->alumnos[$key_alumno]);
    
    }

    public function asignarProfesores($codigo_curso, $codigo_profesor_titular, $codigo_profesor_adjunto)
    {
        foreach ($this->cursos as $key => $curso) {
            if ($curso->getCodigoCurso() == $codigo_curso) {
                $key_curso = $key;
                break;
            }
        }

        foreach ($this->profesores as $key => $profesor) {
            if ($profesor->getCodigoProfesor() == $codigo_profesor_titular) {
                $key_profesor_titular = $key;
                break;
            }
        }

        foreach ($this->profesores as $key => $profesor) {
            if ($profesor->getCodigoProfesor() == $codigo_profesor_adjunto) {
                $key_profesor_adjunto = $key;
                break;
            }
        }

        $this->cursos[$key_curso]->setProfesorTitular($this->profesores[$key_profesor_titular]);
        $this->cursos[$key_curso]->setProfesorAdjunto($this->profesores[$key_profesor_adjunto]);

    }

    
}

?>