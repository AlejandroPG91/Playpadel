@extends('layouts.app')

@section('title','Editar Jugador')

@section('content')


   <div class="row">
     <div class="col-md-4 col-md-offset-4">

        <div class="panel panel-default">
          <div class="panel-heading">
             Editar Jugador
           </div>
          <div class="panel-body">


            {!!Form::model($jugadores,['route'=>['menu.update',$jugadores->id],'method'=>'PUT'])!!}

	           <div class="form-group">
                  {!!form::label('Nombre')!!}
                  {!!form::text('name',null,['id'=>'name','class'=>'form-control'])!!}
                  {!!form::label('Correo')!!}
                  {!!form::text('email',null,['id'=>'email','class'=>'form-control'])!!}
                  {!!form::label('Genero')!!}
                  {!!Form::select('genero',['Hombre' => 'Hombre','Mujer' => 'Mujer',], null, ['class'=>'form-control'])!!}
             </div>
                 {!!form::submit('Editar',['name'=>'edit','id'=>'edit','content'=>'<span>Edit</span>','class'=>'btn btn-warning btn-sm m-t-10'])!!}
              <button type="button" id='cancel'  name='cancel' class="btn btn-danger btn-sm m-t-10" >Cancelar</button>
          {!!Form::close()!!}




           </div>
        </div>


     </div>
   </div>

<script>
  $(document).ready(function() {
    $("#cancel").click(function(event)
    {
      document.location.href = "{{ route('menu.index')}}";
    });
  });
</script>


@endsection
