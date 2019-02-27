<?php 

require'vendor/autoload.php';

use DH_Manager\Alumno;
use DH_Manager\Curso;
use DH_Manager\DigitalHouseManager;
use DH_Manager\Profesor;
use DH_Manager\ProfesorAdjunto;
use DH_Manager\ProfesorTitular;


$DH = new DigitalHouseManager;
$DH->altaProfesorTitular('Javi', 'Herrera', 48, 'Front end');
$DH->altaProfesorTitular('Gaby', 'Stallo', 36, 'Back end');
$DH->altaProfesorAdjunto('Kevin', 'Ghio', 55 , 25);
$DH->altaProfesorAdjunto('Ale', 'Llago', 70 , 20);

$DH->altaCurso('Full Stack', 20001, 3);
$DH->altaCurso('Android', 20002, 2);

$DH->asignarProfesores(20001, 48, 55);
$DH->asignarProfesores(20002, 36, 70);

$DH->altaAlumno('Joaquin', 'Siri', 9);
$DH->altaAlumno('Thomas', 'Solda', 10);
$DH->altaAlumno('Jose', 'Herrera', 11);

$DH->inscribirAlumno(9, 20001);
$DH->inscribirAlumno(10, 20001);

$DH->inscribirAlumno(9, 20002);
$DH->inscribirAlumno(11, 20002);
$DH->inscribirAlumno(10, 20002);


// var_dump($DH->getProfesores());
// var_dump($DH->getAlumnos());
var_dump($DH->getCursos());



?>