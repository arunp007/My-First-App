@extends("layouts.theme")

@section("content")

<h1 style="font-size: 50px; text-align: center; margin-bottom: 35px !important; margin-right: 140px;">{{$article -> title}}</h1>

<p style="font-size: 25px; text-align: center;">{{$article -> body}}</p>

<form method="post" action="/articles/{{$article->id}}">
    @csrf
    @method('DELETE')
    <center><button type="submit" class="btn btn-danger" onclick="return confirm('are you sure')">Delete Article</button></center>
</form>

@endsection