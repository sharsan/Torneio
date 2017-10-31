@extends('admin')
@section('content')
 <title>Adicionar atleta </title>
<div class="container"> 
      <h2>Registrar atleta</h2><br>
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
                        <p>{{ \Session::get('success') }}</p>
                   </div><br>
               @endif
          
  <form method="post" action="{{url('atleta')}}">

        {{csrf_field()}} 
                          
        <div class="row">
          <div class="form-group col-md-6">  
            
                                      <!-- Apelido -->
            <div class="col-md-6">
                <label for="apelido"> Apelido:
                  <input type="text" class="form-control" name="apelido"></input>
                </label>
            </div>
             
                                        <!-- Nome -->

                                        
            <div class="col-md-12">
                <label for="nome"> Nome :
                  <input type="text" class="form-control" name="nome"></input><br>
                </label>
            </div>
  
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
                 <input type="number" class="form-control" name="idade"></input> 
               </label>
            </div>  
          </div>
          <div class="form-group col-md-10">    
                                         <!-- telefone --> 
            <div class="col-md-3">                
               <label for="telefone"> telefone:
               <input type="int" class="form-control" name="telefone"></input></div>
               </label>  
                 
            <div class="col-md-6">         
                                          <!-- email --> 
               <label for="email"> email: 
                 <input type="text" class="form-control" name="email"></input>
               </label> 
            </div> 
              
          </div> 
             
                                            <!-- Clube -->
          
          <div class="col-md-12"> 
             <div class="form-group col-md-10"> <br> 
             <label for="clube"> Clube:  
                <select id="clube" name="clube">
                  
                          @foreach($clube as $clb)
                          <option value="{{$clb->nome}}">{{$clb->nome}} </option>
                        @endforeach
                </select>
              </label>    
              <label> <a href="{{URL::to('clube')}}" title=""><h5>+ Outro clube</h5></a>  </label>   
                       
                                 <!--Categoria -->
        
                 <label for="categoria">Categoria :
                    <tr> 
                      <select name="categoria" id="categoria">  
                         <option value="Sénior">Sénior</option>
                         <option value="Junior">Junior</option> 
                         <option value="Pré-juvenil">Cadete</option>
                         <option value="Benjamin">Benjamin</option>
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
         </div>
               <div class="form-group col-md-6"> 
                <div class="col-md-6"> 
                             <!-- Escalao  --> 
                 <label for="escalao">Escalão de peso :
                  
                    <select name="escalao" id="escalao"> 
                        <option value="+100">+100</option>
                        <option value="-100">-100</option>
                        <option value="-90">-90</option>
                        <option value="-81">-81</option>
                        <option value="+78">+78</option>
                        <option value="-78">-78</option>
                        <option value="-73">-73</option>
                        <option value="-70">-70</option>
                        <option value="-66">-66</option>
                        <option value="-63">-63</option>
                        <option value="-60">-60</option>
                        <option value="-57">-57</option>
                        <option value="-52">-52</option>
                        <option value="-48">-48</option>
                    </select>  
                  </label>  
                 </div>
                              <!-- Peso --> 
               <div class="col-md-3">        
                    <label for="peso">Peso (Kg): 
                        <input type="int" class="form-control" name="peso"></input>
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
    <button type="submit" class="btn btn-success" style="margin-left:38px">Adicionar atleta</button>  
    <!-- -->
  </div>
</form>
 
@endsection