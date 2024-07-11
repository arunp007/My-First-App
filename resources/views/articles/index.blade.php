@extends("layouts.theme")

@section("content")

<a href="/articles/create" class="link" style="font-size: 35px; color: black; font-weight: bold; margin-left: 550px; text-decoration: none;">Add New Article</a><br><br><br><br><br>

@foreach($articles as $article)

<div id="three-column" class="container">
	<div class="title">
		<h2><a href="/articles/{{$article->id}}" class="navigation">{{$article->title}}</a></h2>
		<span class="byline">{{$article->body}}</span>
	</div>

	<a class="btn btn-success" href="/articles/{{$article->id}}/edit">Edit</a>
</div>

@endforeach




@endsection