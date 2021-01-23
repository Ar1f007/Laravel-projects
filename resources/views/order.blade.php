@extends('master')
@section('content')
<div class="custom-product">
    <div class="col-sm-10">
        <table class="table">
            <tbody>
              <tr>
                <td>Amount</td>
                <td>{{$total}}</td>
              </tr>
              <tr>
                <td>Tax</td>
                <td>$ 0</td>
              </tr>
              <tr>
                <td>Delivery Charge</td>
                <td>$10.00</td>
              </tr>
              <tr>
                <td>Total Amount</td>
                <td>${{$total+10}}</td>
              </tr>
            </tbody>
          </table>
          <div class="col-sm-4">
            <form action="/orderplace" method="post" >
              @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">Address</label>
                  <textarea name="address"  class="form-control" aria-describedby="emailHelp" placeholder="Enter address" id="exampleInputEmail1" cols="5" rows="2"></textarea>
                  
                </div>
                <div class="form-group">
                  <label for="payment">Payment Method</label> <br>
                  <input type="radio" name="payment" value="cash"><span>Online</span> <br>
                  <input type="radio" name="payment" value="cash"><span>EMI payment</span> <br>
                  <input type="radio" name="payment" value="cash"><span>Cash on Delivery</span> <br>
                </div>
                <button type="submit" class="btn btn-primary">Order now</button>
              </form>
          </div>
         
    </div>
    
</div>
@endsection