<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Vencedor;    
use App\Atleta;   
use App\Arbitro;  
use App\Escalao;  
use App\Torneio; 
// use App\Torneiro;      


class VencedorController extends Controller
{
   public function index()
   {
       $vencedor =Vencedor::all()->toArray();  
       return view("vencedor.index",compact('vencedor'));
   } 

   public function create()
   {              
       $atleta =Atleta::all(); 
       $arbitro =Arbitro::all(); 
       $escalao =Escalao::all(); 
       $torneio =Torneio::all(); 
       return view("vencedor.create",['escalao'=>$escalao,'arbitro'=>$arbitro,'torneio'=>$torneio,'atleta'=>$atleta]);
   }  

   public function edit($id)
   {
       $vencedor = Vencedor::find($id);
       return view('vencedor.edit',compact('vencedor','id'));
   } 
   

   public function store(Request $request)
   {   

       $this->validate(request(), [
                 // 'nome' => 'required|unique:vencedors|max:40',  
           'nome' => 'required|max:40',  
       ]);
       $vencedor = new Vencedor([
           'juri' => $request->get('juri'),
           'nomeTorneio' => $request->get('nomeTorneio'),
           'escalao' => $request->get('escalao'),
           'primeiro' => $request->get('primeiro'),
           'segundo' => $request->get('segundo'),
           'terceiro' => $request->get('terceiro'),
           'terceiro2' => $request->get('terceiro2'),
           'descricao' => $request->get('descricao') 
       ]);

       $existe=Vencedor::where("escalao",$request->get('nome'))->where("escalao",$request->get('escalao'))->exists();

       if($existe==false){
           Vencedor::create($request->all()); 
           return back()->with('success', 'Vencedor adicionado com sucesso');
       }else{
        return back()->with('success', 'Ja existe este registo');
    }
} 
public function update(Request $request, $id)

{   request()->validate(
   [ 

    'nomeTorneio' => 'required' 
]);
Vencedor::find($id)->update($request->all());

return redirect()->route('arbitro.index')

->with('success','Actualizado com sucesso'); 
} 

public function destroy($id)
{
 $vencedor = Vencedor::find($id);
 $vencedor->delete();

 return redirect('vencedor');
}   
}
