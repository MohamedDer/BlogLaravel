@extends('main')

@section('title','| Create new post')

@section('content')
	<div class="row">
		<div class="col -md-8 col-mdoffset-2" >
			<h1>Create new post </h1>
			<hr>
			{!! Form::open(array('route' => 'posts.store')) !!}
			   {{ Form::label('title','Title:')}}
			   {{ Form::text('title',null,array('class'=>'form-control'))}}

			   {{  Form::label('slug','Slug:') }}
			   {{ Form::text('slug',null, array('class'=>'form-control','required'=>'','minlength'=>'5','maxlength'=>'255')) }}

			   {{ Form::label('body','Post Body:')}}
  			{{ Form::textarea('body',null,array('class'=>'form-control','required'=>'','minlength'=>'5')) }}


  				{{ Form::submit('Create new post',array('class'=>'btn btn-success btn-lg'))}}

			{!! Form::close() !!}
		</div>


	</div>



@endsection 
