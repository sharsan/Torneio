@extends('admin')
@section('content')
 <title>Actualizando grupos </title>
<div class="container"> 
      <h2>Registrar grupo</h2><br> 
  <a href="{{URL::to('grupo4')}}" title=""><h4><- voltar</h4></a>
             
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
                        <p>{{ \Session::get('success') }}</p>
                   </div><br>
               @endif

  <form method="post" action="{{action('Grupo4Controller@update', $id)}}"> 
          {{csrf_field()}}
   <input name="_method" type="hidden" value="PATCH">   

 <div class="row">
      <div class="form-group col-md-8">   
                               <!-- Nome do campeonato  -->  

            <div class="col-md-10"> <br> 
                  <label for="nome"> Nome do Torneio :
                          <select id="nome" name="nome">
                  
                          @foreach($torneio as $tor)
                          <option value="{{$tor->nome}}">{{$tor->nome}} </option>
                          @endforeach
                          </select>
                  </label>    
            </div> 
                                   <!-- Escalao  --> 
            <div class="col-md-10"> <br> 
                  <label for="escalao">Escalão de peso :
                          <select id="escalao" name="escalao">
                  
                          @foreach($escalao as $esc)
                          <option value="{{$esc->nome}}">{{$esc->nome}} </option>
                          @endforeach
                          </select>
                  </label>    
            </div> 
          
                                              <!-- juri : -->
            <div class="col-md-10"> <br> 
                  <label for="juri"> Júri :
                          <select id="juri" name="juri">
                  
                          @foreach($arbitro as $arb)
                          <option value="{{$arb->nome}}">{{$arb->nome}} </option>
                          @endforeach
                          </select>
                  </label>    
            </div> 

  
   <div class="row"> 

       <div class="form-group col-md-8">    
           <h3>Selecione os atletas</h3>   
                                           <!-- Atleta A -->
       
            <div class="col-md-10"> <br> 
                  <label for="A"> Atleta A:
                          <select id="A" name="A">
                  
                          @foreach($atleta as $atl)
                          <option value="{{$atl->nome}}">{{$atl->nome}} </option>
                          @endforeach
                          </select>
                  </label>    
            </div> 
                                            <!-- Atleta B -->
            <div class="col-md-10"> 
                  <label for="B"> Atleta B:
                         <select id="B" name="B">
                  
                          @foreach($atleta as $atl)
                          <option value="{{$atl->nome}}">{{$atl->nome}} </option>
                          @endforeach
                          </select> 
                  </label>
            </div> 
                                            <!-- Atleta C -->
            <div class="col-md-10"> 
                  <label for="C"> Atleta C:
                          <select id="C" name="C">
                  
                          @foreach($atleta as $atl)
                          <option value="{{$atl->nome}}">{{$atl->nome}} </option>
                          @endforeach
                          </select> 
                  </label>
            </div>
                                            <!-- Atleta D -->
            <div class="col-md-10"> 
                  <label for="D"> Atleta D:
                          <select id="D" name="D">
                  
                          @foreach($atleta as $atl)
                          <option value="{{$atl->nome}}">{{$atl->nome}} </option>
                          @endforeach
                          </select> 
                  </label>
            </div>
        </div> 
      
                                     <!-- Outros detalhes --> 

         <div class="form-group col-md-12">
             <br> <label for="descricao" class="col-sm-2 col-form-label col-form-label-sm">Outros detalhes
               
          <br> <br><textarea name="descricao" rows="8" cols="80"></textarea> 
              </label>
        </div>

   <div class="form-group col-md-4"> 
    <button type="submit" class="btn btn-success" style="margin-left:38px">Adicionar grupo</button>  
  </div>
</form>
 
@endsection 