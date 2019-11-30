
@extends('home.layouts.userMaster')

@section('sub_content')

   <div class='container-fluid margin-top-20'>
                 
                  <div class="card">
                  <div class="card-header">
                      Order Information
                  </div>
                  <div class="card-body">

                      <table class="table table-dark">
                          <thead>
                              <tr>
                                  <th scope="col">Order No</th>
                                  <th scope="col">Product</th>
                                  <th scope="col">Quantity</th>
                                  <th scope="col">Customer Name</th>
                                  <th scope="col">Customer Number</th>
                                  <th scope="col">Customer Selling Price</th>
                                  <th scope="col">Customer Address</th>
                              </tr>
                          </thead>
                          <tbody>
                              @foreach($order as $order)
                              <tr>
                                  <th scope="row">{{$order['id']}}</th>
                                  <td>{{ $order->product->title}}</td>
                                  <td>{{$order['quantity']}}</td>
                                  <td>{{$order['name']}}</td>
                                  <td>{{$order['number']}}</td>
                                  <td>{{$order['price']}}</td>
                                  <td>{{$order['address']}}</td>
                              </tr>

                              @endforeach
                          </tbody>
</table>

                  </div>
                  </div>
                                    
</div>
@endsection