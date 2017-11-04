<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Grupo4;   
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
             $arbitro  = Arbitro::all(); 
             $escalao  = Escalao::all();
             $inscrito  = Inscrito::all();  
             $torneio  = Torneio::all(); 
               return view("grupo4.create",['arbitro'=>$arbitro,'escalao'=>$escalao,'inscrito'=>$inscrito,'torneio'=>$torneio]);
         }   

         public function edit($id)
         {
             $grupo4 = Grupo4::find($id);
        
             return view('grupo4.edit', compact('grupo4','id')); 
         } 
   
         public function store(Request $request)
            {   

                 $this->validate(request(), [
                 // 'nome' => 'required|unique:grupo4|max:40',  
                 // 'nome' => 'required|max:40',  
            ]);
                 $grupo4 = new Grupo4([
                 'A' => $request->get('A'),
                 'B' => $request->get('B'),
                 'C' => $request->get('C'),
                 'D' => $request->get('D'), 
                 'descricao' => $request->get('descricao') 
          ]);

$existe=Grupo4::where("nome",$request->get('nome'))->where("grupo4",$request->get('grupo4'))->exists();

              if($existe==false){
                             Grupo4::create($request->all()); 
                              return back()->with('success', 'Grupo adicionado com sucesso');
                           }else{
            return back()->with('success', 'Ja existe este registo');
                                }
            }  
            
         public function update(Request $request, $id)
         {     
           request()->validate(  
          [   
                      'A' => 'required', 
                      'B' => 'required', 
                      'C' => 'required', 
                      'D' => 'required'  
          ]); 
          Grupo4::find($id)->update($request->all());
           return redirect()->route('grupo4.index')

                        ->with('success','Grupo actualizado com sucesso');  
         }
   
         public function destroy($id)
            {
               $grupo4 = Grupo4::find($id);
               $grupo4->delete();

              return redirect('grupo4');
                   }    

         public function show($id) 
            { 
                 $grupo4 = Grupo4::find($id);

                return view('grupo4.show',compact('grupo4')); 
            }     
      
         public function round1() 
            { 
             $arbitro  = Arbitro::all(); 
             $escalao  = Escalao::all();
             $inscrito  = Inscrito::all();  
             $torneio  = Torneio::all(); 
               return view("grupo4.round1",['arbitro'=>$arbitro,'escalao'=>$escalao,'inscrito'=>$inscrito,'torneio'=>$torneio]);
            }     
         // public function round1() 
         //    { 

         //     $grupo4 =Grupo4::all()->toArray();  
         //     return view("grupo4.round1",compact('grupo4'));  
         //    } 
         public function roundone() 
            { 
             $arbitro  = Arbitro::all(); 
             $escalao  = Escalao::all();
             $inscrito  = Inscrito::all();  
             $torneio  = Torneio::all(); 
               return view("grupo4.roundone",['arbitro'=>$arbitro,'escalao'=>$escalao,'inscrito'=>$inscrito,'torneio'=>$torneio]);
            }            
}
