@extends('admin') 
@section('content')
 <title>Adicionar torneio </title>
<div class="container"> 
      <h2>Registrar torneio</h2><br>
        <a href="{{URL::to('torneio')}}" title=""><h4><- voltar</h4></a>   

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
               
  <form method="post" action="{{url('torneio')}}">

        {{csrf_field()}} 
                          
        <div class="row">
          <div class="form-group col-md-6">   
             
                                     <!-- Nome do Evento -->
            <div class="col-md-12"> 
                 <label for="nome"> Nome :
                 <input type="text" class="form-control" name="nome"></input><br>
                 </label>   
            </div>    
                                        <!-- Data inicial-->
          
            <div class="col-md-12"> 
               <label for="datai">Data inicial :
                 <meta charset="utf-8"> 
                 <meta name="datai" content="referrer"> 
                    <input type="date" placeholder="Ex: 2017-10-29 01:10:43"> 
                    <!-- <input type="int" class="form-control" name="rapazes"></input> -->
               </label> 

                                       <!-- Data do termino -->
          
                <label for="datat">Data do termino :
                  <meta charset="utf-8"> 
                  <meta name="datat" content="width=device-width"> 
                      <input type="date"> 
                </label> 
            </div>            
                                         <!-- Estado -->

            <div class="col-md-12">   <br>
                   <label for="estado"> Estado:  
                     <select id="estado" name="estado">
                  
                          @foreach($estado as $est)
                          <option value="{{$est->nome}}">{{$est->nome}} </option>
                        @endforeach
                     </select> 
                      
                   </label>  
                   <label> <a href="{{URL::to('estado')}}" title=""><h5>+ Outro estado</h5></a>  </label>     

            </div>  
         </div>     
                                     <!-- Nº de participantes  -->

         <div class="form-group col-md-10">                        
            <div class="col-md-3"> 
               <label for="participantes">Nº de participantes:
                 <input type="int" class="form-control" name="participantes"></input> 
               </label>
            </div>               
                                     <!-- Nº de rapazes  -->
                                  
            <div class="col-md-3"> 
               <label for="rapazes">Nº de rapazes:
                 <input type="int" class="form-control" name="rapazes"></input> 
               </label>
            </div>                  <!-- Nº de raparigas  -->
                                  
            <div class="col-md-3"> 
               <label for="raparigas">Nº de raparigas:
                 <input type="int" class="form-control" name="raparigas"></input> 
               </label>
            </div>                  <!-- Nº de desclassificados  -->
                                  
            <div class="col-md-3"> 
               <label for="desclassificados">Nº de desclassificados:
                 <input type="int" class="form-control" name="desclassificados"></input> 
               </label>
           </div>  
         </div>
                                    <!-- Outros detalhes --> 

         <div class="form-group col-md-12">
              <label for="descricao" class="col-sm-2 col-form-label col-form-label-sm">Outros detalhes
               
          <br> <br><textarea name="descricao" rows="8" cols="80"></textarea> 
              </label>
        </div>

   <div class="form-group col-md-4"> 
    <button type="submit" class="btn btn-success" style="margin-left:38px">Adicionar torneio</button>  
    <!-- -->
  </div>
</form>
 
@endsection