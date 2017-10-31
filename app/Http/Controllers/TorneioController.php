<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Torneio; 
use App\Estado;  

class TorneioController extends Controller
{
        public function index()
         {
             $torneio = Torneio::all()->toArray();        
             return view('torneio.index', compact('torneio'));
         } 

         public function create()
         {     
             $estado =Estado::all(); 
             return view("torneio.create",compact('estado')); 
         } 
    
         public function edit($id)
         {
             $torneio = Torneio::find($id);
        
             return view('torneio.edit', compact('torneio','id')); 
         } 

         public function store(Request $request)
         {      
           $this->validate(request(), [
        'nome' => 'required|unique:torneios|max:40',
            ]);
            $torneio = new Torneio([
                'nome' => $request->get('nome'),
                'estado' => $request->get('estado'),  
                'datai' => $request->get('datai'),   
                'datat' => $request->get('datat'),   
                'participantes' => $request->get('participantes'), 
                'rapazes' => $request->get('rapazes'), 
                'raparigas' => $request->get('raparigas'), 
                'desclassificados' => $request->get('desclassificados'), 
                'descricao' => $request->get('descricao')
               //campos de exigencia de valores
                              ]);
      Torneio::create($request->all());
            return back()->with('success', 'Torneio adicionado com sucesso'); 
 
         }
 
         public function update(Request $request, $id)
         {      
            $torneio = Torneio::find($id);
           $this->validate(request(), [
                  'nome' => 'required' 
            ]); 
             $torneio->nome = $request->get('nome');  
             $torneio->estado = $request->get('estado');  
             $torneio->datai = $request->get('datai'); 
             $torneio->datat = $request->get('datat'); 
             $torneio->participantes = $request->get('participantes');  
             $torneio->rapazes = $request->get('rapazes'); 
             $torneio->raparigas = $request->get('raparigas');  
             $torneio->desclassificados = $request->get('desclassificados'); 
             $torneio->descricao = $request->get('descricao'); 
             $torneio->save();
             return redirect('torneio')->with('success','Torneio actualizado com sucesso');
         }
         public function destroy($id)
        {
             $torneio = Torneio::find($id);
             $torneio->delete();

           return redirect('/torneio');
      }  
}
