<?php
// Verificamos la conexión con el servidor y la base de datos
$mysqli = new mysqli('localhost', 'root', null, 'no_localizados', 33069);
?>

<form action="{{url('/datosdesaparecidos')}}" method="post">
    <!--enctype="multipart/form-data" para ingresar una imagen-->
    {{csrf_field() }}
    <label for="nombre">{{'Nombre'}}</label>
    <input type="text" name="nombre" id="nombre" value=""><br>

    <label for="apellidoPat">{{'Apellido Paterno'}}</label>
    <input type="text" name="apellidoPat" id="apellidoPat" value=""><br>

    <label for="apellidoMat">{{'Apellido Materno'}}</label>
    <input type="text" name="apellidoMat" id="apellidoMat" value=""><br>

    <label for="sexo">{{'Sexo'}}</label>
    <select name="sexo" id="sexo">
        <?php
        // Realizamos la consulta para extraer los datos
        $query = $mysqli->query("SELECT * FROM catsexo");
        while ($valores = mysqli_fetch_array($query)) {
            // En esta sección estamos llenando el select con datos extraidos de una base de datos.
            echo '<option value="' . $valores[0] . '">' . $valores[1] . '</option>';
        }
        ?>
    </select><br>

    <label for="nacionalidad">{{'Nacionalidad'}}</label>
    <select name="nacionalidad" id="nacionalidad">
        <option value="0">Mexicana</option>
        <option value="1">EstadoUnidense</option>
    </select><br>

    <label for="curp">{{'CURP'}}</label>
    <input type="text" name="curp" id="curp" value=""><br>

    <label for="rfc">{{'RFC'}}</label>
    <input type="text" name="rfc" id="rfc" value=""><br>

    <label for="edoCivil">{{'Estado Civil'}}</label>
    <select name="edoCivil" id="edoCivil">
        <option value="0">Casado(a)</option>
        <option value="1">soltero(a)</option>
    </select><br>

    <label for="edoNacimiento">{{'Estado de nacimiento'}}</label>
    <select name="edoNacimiento" id="edoNacimiento">
        <option value="0">Guerrero</option>
        <option value="1">Oaxaca</option>
    </select><br>

    <label for="fechaNacimiento">{{'Fecha de nacimiento'}}</label>
    <input type="date" name="fechaNacimiento" id="fechaNacimiento" value=""><br>

    <label for="edad">{{'Edad'}}</label>
    <input type="text" name="edad" id="edad" value=""><br>

    <label for="escolaridad">{{'Escolaridad'}}</label>
    <select name="escolaridad" id="escolaridad">
        <option value="0">Primaria</option>
        <option value="1">Secundaria</option>
    </select><br>
    <input type="submit" value="Agregar">
</form>
