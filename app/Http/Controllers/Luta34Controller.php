<?php 
namespace App\Http\Controllers; 
use Illuminate\Http\Request;
use App\Luta34;  

class Luta34Controller extends Controller
{

  public function index()
  {
   $luta34 = Luta34::all()->toArray();        
   return view('luta34.index', compact('luta34'));
 } 

 public function create()
 {     

   $grupo = Grupo::all();
   $arbitro =Arbitro::all(); ;
   return view("luta34.create",['grupo'=>$grupo,'arbitro'=>$arbitro]); 
 } 

 public function edit($id)
 {
   $luta34 = Luta34::find($id);

   return view('luta34.edit', compact('luta34','id')); 
 } 

 public function update(Request $request, $id)
 {      
   request()->validate(  
    [   
      'atleta3' => 'required',
      'atleta4' => 'required',
      'vencedor' => 'required' 
    ]); 
   Luta34::find($id)->update($request->all());
   return redirect()->route('luta34.index')

   ->with('success','Luta actualizada com sucesso');  
 }  

 public function store(Request $request)
 {      
   $this->validate(request(), [
        // 'nome' => 'required|unique:lutas|max:40',
    'atleta' => 'required'
  ]);
   $luta34 = new Luta34([
    'grupo' => $request->get('grupo'),
    'atleta3' => $request->get('atleta3'),
    'atleta4' => $request->get('atleta4'),
    'vencedor' => $request->get('vencedor'), 
    'juri' => $request->get('juri'),  
    'descricao' => $request->get('descricao')
               //campos de exigencia de valores
  ]);
   Luta34::create($request->all());
   return back()->with('success', 'Luta adicionada com sucesso'); 

 }

 public function destroy($id)
 {
   $luta34 = Luta34::find($id);
   $luta34->delete();

   return redirect('/luta34');
 }  
}
