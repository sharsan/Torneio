@extends('admin')
@section('content')
 <title>Registrar vencedores da 1ª luta</title>
<div class="container">  
       <h2>Registrar vencedores da 1ª luta</h2><br> 
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

  <form method="post"  action="{{url('grupo4')}}">

       {{csrf_field()}}   
     <!-- <div class="row">   -->
 <div class="row">
      <div class="form-group col-md-8">    
  
   <div class="row"> 
  
                                           <!-- Concorrente A -->
       
   <label> 
            <div class="col-md-4"> 
                 <label for="A"> A :</label>
                 <input type="text" class="form-control" name="nome"value="{{$grupo4->A}}"></input><br>
                    
            </div>  
        

                                     <!-- Outros detalhes --> 

         <div class="form-group col-md-12">
             <br> <label for="descricao" class="col-sm-2 col-form-label col-form-label-sm">Outros detalhes
               
          <br> <br><textarea name="descricao" rows="8" cols="80"></textarea> 
              </label>
        </div>

   <div class="form-group col-md-4"> 
    <button type="submit" class="btn btn-success" style="margin-left:38px">Adicionar vencedores</button>  
  </div>
</form>
 
@endsection 