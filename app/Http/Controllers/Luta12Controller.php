<?php 
namespace App\Http\Controllers; 
use Illuminate\Http\Request;
use App\Luta12;   

class Luta12Controller extends Controller
{
  
  public function index()
  {
   $luta12 = Luta12::all()->toArray();        
   return view('luta12.index', compact('luta12'));
 } 

 public function create()
 {     

   $grupo = Grupo::all();
   $arbitro =Arbitro::all(); ;
   return view("luta12.create",['grupo'=>$grupo,'arbitro'=>$arbitro]); 
 } 

 public function edit($id)
 {
   $luta12 = Luta12::find($id);
   
   return view('luta12.edit', compact('luta12','id')); 
 } 

 public function update(Request $request, $id)
 {      
   request()->validate(  
    [   
      'atleta1' => 'required',
      'atleta2' => 'required',
      'vencedor' => 'required' 
    ]); 
   Luta12::find($id)->update($request->all());
   return redirect()->route('luta12.index')

   ->with('success','Luta actualizada com sucesso');  
 }  

 public function store(Request $request)
 {      
   $this->validate(request(), [
        // 'nome' => 'required|unique:lutas|max:40',
    'atleta' => 'required'
  ]);
   $luta12 = new Luta12([
    'grupo' => $request->get('grupo'),
    'atleta1' => $request->get('atleta1'),
    'atleta2' => $request->get('atleta2'),
    'vencedor' => $request->get('vencedor'), 
    'juri' => $request->get('juri'),  
    'descricao' => $request->get('descricao')
               //campos de exigencia de valores
  ]);
   Luta12::create($request->all());
   return back()->with('success', 'Luta adicionada com sucesso'); 
   
 }

 public function destroy($id)
 {
   $luta12 = Luta12::find($id);
   $luta12->delete();

   return redirect('/luta12');
 }  
}
