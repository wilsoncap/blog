<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    //por convencion al metodo principal se le suele llamar index
    public function index(){
        $cursos = Curso::paginate();
        return view('cursos.index', compact('cursos'));
    }

   
    //por convencion al metodo para mostrar la pagina para crear cualquier cosa, se le llama create
    public function create(){
        return "crear curso";
    }


    //por convencion al metodo para mostrar la pagina para mostrar cualquier cosa, se le llama show
    public function show($id){
        // otra  forma de parasa la variable compact('curso') que es igual a ['curso'=>$curso])
        return "curso seleccionado $id";
    }
}
