@extends('layouts.app')

@section('title', '后台导航')

@section('content')
<div class="container my-5">
  <div class="row">
    @foreach($menus as $v)
    <div class="col-60 col-md-30 col-lg-20 mb-3">
      <a href="{{ $v['link'] }}">
        <card>
          <h1>
            {{ $v['title'] }}
          </h1>
        </card>
      </a>
    </div>
    @endforeach
  </div>
</div>
@endsection
