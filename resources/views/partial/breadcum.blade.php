@yield('breadcumb')
<!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
  <div class="container">
      <div class="row">
          <div class="col-lg-12">
              <div class="breadcrumb__links">
                  <a href="/">
                      <i class="fa fa-home"></i> Home</a>
                  <a href="./categories.html">Categories</a>
                  <span>
                      @foreach ($genre as $value)
                      @if ($value->id == $film->genre_id)
                      <span value="{{$value->id}}">{{$value->nama}}</span>
                      @endif
                      @endforeach
                  </span>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- Breadcrumb End -->