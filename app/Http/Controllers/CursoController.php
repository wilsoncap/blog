<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    //por convencion al metodo principal se le suele llamar index
    public function index(){
        return view('cursos.index');
    }

   
    //por convencion al metodo para mostrar la pagina para crear cualquier cosa, se le llama create
    public function create(){
        return view('cursos.create');
    }


    //por convencion al metodo para mostrar la pagina para mostrar cualquier cosa, se le llama show
    public function show($curso){
        // otra  forma de parasa la variable compact('curso') que es igual a ['curso'=>$curso])
        return view('cursos.show', compact('curso'));
    }
}
