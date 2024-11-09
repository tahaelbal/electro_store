
<section class="product_section layout_padding">
   <div class="container">
      <div class="heading_container heading_center">
         {{-- <h2>
            MY <span>Trends</span>
         </h2> --}}
         <section id="container">
            <div class="wrap-container">
              <section class="content-box boxstyle-2 box-2">
                <div class="zerogrid" style="width: 100%;">
                  <div class="row wrap-box">
                    <div class="header">
                      <div class="wrapper">
                        <h2 class="color-yellow">GALLERY</h2>
                        {{-- <hr class="line01"> --}}
                        <div class="intro">Top Products</div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
            </div>
          </section>	    
               
      </div>
      <div class="row">


         @foreach ($product as $products)



         <div class="col-sm-6 col-md-4 col-lg-4">
            <div class="box">
               <div class="option_container">
                  <div class="options">
                     <a href="{{url('product_details',$products->id)}}" class="option2">
                     Product Details
                     </a>
                     {{-- <a href="" class="option2">
                     Buy Now
                     </a> --}}
                  </div>
               </div>
               <div class="img-box">
                  <img src="product/{{$products->image}}" alt="">
               </div>
               <div class="detail-box">
                  <h5 style="color: #0A1172">
                     {{$products->title}}
                  </h5>

                  @if ($products->discount_price!=null)
                  <h6>
                     <span style="color:#0A1172">{{$products->discount_price}}$</span>
                     <span style="text-decoration:line-through;color:dark" >{{$products->price}}$</span>
                  </h6>
                  @else
                     <h6 style="color:green">{{$products->price}}$</h6>
                  @endif
               </div>
            </div>
         </div>
      
      @endforeach
     
      
   </div>
   <div class="btn-box">
      <a href="{{url('products')}}">
      View All products
      </a>
          </div>
</section>