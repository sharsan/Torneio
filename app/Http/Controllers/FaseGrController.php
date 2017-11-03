<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\FaseGr;  
use App\Grupo4; 

class FaseGrController extends Controller
{         public function index()
         {
             $faseGr =FaseGr::all()->toArray();  
             return view("faseGr.index",compact('faseGr'));
         } 

         public function create()
         {               
             $grupo4 =Grupo4::all(); 
           return view("faseGr.create",['grupo4'=>$Grupo4]);
         }  


         public function edit($id)
         {
             $faseGr = Clube::find($id);
        
             return view('clube.edit', compact('clube','id')); 
         } 
   
         public function store(Request $request)
            {   

                 $this->validate(request(), [
                 // 'nome' => 'required|unique:faseGr|max:40',  
                 // 'nome' => 'required|max:40',  
            ]);
                 $faseGr = new FaseGr([ 
                 'A' => $request->get('A'),
                 'B' => $request->get('B'),
                 'C' => $request->get('C'),
                 'D' => $request->get('D'), 
          ]);

$existe=FaseGr::where("nome",$request->get('nome'))->where("escalao",$request->get('escalao'))->exists();

         if($existe==false){
             faseGr::create($request->all()); 
            return back()->with('success', 'Resultados adicionados com sucesso');
          }else{
            return back()->with('success', 'Ja existe este registo');
          }
                    } 
         public function update(Request $request, $id)

            { 

             $faseGr = FaseGr::find($id);
        
        // $this->validate(request(), [         
        //   'nome' => 'required'   
        //     ]);
        $faseGr->A = $request->get('A');
        $faseGr->B = $request->get('B');
        $faseGr->C = $request->get('C');
        $faseGr->d = $request->get('D'); 
        $faseGr->save();
        return redirect('/faseGr')->with('success','Grupo actualizado com sucesso');
    }
            
         public function destroy($id)
            {
               $faseGr = FaseGr::find($id);
               $faseGr->delete();

              return redirect('faseGr');
                   }   
}
