@extends('master')

@section('content')
<div class="custom-product">
          <div class="col-sm-10">
            <div class="col-sm-4">
                <div class="tranding-wrapper container">
                    <a class="btn btn-success" href="order">Order now</a> <br><br>
                    <div class="">
                      @foreach ($products as $item)
                      <div class="row searched-items cart-item-divider">
                          <div class="col-sm-3">
                            <a href="details/{{$item->id}}">
                                <img class="trending-img" src="{{$item->gallery}}">
                              </a>
                          </div>
                          <div class="col-sm-4">
                            <a href="details/{{$item->id}}">
                                
                                <div>
                                  <h4>{{$item->name}}</h4>
                                  <h6>{{$item->description}}</h6>
                               </div>
                              </a>
                          </div>
                          <div class="col-sm-3">
                            <a href="/removeItem/{{$item->cart_id}}" class="btn btn-warning">Remove Item</a>
                          </div>
                        
                     </div> 
                     @endforeach
                    </div>
                    <br> <br>
              <a class="btn btn-success" href="order">Order now</a> <br><br>
                </div>
              </div> 

          </div>
          
</div>

    
@endsection