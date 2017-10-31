<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Competicao;
use App\Torneio;
use App\Atleta;;

class CompeticaoController extends Controller
{
        public function index()
         {
             $competicao = Competicao::all()->toArray();        
             return view('competicao.index', compact('competicao'));
         } 

         public function create()
         {     
             $torneio =Torneio::all(); 
             $atleta = Atleta::all();
             return view("competicao.create",['torneio'=>$torneio,'atleta'=>$atleta]); 
         } 
    
         // public function create()
         // {     
         //     $torneio =Torneio::all(); 
         //     return view("competicao.create",compact('torneio')); 
         // } 
    
         public function edit($id)
         {
             $competicao = Competicao::find($id);
        
             return view('competicao.edit', compact('competicao','id')); 
         } 

         public function store(Request $request)
         {      
           $this->validate(request(), [
        'nome' => 'required|unique:competicaos|max:40',
            ]);
            $competicao = new Competicao([
                'nome' => $request->get('nome'),
                'competidor' => $request->get('competidor'), 
                'desclassificados' => $request->get('desclassificados'), 
                'descricao' => $request->get('descricao')
               //campos de exigencia de valores
                              ]);
      Competicao::create($request->all());
            return back()->with('success', 'Competidor adicionado com sucesso'); 
 
         }
 
         public function update(Request $request, $id)
         {      
            $competicao = Competicao::find($id);
           $this->validate(request(), [
                  'nome' => 'required' 
            ]); 
             $competicao->nome = $request->get('nome');  
             $competicao->competidor = $request->get('competidor');  
             $competicao->descricao = $request->get('descricao'); 
             $competicao->save();
             return redirect('competicao')->with('success','Competidoro actualizado com sucesso');
         }
         public function destroy($id)
        {
             $competicao = Competicao::find($id);
             $competicao->delete();

           return redirect('/competicao');
      }  
}
