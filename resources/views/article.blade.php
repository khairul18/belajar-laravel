@extends('layouts/main')

@section('container')

@include('partial/jumbotron')
{{-- <!-- Jumbotron -->
<div class="megatron megatron-fluid" > </div>
<!-- akhir Jumbotron --> --}}
@section('body')
    
    
@foreach ($posts as $type) 
<article class="mt-5">
<h2>
    <a href="/{{ $type["slug"] }}">{{ $type["title"] }} </a>
</h2>
<p>{{ $type["body"] }}</p>    
</article>


@endforeach
@endsection

@endsection

