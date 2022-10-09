<?php

namespace App\Http\Controllers;

use App\Models\Curso;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    //por convencion al metodo principal se le suele llamar index
    public function index(){
        $cursos = Curso::orderBy('id', 'desc')->paginate();
        return view('cursos.index', compact('cursos'));
    }

   
    //por convencion al metodo para mostrar la pagina para crear cualquier cosa, se le llama create
    public function create(){
        return view('cursos.create');
    }

    public function store(Request $request){
            // return $request->all();
        $request->validate([
            'name'=> 'required|max:10',
            'description'=> 'required|min:10',
            'categoria'=> 'required'

        ]);

       
        $curso = new Curso();
        $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->categoria = $request->categoria;
        $curso->save();
        return redirect()->route('cursos.show', $curso->id);
    }


    //por convencion al metodo para mostrar la pagina para mostrar cualquier cosa, se le llama show
    public function show(Curso $curso){
        // $curso = Curso::find($id);
        // // return $curso;
        // otra  forma de parasa la variable compact('curso') que es igual a ['curso'=>$curso])
        return view('cursos.show', compact('curso'));
    }


    public function edit(Curso $curso){
        // $curso = Curso::find($id);
        // return $curso;
        // return $curso;
     
        return view('cursos.edit', compact('curso'));
    }

    public function update(Request $request, Curso $curso){
        // return $request;
        // return $request;

        $request->validate([
            'name'=> 'required|max:10',
            'description'=> 'required|min:10',
            'categoria'=> 'required'

        ]);

        // if ($validacion) {
            
        // }else{
        //     return "error en la validacion";
        // }

        $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->categoria = $request->categoria;  
        $curso->save();
        // return $curso;
        return redirect()->route('cursos.show', $curso->id);
        
        
    }
}
