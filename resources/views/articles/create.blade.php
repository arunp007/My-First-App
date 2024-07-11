@extends("layouts.theme")

@section("content")

<form method="post" action="/articles">
    @csrf
    <div class="form-group">
    <h1>Add Articles</h1>
    </div>
    <div class="form-group">
        <input type="text" class="form-control" name="title" id="" placeholder="Enter your title">
    </div>
    
    @error("title")

    <p style="color: red;">{{$errors->first('title')}}</p>

    @enderror

    <div class="form-group">
        <textarea class="form-control" name="body" id="" placeholder="Enter your content"></textarea>
    </div>

    @error("body")

    <p style="color: red;">{{$errors->first('body')}}</p>

    @enderror

    <div class="form-group">
        <textarea class="form-control" name="description" id="" placeholder="Enter your description"></textarea>
    </div>

    @error("description")

    <p style="color: red;">{{$errors->first('description')}}</p>

    @enderror

    <button class="btn btn-dark">Enter</button>
</form>

@endsection