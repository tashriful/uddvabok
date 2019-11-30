@extends('admin.layouts.master')
      @section('content')
      <div class="main-panel">
          <div class="content-wrapper">
              <div class="card">
                  <div class="card-header">
                      Order Information
                  </div>
                  <div class="card-body">

                      <table class="table table-dark">
                          <thead>
                              <tr>
                                  <th scope="col">Order No</th>
                                  <th scope="col">User Name</th>
                                  <th scope="col">Product Name</th>
                                 
                                  <th scope="col">Customer Name</th>
                                  
                                  <th scope="col"> Selling Price</th>
                                  
                                  
                              </tr>
                          </thead>
                          <tbody>
                              @foreach($order as $order)
                              <tr>
                                  <th scope="row">{{$order['id']}}</th>
                                 
                                  
                                  <td>{{ $order->product->title}}</td>
                                  <td>{{$order['name']}}</td>
                                 
                                  <td>{{$order['price']}}</td>
                                
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
                                      <p>
                                          @if($order->is_paid)
                                          <button type="button" class="btn btn-success btn-sm">Paid</button>
                                          @else
                                          <button type="button" class="btn btn-danger btn-sm">Unpaid</button>
                                          @endif
                                      </p>
                                  </td>
                                  <td>
                                      <a href="{{route('admin.orderShow' , $order->id)}}" class="btn btn-info btn-sm">View Order</a>
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