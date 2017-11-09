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
       
       return view('estadoTorneio.index', compact('et'));
   }
   
   public function create()
   {

       $torneio =Torneio::all();
       $estado =Estado::all();
       $et =EstadoTorneio::all();
       return view("estadoTorneio.create",['torneio'=>$et,'estado'=>$estado,'torneio'=>$torneio ]); 
   } 
   
   public function edit($id)
   {
       $et = EstadoTorneio::find($id);
       
       return view('estadoTorneio.edit', compact('et','id')); 
   } 

   public function store(Request $request)
   {     
     $this->validate(request(), [
         'nome' => 'required|unique:ets|max:20',
     ]);
     $et = new EstadoTorneio([
        'torneio_id' => $request->get('torneio_id'),
        'estado_id' => $request->get('estado_id'), 
               //campos de exigencia de valores
    ]);
     EstadoTorneio::create($request->all());
     return back()->with('success', 'Estado adicionado com sucesso'); 
     
 }
 
 public function update(Request $request, $id)
 {          
     request()->validate(  
      [   
          'torneio_id' => 'required',
          'estado_id' => 'required'
      ]); 
     EstadoTorneio::find($id)->update($request->all());
     return redirect()->route('et.index')

     ->with('success','Estado actualizado com sucesso');   
 }
 
 public function destroy($id)
 {
     $et = EstadoTorneio::find($id);
     $et-> delete();

     return redirect('/et');
 }  
}
