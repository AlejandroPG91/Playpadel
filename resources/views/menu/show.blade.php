@extends('layouts.app')

@section('title','Eliminar Jugadores')

@section('content')

  <div class="row">
      <div class="col-md-4 col-md-offset-4">

         <div class="panel panel-default">
           <div class="panel-heading">
              Eliminar Jugador
            </div>
           <div class="panel-body">

              {!!Form::open(['route'=>['menu.destroy',$jugadores->id],'method'=>'DELETE'])!!}

               <div class="form-group">
                 <label for="exampleInputPassword1">DESEA ELIMINAR ESTE REGISTRO:</label>
               </div>
               <div class="form-group">
                 {!!form::label('Nombre:')!!}
                 {!!$jugadores->name !!}
               </div>
               <div class="form-group">
                 {!!form::label('Correo:')!!}
                 {!!$jugadores->email !!}
               </div>
               <div class="form-group">
                 {!!form::label('Sexo:')!!}
                 {!!$jugadores->genero !!}
               </div>

                   {!!form::submit('Eliminar',['name'=>'grabar','id'=>'grabar','content'=>'<span>Eliminar</span>','class'=>'btn btn-danger btn-sm m-t-10'])!!}
                  <button type="button" id= 'cancelar' name='cancelar' class="btn btn-default btn-sm m-t-10" >Cancelar</button>
            {!!Form::close()!!}

           </div>
         </div>

       </div>
     </div>

  <script>
    $(document).ready(function() {
      $("#cancelar").click(function(event)
      {
        document.location.href = "{{ route('menu.index')}}";
      });
    });
  </script>


  @endsection
