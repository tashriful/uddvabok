@extends('supplier.layouts.master')
@section('content')

<div class="main-panel">
    <div class="content-wrapper">
        <div class="card">
            <div class="card-header">
            </div>
            <div class="card-body">
                <h3>Supplier Accounts</h3>
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
                                 
                                  {{ \App\product::where(['id' => $order->product_id])->pluck('price')->first() }}
                                  
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
      </div>
      <!-- main-panel ends -->


      @endsection