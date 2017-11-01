@extends('admin')
@section('content')
<title>Competidores </title>
  <div class="container">
  <h3><center><th>Inscrições</th></center> </h3>
    <table class="table table-striped"> 
  <a href="{{URL::to('competicao/create')}}" title=""><h4>Adicionar competidor</h4></a>
    <thead>
      <tr>
        <th>ID</th>
        <th>Evento</th>
        <th>Candidato</th>  
        <th>Criado em</th>
        <th>Actualizado em</th> 
      </tr>
    </thead>
    <tbody>
      @foreach($competicao as $post)
      <tr>
        <td>{{$post['id']}}</td>
        <td>{{$post['nome']}}</td>
        <td>{{$post['competidor']}}</td>  
        <td>{{$post['created_at']}}</td>
        <td>{{$post['updated_at']}}</td>

        <td><a href="{{action('CompeticaoController@edit', $post['id'])}}" class="btn btn-warning">Editar</a></td>
        <td>
          <form action="{{action('CompeticaoController@destroy', $post['id'])}}" method="post">
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