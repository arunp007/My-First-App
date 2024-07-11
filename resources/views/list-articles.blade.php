@extends("layouts.theme")

@section("post")


@foreach($articles as $articles)

<div id="three-column" class="container">
	<div class="title">
		<h2>{{$articles->title}}</h2>
		<span class="byline">{{$articles->body}}</span>
	</div>
</div>

@endforeach




@endsection