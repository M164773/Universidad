<?php
    session_start();

    if(!isset($_SESSION['estudiantes'])){
        $_SESSION['estudiantes'] = [];
    }

    if(isset($_POST['btn']) && $_POST['btn'] == 'Registro'){

        $cedula = $_POST['txtCedula'];
        $nombre = $_POST['txtNombre'];
        $nota_matematicas = $_POST['txtMatematicas'];
        $nota_fisica = $_POST['txtFisica'];
        $nota_programacion = $_POST['txtProgramacion'];

        $estudiante = [$cedula, $nombre, $nota_matematicas, $nota_fisica, $nota_programacion];
        $_SESSION['estudiantes'][] = $estudiante;

	header("Location: ".$SERVER["REQUEST_URI]);
	exit();
    }

    if(isset($_POST['P1']) && $_POST['P1'] == 'Nota promedio de cada materia'){
        $p1 = [0, 0, 0];
        $m = 0;
        foreach($_SESSION['estudiantes'] as $estudiante){
            $p1[0]+=$estudiante[2];
            $p1[1]+=$estudiante[3];
            $p1[2]+=$estudiante[4];
            $m++;
        }
        if($m!=0){
            $p1[0]=$p1[0]/$m;
            $p1[1]=$p1[1]/$m;
            $p1[2]=$p1[2]/$m;
        }
    }

    if(isset($_POST['P2']) && $_POST['P2'] == 'Número de alumnos aprobados en cada materia'){
        $p2 = [0, 0, 0];
        foreach($_SESSION['estudiantes'] as $estudiante){
            if($estudiante[2] >= 9.5){
                $p2[0]++;
            }
            if($estudiante[3] >= 9.5){
                $p2[1]++;
            }
            if($estudiante[4] >= 9.5){
                $p2[2]++;
            }
        }
    }

    if(isset($_POST['P3']) && $_POST['P3'] == 'Número de alumnos aplazados en cada materia'){
        $p3 = [0, 0, 0];
        foreach($_SESSION['estudiantes'] as $estudiante){
            if($estudiante[2] < 9.5){
                $p3[0]++;
            }
            if($estudiante[3] < 9.5){
                $p3[1]++;
            }
            if($estudiante[4] < 9.5){
                $p3[2]++;
            }
        }
    }

    if(isset($_POST['P4']) && $_POST['P4'] == 'Número de alumnos que aprobaron todas las materias'){
        $p4 = 0;
        foreach($_SESSION['estudiantes'] as $estudiante){
            if($estudiante[2] >= 9.5 && $estudiante[3] >= 9.5 && $estudiante[4] >= 9.5){
                $p4++;
            }
        }
    }

    if(isset($_POST['P5']) && $_POST['P5'] == 'Número de alumnos que aprobaron una sola materia'){
        $p5 = 0;
        foreach($_SESSION['estudiantes'] as $estudiante){
            if(($estudiante[2] >= 9.5 && ($estudiante[3] < 9.5 && $estudiante[4] < 9.5)) || ($estudiante[3] >= 9.5 && ($estudiante[2] < 9.5 && $estudiante[4] < 9.5)) || ($estudiante[4] >= 9.5 && ($estudiante[2] < 9.5 && $estudiante[3] < 9.5))){
                $p5++;
            }
        }
    }

    if(isset($_POST['P6']) && $_POST['P6'] == 'Número de alumnos que aprobaron dos materias'){
        $p6 = 0;
        foreach($_SESSION['estudiantes'] as $estudiante){
            if(($estudiante[2] >= 9.5 && $estudiante[3] >= 9.5) && $estudiante[4] < 9.5 || ($estudiante[2] >= 9.5 && $estudiante[4] >= 9.5) && $estudiante[3] < 9.5 || ($estudiante[3] >= 9.5 && $estudiante[4] >= 9.5) && $estudiante[2] < 9.5){
                $p6++;
            }
        }
    }

    if(isset($_POST['P7']) && $_POST['P7'] == 'Nota máxima en cada materia'){
        $p7 = [0, 0, 0];
        foreach($_SESSION['estudiantes'] as $estudiante){
            if($p7 == [0, 0, 0]){
                $p7 = [$estudiante[2], $estudiante[3], $estudiante[4]];
            }
            if($estudiante[2] > $p7[0]){
                $p7[0] = $estudiante[2];
            }
            if($estudiante[3] > $p7[1]){
                $p7[1] = $estudiante[3];
            }
            if($estudiante[4] > $p7[2]){
                $p7[2] = $estudiante[4];
            }
        }
    }
?>