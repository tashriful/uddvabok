@extends('supplier.layouts.master')
      @section('content')
      
      <div class="main-panel">
          <div class="content-wrapper">
              <div class="card">
                  <div class="card-header">
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
                                  <td>
                                      <p>
                                          @if($order->is_delivered)
                                          <button type="button" class="btn btn-success btn-sm">Delivered</button>
                                          @else
                                          <button type="button" class="btn btn-primary btn-sm">Deliver</button>
                                          @endif
                                      </p>
                                      <p>
                                          @if($order->is_canceled)
                                          <button type="button" class="btn btn-danger btn-sm">Canceled</button>
                                          @else
                                          <button type="button" class="btn btn-warning btn-sm">Cancel</button>
                                          @endif
                                      </p>
                                  </td>
                                  <td>
                                      <a href="{{route('supplier.orderShow' , $order->id)}}" class="btn btn-info btn-sm">View Order</a>
                                  </td>
                              </tr>

                              @endforeach
                          </tbody>
</table>
                     
                     
                  </div>
              </div>


          </div>
      </div>
      <!-- main-panel ends -->


      @endsection