<div class="container">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      @foreach( $carousel as $c )
    <li data-target="#myCarousel" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
    @endforeach
    </ol>
    <div class="carousel-inner">
@foreach($carousel as $c)
      <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
        <img src="{{ asset('/public/storage/'.$c->img) }}" class="d-block w-100" alt="{{ $c->desc }}" width="1200" height="600">
        <div class="container">
          <div class="carousel-caption text-category text-rights">
            <h5>{{ $c->desc }} </h5>

            <p><a class="btn btn-lg btn-info" href=" {{ route('gallery') }}" role="button">Browse gallery</a></p>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
