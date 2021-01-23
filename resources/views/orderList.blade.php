@extends('master')

@section('content')
<div class="custom-product">
          <div class="col-sm-10">
            <div class="col-sm-4">
                <div class="tranding-wrapper container">
                    
                    <div class="">
                      @foreach ($orders as $item)
                      <div class="row searched-items cart-item-divider">
                          <div class="col-sm-3">
                                <img class="trending-img" src="{{$item->gallery}}">
                          </div>
                          <div class="col-sm-4">
                                
                                <div>
                                  <h4>Name: {{$item->name}}</h4>
                                  <h6>Payment Method: {{$item->payment_method}}</h6>
                                  <h6>Delivery Status: {{$item->status}}</h6>
                                  <h6>Payment Status: {{$item->payment_status}}</h6>
                                  <h6>Address: {{$item->address}}</h6>
                               </div>
                          </div>
                        
                     </div> 
                     @endforeach
                    </div>
                    <br> <br>
                </div>
              </div> 

          </div>
          
</div>

    
@endsection