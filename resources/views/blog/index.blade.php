@extends('main')
@section('title','| Blog')
@section('content')

<div class="row">
	<div class="col-md-12">
	<h1 class="hh">Blog</h1>
	</div>
</div>

@foreach ($posts as $post)
<div>
	<div class="row">
		<div class="col-md-8 col-md-offset-2 jumbotron ">
				<h2> {{ $post->title }} </h2>
			<h5> Published : {{$post->created_at}} </h5>
			<p>{{substr($post->body, 0, 50) }}{{ strlen($post->body) > 50 ? "..." : ""}}</p>	
			<a href="{{ url('blog/'. $post->slug) }} "  class="btn btn-primary"> Read more  </a>
	
	</div>


</div>

</div>
@endforeach
@endsection