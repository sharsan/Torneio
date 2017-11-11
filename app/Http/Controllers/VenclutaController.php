<?php 
namespace App\Http\Controllers; 
use Illuminate\Http\Request;
use App\Vencluta;  
use App\Grupo;     

class VenclutaController extends Controller
{
   public function index()
   {
       $vencluta =Vencluta::all()->toArray();  
       return view("vencluta.index",compact('vencluta'));
   } 

   public function create()
   {              
       $grupo =Grupo::all();    
       return view("vencluta.create",['luta'=>$luta,'atleta'=>$atleta]);
   }  

   public function edit($id)
   {
       $vencluta = Vencluta::find($id);
       return view('vencluta.edit',compact('vencluta','id'));
   }  

   public function store(Request $request)
   {   

       $this->validate(request(), [
                 // 'nome' => 'required|unique:venclutas|max:40',  
           'atleta' => 'required|max:40',  
       ]);
       $vencluta = new Vencluta([
           'luta' => $request->get('luta'), 
           'atleta' => $request->get('atleta'), 
           'descricao' => $request->get('descricao') 
       ]);

       $existe=Vencluta::where("escalao",$request->get('nome'))->where("escalao",$request->get('escalao'))->exists();

       if($existe==false){
           Vencluta::create($request->all()); 
           return back()->with('success', 'Vencedor adicionado com sucesso');
       }else{
        return back()->with('success', 'Ja existe este registo');
    }
} 
public function update(Request $request, $id)

{   request()->validate(
   [ 

    'atleta' => 'required' 
]);
Vencluta::find($id)->update($request->all());

return redirect()->route('vencedors.index')

->with('success','Actualizado com sucesso'); 
} 

public function destroy($id)
{
 $vencluta = Vencluta::find($id);
 $vencluta->delete();

 return redirect('vencluta');
}   
}
