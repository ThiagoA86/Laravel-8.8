@extends('layouts.app')
 @section('title',$titulo)


    @section('content')
    <h1>Contato</h1>
      {{Form::open(['url'=>['contato/enviar']])}}
      <div class = "row">
        <div class="col-lg-12">
            {{Form::label('assunto',"Assunto")}}
            {{Form::text('assutno',"",['class'=>'form-control','required','placeholder'=>'Assunto'])}}
            {{Form::label('mensagem',"Mensagem")}}
            {{Form::textarea('mensagem',"",['class'=>'form-control','required','placeholder'=>'Mensagem'])}}
            {{Form::submit('Enviar Mensagem',['class'=>'btn btn-primary mt-3'])}}
        </div>
      </div>
      {{Form::close()}}
    @endsection

