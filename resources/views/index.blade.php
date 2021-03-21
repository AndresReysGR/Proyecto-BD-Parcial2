    @extends('layout')
      
    @section('content')
    <div class="container">
      
      <a href="/agregar" class="btn btn-primary">CREAR</a>


        <table class="table table-dark table-striped mt-4">
        <thead> 
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Código</th>
            <th scope="col">Descripción</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Precio</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        @forelse ($sujetos as $sujeto)
        <tbody>    
          
          <tr>
              <td>{{$sujeto->id}}</td>
              <td>{!!$sujeto->codigo!!}</td>
              <td>{{$sujeto->descripcion }}</td>
              <td>{{$sujeto->cantidad }}</td>
              <td>{{$sujeto->precio }}</td>
              <td>
                <form method="POST" action="{{ url("/{$sujeto->id}") }}">
                <a href="{{route('sujetos.edit', ['id' =>$sujeto->id]) }}" class="btn btn-info">Editar</a>         
                @csrf 
                @method('DELETE')
                <a class="action-link action-delete">
                <button type="submit" class="btn btn-danger">Delete</button>
                </a>
                </form>          
              </td>        
          </tr>
          @empty
            <p>no hay elementos disponibles </br> <a href="/agregar">Agregar notas</a></p>
        </tbody>
        @endforelse
        </table>

    </div>
    @endsection