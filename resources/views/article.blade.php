@extends('layouts/main')

@section('container')

@include('partial/jumbotron')
{{-- <!-- Jumbotron -->
<div class="megatron megatron-fluid" > </div>
<!-- akhir Jumbotron --> --}}
@section('body')
    
    
@foreach ($posts as $type) 
<article class="mt-5">
<h2 class="mb-3">
    <a class="text-dark" href="/{{ $type->slug  }}">{{ strtoupper($type->title) }} </a>
</h2>
<p>{{ $type->excerpt  }} <a href="/{{ $type->slug  }}">more</a></p>    
<br>
<hr> 
</article>


@endforeach
@endsection

@endsection

