<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Sexo</th>
            <th>Nacionalidad</th>
            <th>CURP</th>
            <th>RFC</th>
            <th>Estado Civil</th>
            <th>Estado de nacimiento</th>
            <th>Fecha de nacimiento</th>
            <th>Edad</th>
            <th>Escolaridad</th>
        </tr>
    </thead>

    <tbody>
        @foreach($DatosDesaparecidos as $DatDes)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$DatDes->nombre}}</td>
            <td>{{$DatDes->apellidoPat}}</td>
            <td>{{$DatDes->sexo}}</td>
            <td>{{$DatDes->nacionalidad}}</td>
            <td>{{$DatDes->curp}}</td>
            <td>{{$DatDes->rfc}}</td>
            <td>{{$DatDes->edoCivil}}</td>
            <td>{{$DatDes->edoNacimiento}}</td>
            <td>{{$DatDes->fechaNacimiento}}</td>
            <td>{{$DatDes->edad}}</td>
            <td>{{$DatDes->escolaridad}}</td>
            <td>Editar|
                <form method="post" action="{{ url('/datosdesaparecidos/'.$DatDes->id) }}">
                {{csrf_field() }}
                {{method_field('DELETE') }}
                <button type="submit" onclick="return confirm ('¿Desea borrar este registro?');">Borrar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>