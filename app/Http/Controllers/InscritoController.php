<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Inscrito;
use App\Atleta;;
use App\Escalao;;
use App\Torneio;

class InscritoController extends Controller
{
        public function index()
         {
             $inscrito = Inscrito::all()->toArray();        
             return view('inscrito.index', compact('inscrito'));
         } 

         public function create()
         {     
             $atleta = Atleta::all();
             $escalao = Escalao::all();
             $torneio =Torneio::all(); ;
             return view("inscrito.create",['atleta'=>$atleta,'escalao'=>$escalao,'torneio'=>$torneio]); 
         } 
    
         public function edit($id)
         {
             $inscrito = Inscrito::find($id);
        
             return view('inscrito.edit', compact('inscrito','id')); 
         } 

         public function store(Request $request)
         {      
           $this->validate(request(), [
        // 'nome' => 'required|unique:inscritos|max:40',
                'nome' => 'required'
            ]);
            $inscrito = new Inscrito([
                'nome' => $request->get('nome'),
                'competidor' => $request->get('competidor'), 
                'escalao' => $request->get('escalao'), 
                'desclassificados' => $request->get('desclassificados'), 
                'descricao' => $request->get('descricao')
               //campos de exigencia de valores
                              ]);
      Inscrito::create($request->all());
            return back()->with('success', 'Competidor adicionado com sucesso'); 
 
         }
 
         public function update(Request $request, $id)
         {      
            $inscrito = Inscrito::find($id);
           $this->validate(request(), [
                  'nome' => 'required' 
            ]); 
             $inscrito->nome = $request->get('nome');  
             $inscrito->competidor = $request->get('competidor');  
             $inscrito->escalao = $request->get('escalao');  
             $inscrito->descricao = $request->get('descricao'); 
             $inscrito->save();
             return redirect('inscrito')->with('success','Competidor actualizado com sucesso');
         }
         public function destroy($id)
        {
             $inscrito = Inscrito::find($id);
             $inscrito->delete();

           return redirect('/inscrito');
      }  
}
