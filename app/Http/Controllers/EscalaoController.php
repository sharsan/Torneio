<?php 
namespace App\Http\Controllers; 
use Illuminate\Http\Request;
use App\Escalao;  

class EscalaoController extends Controller
{
        public function index()
         {
             $escalao = Escalao::all()->toArray();
        
             return view('escalao.index', compact('escalao'));
         }
 
         public function create()
         {
             return view("escalao.create",compact('escalao')); 
         } 
    
         public function edit($id)
         {
             $escalao = Escalao::find($id);
        
             return view('escalao.edit', compact('escalao','id')); 
         } 

         public function store(Request $request)
         {     
           $this->validate(request(), [
           'nome' => 'required|unique:escalaos|max:20',
            ]);
            $escalao = new Escalao([
                'nome' => $request->get('nome'), 
               //campos de exigencia de valores
                              ]);
            Escalao::create($request->all());
            return back()->with('success', 'Escalao adicionado com sucesso'); 
 
         }
 
         public function update(Request $request, $id)
         {     
             $escalao = Escalao::find($id);
             
           $this->validate(request(), [
                  'nome' => 'required' 
            ]);
             $escalao->nome = $request->get('nome');   
             $escalao->save();
             return redirect('escalao')->with('success','Escalao actualizado com sucesso');
 
         }
 
         public function destroy($id)
        {
           $escalao = Escalao::find($id);
           $escalao->delete();

           return redirect('/escalao');
      }  
}
