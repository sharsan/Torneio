<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Grupo4;  
use App\Atleta;   
use App\Arbitro;  
use App\Escalao; 
use App\Inscrito; 
use App\Torneio;  

class Grupo4Controller extends Controller
{
         public function index()
         {
             $grupo4 =Grupo4::all()->toArray();  
             return view("grupo4.index",compact('grupo4'));
         } 

         public function create()
         {              
             $atleta =Atleta::all(); 
             $arbitro =Arbitro::all(); 
             $escalao =Escalao::all(); 
             $inscrito =Inscrito::all(); 
             $torneio =Torneio::all(); 
           return view("grupo4.create",['atleta'=>$atleta,'arbitro'=>$arbitro,'escalao'=>$escalao,'inscrito'=>$inscrito,'torneio'=>$torneio]);
         }  


         public function edit($id)
         {
             $clube = Clube::find($id);
        
             return view('clube.edit', compact('clube','id')); 
         } 
   
         public function store(Request $request)
            {   

                 $this->validate(request(), [
                 // 'nome' => 'required|unique:grupo4|max:40',  
                 'nome' => 'required|max:40',  
            ]);
                 $Grupo4 = new Grupo4([
                 'juri' => $request->get('juri'),
                 'nome' => $request->get('nome'),
                 'escalao' => $request->get('escalao'),
                 'primeiro' => $request->get('primeiro'),
                 'segundo' => $request->get('segundo'),
                 'terceiro' => $request->get('terceiro'),
                 'terceiro2' => $request->get('terceiro2'),
                 'descricao' => $request->get('descricao') 
          ]);

$existe=Grupo4::where("nome",$request->get('nome'))->where("escalao",$request->get('escalao'))->exists();

         if($existe==false){
             grupo4::create($request->all()); 
            return back()->with('success', 'Grupo adicionado com sucesso');
          }else{
            return back()->with('success', 'Ja existe este registo');
          }
                    } 
         public function update(Request $request, $id)

            {   request()->validate(
                 [ 

            'nome' => 'required' 
                  ]);
          Grupo4::find($id)->update($request->all());

             return redirect()->route('grupo4.index')

                        ->with('success','Actualizado com sucesso'); 
                   } 
            
         public function destroy($id)
            {
               $grupo4 = Grupo4::find($id);
               $grupo4->delete();

              return redirect('grupo4');
                   }   
}
