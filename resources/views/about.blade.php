@extends("layouts.app")
@section("title","About Us")
@section("page-content")
<p>Welcome to about us page...</p>

<ul>
    <li>Items-1</li>
    <li>Items-2</li>
    <li>Items-3</li>
</ul>

{{$message}}

{{$total_price}}

<ul>

@foreach($items as $item)

<li>{{$item}}</li>

@endforeach

</ul>

@if (1==1)

    <h6>Yes</h6>

@else

    <h6>No</h6>

@endif

<h6>{{$id}}</h6>

<h6>{{$name}}</h6>



@endsection