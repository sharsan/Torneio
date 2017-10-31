@extends('admin')
@section('content')
<title>Vencedores</title>
<div class="container"> 
 <h3><center><th>Vencedores por escalões</th></center> </h3>

  <table class="table table-striped">  
    <thead>   <a href="{{URL::to('vencedor/create')}}" title=""><h4>+ Categoria de vencedores</h4></a>
      <thead>
        <tr>
          <th>ID</th> 
          <th>Nome do campeonato</th>
          <th>Escalão</th> 
          <th>1º lugar</th>
          <th>2º lugar</th>
          <th>3º lugar</th>
          <th>3º lugar</th>
          <th>Júri</th>
          <th>Criado em</th>
          <th>Actualizado em</th>  
        </tr>
      </thead>
      <tbody>
        @foreach($vencedor as $post)
        <tr>
          <td>{{$post['id']}}</td>
          <td>{{$post['nome']}}</td>
          <td>{{$post['escalao']}}</td>
          <td>{{$post['primeiro']}}</td>
          <td>{{$post['segundo']}}</td>
          <td>{{$post['terceiro']}}</td>
          <td>{{$post['terceiro2']}}</td>
          <td>{{$post['juri']}}</td>
          <td>{{$post['created_at']}}</td>
          <td>{{$post['updated_at']}}</td> 

          
         <td><a href="{{action('VencedorController@edit', $post['id'])}}" class="btn btn-warning">Editar</a></td>
        <td>
          <form action="{{action('VencedorController@destroy', $post['id'])}}" method="post">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Apagar</button>
          </form>
        </td>

        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  @endsection