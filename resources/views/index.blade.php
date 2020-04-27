@extends('layouts.master')


@section('content')

@include('layouts.carousel1')
</br>

   <div class="row mb-2">

    @foreach($top as $t)
    <div class="col-md-12">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <a  href="{{ route('catshow', $t->category_id) }}"class="d-inline-block mb-2 text-category">{{ $t->cats['name'] ?? '-- unset--' }}</a>
          <a href="{{ route('postshow', $t) }}"><h3 class="mb-0" >{{ $t->title }}</h3></a>
          <div class="mb-1 text-muted">{{ $t->created_at->diffForHumans() }}</div>
          <p class="card-text mb-auto">{{ \Str::words($t->preview, 40)}}</p>
          <a href="{{ route('postshow', $t) }}" class="stretched-link">كمل قراية</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <a href="{{ route('postshow', $t) }}">
          <img src="{{ asset('/public/storage/'.$t->prv_img) }}" class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail" ><title>Placeholder</title><rect href="{{ route('postshow', $t) }}" width="100%" height="100%" fill="#55595c"/></img>
        </a>
        </div>


      </div>
    </div>
    @endforeach
  </div>
  {{ $top->links() }}



@endsection