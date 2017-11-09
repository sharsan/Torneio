<?php 
namespace App\Http\Controllers; 
use Illuminate\Http\Request;
use App\EstadoTorneio;  
use App\Torneio;  
use App\Estado;  

class EstadoTorneioController extends Controller
{
  public function index()
  {
   $et = EstadoTorneio::all()->toArray();
   
   return view('estadotorneio.index', compact('et'));
 }
 
 public function create()
 {

   $et =EstadoTorneio::all();
   $torneio =Torneio::all();
   $estado =Estado::all();
   return view("estadotorneio.create",['torneio'=>$torneio,'estado'=>$estado ]); 
 } 
 
 public function edit($id)
 {
   $et = EstadoTorneio::find($id);
   
   return view('estadotorneio.edit', compact('et','id')); 
 } 

 public function store(Request $request)
 {     
   $this->validate(request(), [
    'torneio' => 'required|unique:ets|max:20',
  ]);
   $et = new EstadoTorneio([
    'torneio' => $request->get('torneio'),
    'estado' => $request->get('estado'), 
               //campos de exigencia de valores
  ]);
   EstadoTorneio::create($request->all());
   return back()->with('success', 'Estado adicionado com sucesso'); 
   
 }
 
 public function update(Request $request, $id)
 {          
   request()->validate(  
    [   
      'torneio' => 'required',
      'estado' => 'required'
    ]); 
   EstadoTorneio::find($id)->update($request->all());

   return redirect()->route('et.index')

   ->with('success','Estado do torneio actualizado com sucesso');   
 }
 
 public function destroy($id)
 {
   $et = EstadoTorneio::find($id);
   $et-> delete();

   return redirect('et');
 }  
}
