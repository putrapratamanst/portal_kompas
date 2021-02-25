@extends('layouts.app')
@section('content')
<div class="container">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Update Article') }}</div>
    
                    <div class="card-body">
                            {{ Form::open(array('url' => '/article/update/'.$detailArticle->id, 'autocomplete'=>'off', 'method'=>'PUT')) }}

                        <div class="form-group row">
                            {{ Form::label('title', 'Title', ['class'=>"col-md-4 col-form-label text-md-right"]) }}
                            <div class="col-md-6">
                                {{ Form::text('title', $detailArticle->title, ['required',  'placeholder' => 'Please Input Title', 'minlength' => 5, 'class' => 'form-control']) }}
                            </div>
                        </div>
                        <div class="form-group row">
                            {{ Form::label('photo', 'Photo', ['class'=>"col-md-4 col-form-label text-md-right"]) }}
                            <div class="col-md-6">
                                {{ Form::text('photo', $detailArticle->photo, ['required',  'placeholder' => 'Please Input Photo', 'minlength' => 5, 'class' => 'form-control']) }}
                            </div>
                        </div>
                        <div class="form-group row">
                            {{ Form::label('body', 'Body', ['class'=>"col-md-4 col-form-label text-md-right"]) }}
                            <div class="col-md-6">
                                {{ Form::textArea('body', $detailArticle->body, ['required',  'placeholder' => 'Please Input Body', 'class' => 'form-control']) }}
                            </div>
                        </div>
                        <div class="form-group row">
                            {{ Form::label('author', 'Author', ['class'=>"col-md-4 col-form-label text-md-right"]) }}
                            <div class="col-md-6">
                                {{ Form::select('author_id', $listAuthor, $detailArticle->author_id), ['required',  'placeholder' => 'Please Input Author','class' => 'form-control'] }}
                            </div>
                        </div>

                            <div class="form-group row mb-0">        
                                <div class="col-md-8 offset-md-4">
                                    {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
                                </div>
                            </div>

                            {{ Form::close() }}
                    </div>  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<script src="{{asset('assets/ckeditor.js')}}"></script>
<script>
   var konten = document.getElementById("konten");
     CKEDITOR.replace(konten,{
     language:'en-gb'
   });
   CKEDITOR.config.allowedContent = true;
</script>