<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class ListadoController extends Controller
{
    //
    public function index(){
$query=DB::table('dbo.visitas')
->get();
return view('index',['listado'=>$query]);
    }
}
