@extends('admin')
@section('content')
   <title>Actualizando atleta </title>    
   <link rel="stylesheet" href="{{asset('css/app.css')}}">
 </head>
  <body>
<div class="container">
      <h2>Editar atleta</h2> 
        <a href="{{URL::to('atleta')}}" title=""><h4><- voltar</h4></a>   

               @if ($errors->any())
                   <div class="alert alert-danger">
                      <ul>
                         @foreach ($errors->all() as $error)
                           <li>{{ $error }}</li>
                         @endforeach
                      </ul>
                   </div><br>
               @endif

               @if (\Session::has('success'))
                   <div class="alert alert-success">
                        <!-- <p>{{ \Session::get('success') }}</p> -->
                     <p>{{URL::to('atleta')}}</p>       
                   </div><br>
               @endif 
 
  <form method="post" action="{{action('AtletaController@update', $id)}}">
        {{csrf_field()}} 
      <input name="_method" type="hidden" value="PATCH"> 

        <div class="row">
          <div class="form-group col-md-6">  
            
                                      <!-- Apelido -->
            <div class="col-md-6">
                <label for="apelido"> Apelido:</label>
                <input type="text" class="form-control" name="apelido"value="{{$atleta->apelido}}">  </div>
             
                                        <!-- Nome -->
            <div class="col-md-12">
                <label for="nome"> Nome :</label>
                <input type="text" class="form-control" name="nome"value="{{$atleta->nome}}"></input><br></div>
  
          </div>
          <div class="form-group col-md-10">    
                                     <!-- Fotografia   -->
            <div class="col-md-3"> 
               <label for="fotografia">Fotografia 
                 <input type="file" class="form-control-file" id="fotografia">
               </label> 
            </div>
                                        <!-- Sexo --> 
            <div class="col-md-3">  <br> 
                <label for="sexo">Sexo :
                <input type="radio" class="form-check-input" name="sexo" value="M" checked></input> 
           M
                <input class="form-check-input" type="radio" name="sexo" id="F" value="F"></input> 
           F
                </label> 
            </div>
            
                                        <!-- Idade  -->
                                  
            <div class="col-md-2"> 
               <label for="idade"> Idade:
                 <input type="number" class="form-control" name="idade"value="{{$atleta->idade}}"></input> 
               </label>
            </div>  
          </div>
          <div class="form-group col-md-10">    
                                       <!-- telefone --> 
              <div class="col-md-3">                
                 <label for="telefone"> telefone:</label>
                 <input type="int" class="form-control" name="telefone"value="{{$atleta->telefone}}"></input>
              </div>  
                 
              <div class="col-md-6">         
                                         <!-- email --> 
                <label for="email"> email: </label> 
                 <input type="text" class="form-control" name="email"value="{{$atleta->email}}"></input>
              </div> 
              
          </div> 
                                                 
                                      <!-- Clube -->
          <div class="col-md-12"> 
             <div class="form-group col-md-10"> <br>
                 <label for="clube">Clube :
                    <tr> 
                      <select name="clube" id="clube"> 
                            @foreach($clube as $clb)
                          <option value="{{$clb->nome}}">{{$clb->nome}} </option>
                        @endforeach  > -->
                      </select>  
                    </tr>          
                 </label>  
                                 <!--Categoria -->
          
                 <label for="categoria">Categoria :
                    <tr> 
                      <select name="categoria" id="categoria"> 
                            @foreach($categoria as $clb)
                          <option value="{{$clb->nome}}">{{$clb->nome}} </option>
                        @endforeach  
                      </select>  
                    </tr>          
                 </label>  
                           <!-- Cinturao -->  
         
                 <label for="cinturao">Cinturao: 
                 <tr>  
                   <select name="cinturao" id="cinturao">  
                       <option value="Amarelo">Amarelo</option>
                       <option value="Laranja">Laranja</option>
                       <option value="Verde">Verde</option>
                       <option value="Azul">Azul</option>
                       <option value="Castanho">Castanho</option>
                       <option value="Preto">Preto</option> 
                       <option value="Branco">Branco</option>
                    </select> 
                  </tr>
                 </label>  
               </div>

                             <!-- Escalao  --> 
 
               <div class="form-group col-md-10"> <br>
                 <div class="col-md-2"> 
                   <label for="escalao">Escalão de peso :
                    <tr> 
                      <select name="escalao" id="escalao"> 
                            @foreach($escalao as $esc)
                          <option value="{{$esc->nome}}">{{$esc->nome}} </option>
                        @endforeach  > -->
                      </select>  
                    </tr>          
                   </label>   
                 </div>
 
                              <!-- Peso -->  
               
                   <div class="col-md-2"> 
                    <label for="peso">Peso (Kg): 
                        <input type="int" class="form-control" name="peso"value="{{$atleta->peso}}"></input>
                    </label>   
               </div>       
           
         </div>      
                                    <!-- Outros detalhes --> 
      
       </div> 
            <label for="descricao">Outros detalhes :
                
               <br><br>    <textarea name="descricao" rows="8" cols="90">{{$atleta->descricao}}</textarea> </label>
           </div> 
       </div>
    <div class="form-group row"><br>
      <div class="col-md-2"></div> 
        <button type="submit" class="btn btn-success" style="margin-left:38px">Actualizar</button> 
    </div>
  </form>
</div>
@endsection