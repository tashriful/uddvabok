
@extends('home.layouts.userMaster')

@section('sub_content')

   <div class='container-fluid margin-top-20'>
                 
                  <div class="card">
                  <div class="card-header">
                      Payable Account List
                  </div>
                  <div class="card-body">

                      <table class="table table-dark">
                          <thead>
                              <tr>
                                  <th scope="col">Order No</th>
                                  <th scope="col">Product Name</th>
                                  <th scope="col">Payable Ammount</th>
                                  <th scope="col">Status</th>
                                  
                              </tr>
                          </thead>
                          <tbody>
                              @foreach($order as $order)
                              <tr>
                                  <th scope="row">{{$order['id']}}</th>
                                  <td>{{ $order->product->title}}</td>
                                  <td>
                                  
                                  {{$order['price']}}
                                  -
                                  {{ \App\product::where(['id' => $order->product_id])->pluck('My_Price')->first() }}
                                  =
                                  {{ $order['price']- \App\product::where(['id' => $order->product_id])->pluck('My_Price')->first() }}
                                  </td>
                                  <td>
                                      <p>
                                          @if($order->is_paid)
                                          <button type="button" class="btn btn-success btn-sm">Paid</button>
                                          @else
                                          <button type="button" class="btn btn-danger btn-sm">Unpaid</button>
                                          @endif
                                      </p>
                                  </td>
                              </tr>

                              @endforeach
                          </tbody>
</table>

                  </div>
                  </div>
                                    
</div>
@endsection