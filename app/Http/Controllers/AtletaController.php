<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;  
use App\Atleta;  
use App\Clube;  
use App\Categoria;

class AtletaController extends Controller
{   

   public function index()
       {
        $atleta = Atleta::all()->toArray(); 
        return view('atleta.index', compact('atleta'));
       } 
   public function create()
       {  
             $clube =Clube::all(); 
             $categoria =Categoria::all();  
             return view("atleta.create",['categoria'=>$categoria,'clube'=>$clube]); 

         // public function create()
         // {     
         //     $torneio =Torneio::all(); 
         //     $atleta = Atleta::all();
         //     return view("competicao.create",['torneio'=>$torneio,'atleta'=>$atleta]); 
         // } 




       }



    public function edit($id)
       { 
        $atleta= Atleta::find($id);
        return view('atleta.edit',compact('atleta','id'));
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
          'clube' => $request->get('clube'), 
          'categoria' => $request->get('categoria'), 
          'escalao' => $request->get('escalao'), 
          'peso' => $request->get('peso'), 
          'sexo' => $request->get('sexo'),  
          'idade' => $request->get('idade'),  
          'telefone' => $request->get('telefone'), 
          'email' => $request->get('email'), 
          'treinador' => $request->get('treinador'), 
          'descricao' => $request->get('descricao') 
          //campos de exigencia de valores
        ]);

           Atleta::create($request->all());
             return back()->with('success', 'Atleta adicionado com sucesso');
 
        // return redirect('/atleta');
        }  

    public function show($id) 
    { 
          $atleta = Atleta::find($id);

            return view('atleta.show',compact('atleta')); 
        } 
        
      public function update(Request $request, $id)
    {
        $atleta = Atleta::find($id);
        
        $this->validate(request(), [         
          'nome' => 'required'  
          // 'nome' => 'required|unique:posts|max:15' 
          //NAO FUNCIONA PORCAUSA DO UNIQUE NO EDIT
            ]);
        $atleta->nome = $request->get('nome');
             // $table->string('email')/*->unique()*/; 
        $atleta->apelido = $request->get('apelido');
        $atleta->cinturao = $request->get('cinturao');
        $atleta->clube = $request->get('clube');
        $atleta->categoria = $request->get('categoria');
        $atleta->escalao = $request->get('escalao');
        $atleta->peso = $request->get('peso');
        $atleta->sexo = $request->get('sexo');
        $atleta->idade = $request->get('idade');
        $atleta->telefone = $request->get('telefone');
        $atleta->email = $request->get('email');
        $atleta->treinador = $request->get('treinador');
        $atleta->descricao = $request->get('descricao');
        $atleta->save();
        return redirect('/atleta')->with('success','Arbitro actualizado com sucesso');
    }

    public function destroy($id)
    {
      $atleta = Atleta::find($id);
      $atleta->delete();

      return redirect('atleta');
    } 

} 