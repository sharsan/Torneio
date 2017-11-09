@extends('layouts.app')
@section('content')
<div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
 
 </div>  
           <div class="form-group row"><center>
<a href="{{URL::to('eventos')}}" title="" class="btn btn-warning"><h4>Eventos</h4></a>

<a href="{{URL::to('resultados')}}" title="" class="btn btn-warning"><h4>Resultados</h4></a> 
                                       </center>  
         </div>
      </div> 
 <center>
 <img src="{{URL::asset('/image/judo.png')}}" alt="profile Pic" height="500" width="750">
 </center>
@endsection
