@extends('supplier.layouts.master')
      @section('content')
      
      <div class="main-panel">
          <div class="content-wrapper">
              <div class="card">
                  <div class="card-header">
                      Show Product
                  </div>
                 
                       @include('supplier.layouts.validationError')

                      <table class="table table-dark">
                          <thead>
                              <tr>
                                  <th scope="col">Title</th>
                                  <th scope="col">Price</th>
                                  <th scope="col">Quantity</th>
                                  <th scope="col">Status</th>
                                  <th scope="col">Description</th>
                                  <th scope="col">Action</th>
                              </tr>
                          </thead>
                          <tbody>
                              @foreach($products as $product)
                              <tr>
                                  <th scope="row">{{$product['title']}}</th>
                                  <td>{{$product['price']}}</td>
                                  <td>{{$product['quantity']}}</td>
                                  <td> @if( $product['status'] == 0)
                                  Deactive
                                  @endif
                                  @if( $product['status'] == 1)
                                  Active
                                  @endif
                                  </td>
                                  <td>{{$product['description']}}</td>
                                  <td>
                                       <a href="{{ route('supplier.productEdit' , $product->id) }}" >Update</a> |
                                      <!-- Button trigger modal -->
                                      
                                      <!-- Modal -->
                                      <!--<div class="modal fade" id="deleteModal{{ $product->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                          <div class="modal-dialog" role="document">
                                              <div class="modal-content">
                                                  <div class="modal-header">
                                                      <h5 style="color:black;" class="modal-title" id="exampleModalLabel">Are you want to delete??</h5>
                                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                          <span aria-hidden="true">&times;</span>
                                                      </button>
                                                  </div>
                                                  <div class="modal-body">
                                                      <form action="{{ route('supplier.product.delete', $product->id)}}" method="post">
                                                        {{ csrf_field() }}   
                                                          
                                                          <button type="submit" class="btn btn-danger" >Delete</button>-->
                                                          
                                                      </form>
                                                      <!--<div class="modal-footer">
                                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                      </div>-->
                                                  </div>
                                                
                                              </div>
                                          </div>
                                      </div>



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