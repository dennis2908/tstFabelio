  @include('header')
    <body>
            <div class="content">
			  <div class="col-md-12">
                 <label><h2>All Product</h2></label>
              </div> 
			  <div class="col-md-12">
                 <h3><a class="fa fa-plus" href="{{route('product.formInsert')}}" style="color:green"> Add Product</a></h3>
              </div> 
			  <div class="col-md-10">
                <table class="table table-list">
				 <thead>
				 <th>#</th><th>Action</th><th>Product Name</th><th>Product Price</th><th>Product Description</th>
				 </thead>
				 <tbody>
				 @foreach($data as $k=>$v)
				    <tr><th>{{$k+1}}</th><th><a href="{{url('getDetail')}}/{{$v->id}}"><span class="fa fa-eye"></span> View</a></th><th>{{$v->prodName}}</th><th style="text-align:right">{{number_format($v->prodPrice,0,'.',',')}}</th><th>{{$v->prodDesc}}</th></tr>
				 @endforeach
				 </tbody>
				</table>
			 </div>	
            </div>
    </body>
 @include('footer')
