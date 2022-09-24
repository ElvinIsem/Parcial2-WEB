@extends('layouts.plantillabase');

@section('css')
<link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="styleshet">
@endsection



@section('contenido')




<a href="clientes/create" class="btn btn-primary">CREAR</a>


<table id="clientes" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
    <thead class="bg-primary text-white">
        <tr>
                <th scope="col">ID</th>
                <th scope="col">CODIGO</th>
                <th scope="col">NOMBRE</th>
                <th scope="col">APELLIDO</th>
                <th scope="col">DIRECCION</th>
                <th scope="col">TELEFONO</th>
                <th scope="col">ACCIONES</th>

        </tr>
</thead>
<tbody>
    @foreach ($clientes as $cliente)
        <tr>
            <td>{{$cliente->id}}</tf>
            <td>{{$cliente->codigo}}</tf>
            <td>{{$cliente->nombre}}</tf>
            <td>{{$cliente->apellido}}</tf>
            <td>{{$cliente->direccion}}</tf>
            <td>{{$cliente->telefono}}</tf>
               <td>
                <form action="{{route ('clientes.destroy',$cliente->id)}}" method="POST">
                <a href="/clientes/{{$cliente->id}}/edit" class="btn btn-info">Editar</a>
               

                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Borrar</button>

                
                </form>
                </td>
        </tr>

    @endforeach

</tbody>
</table>

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

<script>
$(document).ready(function () {
    $('#clientes').DataTable();
});
</script>

@endsection

@endsection