@extends('layouts.app')

@section('title','Partidos')

@section('content')

<div class="row">

  <div class="col-md-8 col-md-offset-2">

      <div class="panel panel-default dia">
         <div class="panel-heading" id="cabecera">
           <button type="button" class="btn btn-success navbar-btn ver" style="float: right; margin-top: 2%;" name="ver">Ver</button>
           <h2>Partidos: Lunes</h2>
         </div>
          <div class="panel-body">
           <div class="row">

            <div class="col-xs-6 col-md-3 hora">
               <h3>10:30 <span class="contador">[0/4]</span></h3>
                 <ul class="partido">
                   <li>
                      <span><b class="jugador1">Vacio</b></span>
                   </li>
                   <li>
                      <span><b class="jugador2">Vacio</b></span>
                   </li>
                   <li>
                      <span><b class="jugador3">Vacio</b></span>
                   </li>
                   <li>
                      <span><b class="jugador4">Vacio</b></span>
                   </li>
                  <a href="#ventana1"  data-toggle="modal"><button type="button" class="btn btn-success navbar-btn apuntate">¡Apuntate!</button></a>
                  <!-- modal -->
                  <div class="modal fade ventana" id="ventana1">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button tyle="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                                  <h2 class="modal-tittle" style="text-align:center; margin-top: 2%;">¡Apuntate!</h2>
                              </div>
                              <div class="modal-body" style="height: 100px;">
                                @if (Auth::guest())
                                    <div class="form-group" style="margin-left:15%; margin-top:2%">
                                      <label for="name" class="col-md-2 control-label">Nombre</label>
                                      <div class="col-md-6">
                                        <input  type="text" class="form-control name" name="name"  required autofocus>
                                      </div>
                                    </div>
                                @else
                                    <div class="form-group" style="text-align:center;">
                                        <p>Nombre <h2><b class="userName"  >{{ Auth::user()->name}}</b></h2></p>
                                    </div>

                                @endif
                              </div>

                              <div class="modal-footer">
                                <button type="submit"  id="apuntarse" name='apuntarse' class="btn btn-success navbar-btn apuntarse" data-dismiss="modal">Apuntarse</button>
                              </div>
                      </div>
                    </div>
                  </div>
                </ul>
            </diV>

            <div class="col-xs-6 col-md-3 hora">
                <h3>12:00 <span class="contador">[0/4]</span></h3>
                  <ul class="partido">
                    <li>
                       <span><b class="jugador1">Vacio</b></span>
                    </li>
                    <li>
                       <span><b class="jugador2">Vacio</b></span>
                    </li>
                    <li>
                       <span><b class="jugador3">Vacio</b></span>
                    </li>
                    <li>
                       <span><b class="jugador4">Vacio</b></span>
                    </li>
                   <a href="#ventana2"  data-toggle="modal"><button type="button" class="btn btn-success navbar-btn apuntate">¡Apuntate!</button></a>
                   <!-- modal -->
                   <div class="modal fade ventana" id="ventana2">
                       <div class="modal-dialog">
                           <div class="modal-content">
                               <div class="modal-header">
                                   <button tyle="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                                   <h2 class="modal-tittle" style="text-align:center; margin-top: 2%;">¡Apuntate!</h2>
                               </div>
                               <div class="modal-body" style="height: 100px;">
                                 @if (Auth::guest())
                                     <div class="form-group" style="margin-left:15%; margin-top:2%">
                                       <label for="name" class="col-md-2 control-label">Nombre</label>
                                       <div class="col-md-6">
                                         <input  type="text" class="form-control name" name="name"  required autofocus>
                                       </div>
                                     </div>
                                 @else
                                     <div class="form-group" style="text-align:center;">
                                         <p>Nombre <h2><b class="userName" >{{ Auth::user()->name}}</b></h2></p>
                                     </div>

                                 @endif
                               </div>

                               <div class="modal-footer">
                                 <button type="submit" id="apuntarse" name='apuntarse' class="btn btn-success navbar-btn apuntarse" data-dismiss="modal">Apuntarse</button>
                               </div>
                       </div>
                     </div>
                   </div>
                 </ul>
            </div>

            <div class="col-xs-6 col-md-3 hora">
               <h3>16:30 <span class="contador">[0/4]</span></h3>
                 <ul class="partido">
                   <li>
                      <span><b class="jugador1">Vacio</b></span>
                   </li>
                   <li>
                      <span><b class="jugador2">Vacio</b></span>
                   </li>
                   <li>
                      <span><b class="jugador3">Vacio</b></span>
                   </li>
                   <li>
                      <span><b class="jugador4">Vacio</b></span>
                   </li>
                  <a href="#ventana3"  data-toggle="modal"><button type="button" class="btn btn-success navbar-btn apuntate">¡Apuntate!</button></a>
                  <!-- modal -->
                  <div class="modal fade ventana" id="ventana3" >
                      <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button tyle="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                                  <h2 class="modal-tittle" style="text-align:center; margin-top: 2%;">¡Apuntate!</h2>
                              </div>
                              <div class="modal-body" style="height: 100px;">
                                @if (Auth::guest())
                                    <div class="form-group" style="margin-left:15%; margin-top:2%">
                                      <label for="name" class="col-md-2 control-label">Nombre</label>
                                      <div class="col-md-6">
                                        <input  type="text" class="form-control name" name="name"  required autofocus>
                                      </div>
                                    </div>
                                @else
                                    <div class="form-group" style="text-align:center;">
                                        <p>Nombre <h2><b class="userName" >{{ Auth::user()->name}}</b></h2></p>
                                    </div>

                                @endif
                              </div>

                              <div class="modal-footer">
                                <button type="submit" id="apuntarse" name='apuntarse' class="btn btn-success navbar-btn apuntarse" data-dismiss="modal">Apuntarse</button>
                              </div>
                      </div>
                    </div>
                  </div>
                </ul>
            </div>

            <div class="col-xs-6 col-md-3 hora">
               <h3>19:00 <span class="contador">[0/4]</span></h3>
               <ul class="partido">
                 <li>
                    <span><b class="jugador1">Vacio</b></span>
                 </li>
                 <li>
                    <span><b class="jugador2">Vacio</b></span>
                 </li>
                 <li>
                    <span><b class="jugador3">Vacio</b></span>
                 </li>
                 <li>
                    <span><b class="jugador4">Vacio</b></span>
                 </li>
                   <a href="#ventana4"  data-toggle="modal"><button type="button" class="btn btn-success navbar-btn apuntate">¡Apuntate!</button></a>
                   <!-- modal -->
                   <div class="modal fade ventana" id="ventana4" >
                       <div class="modal-dialog">
                           <div class="modal-content">
                               <div class="modal-header">
                                   <button tyle="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                                   <h2 class="modal-tittle" style="text-align:center; margin-top: 2%;">¡Apuntate!</h2>
                               </div>
                               <div class="modal-body" style="height: 100px;">
                                 @if (Auth::guest())
                                     <div class="form-group" style="margin-left:15%; margin-top:2%">
                                       <label for="name" class="col-md-2 control-label">Nombre</label>
                                       <div class="col-md-6">
                                         <input  type="text" class="form-control name" name="name"  required autofocus>
                                       </div>
                                     </div>
                                 @else
                                     <div class="form-group" style="text-align:center;">
                                         <p>Nombre <h2><b class="userName" >{{ Auth::user()->name}}</b></h2></p>
                                     </div>

                                 @endif
                               </div>

                               <div class="modal-footer">
                                 <button type="submit" id="apuntarse" name='apuntarse' class="btn btn-success navbar-btn apuntarse" data-dismiss="modal">Apuntarse</button>
                               </div>
                       </div>
                     </div>
                   </div>
              </ul>
            </div>

          </div>
        </div>
      </div>

      <div class="panel panel-default dia">
        <div class="panel-heading" id="cabecera">
          <button type="button" class="btn btn-success navbar-btn ver" style="float: right; margin-top: 2%;" name="ver">Ver</button>
          <h2>Partidos: Martes</h2>
        </div>
         <div class="panel-body">
          <div class="row">

           <div class="col-xs-6 col-md-3 hora">
              <h3>10:30 <span class="contador">[0/4]</span></h3>
                <ul class="partido">
                  <li>
                     <span><b class="jugador1">Vacio</b></span>
                  </li>
                  <li>
                     <span><b class="jugador2">Vacio</b></span>
                  </li>
                  <li>
                     <span><b class="jugador3">Vacio</b></span>
                  </li>
                  <li>
                     <span><b class="jugador4">Vacio</b></span>
                  </li>
                 <a href="#ventana5"  data-toggle="modal"><button type="button" class="btn btn-success navbar-btn apuntate">¡Apuntate!</button></a>
                 <!-- modal -->
                 <div class="modal fade ventana" id="ventana5">
                     <div class="modal-dialog">
                         <div class="modal-content">
                             <div class="modal-header">
                                 <button tyle="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                                 <h2 class="modal-tittle" style="text-align:center; margin-top: 2%;">¡Apuntate!</h2>
                             </div>
                             <div class="modal-body" style="height: 100px;">
                               @if (Auth::guest())
                                   <div class="form-group" style="margin-left:15%; margin-top:2%">
                                     <label for="name" class="col-md-2 control-label">Nombre</label>
                                     <div class="col-md-6">
                                       <input  type="text" class="form-control name" name="name"  required autofocus>
                                     </div>
                                   </div>
                               @else
                                   <div class="form-group" style="text-align:center;">
                                       <p>Nombre <h2><b class="userName" >{{ Auth::user()->name}}</b></h2></p>
                                   </div>

                               @endif
                             </div>

                             <div class="modal-footer">
                               <button type="submit"  id="apuntarse" name='apuntarse' class="btn btn-success navbar-btn apuntarse" data-dismiss="modal">Apuntarse</button>
                             </div>
                     </div>
                   </div>
                 </div>
               </ul>
           </diV>

           <div class="col-xs-6 col-md-3 hora">
               <h3>12:00 <span class="contador">[0/4]</span></h3>
                 <ul class="partido">
                   <li>
                      <span><b class="jugador1">Vacio</b></span>
                   </li>
                   <li>
                      <span><b class="jugador2">Vacio</b></span>
                   </li>
                   <li>
                      <span><b class="jugador3">Vacio</b></span>
                   </li>
                   <li>
                      <span><b class="jugador4">Vacio</b></span>
                   </li>
                  <a href="#ventana6"  data-toggle="modal"><button type="button" class="btn btn-success navbar-btn apuntate">¡Apuntate!</button></a>
                  <!-- modal -->
                  <div class="modal fade ventana" id="ventana6">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button tyle="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                                  <h2 class="modal-tittle" style="text-align:center; margin-top: 2%;">¡Apuntate!</h2>
                              </div>
                              <div class="modal-body" style="height: 100px;">
                                @if (Auth::guest())
                                    <div class="form-group" style="margin-left:15%; margin-top:2%">
                                      <label for="name" class="col-md-2 control-label">Nombre</label>
                                      <div class="col-md-6">
                                        <input  type="text" class="form-control name" name="name"  required autofocus>
                                      </div>
                                    </div>
                                @else
                                    <div class="form-group" style="text-align:center;">
                                        <p>Nombre <h2><b class="userName" >{{ Auth::user()->name}}</b></h2></p>
                                    </div>

                                @endif
                              </div>

                              <div class="modal-footer">
                                <button type="submit" id="apuntarse" name='apuntarse' class="btn btn-success navbar-btn apuntarse" data-dismiss="modal">Apuntarse</button>
                              </div>
                      </div>
                    </div>
                  </div>
                </ul>
           </div>

           <div class="col-xs-6 col-md-3 hora">
              <h3>16:30 <span class="contador">[0/4]</span></h3>
                <ul class="partido">
                  <li>
                     <span><b class="jugador1">Vacio</b></span>
                  </li>
                  <li>
                     <span><b class="jugador2">Vacio</b></span>
                  </li>
                  <li>
                     <span><b class="jugador3">Vacio</b></span>
                  </li>
                  <li>
                     <span><b class="jugador4">Vacio</b></span>
                  </li>
                 <a href="#ventana7"  data-toggle="modal"><button type="button" class="btn btn-success navbar-btn apuntate">¡Apuntate!</button></a>
                 <!-- modal -->
                 <div class="modal fade ventana" id="ventana7" >
                     <div class="modal-dialog">
                         <div class="modal-content">
                             <div class="modal-header">
                                 <button tyle="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                                 <h2 class="modal-tittle" style="text-align:center; margin-top: 2%;">¡Apuntate!</h2>
                             </div>
                             <div class="modal-body" style="height: 100px;">
                               @if (Auth::guest())
                                   <div class="form-group" style="margin-left:15%; margin-top:2%">
                                     <label for="name" class="col-md-2 control-label">Nombre</label>
                                     <div class="col-md-6">
                                       <input  type="text" class="form-control name" name="name"  required autofocus>
                                     </div>
                                   </div>
                               @else
                                   <div class="form-group" style="text-align:center;">
                                       <p>Nombre <h2><b class="userName" >{{ Auth::user()->name}}</b></h2></p>
                                   </div>

                               @endif
                             </div>

                             <div class="modal-footer">
                               <button type="submit" id="apuntarse" name='apuntarse' class="btn btn-success navbar-btn apuntarse" data-dismiss="modal">Apuntarse</button>
                             </div>
                     </div>
                   </div>
                 </div>
               </ul>
           </div>

           <div class="col-xs-6 col-md-3 hora">
              <h3>19:00 <span class="contador">[0/4]</span></h3>
              <ul class="partido">
                <li>
                   <span><b class="jugador1">Vacio</b></span>
                </li>
                <li>
                   <span><b class="jugador2">Vacio</b></span>
                </li>
                <li>
                   <span><b class="jugador3">Vacio</b></span>
                </li>
                <li>
                   <span><b class="jugador4">Vacio</b></span>
                </li>
                  <a href="#ventana8"  data-toggle="modal"><button type="button" class="btn btn-success navbar-btn apuntate">¡Apuntate!</button></a>
                  <!-- modal -->
                  <div class="modal fade ventana" id="ventana8" >
                      <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button tyle="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                                  <h2 class="modal-tittle" style="text-align:center; margin-top: 2%;">¡Apuntate!</h2>
                              </div>
                              <div class="modal-body" style="height: 100px;">
                                @if (Auth::guest())
                                    <div class="form-group" style="margin-left:15%; margin-top:2%">
                                      <label for="name" class="col-md-2 control-label">Nombre</label>
                                      <div class="col-md-6">
                                        <input  type="text" class="form-control name" name="name"  required autofocus>
                                      </div>
                                    </div>
                                @else
                                    <div class="form-group" style="text-align:center;">
                                        <p>Nombre <h2><b class="userName" >{{ Auth::user()->name}}</b></h2></p>
                                    </div>

                                @endif
                              </div>

                              <div class="modal-footer">
                                <button type="submit" id="apuntarse" name='apuntarse' class="btn btn-success navbar-btn apuntarse" data-dismiss="modal">Apuntarse</button>
                              </div>
                      </div>
                    </div>
                  </div>
             </ul>
           </div>

         </div>
       </div>
      </div>

      <div class="panel panel-default dia">
        <div class="panel-heading" id="cabecera">
          <button type="button" class="btn btn-success navbar-btn ver" style="float: right; margin-top: 2%;" name="ver">Ver</button>
          <h2>Partidos: Miercoles</h2>
        </div>
         <div class="panel-body">
          <div class="row">

           <div class="col-xs-6 col-md-3 hora">
              <h3>10:30 <span class="contador">[0/4]</span></h3>
                <ul class="partido">
                  <li>
                     <span><b class="jugador1">Vacio</b></span>
                  </li>
                  <li>
                     <span><b class="jugador2">Vacio</b></span>
                  </li>
                  <li>
                     <span><b class="jugador3">Vacio</b></span>
                  </li>
                  <li>
                     <span><b class="jugador4">Vacio</b></span>
                  </li>
                 <a href="#ventana9"  data-toggle="modal"><button type="button" class="btn btn-success navbar-btn apuntate">¡Apuntate!</button></a>
                 <!-- modal -->
                 <div class="modal fade ventana" id="ventana9">
                     <div class="modal-dialog">
                         <div class="modal-content">
                             <div class="modal-header">
                                 <button tyle="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                                 <h2 class="modal-tittle" style="text-align:center; margin-top: 2%;">¡Apuntate!</h2>
                             </div>
                             <div class="modal-body" style="height: 100px;">
                               @if (Auth::guest())
                                   <div class="form-group" style="margin-left:15%; margin-top:2%">
                                     <label for="name" class="col-md-2 control-label">Nombre</label>
                                     <div class="col-md-6">
                                       <input  type="text" class="form-control name" name="name"  required autofocus>
                                     </div>
                                   </div>
                               @else
                                   <div class="form-group" style="text-align:center;">
                                       <p>Nombre <h2><b class="userName" >{{ Auth::user()->name}}</b></h2></p>
                                   </div>

                               @endif
                             </div>

                             <div class="modal-footer">
                               <button type="submit"  id="apuntarse" name='apuntarse' class="btn btn-success navbar-btn apuntarse" data-dismiss="modal">Apuntarse</button>
                             </div>
                     </div>
                   </div>
                 </div>
               </ul>
           </diV>

           <div class="col-xs-6 col-md-3 hora">
               <h3>12:00 <span class="contador">[0/4]</span></h3>
                 <ul class="partido">
                   <li>
                      <span><b class="jugador1">Vacio</b></span>
                   </li>
                   <li>
                      <span><b class="jugador2">Vacio</b></span>
                   </li>
                   <li>
                      <span><b class="jugador3">Vacio</b></span>
                   </li>
                   <li>
                      <span><b class="jugador4">Vacio</b></span>
                   </li>
                  <a href="#ventana10"  data-toggle="modal"><button type="button" class="btn btn-success navbar-btn apuntate">¡Apuntate!</button></a>
                  <!-- modal -->
                  <div class="modal fade ventana" id="ventana10">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button tyle="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                                  <h2 class="modal-tittle" style="text-align:center; margin-top: 2%;">¡Apuntate!</h2>
                              </div>
                              <div class="modal-body" style="height: 100px;">
                                @if (Auth::guest())
                                    <div class="form-group" style="margin-left:15%; margin-top:2%">
                                      <label for="name" class="col-md-2 control-label">Nombre</label>
                                      <div class="col-md-6">
                                        <input  type="text" class="form-control name" name="name"  required autofocus>
                                      </div>
                                    </div>
                                @else
                                    <div class="form-group" style="text-align:center;">
                                        <p>Nombre <h2><b class="userName" >{{ Auth::user()->name}}</b></h2></p>
                                    </div>

                                @endif
                              </div>

                              <div class="modal-footer">
                                <button type="submit" id="apuntarse" name='apuntarse' class="btn btn-success navbar-btn apuntarse" data-dismiss="modal">Apuntarse</button>
                              </div>
                      </div>
                    </div>
                  </div>
                </ul>
           </div>

           <div class="col-xs-6 col-md-3 hora">
              <h3>16:30 <span class="contador">[0/4]</span></h3>
                <ul class="partido">
                  <li>
                     <span><b class="jugador1">Vacio</b></span>
                  </li>
                  <li>
                     <span><b class="jugador2">Vacio</b></span>
                  </li>
                  <li>
                     <span><b class="jugador3">Vacio</b></span>
                  </li>
                  <li>
                     <span><b class="jugador4">Vacio</b></span>
                  </li>
                 <a href="#ventana11"  data-toggle="modal"><button type="button" class="btn btn-success navbar-btn apuntate">¡Apuntate!</button></a>
                 <!-- modal -->
                 <div class="modal fade ventana" id="ventana11" >
                     <div class="modal-dialog">
                         <div class="modal-content">
                             <div class="modal-header">
                                 <button tyle="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                                 <h2 class="modal-tittle" style="text-align:center; margin-top: 2%;">¡Apuntate!</h2>
                             </div>
                             <div class="modal-body" style="height: 100px;">
                               @if (Auth::guest())
                                   <div class="form-group" style="margin-left:15%; margin-top:2%">
                                     <label for="name" class="col-md-2 control-label">Nombre</label>
                                     <div class="col-md-6">
                                       <input  type="text" class="form-control name" name="name"  required autofocus>
                                     </div>
                                   </div>
                               @else
                                   <div class="form-group" style="text-align:center;">
                                       <p>Nombre <h2><b class="userName" >{{ Auth::user()->name}}</b></h2></p>
                                   </div>

                               @endif
                             </div>

                             <div class="modal-footer">
                               <button type="submit" id="apuntarse" name='apuntarse' class="btn btn-success navbar-btn apuntarse" data-dismiss="modal">Apuntarse</button>
                             </div>
                     </div>
                   </div>
                 </div>
               </ul>
           </div>

           <div class="col-xs-6 col-md-3 hora">
              <h3>19:00 <span class="contador">[0/4]</span></h3>
              <ul class="partido">
                <li>
                   <span><b class="jugador1">Vacio</b></span>
                </li>
                <li>
                   <span><b class="jugador2">Vacio</b></span>
                </li>
                <li>
                   <span><b class="jugador3">Vacio</b></span>
                </li>
                <li>
                   <span><b class="jugador4">Vacio</b></span>
                </li>
                  <a href="#ventana12"  data-toggle="modal"><button type="button" class="btn btn-success navbar-btn apuntate">¡Apuntate!</button></a>
                  <!-- modal -->
                  <div class="modal fade ventana" id="ventana12" >
                      <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button tyle="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                                  <h2 class="modal-tittle" style="text-align:center; margin-top: 2%;">¡Apuntate!</h2>
                              </div>
                              <div class="modal-body" style="height: 100px;">
                                @if (Auth::guest())
                                    <div class="form-group" style="margin-left:15%; margin-top:2%">
                                      <label for="name" class="col-md-2 control-label">Nombre</label>
                                      <div class="col-md-6">
                                        <input  type="text" class="form-control name" name="name"  required autofocus>
                                      </div>
                                    </div>
                                @else
                                    <div class="form-group" style="text-align:center;">
                                        <p>Nombre <h2><b class="userName" >{{ Auth::user()->name}}</b></h2></p>
                                    </div>

                                @endif
                              </div>

                              <div class="modal-footer">
                                <button type="submit" id="apuntarse" name='apuntarse' class="btn btn-success navbar-btn apuntarse" data-dismiss="modal">Apuntarse</button>
                              </div>
                      </div>
                    </div>
                  </div>
             </ul>
           </div>

         </div>
       </div>
      </div>

      <div class="panel panel-default dia">
        <div class="panel-heading" id="cabecera">
          <button type="button" class="btn btn-success navbar-btn ver" style="float: right; margin-top: 2%;" name="ver">Ver</button>
          <h2>Partidos: Jueves</h2>
        </div>
         <div class="panel-body">
          <div class="row">

           <div class="col-xs-6 col-md-3 hora">
              <h3>10:30 <span class="contador">[0/4]</span></h3>
                <ul class="partido">
                  <li>
                     <span><b class="jugador1">Vacio</b></span>
                  </li>
                  <li>
                     <span><b class="jugador2">Vacio</b></span>
                  </li>
                  <li>
                     <span><b class="jugador3">Vacio</b></span>
                  </li>
                  <li>
                     <span><b class="jugador4">Vacio</b></span>
                  </li>
                 <a href="#ventana13"  data-toggle="modal"><button type="button" class="btn btn-success navbar-btn apuntate">¡Apuntate!</button></a>
                 <!-- modal -->
                 <div class="modal fade ventana" id="ventana13">
                     <div class="modal-dialog">
                         <div class="modal-content">
                             <div class="modal-header">
                                 <button tyle="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                                 <h2 class="modal-tittle" style="text-align:center; margin-top: 2%;">¡Apuntate!</h2>
                             </div>
                             <div class="modal-body" style="height: 100px;">
                               @if (Auth::guest())
                                   <div class="form-group" style="margin-left:15%; margin-top:2%">
                                     <label for="name" class="col-md-2 control-label">Nombre</label>
                                     <div class="col-md-6">
                                       <input  type="text" class="form-control name" name="name"  required autofocus>
                                     </div>
                                   </div>
                               @else
                                   <div class="form-group" style="text-align:center;">
                                       <p>Nombre <h2><b class="userName" >{{ Auth::user()->name}}</b></h2></p>
                                   </div>

                               @endif
                             </div>

                             <div class="modal-footer">
                               <button type="submit"  id="apuntarse" name='apuntarse' class="btn btn-success navbar-btn apuntarse" data-dismiss="modal">Apuntarse</button>
                             </div>
                     </div>
                   </div>
                 </div>
               </ul>
           </diV>

           <div class="col-xs-6 col-md-3 hora">
               <h3>12:00 <span class="contador">[0/4]</span></h3>
                 <ul class="partido">
                   <li>
                      <span><b class="jugador1">Vacio</b></span>
                   </li>
                   <li>
                      <span><b class="jugador2">Vacio</b></span>
                   </li>
                   <li>
                      <span><b class="jugador3">Vacio</b></span>
                   </li>
                   <li>
                      <span><b class="jugador4">Vacio</b></span>
                   </li>
                  <a href="#ventana14"  data-toggle="modal"><button type="button" class="btn btn-success navbar-btn apuntate">¡Apuntate!</button></a>
                  <!-- modal -->
                  <div class="modal fade ventana" id="ventana14">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button tyle="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                                  <h2 class="modal-tittle" style="text-align:center; margin-top: 2%;">¡Apuntate!</h2>
                              </div>
                              <div class="modal-body" style="height: 100px;">
                                @if (Auth::guest())
                                    <div class="form-group" style="margin-left:15%; margin-top:2%">
                                      <label for="name" class="col-md-2 control-label">Nombre</label>
                                      <div class="col-md-6">
                                        <input  type="text" class="form-control name" name="name"  required autofocus>
                                      </div>
                                    </div>
                                @else
                                    <div class="form-group" style="text-align:center;">
                                        <p>Nombre <h2><b class="userName" >{{ Auth::user()->name}}</b></h2></p>
                                    </div>

                                @endif
                              </div>

                              <div class="modal-footer">
                                <button type="submit" id="apuntarse" name='apuntarse' class="btn btn-success navbar-btn apuntarse" data-dismiss="modal">Apuntarse</button>
                              </div>
                      </div>
                    </div>
                  </div>
                </ul>
           </div>

           <div class="col-xs-6 col-md-3 hora">
              <h3>16:30 <span class="contador">[0/4]</span></h3>
                <ul class="partido">
                  <li>
                     <span><b class="jugador1">Vacio</b></span>
                  </li>
                  <li>
                     <span><b class="jugador2">Vacio</b></span>
                  </li>
                  <li>
                     <span><b class="jugador3">Vacio</b></span>
                  </li>
                  <li>
                     <span><b class="jugador4">Vacio</b></span>
                  </li>
                 <a href="#ventana15"  data-toggle="modal"><button type="button" class="btn btn-success navbar-btn apuntate">¡Apuntate!</button></a>
                 <!-- modal -->
                 <div class="modal fade ventana" id="ventana15" >
                     <div class="modal-dialog">
                         <div class="modal-content">
                             <div class="modal-header">
                                 <button tyle="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                                 <h2 class="modal-tittle" style="text-align:center; margin-top: 2%;">¡Apuntate!</h2>
                             </div>
                             <div class="modal-body" style="height: 100px;">
                               @if (Auth::guest())
                                   <div class="form-group" style="margin-left:15%; margin-top:2%">
                                     <label for="name" class="col-md-2 control-label">Nombre</label>
                                     <div class="col-md-6">
                                       <input  type="text" class="form-control name" name="name"  required autofocus>
                                     </div>
                                   </div>
                               @else
                                   <div class="form-group" style="text-align:center;">
                                       <p>Nombre <h2><b class="userName" >{{ Auth::user()->name}}</b></h2></p>
                                   </div>

                               @endif
                             </div>

                             <div class="modal-footer">
                               <button type="submit" id="apuntarse" name='apuntarse' class="btn btn-success navbar-btn apuntarse" data-dismiss="modal">Apuntarse</button>
                             </div>
                     </div>
                   </div>
                 </div>
               </ul>
           </div>

           <div class="col-xs-6 col-md-3 hora">
              <h3>19:00 <span class="contador">[0/4]</span></h3>
              <ul class="partido">
                <li>
                   <span><b class="jugador1">Vacio</b></span>
                </li>
                <li>
                   <span><b class="jugador2">Vacio</b></span>
                </li>
                <li>
                   <span><b class="jugador3">Vacio</b></span>
                </li>
                <li>
                   <span><b class="jugador4">Vacio</b></span>
                </li>
                  <a href="#ventana16"  data-toggle="modal"><button type="button" class="btn btn-success navbar-btn apuntate">¡Apuntate!</button></a>
                  <!-- modal -->
                  <div class="modal fade ventana" id="ventana16" >
                      <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button tyle="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                                  <h2 class="modal-tittle" style="text-align:center; margin-top: 2%;">¡Apuntate!</h2>
                              </div>
                              <div class="modal-body" style="height: 100px;">
                                @if (Auth::guest())
                                    <div class="form-group" style="margin-left:15%; margin-top:2%">
                                      <label for="name" class="col-md-2 control-label">Nombre</label>
                                      <div class="col-md-6">
                                        <input  type="text" class="form-control name" name="name"  required autofocus>
                                      </div>
                                    </div>
                                @else
                                    <div class="form-group" style="text-align:center;">
                                        <p>Nombre <h2><b class="userName" >{{ Auth::user()->name}}</b></h2></p>
                                    </div>

                                @endif
                              </div>

                              <div class="modal-footer">
                                <button type="submit" id="apuntarse" name='apuntarse' class="btn btn-success navbar-btn apuntarse" data-dismiss="modal">Apuntarse</button>
                              </div>
                      </div>
                    </div>
                  </div>
             </ul>
           </div>

         </div>
       </div>
      </div>

      <div class="panel panel-default dia">
        <div class="panel-heading" id="cabecera">
          <button type="button" class="btn btn-success navbar-btn ver" style="float: right; margin-top: 2%;" name="ver">Ver</button>
          <h2>Partidos: Viernes</h2>
        </div>
         <div class="panel-body">
          <div class="row">

           <div class="col-xs-6 col-md-3 hora">
              <h3>10:30 <span class="contador">[0/4]</span></h3>
                <ul class="partido">
                  <li>
                     <span><b class="jugador1">Vacio</b></span>
                  </li>
                  <li>
                     <span><b class="jugador2">Vacio</b></span>
                  </li>
                  <li>
                     <span><b class="jugador3">Vacio</b></span>
                  </li>
                  <li>
                     <span><b class="jugador4">Vacio</b></span>
                  </li>
                 <a href="#ventana17"  data-toggle="modal"><button type="button" class="btn btn-success navbar-btn apuntate">¡Apuntate!</button></a>
                 <!-- modal -->
                 <div class="modal fade ventana" id="ventana17">
                     <div class="modal-dialog">
                         <div class="modal-content">
                             <div class="modal-header">
                                 <button tyle="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                                 <h2 class="modal-tittle" style="text-align:center; margin-top: 2%;">¡Apuntate!</h2>
                             </div>
                             <div class="modal-body" style="height: 100px;">
                               @if (Auth::guest())
                                   <div class="form-group" style="margin-left:15%; margin-top:2%">
                                     <label for="name" class="col-md-2 control-label">Nombre</label>
                                     <div class="col-md-6">
                                       <input  type="text" class="form-control name" name="name"  required autofocus>
                                     </div>
                                   </div>
                               @else
                                   <div class="form-group" style="text-align:center;">
                                       <p>Nombre <h2><b class="userName" >{{ Auth::user()->name}}</b></h2></p>
                                   </div>

                               @endif
                             </div>

                             <div class="modal-footer">
                               <button type="submit"  id="apuntarse" name='apuntarse' class="btn btn-success navbar-btn apuntarse" data-dismiss="modal">Apuntarse</button>
                             </div>
                     </div>
                   </div>
                 </div>
               </ul>
           </diV>

           <div class="col-xs-6 col-md-3 hora">
               <h3>12:00 <span class="contador">[0/4]</span></h3>
                 <ul class="partido">
                   <li>
                      <span><b class="jugador1">Vacio</b></span>
                   </li>
                   <li>
                      <span><b class="jugador2">Vacio</b></span>
                   </li>
                   <li>
                      <span><b class="jugador3">Vacio</b></span>
                   </li>
                   <li>
                      <span><b class="jugador4">Vacio</b></span>
                   </li>
                  <a href="#ventana18"  data-toggle="modal"><button type="button" class="btn btn-success navbar-btn apuntate">¡Apuntate!</button></a>
                  <!-- modal -->
                  <div class="modal fade ventana" id="ventana18">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button tyle="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                                  <h2 class="modal-tittle" style="text-align:center; margin-top: 2%;">¡Apuntate!</h2>
                              </div>
                              <div class="modal-body" style="height: 100px;">
                                @if (Auth::guest())
                                    <div class="form-group" style="margin-left:15%; margin-top:2%">
                                      <label for="name" class="col-md-2 control-label">Nombre</label>
                                      <div class="col-md-6">
                                        <input  type="text" class="form-control name" name="name"  required autofocus>
                                      </div>
                                    </div>
                                @else
                                    <div class="form-group" style="text-align:center;">
                                        <p>Nombre <h2><b class="userName" >{{ Auth::user()->name}}</b></h2></p>
                                    </div>

                                @endif
                              </div>

                              <div class="modal-footer">
                                <button type="submit" id="apuntarse" name='apuntarse' class="btn btn-success navbar-btn apuntarse" data-dismiss="modal">Apuntarse</button>
                              </div>
                      </div>
                    </div>
                  </div>
                </ul>
           </div>

           <div class="col-xs-6 col-md-3 hora">
              <h3>16:30 <span class="contador">[0/4]</span></h3>
                <ul class="partido">
                  <li>
                     <span><b class="jugador1">Vacio</b></span>
                  </li>
                  <li>
                     <span><b class="jugador2">Vacio</b></span>
                  </li>
                  <li>
                     <span><b class="jugador3">Vacio</b></span>
                  </li>
                  <li>
                     <span><b class="jugador4">Vacio</b></span>
                  </li>
                 <a href="#ventana19"  data-toggle="modal"><button type="button" class="btn btn-success navbar-btn apuntate">¡Apuntate!</button></a>
                 <!-- modal -->
                 <div class="modal fade ventana" id="ventana19" >
                     <div class="modal-dialog">
                         <div class="modal-content">
                             <div class="modal-header">
                                 <button tyle="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                                 <h2 class="modal-tittle" style="text-align:center; margin-top: 2%;">¡Apuntate!</h2>
                             </div>
                             <div class="modal-body" style="height: 100px;">
                               @if (Auth::guest())
                                   <div class="form-group" style="margin-left:15%; margin-top:2%">
                                     <label for="name" class="col-md-2 control-label">Nombre</label>
                                     <div class="col-md-6">
                                       <input  type="text" class="form-control name" name="name"  required autofocus>
                                     </div>
                                   </div>
                               @else
                                   <div class="form-group" style="text-align:center;">
                                       <p>Nombre <h2><b class="userName" >{{ Auth::user()->name}}</b></h2></p>
                                   </div>

                               @endif
                             </div>

                             <div class="modal-footer">
                               <button type="submit" id="apuntarse" name='apuntarse' class="btn btn-success navbar-btn apuntarse" data-dismiss="modal">Apuntarse</button>
                             </div>
                     </div>
                   </div>
                 </div>
               </ul>
           </div>

           <div class="col-xs-6 col-md-3 hora">
              <h3>19:00 <span class="contador">[0/4]</span></h3>
              <ul class="partido">
                <li>
                   <span><b class="jugador1">Vacio</b></span>
                </li>
                <li>
                   <span><b class="jugador2">Vacio</b></span>
                </li>
                <li>
                   <span><b class="jugador3">Vacio</b></span>
                </li>
                <li>
                   <span><b class="jugador4">Vacio</b></span>
                </li>
                  <a href="#ventana20"  data-toggle="modal"><button type="button" class="btn btn-success navbar-btn apuntate">¡Apuntate!</button></a>
                  <!-- modal -->
                  <div class="modal fade ventana" id="ventana20" >
                      <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button tyle="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                                  <h2 class="modal-tittle" style="text-align:center; margin-top: 2%;">¡Apuntate!</h2>
                              </div>
                              <div class="modal-body" style="height: 100px;">
                                @if (Auth::guest())
                                    <div class="form-group" style="margin-left:15%; margin-top:2%">
                                      <label for="name" class="col-md-2 control-label">Nombre</label>
                                      <div class="col-md-6">
                                        <input  type="text" class="form-control name" name="name"  required autofocus>
                                      </div>
                                    </div>
                                @else
                                    <div class="form-group" style="text-align:center;">
                                        <p>Nombre <h2><b class="userName" >{{ Auth::user()->name}}</b></h2></p>
                                    </div>

                                @endif
                              </div>

                              <div class="modal-footer">
                                <button type="submit" id="apuntarse" name='apuntarse' class="btn btn-success navbar-btn apuntarse" data-dismiss="modal">Apuntarse</button>
                              </div>
                      </div>
                    </div>
                  </div>
             </ul>
           </div>

         </div>
       </div>
      </div>

      <div class="panel panel-default dia">
        <div class="panel-heading" id="cabecera">
          <button type="button" class="btn btn-success navbar-btn ver" style="float: right; margin-top: 2%;" name="ver">Ver</button>
          <h2>Partidos: Sabado</h2>
        </div>
         <div class="panel-body">
          <div class="row">

           <div class="col-xs-6 col-md-3 hora">
              <h3>10:30 <span class="contador">[0/4]</span></h3>
                <ul class="partido">
                  <li>
                     <span><b class="jugador1">Vacio</b></span>
                  </li>
                  <li>
                     <span><b class="jugador2">Vacio</b></span>
                  </li>
                  <li>
                     <span><b class="jugador3">Vacio</b></span>
                  </li>
                  <li>
                     <span><b class="jugador4">Vacio</b></span>
                  </li>
                 <a href="#ventana21"  data-toggle="modal"><button type="button" class="btn btn-success navbar-btn apuntate">¡Apuntate!</button></a>
                 <!-- modal -->
                 <div class="modal fade ventana" id="ventana21">
                     <div class="modal-dialog">
                         <div class="modal-content">
                             <div class="modal-header">
                                 <button tyle="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                                 <h2 class="modal-tittle" style="text-align:center; margin-top: 2%;">¡Apuntate!</h2>
                             </div>
                             <div class="modal-body" style="height: 100px;">
                               @if (Auth::guest())
                                   <div class="form-group" style="margin-left:15%; margin-top:2%">
                                     <label for="name" class="col-md-2 control-label">Nombre</label>
                                     <div class="col-md-6">
                                       <input  type="text" class="form-control name" name="name"  required autofocus>
                                     </div>
                                   </div>
                               @else
                                   <div class="form-group" style="text-align:center;">
                                       <p>Nombre <h2><b class="userName" >{{ Auth::user()->name}}</b></h2></p>
                                   </div>

                               @endif
                             </div>

                             <div class="modal-footer">
                               <button type="submit"  id="apuntarse" name='apuntarse' class="btn btn-success navbar-btn apuntarse" data-dismiss="modal">Apuntarse</button>
                             </div>
                     </div>
                   </div>
                 </div>
               </ul>
           </diV>

           <div class="col-xs-6 col-md-3 hora">
               <h3>12:00 <span class="contador">[0/4]</span></h3>
                 <ul class="partido">
                   <li>
                      <span><b class="jugador1">Vacio</b></span>
                   </li>
                   <li>
                      <span><b class="jugador2">Vacio</b></span>
                   </li>
                   <li>
                      <span><b class="jugador3">Vacio</b></span>
                   </li>
                   <li>
                      <span><b class="jugador4">Vacio</b></span>
                   </li>
                  <a href="#ventana22"  data-toggle="modal"><button type="button" class="btn btn-success navbar-btn apuntate">¡Apuntate!</button></a>
                  <!-- modal -->
                  <div class="modal fade ventana" id="ventana22">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button tyle="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                                  <h2 class="modal-tittle" style="text-align:center; margin-top: 2%;">¡Apuntate!</h2>
                              </div>
                              <div class="modal-body" style="height: 100px;">
                                @if (Auth::guest())
                                    <div class="form-group" style="margin-left:15%; margin-top:2%">
                                      <label for="name" class="col-md-2 control-label">Nombre</label>
                                      <div class="col-md-6">
                                        <input  type="text" class="form-control name" name="name"  required autofocus>
                                      </div>
                                    </div>
                                @else
                                    <div class="form-group" style="text-align:center;">
                                        <p>Nombre <h2><b class="userName" >{{ Auth::user()->name}}</b></h2></p>
                                    </div>

                                @endif
                              </div>

                              <div class="modal-footer">
                                <button type="submit" id="apuntarse" name='apuntarse' class="btn btn-success navbar-btn apuntarse" data-dismiss="modal">Apuntarse</button>
                              </div>
                      </div>
                    </div>
                  </div>
                </ul>
           </div>

           <div class="col-xs-6 col-md-3 hora">
              <h3>16:30 <span class="contador">[0/4]</span></h3>
                <ul class="partido">
                  <li>
                     <span><b class="jugador1">Vacio</b></span>
                  </li>
                  <li>
                     <span><b class="jugador2">Vacio</b></span>
                  </li>
                  <li>
                     <span><b class="jugador3">Vacio</b></span>
                  </li>
                  <li>
                     <span><b class="jugador4">Vacio</b></span>
                  </li>
                 <a href="#ventana23"  data-toggle="modal"><button type="button" class="btn btn-success navbar-btn apuntate">¡Apuntate!</button></a>
                 <!-- modal -->
                 <div class="modal fade ventana" id="ventana23" >
                     <div class="modal-dialog">
                         <div class="modal-content">
                             <div class="modal-header">
                                 <button tyle="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                                 <h2 class="modal-tittle" style="text-align:center; margin-top: 2%;">¡Apuntate!</h2>
                             </div>
                             <div class="modal-body" style="height: 100px;">
                               @if (Auth::guest())
                                   <div class="form-group" style="margin-left:15%; margin-top:2%">
                                     <label for="name" class="col-md-2 control-label">Nombre</label>
                                     <div class="col-md-6">
                                       <input  type="text" class="form-control name" name="name"  required autofocus>
                                     </div>
                                   </div>
                               @else
                                   <div class="form-group" style="text-align:center;">
                                       <p>Nombre <h2><b class="userName" >{{ Auth::user()->name}}</b></h2></p>
                                   </div>

                               @endif
                             </div>

                             <div class="modal-footer">
                               <button type="submit" id="apuntarse" name='apuntarse' class="btn btn-success navbar-btn apuntarse" data-dismiss="modal">Apuntarse</button>
                             </div>
                     </div>
                   </div>
                 </div>
               </ul>
           </div>

           <div class="col-xs-6 col-md-3 hora">
              <h3>19:00 <span class="contador">[0/4]</span></h3>
              <ul class="partido">
                <li>
                   <span><b class="jugador1">Vacio</b></span>
                </li>
                <li>
                   <span><b class="jugador2">Vacio</b></span>
                </li>
                <li>
                   <span><b class="jugador3">Vacio</b></span>
                </li>
                <li>
                   <span><b class="jugador4">Vacio</b></span>
                </li>
                  <a href="#ventana24"  data-toggle="modal"><button type="button" class="btn btn-success navbar-btn apuntate">¡Apuntate!</button></a>
                  <!-- modal -->
                  <div class="modal fade ventana" id="ventana24" >
                      <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button tyle="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                                  <h2 class="modal-tittle" style="text-align:center; margin-top: 2%;">¡Apuntate!</h2>
                              </div>
                              <div class="modal-body" style="height: 100px;">
                                @if (Auth::guest())
                                    <div class="form-group" style="margin-left:15%; margin-top:2%">
                                      <label for="name" class="col-md-2 control-label">Nombre</label>
                                      <div class="col-md-6">
                                        <input  type="text" class="form-control name" name="name"  required autofocus>
                                      </div>
                                    </div>
                                @else
                                    <div class="form-group" style="text-align:center;">
                                        <p>Nombre <h2><b class="userName" >{{ Auth::user()->name}}</b></h2></p>
                                    </div>

                                @endif
                              </div>

                              <div class="modal-footer">
                                <button type="submit" id="apuntarse" name='apuntarse' class="btn btn-success navbar-btn apuntarse" data-dismiss="modal">Apuntarse</button>
                              </div>
                      </div>
                    </div>
                  </div>
             </ul>
           </div>

         </div>
       </div>
      </div>

  </div>

</div>


   <script>
     $(document).ready(function() {
       $('.dia').on('click', '.ver', function() {
          $(this).closest('.dia').find('.partido').slideToggle();
       });

       $('.dia').on('click', '.apuntarse', function() {
         //var padre = $(this).closest('.ventana').attr("id"); para buscar la id
         var nombre = $(this).closest('.ventana').find('.name').val();
         var contador= $(this).closest('.hora').find('.contador');
         if (nombre === undefined  )
              nombre = $(this).closest('.ventana').find('.userName').text();

          var jugador1= $(this).closest('.partido').find('.jugador1');
          var jugador2= $(this).closest('.partido').find('.jugador2');
          var jugador3= $(this).closest('.partido').find('.jugador3');
          var jugador4= $(this).closest('.partido').find('.jugador4');

          var vacio = 'Vacio';
          if($(jugador1).text() === vacio){
            $(jugador1).text(nombre);
            $(contador).text('[1/4]');
          }
          else if($(jugador2).text() === vacio){
            $(jugador2).text(nombre);
            $(contador).text('[2/4]');
          }
          else if($(jugador3).text() === vacio){
            $(jugador3).text(nombre);
            $(contador).text('[3/4]');
          }
          else {
            $(jugador4).text(nombre);
            $(contador).text('[4/4]');
          }
          $(this).closest('.partido').find('.apuntate').remove();
       });
     });
   </script>

@endsection
