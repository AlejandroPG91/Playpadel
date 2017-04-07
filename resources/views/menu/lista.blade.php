@extends('layouts.app')

@section('title','Lista Jugadores')

@section('content')

  <div class="row">
    <div  class="col-md-8 col-md-offset-2">

       <div class="panel panel-default">
         <div class="panel-heading">
           <table id="list">
           <th class="page-header" colspan="6">Lista de jugadores
             <button type="button" id='new'  name='new' class="btn btn-success navbar-btn" style="float: right;">Nuevo</button>
           </th>
           </table>
         </div>
         <div class="panel-body">
          <table id="list">
          @foreach($jugadores as $jugador)


               <tr>
                 {!!Form::open(['route'=>['menu.destroy',$jugador->id],'method'=>'DELETE'])!!}
                {{-- <form class="form-horizontal" role="form" method="POST" action="{{route('menu.destroy',$jugador->id)}}">
                  {{csrf_field()}}
                 {{ method_field('DELETE') }} --}}
                  <td id="jugador">{{$jugador->name}}</td>
                  <td id="jugador">{{$jugador->email}}</td>
                  <td id="jugador">{{$jugador->genero}}</td>
                  <td id="jugador">
                    <a href="{{route('menu.edit',$jugador->id)}}"><button type='button' class="btn btn-warning navbar-btn"> Editar</button></a>
                  </td>
                  <td id="jugador">
                      <a href="{{route('menu.show',$jugador->id)}}"><button type='button' class="btn btn-danger navbar-btn"> Eliminar</button></a>
                      {{-- <button type="submit" class="btn btn-danger navbar-btn">Eliminar</button> --}}
                      {{-- {!!Form::submit('Eliminar',['name'=>'borrar','id'=>'borrar','content'=>'<span>Remove</span>','class'=>'btn btn-danger navbar-btn'])!!} --}}
                  </td>
                  {!!Form::close()!!}
                {{-- </form> --}}
               </tr>

          @endforeach
          </table>
          {{-- <div class="text-center">
              {!!$jugadores->links()!!}
          </div> --}}

        </div>
      </div>

    </div>
   </div>

  <script>
   $(document).ready(function() {
      $("#new").click(function(event)
      {
        document.location.href = "{{ route('menu.create')}}";
      });
    });
  </script>

@endsection
