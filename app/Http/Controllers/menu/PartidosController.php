<?php

namespace App\Http\Controllers\menu;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Http\Controllers\Controller;
use App\User;
use App\Model\Juegan;
use App\Model\Jugadores;
use App\Model\Partidos;

class PartidosController extends Controller
{

  public function index()
  {
      //
    //  $partidos = Juegan::all();
    //  return view('menu/partidos')->with('partidos',$partidos);
      /*$partidos = Juegan::select('partidos_id', 'partidos.name  as partido','jugadores.name as jugador','dia','hora')
                  ->join('partidos','partidos.id','=','juegan.partidos_id')
                  ->join('jugadores','jugadores.id','=','juegan.jugadores_id')
                  ->get();*/

  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response-
   */
  public function create()
  {
      //

      /*$marks = Mark::lists('name','id')->prepend('Select Mark');
      return view('product.create')->with('marks',$marks);*/

  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
      /*Product::create($request->all());
      return redirect()->route('product.index');*/
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
      //
    /*  $products = Product::FindOrFail($id);
      return view('product.show')->with('products',$products);*/
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
      //
      /*$marks = Mark::lists('name','id')->prepend('Seleccioname la Marca');
      $products = Product::FindOrFail($id);

      return view('product.edit', array('products'=>$products,'marks'=>$marks));*/

  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
      //

    /*  $products = Product::FindOrFail($id);
      $input = $request->all();
      $products->fill($input)->save();

      return redirect()->route('product.index');*/

  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
      //
    /*  $products = Product::FindOrFail($id);
      $products->delete();
      return redirect()->route('product.index');*/

  }
}
