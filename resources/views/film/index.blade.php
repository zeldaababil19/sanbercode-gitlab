@extends('layout.master')

@section('content')

<!-- Product Section Begin -->
<section class="product spad">
    <div class="container">
        <a href="film/create" class="btn btn-primary btn-sm mb-3">Tambah Anime</a>
        <div class="row">
            <div class="col-lg-8">
                <div class="trending__product">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <div class="section-title">
                                <h4>All Show</h4>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                      @foreach ($film as $value)
                      <div class="col-lg-4 col-md-6 col-sm-6">
                          <div class="product__item">
                              <div class="product__item__pic set-bg" data-setbg="{{asset('img/'.$value->poster)}}">
                                  <div class="ep">eps 18 / 18</div>
                                  <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                  <div class="view"><i class="fa fa-calendar"></i> {{$value->tahun}}</div>
                              </div>
                              <div class="product__item__text">
                                <ul>
                                    <li>
                                        @foreach ($genre as $item)
                                        @if ($item->id == $value->genre_id)
                                        <span value="{{$item->id}}">{{$item->nama}}</span>
                                        @endif
                                        @endforeach
                                    </li>
                                </ul>
                                  <h5><a href="/film/{{$value->id}}">{{$value->judul}}</a></h5>
                              </div>
                              <div>
                              <form action="/film/{{$value->id}}" method="POST">
                                <a href="/film/{{$value->id}}" class="btn btn-info">Show</a>
                                <a href="/film/{{$value->id}}/edit" class="btn btn-primary">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" class="btn btn-danger my-1" value="Delete">
                                </form>
                            </div>
                          </div>
                      </div>
                      @endforeach
                  </div>
              </div>
              
          </div>
          @include('partial.sidebar')
        </div>
  </div>
</section>
<!-- Product Section End -->
@endsection