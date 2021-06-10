@extends('layout.master')

@section('content')

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="/"><i class="fa fa-home"></i> Home</a>
                        <a href="/genre">Genre</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Product Section Begin -->
    <section class="product-page spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    @foreach ($genre as $item)
                    <div class="product__page__content">
                        <div class="product__page__title">
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-6">
                                    <div class="section-title">
                                        
                                            
                                        
                                        <h4>{{$item->nama}}</h4>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="row">
                            @foreach ($film as $value)
                                
                            @if ($item->id == $value->genre_id)
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    
                                    <div class="product__item__pic set-bg" data-setbg="{{asset('img/'.$value->poster)}}">
                                        <div class="ep">eps {{$value->eps}}</div>
                                        <div class="comment"><i class="fa fa-comments"></i></div>
                                        <div class="view"><i class="badge badge-primary"></i>{{$value->tahun}}</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Active</li>
                                            <li>Movie</li>
                                        </ul>
                                        <h5><a href="/film/{{$value->id}}">{{$value->judul}}</a></h5>
                                        <br>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach
                            
                        </div>
                    </div>
                    @endforeach
                    
                </div>
                @include('partial.sidebar')
                
            </div>
        </div>
</section>
<!-- Product Section End -->

@endsection