@extends("layouts.theme")

@section("content")

<form method="post" action="/articles/{{$article->id}}">
    @csrf
    @method('PUT')
    <div class="form-group">
    <h1>Add Articles</h1>
    </div>
    <div class="form-group">
        <input type="text" class="form-control" name="title" id="" value="{{$article->title}}" placeholder="Enter your title">
    </div>

    <div class="form-group">
        <input type="text" class="form-control" name="body" id="" value="{{$article->body}}" placeholder="Enter your content"></input>
    </div>

    <div class="form-group">
        <input type="text" class="form-control" name="description" id="" value="{{$article->description}}" placeholder="Enter your description"></input>
    </div>

    <button class="btn btn-dark">Enter</button>
</form>

@endsection