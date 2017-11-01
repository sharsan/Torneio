@extends('admin')
@section('content')
<title>Grupos</title>
<div class="container">  
  <h3><center><th>Grupos</th></center> </h3>
  <table class="table table-striped">  
<nav class="navbar navbar-light" style="background-color: #e3f2fd;">
  <!-- Navbar content -->
</nav> 
  <div class="col-lg-4">
    <div class="input-group">
      <input type="text" class="form-control" placeholder="Insira a palavra a pesquisar..." aria-label="pesquisar">
      <span class="input-group-btn">
        <button class="btn btn-secondary" type="button">Buscar!</button>
      </span>
    </div>
  </div>
    
  <div class="row">  <!--  este div inseri pra separa o Search com o restante -->
    <thead>    

    <div class="form-group col-md-4"> <br>
     <a href="{{URL::to('grupo4/create')}}" title=""><h4> Adicionar grupo</h4></a> 
 
      <thead>
        <tr>
          <th>ID</th> 
          <th>Nome do campeonato</th>
          <th>Escalão</th> 
          <th>Atleta A </th>
          <th>Atleta B </th>
          <th>Atleta C </th>
          <th>Atleta D </th>
          <th>Júri</th>
          <th>Criado em</th>
          <th>Actualizado em</th>  
        </tr>
      </thead>
      <tbody>
        @foreach($grupo4 as $post)
        <tr>
          <td>{{$post['id']}}</td>
          <td>{{$post['nome']}}</td>
          <td>{{$post['escalao']}}</td>
          <td>{{$post['A']}}</td>
          <td>{{$post['B']}}</td>
          <td>{{$post['C']}}</td>
          <td>{{$post['D']}}</td>
          <td>{{$post['juri']}}</td>
          <td>{{$post['created_at']}}</td>
          <td>{{$post['updated_at']}}</td> 

          
         <td><a href="{{action('Grupo4Controller@edit', $post['id'])}}" class="btn btn-success">Editar</a></td>
        <td>
        <form action="{{action('Grupo4Controller@destroy', $post['id'])}}" method="post">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Apagar</button>
          </form>
        </td>
      </div>  <!--  este div inseri pra separa o Search com o restante -->
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  @endsection