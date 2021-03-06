@extends('admin')
@section('content')
<title>Lutas</title>
<div class="container"> 
 <h3><center><th>Lutas por escalões</th></center> </h3>

 <table class="table table-striped">  
  <thead>   <a href="{{URL::to('luta34/create')}}" title=""><h4>+ lutas</h4></a>
    <thead>
      <tr>
        <th>ID</th> 
        <th>Escalão</th> 
        <th>Atleta 1</th>
        <th>Atleta 2</th> 
        <th>Júri</th>
        <th>Vencedor</th>
        <th>Criado em</th>
        <th>Actualizado em</th>  
      </tr>
    </thead>
    <tbody>
      @foreach($luta34 as $post)
      <tr>
        <td>{{$post['id']}}</td> 
        <td>{{$post['escalao']}}</td>
        <td>{{$post['atleta3']}}</td>
        <td>{{$post['atleta4']}}</td>
        <td>{{$post['juri']}}</td>
        <td>{{$post['vencedor']}}</td> 
        <td>{{$post['created_at']}}</td>
        <td>{{$post['updated_at']}}</td> 


        
        <td><a href="{{action('Luta34Controller@edit', $post['id'])}}" class="btn btn-warning">Editar</a></td>
        <td>
          <form action="{{action('Luta34Controller@destroy', $post['id'])}}" method="post">
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