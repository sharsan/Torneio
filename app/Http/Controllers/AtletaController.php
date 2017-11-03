<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;  
use App\Atleta;
use App\Categoria;  
use App\Clube;     
use App\Escalao;   

class AtletaController extends Controller
{   

  public function teste()
  {

      return  Atleta::all();

  }

   public function index()
       {

        $atleta = Atleta::all()->toArray(); 

          // dd($atleta);
        // $users = DB::table('users')
        //     ->join('contacts', 'users.id', '=', 'contacts.user_id')
        //     ->join('orders', 'users.id', '=', 'orders.user_id')
        //     ->select('users.*', 'contacts.phone', 'orders.price')
        //     ->get();

            
        return view('atleta.index', compact('atleta'));
       } 

            public function create()
       {              
             $atleta =Atleta::all();  
             $categoria_id =Categoria::all(); 
             $clube_id =Clube::all(); 
             $escalao_id =Escalao::all();
        return view("atleta.create",['categoria_id'=>$categoria,'clube_id'=>$clube,'escalao_id'=>$escalao_id]);
       }   
 
    public function edit($id)
       { 
        $atleta= Atleta::find($id);
        $categoria_id = Categoria::all();
        $clube_id = Clube::all();
        $escalao_id = Escalao::all();
        // return view('atleta.edit',compact('atleta','id','categoria','clube'));
        return view('atleta.edit',compact('atleta','id','categoria_id','clube_id','escalao_id'));
       } 

    public function store(Request $request)
    {      
           $existe=$request->get('idade')!="";

                   if($existe==true){
                           $this->validate(request(), [
              'idade'=> 'numeric|min:3|max:90',  
                                                      ]);
                                    }
                   else{  

             $this->validate(request(), [
               'nome' => 'required|unique:atletas|max:40', 
                                        ]);
             }

        $atleta = new atleta([
          'nome' => $request->get('nome'),
          'apelido' => $request->get('apelido'),
          'cinturao' => $request->get('cinturao'), 
          'clube_id' => $request->get('clube_id'), 
          'categoria_id' => $request->get('categoria_id'), 
          'escalao_id' => $request->get('escalao_id'), 
          'peso' => $request->get('peso'), 
          'sexo' => $request->get('sexo'),  
          'idade' => $request->get('idade'),  
          'telefone' => $request->get('telefone'), 
          'email' => $request->get('email'), 
          'treinador' => $request->get('treinador'), 
          'descricao' => $request->get('descricao') 
       
        ]); 

           Atleta::create($request->all());
             return back()->with('success', 'Atleta adicionado com sucesso');
  
        }  

    public function show($id) 
    { 
          $atleta = Atleta::find($id);

            return view('atleta.show',compact('atleta')); 
        } 
        
      public function update(Request $request, $id)
      { 
           request()->validate(  
          [   
                 'nome' => 'required'   
           ]); 
       Atleta::find($id)->update($request->all());
           return redirect()->route('atleta.index')

                        ->with('success','Atleta actualizado com sucesso'); 
      }

      public function destroy($id)
      {
              $atleta = Atleta::find($id);
              $atleta->delete();

       return redirect('atleta');
     } 

} 