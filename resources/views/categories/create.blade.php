@extends('layouts.app')
@section('content')
<div class="container">
<h2>Create <span class='muted'>Categories</span></h2>
<hr>

@include('categories._form', ['action'=> 'store'])

<p><a href="{{url('categories')}}">Back</a></p>
</div>
@endsection