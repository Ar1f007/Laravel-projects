@extends('master')

@section('content')
<div class="custom-product">
          <div class="col-sm-4">
              <a href="#">Filter</a>
          </div>
          <div class="col-sm-4">
            <div class="tranding-wrapper container">
                <h4>Result for Products</h4>
                <div class="">
                  @foreach ($products as $item)
                  <div class="searched-items">
                    <a href="details/{{$item->id}}">
                    <img class="trending-img" src="{{$item['gallery']}}">
                    <div>
                      <h4>{{$item['name']}}</h4>
                      <h6>{{$item['description']}}</h6>
                   </div>
                  </a>
                 </div> 
                 @endforeach
                </div>
            </div>
          </div>
          
</div>

    
@endsection