<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Categoria;

class CategoriaController extends Controller
{
      public function index()
         {
             $categoria = Categoria::all()->toArray();
        
             return view('categoria.index', compact('categoria'));
         }
 
      public function create()
         {
             return view("categoria.create",compact('categoria')); 
         } 
    
         public function edit($id)
         {
             $categoria = Categoria::find($id);
        
             return view('categoria.edit', compact('categoria','id')); 
         } 

         public function store(Request $request)
         {     
           $this->validate(request(), [
        'nome' => 'required|unique:categorias|max:40',
            ]);
            $categoria = new Categoria([
                'nome' => $request->get('nome'),  
                'descricao' => $request->get('descricao')
               //campos de exigencia de valores
                              ]);
      Categoria::create($request->all());
            return back()->with('success', 'Categoria adicionado com sucesso'); 
 
         }
 
         public function update(Request $request, $id)
         {     
             $categoria = Categoria::find($id);
             
           $this->validate(request(), [
                  'nome' => 'required' 
            ]);
             $categoria->nome = $request->get('nome');  
             $categoria->descricao = $request->get('descricao'); 
             $categoria->save();
             return redirect('categoria')->with('success','Categoria actualizado com sucesso');
 
         }
 
         public function destroy($id)
        {
           $categoria = Categoria::find($id);
           $categoria->delete();

           return redirect('/categoria');
      }  
}
