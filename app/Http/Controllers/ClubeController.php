<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Clube;

class ClubeController extends Controller
{
      public function index()
         {
             $clube = Clube::all()->toArray();
        
             return view('clube.index', compact('clube'));
         }
 
      public function create()
         {
             return view("clube.create",compact('clube')); 
         } 
    
         public function edit($id)
         {
             $clube = Clube::find($id);
        
             return view('clube.edit', compact('clube','id')); 
         } 

         public function store(Request $request)
         {     
           $this->validate(request(), [
        'nome' => 'required|unique:clubes|max:40',
            ]);
            $clube = new Clube([
                'nome' => $request->get('nome'),  
                'descricao' => $request->get('descricao')
               //campos de exigencia de valores
                              ]);
      Clube::create($request->all());
            return back()->with('success', 'Clube adicionado com sucesso'); 
 
         }
 
         public function update(Request $request, $id)
         {     
             $clube = Clube::find($id);
             
           $this->validate(request(), [
                  'nome' => 'required' 
            ]);
             $clube->nome = $request->get('nome');  
             $clube->descricao = $request->get('descricao'); 
             $clube->save();
             return redirect('clube')->with('success','Clube actualizado com sucesso');
 
         }
 
         public function destroy($id)
        {
           $clube = Clube::find($id);
           $clube->delete();

           return redirect('/clube');
      }  
}
