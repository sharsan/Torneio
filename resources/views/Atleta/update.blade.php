@extends('admin')
@section('content')
 <title>Registrar atleta </title>
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
    <div class="form-group row">
        {{csrf_field()}} 

                          
       <div class="row">
           <div class="form-group col-md-6">  
            
                            <!-- Apelido -->
             <div class="col-md-6">
                <label for="apelido">Apelido:
                  <input type="text" class="form-control" name="apelido"></input>
                </label>
             </div>
                             <!-- Nome -->
             <div class="col-md-16">
                <label for="name">Nome :
                    <input type="text" class="form-control" name="nome"></input> 
                </label>
             </div>
           </div>
                              <!-- Clube -->
          
           <div class="col-md-12"> 
               <div class="form-group col-md-10"> <br>
                 <label for="clube">Clube:
                   <tr>   
                    <select name="clube" id="clube"> 
                      <option value="Outro">--OUTRO--</option>
                      <option value="Cidade da Matola">Cidade da Matola</option>
                      <option value="EDM">EDM</option>
                      <option value="Maria Clara">Maria Clara</option>
                      <option value="Naval">Naval</option>
                      <option value="Nyamunda">Nyamunda</option>
                      <option value="7 de Setembro">7 de Setembro</option>
                    </select> 
                    </tr>  
                 </label>
                       
                                 <!--Categoria -->
        
                 <label for="categoria">Categoria :
                    <tr> 
                      <select name="categoria" id="categoria">  
                         <option value="Sénior">Sénior</option>
                         <option value="Junior">Junior</option>
                         <option value="Juvenil">Juvenil</option>
                         <option value="Pré-juvenil">Pré-juvenil</option>
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
        
               <div class="form-group col-md-12"> 
                
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
                              <!-- Peso --> 
                      
                  <label for="peso">Peso (Kg): 
                     <input type="int" class="form-control" name="peso"></input>
                  </label>   
                      
                               <!-- Sexo --> 
                  <label for="sexo">Sexo : 
                    <select name="sexo" id="sexo"> 
                       <option value="M">M</option>
                       <option value="F">F</option> 
                    </select>     
                  </label>  
                  </div>
                </div>   
 
                            <!-- Idade  -->
                                 
        <div class="col-md-12"> 
            <div class="form-group col-md-1">
               <label for="idade">Idade:
                   
                   <input type="number" class="form-control" name="idade"></input> 
                 
               </label>  
             </div>
          
             <div class="form-group col-md-6">
                                     <!-- email --> 
             <div class="col-md-6">
                <label for="email">email:
                     <input type="text" class="form-control" name="email"></input>
                </label>    
             </div>
                                     <!-- telefone --> 
             <div class="col-md-16">                         
                <label for="telefone">telefone:
                   <input type="int" class="form-control" name="telefone"></input>
                </label>  
              </div>
         </div>      
                                    <!-- Outros detalhes --> 

         <div class="form-group col-md-12">
              <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Outros detalhes
                <br>
                   <textarea name="nota" rows="8" cols="80"></textarea> 
              </label>
        </div>

   <div class="form-group col-md-4"><br>
    <button type="submit" class="btn btn-success" style="margin-left:38px">Adicionar atleta</button>  
    <!-- -->
  </div>
</form>
 
@endsection