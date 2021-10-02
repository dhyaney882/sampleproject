<form method="POST" action="{{url('/addproduct/')}}" enctype="multipart/form-data">
    @csrf
       
        <div >
            <input class="input" type="text" placeholder="productname" name ="productname" required>
            <input class="input" type="text" placeholder="price" name ="price" required>
            
          </div>
           
       
            <button type="submit" >Add Product</button>

        </div>
</form>