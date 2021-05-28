
<div class="col-lg-4 col-md-6 col-sm-8">
  <div class="product__sidebar">
      
    <div class="product__sidebar__comment">
      <div class="section-title">
        <h5>SideBar</h5>
      </div>

      @foreach ($films as $value)
      <div class="product__sidebar__comment__item">
        <div class="product__sidebar__comment__item__pic">
          <img src="{{asset('img/'.$value->poster)}}" alt="">
        </div>
        <div class="product__sidebar__comment__item__text">
          <ul>
            <li>
              @foreach ($genres as $item)
              @if ($item->id == $value->genre_id)
              <span value="{{$item->id}}">{{$item->nama}}</span>
              @endif
              @endforeach
            </li>
          </ul>
          <h5><a href="#">{{$value->judul}}</a></h5>
          <span>{{$value->tahun}}</span>
        </div>
      </div>
      @endforeach

    </div>
  </div>
</div>