<form class="form-inline" action="{{route('home.userOrderButton')}}" method="post">
 @csrf
    
   <input type="hidden" name="product_id" value="{{ $product->id }}">
    <input type="hidden" name="uploader_id" value="{{ $product->user_id }}">    
             
  <button type="submit" value="submit" class="btn btn-dark">Order</button>  
    
</form>



