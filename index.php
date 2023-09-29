<?php
    include_once('assets/php/registro.php');
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Universidad</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <div class="header">
        <h1>Universidad</h1>
    </div>
    <h2>Agregar Estudiante</h2>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
        <label for="idCedula">Cédula</label><br>
        <input type="number" class="cedula" name="txtCedula" id="idCedula" placeholder="Escriba la cédula" min="1000000" max="40000000" required><br>
        <label for="idNombre">Nombre</label><br>
        <input type="text" name="txtNombre" id="idNombre" placeholder="Escriba el nombre" pattern="^[a-zA-ZÀ-ÿ\u00f1\u00d1]+(\s*[a-zA-ZÀ-ÿ\u00f1\u00d1]*)*[a-zA-ZÀ-ÿ\u00f1\u00d1]+$" required><br>
        <label for="idMatematicas">Nota de Matemáticas</label><br>
        <input type="number" name="txtMatematicas" id="idMatematicas" placeholder="Escriba la nota de matemáticas" min="0" max="20" required><br>
        <label for="idFisica">Nota de Física</label><br>
        <input type="number" name="txtFisica" id="idFisica" placeholder="Escriba la nota de física" min="0" max="20" required><br>
        <label for="idProgramacion">Nota de Programación</label><br>
        <input type="number" name="txtProgramacion" id="idProgramacion" placeholder="Escriba la nota de programación" min="0" max="20" required><br><br>
        <input type="submit" value="Registro" name="btn">
    </form>
    <hr>
    <h2>Solicitud de datos</h2>
    <div class="botones-datos">
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
            <input type="submit" value="Nota promedio de cada materia" name="P1"><br>
            <label for="">Matemáticas</label><br>
            <input type="number" readonly value="<?php echo $p1[0] ?>">
            <label for="">Física</label><br>
            <input type="number" readonly value="<?php echo $p1[1] ?>">
            <label for="">Programación</label><br>
            <input type="number" readonly value="<?php echo $p1[2] ?>">
        </form>
    </div>
    <div class="botones-datos">
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
            <input type="submit" value="Número de alumnos aprobados en cada materia" name="P2"><br>
            <label for="">Matemáticas</label><br>
            <input type="number" readonly value="<?php echo $p2[0]; ?>">
            <label for="">Física</label><br>
            <input type="number" readonly value="<?php echo $p2[1]; ?>">
            <label for="">Programación</label><br>
            <input type="number" readonly value="<?php echo $p2[2]; ?>">
        </form>
    </div>
    <div class="botones-datos">
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
            <input type="submit" value="Número de alumnos aplazados en cada materia" name="P3"><br>
            <label for="">Matemáticas</label><br>
            <input type="number" readonly value="<?php echo $p3[0]; ?>">
            <label for="">Física</label><br>
            <input type="number" readonly value="<?php echo $p3[1]; ?>">
            <label for="">Programación</label><br>
            <input type="number" readonly value="<?php echo $p3[2]; ?>">
        </form>
    </div>
    <div class="botones-datos">
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
            <input type="submit" value="Número de alumnos que aprobaron todas las materias" name="P4"><br>
            <input type="number" readonly value="<?php echo $p4; ?>">
        </form>
    </div>
    <div class="botones-datos">
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
            <input type="submit" value="Número de alumnos que aprobaron una sola materia" name="P5"><br>
            <input type="number" readonly value="<?php echo $p5; ?>">
        </form>
    </div>
    <div class="botones-datos">
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
            <input type="submit" value="Número de alumnos que aprobaron dos materias" name="P6"><br>
            <input type="number" readonly value="<?php echo $p6; ?>">
        </form>
    </div>
    <div class="botones-datos">
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
            <input type="submit" value="Nota máxima en cada materia" name="P7"><br>
            <label for="">Matemáticas</label><br>
            <input type="number" readonly value="<?php echo $p7[0]; ?>">
            <label for="">Física</label><br>
            <input type="number" readonly value="<?php echo $p7[1]; ?>">
            <label for="">Programación</label><br>
            <input type="number" readonly value="<?php echo $p7[2]; ?>">
        </form>
    </div><br><br>
    <div class="footer">
        <h2>&copy; Todos los derechos reservados. 2023.</h2>
    </div>
</body>
</html>