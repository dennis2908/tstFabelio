  @include('header')
    <body>
            <div class="content">
                <form action="{{route('product.insertData')}}" method="post">
				    {{ csrf_field() }} 
					<div class="col-md-12">
                      <label><h2>Form Insert Product</h2></label>
                    </div>
					<div class="col-md-12">
					  @if($errors->any())
						<label style='color:red'>{{$errors->first()}}</label>
					  @endif 
                    </div>
                    <div class="col-md-6">
                      <label for="prodName">Product Name</label>
                      <input type="text" class="form-control" name="prodName" placeholder="Product Name" required>
                    </div>
					
					<div class="col-md-4">
                      <label for="prodPrice">Product Price</label>
                      <input type="number" class="form-control" name="prodPrice" placeholder="Product Price" required>
                    </div>
					<div class="col-md-4">
                      <label for="prodDesc">Product Description</label>
					  <textarea class="form-control" cols="10" rows="10" placeholder="Product Description" name="prodDesc" required></textarea>
                    </div>
					<div class="col-md-12" style="margin-top:10px">
                      <button type="submit" style="margin-right:20px" class="btn btn-lg btn-apecsa-red">
                        <i class="fa fa-send"></i>
                        Insert
                      </button>
					  <a href="{{route('product.allData')}}" class="btn btn-lg btn-apecsa-red">
                        <i class="fa fa-globe"></i>
                        All Data
                      </a>
                    </div>
				 </form>	
            </div>
    </body>
 @include('footer')
