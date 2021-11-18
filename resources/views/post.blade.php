@extends('layouts/main')

@section('container')

@include('partial/jumbotron')

@section('body')
<article class="mt-4">
  <h2 class="mb-3">{{ $p_post["title"] }}</h2>
  <p> {{ $p_post["body"] }}</p>

  <a  href="/article" class="btn btn-dark"  >back</a> 

</article>
@endsection
{{-- <!-- Jumbotron -->
<div class="megatron megatron-fluid" > </div>
  <!-- akhir Jumbotron --> --}}

@endsection