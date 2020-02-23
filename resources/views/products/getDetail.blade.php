  @include('header')
    <body>
            <div class="content">
    				<div class="col-md-12">
                      <label><h2>Detail Product</h2></label>
                    </div>
                    <div class="col-md-6">
                      <label>Product Name</label>
                      <label class="form-control">{{$data->prodName}}</label>
                    </div>	
					<div class="col-md-4">
                      <label>Product Price</label>
                      <label class="form-control">{{$data->prodPrice}}</label>
                    </div>
					<div class="col-md-4">
                      <label>Product Description</label>
					  <label style="height:220px" class="form-control">{{$data->prodDesc}}</label>
                    </div>
					<div class="col-md-12" style='margin-top:10px'>
                      <a href="{{route('product.allData')}}" class="btn btn-lg btn-apecsa-red">
                        <i class="fa fa-globe"></i>
                        All Data
                      </a>
                    </div>
            </div>
    </body>
 @include('footer')
