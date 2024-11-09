<!DOCTYPE html>
<html>
  <head>
      <!-- Basic -->
      <base href="/public">
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="Home/images/icon.png" type="">
      <title>ELECTRO STORE</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="Home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="Home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="Home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="Home/css/responsive.css" rel="stylesheet" />
      <style>
        .details-snippet1 {
        color: #585656;
        }

        /* Main text uses this styling and color */
        .details-snippet1 .theme-text {
            color: #0A1172;
            font-weight: bold;
        }

        .details-snippet1 .mini-preview img {
            border: 1px solid #585656;
            border: 1px solid #0A1172;
            margin-bottom: 8px;
        }

        .details-snippet1 .title {
            color: #464343;
            font-weight: bold;
            font-size: 2rem;
        }

        .details-snippet1 .price {
            font-weight: bold;
            font-size: 1.8rem;
        }

        .details-snippet1 .original-price {
            font-weight: normal;
            font-size: 20px;
        }

        .brief-description {
            /* color: #585656; */
            color: #464343;
        }


        .select-colors .color {
            display: inline-block;
            border: 1px solid grey;
            height: 35px;
            width: 35px;
            border-radius: 50%;
            margin-right: 5px;
            background-color: black;
        }

        .select-colors .color.red {
            background-color: red;
        }

        .select-colors .color.silver {
            background-color: silver;
        }

        .select-colors .color.black {
            background-color: black;
        }



        .addBtn {
            background-color: #0A1172;
            color: white;
            text-transform: uppercase;
        }

        .addBtn:hover {
            background-color: #500150;
            color: white;
        }


        .related-heading {
            text-align: center;
            font-size: 1.5rem;
            font-weight: bold;
            /* color: #464343; */
        }

        .details-snippet1 .related-title {
            color: #464343;
            font-weight: bold;
        }

        .details-snippet1 .related-price {
            color: #464343;
            font-weight: bold;
        }



        .additional-details .nav-link {
            border: none;
            color: #464343;
        }

        .additional-details .nav-link.active {
            background-color: white;
            color: #464343;
            border: none;
            border-bottom: 4px solid #0A1172;
        }
  </style>

   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
         @include('home.header');
         <!-- end header section -->
      {{-- </div> --}}





  



          
        <div class="container my-5">
          <div class="row details-snippet1">
              <div class="col-md-7">
                  <div class="row">
                      <div class="col-md-10">
                          <div class="product-image">
                              <img class="img-fluid" src="product/{{$product->image}}" alt="Main Image">
                          </div>
      
                      </div>
                  </div>
      
              </div>
              <div class="col-md-5">
                <div>&nbsp;</div>
                <div>&nbsp;</div>
                <div>&nbsp;</div>
                                 <div>&nbsp;</div>
                  <div class="category"><span class="theme-text">Category : </span> {{$product->category}}</div>
                  <div class="title">{{$product->title}}</div>
                  <div class="ratings my-2">
                      <div class="stars d-flex">
                          <div class="theme-text mr-2">Product Ratings: </div>
                          <div class="stars">
                            <span style="color: #e9c80e" class="fa fa-star checked"></span>
                            <span style="color: #e9c80e" class="fa fa-star checked"></span>
                            <span style="color: #e9c80e" class="fa fa-star checked"></span>
                            <span  class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            
                        </div>
                        <div class="ml-2">(4.5) 50 Reviews</div>
                  </div>

                  @if ($product->discount_price!=null)
                  <h4 class="price" > 
                      <div class="price my-2">${{$product->discount_price}}        <strike class="original-price">${{$product->price}}</strike></div>
                  </h4>

                  @else
                    <div class="price my-2">${{$product->price}}</div>

                  @endif

                  <div class="theme-text subtitle">Brief Description:</div>
                  <div class="brief-description">
                    {{$product->description}}
                  </div>
                  <hr>
                  <form action="{{ url('add_to_cart',$product->id) }}" method="post" style="display: flex; gap:20px;">
                    {{ csrf_field() }}
                    <div class="col-md-3">
                    <input  type="number" name="quentity" min="1" value="1" class="form-control">
                    </div>
                    <div class="col-md-9">
                      <input class="btn addBtn btn-block" type="submit" value="Add to cart">
                    </div>
                </form>
                  {{-- <div class="row">
                      <div class="col-md-3">
                        <input type="number" class="form-control" value="1">
                      </div>
                      <div class="col-md-9"><button class="btn addBtn btn-block">Add to basket</button></div>
                  </div>
                  --}}
              </div>
          </div>
      
          {{-- <div class="additional-details my-5 text-center">
              <!-- Nav pills -->
              <ul class="nav nav-tabs justify-content-center">
                  <li class="nav-tabs">
                      <a class="nav-link active" data-toggle="tab" data-bs-toggle="tab" href="#home">Description</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" data-bs-toggle="tab" href="#menu1">Reviews</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" data-bs-toggle="tab" href="#menu2">Specifications</a>
                  </li>
              </ul>
      
              <!-- Tab panes -->
              <div class="tab-content mt-4 mb-3">
                  <div class="tab-pane container active" id="home">
                      <div class="description">
                        {{$product->description}}
                      </div>
                  </div>
                  <div class="tab-pane container fade" id="menu1">
                      <div class="review">
                          <p>PUT REVIEWS DESIGN HERE</p>
                      </div>
                  </div>
                  <div class="tab-pane container fade" id="menu2">
                      <div class="specification">
                          <p>PUT SPECIFICATIONS HERE</p>
                      </div>
                  </div>
              </div>
          </div> --}}
          </div>

    







    








      <!-- footer start -->
      @include('home.footer');
      <!-- footer end -->
      
      <!-- jQery -->
      <script src="Home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="Home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="Home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="Home/js/custom.js"></script>
   </body>
</html>