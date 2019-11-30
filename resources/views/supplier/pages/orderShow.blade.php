@extends('supplier.layouts.master')
      @section('content')
      
      <div class="main-panel">
          <div class="content-wrapper">
              <div class="card">
                  <div class="card-header">
                  </div>
                  <div class="card-body">
                      <h3>Order Information</h3>
                <table border="0">
                    <tr>
                        <td>Product Name :</td>
                        <td>{{ $order->product->title}}</td>
                    </tr>
                    
                    <tr>
                        <td>Quantity :</td>
                        <td>{{ $order->quantity}}</td>
                    </tr>
                    <tr>
                        <td>Price :</td>
                        <td>{{ $order->price}}</td>
                    </tr>
                    <tr>
                        <td>Customer Name :</td>
                        <td>{{ $order->name}}</td>
                    </tr>
                    
                    <tr>
                        <td>Customer Number :</td>
                        <td>{{ $order->number}}</td>
                    </tr>
                    <tr>
                        <td>Customer Address :</td>
                        <td>
                            {{ $order->address}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <form action="{{route('supplier.completeOrder' , $order->id)}}" method="post">
                                @csrf
                                @if($order->is_delivered)
                                <input type="submit" class="btn btn-success" name="complete" value="Delivered">
                                @else
                                <input type="submit" class="btn btn-primary" name="complete" value="Pending Order">
                                @endif
                            </form>
                        </td>
                        <td>
                            <form action="{{route('supplier.cancelOrder', $order->id)}}" method="post">
                                @csrf

                                @if($order->is_canceled)
                                <input type="submit" class="btn btn-danger" name="complete" value="Cancelled">
                                @else
                                <input type="submit" class="btn btn-danger" name="complete" value="Cancel Order">
                                @endif
                            </form>

                        </td>
                    </tr>
                </table>
                     
                     
                  </div>
              </div>


          </div>
      </div>
      <!-- main-panel ends -->


      @endsection