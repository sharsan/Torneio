@extends('admin')
@section('content')
<title>Torneios </title>
  <div class="container">
  <h3><center><th>Torneiros</th></center> </h3>
    <table class="table table-striped"> 
  <a href="{{URL::to('torneio/create')}}" title=""><h4>Adicionar torneio</h4></a>
    <thead>
      <tr>
        <th>ID</th>
        <th>Evento</th>
        <th>Estado</th> 
        <th>Inicio</th>
        <th>Término</th>
        <th>Participantes</th>
        <th>rapazes</th>
        <th>raparigas</th>
        <th>desclassificados</th> 
        <th>Criado em</th>
        <th>Actualizado em</th> 
      </tr>
    </thead>
    <tbody>
      @foreach($torneio as $post)
      <tr>
        
        <td>{{$post['id']}}</td>
        <td>{{$post['nome']}}</td>
        <td>{{$post['estado']}}</td>
        <td>{{$post['datai']}}</td>
        <td>{{$post['datat']}}</td>
        <td>{{$post['participantes']}}</td>
        <td>{{$post['rapazes']}}</td>
        <td>{{$post['raparigas']}}</td>
        <td>{{$post['desclassificados']}}</td> 
        <td>{{$post['created_at']}}</td>
        <td>{{$post['updated_at']}}</td>

        <td><a href="{{action('TorneioController@edit', $post['id'])}}" class="btn btn-success">Editar</a></td>
        <td>
          <form action="{{action('TorneioController@destroy', $post['id'])}}" method="post">
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