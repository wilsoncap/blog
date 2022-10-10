<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCurso;
use App\Http\Traits;

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

    //Almacena todo lo que se le mande en el objeto request, pero simultaneamente me hace las respectivas validaciones
    // si la validacion es exitosa pasa al siguiente punto
    public function store(StoreCurso $request){
       
        // $curso = new Curso();
        // $curso->name = $request->name;
        // $curso->description = $request->description;
        // $curso->categoria = $request->categoria;
        // $curso->save();

        //asignacion masiva para crear y salvar 
        // $curso = Curso::create([
        //     'name'=> $request->name,
        //     'description' => $request->description,
        //     'categoria' => $request->categoria
        // ]);

        $curso = Curso::create($request->all());

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
     
        $request->validate([
                'name'=> 'required|max:10',
                'description'=> 'required|min:10',
                'categoria'=> 'required'
            ]);
            
            $curso->update($request->all());
            return redirect()->route('cursos.show', $curso->id);
            
            // $validar = $this->valida($request);
            // $curso->name = $request->name;
            // $curso->description = $request->description;
            // $curso->categoria = $request->categoria;  
            // $curso->save();
            // return $curso;

            //accedo al objeto y de este al metodo update y le paso el request
   
        //     if ($validar) {
        //     }else{
        //         return "error en la validacion";
        //     }
           
        }


        public function destroy(Curso $curso){
            $curso->delete();
            return redirect()->route('cursos.index');
        }

       


        
        
    
}
