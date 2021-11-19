@extends('layouts/main')
{{-- <title> DSS | {{ strtoupper($p_post->title) }}</title> --}}
@section('container')

@include('partial/jumbotron')

@section('body')
<article class="mt-5">
  <h2 class="mb-4">{{ strtoupper($p_post->title) }}</h2>
  <p>{!! $p_post->body !!}</p>

  <a  href="/article" class="btn btn-dark"  >back</a> 

</article>
@endsection
{{-- <!-- Jumbotron -->
<div class="megatron megatron-fluid" > </div>
  <!-- akhir Jumbotron --> --}}

@endsection