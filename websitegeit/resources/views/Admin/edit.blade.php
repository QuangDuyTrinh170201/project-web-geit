<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="{{url('public')}}/Admin/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="{{url('public')}}/Admin/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="{{url('public')}}/Admin/assets/libs/css/style.css">
    <link rel="stylesheet" href="{{url('public')}}/Admin/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="{{url('public')}}/Admin/assets/vendor/bootstrap-select/css/bootstrap-select.css">
    <title>Edit product page</title>
  </head>
  <body>
    <div class="container" style="margin-top: 50px;">
         <div class="row">
            <div class="col-md-12">
                <h2 id ="txt">Edit product</h2>
                @if (Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{Session::get('success')}}
                    </div>                    
                @endif
                <form action="{{url('update')}}" method="POST" enctype="multipart/form-data">
                    <div class="md-3">
                        <label class="form-label" for="id"><h5 id ="txt-h2">Product ID</h5></label>
                        <input type="text" name="id" class="form-control" placeholder="Enter product ID" value="{{$data->productID}}" readonly>
                    </div>
                    @csrf
                    <div class="md-3">
                        <label class="form-label" for="id"><h5 id ="txt-h2">Product Name</h5></label>
                        <input type="text" name="name" class="form-control" placeholder="Enter product name" value="{{$data->productName}}">
                        @error('name')
                        <div class ="alert alert-danger" role="alert">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="md-3">
                        <label class="form-label" for="id"><h5 id ="txt-h2">Product Image1</h5></label>
                        <input type="file" name="image1" class="form-control" placeholder="Enter product image" accept="image/*">
                            <img src="{{url('public')}}/Admin/assets/images/product-Image/{{$data->productImage1}}" alt="This is image of {{$data->productName}}" height="150" width="150">
                        @error('image1')
                            <div class ="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="md-3">
                        <label class="form-label" for="id"><h5 id ="txt-h2">Product Image2</h5></label>
                        <input type="file" name="image2" class="form-control" placeholder="Enter product image" accept="image/*">
                            <img src="{{url('public')}}/Admin/assets/images/product-Image/{{$data->productImage2}}" alt="This is image of {{$data->productName}}" height="150" width="150">
                        @error('image2')
                            <div class ="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    </div>
        
                    <div class="md-3">
                        <label for="producer" class="form-label">Category</label>
                        <select name="category" class="form-control">
                            @foreach ($categories as $row)                                
                                <option value="{{$row->categoryID}}">{{$row->categoryName}}</option>
                            @endforeach
                        @error('category')
                            <div class ="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                        @enderror
                        </select>
                    </div>
                    </div>
                    <div class="md-3">
                        <label class="form-label" for="id"><h5 id ="txt-h2">Product Details</h5></label>
                        <textarea name="detail" row ="5" class="form-control" placeholder="Enter product details" value="{{$data->productDetail}}"></textarea>
                        @error('detail')
                            <div class ="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="md-3">
                        <label class="form-label" for="id"><h5 id ="txt-h2">Product Price</h5></label>
                        <input type="text" name="price" class="form-control" placeholder="Enter product price" value="{{$data->productPrice}}">
                        @error('price')
                            <div class ="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div>
                        <br>
                        <button type = "submit" class="btn btn-primary">SUBMIT</button>
                        <a href="{{url('data-table')}}" class="btn btn-success">BACK</a>
                    </div>
                </form>
            </div>
         </div>
    </div>
    <script src="{{url('public')}}/Admin/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="{{url('public')}}/Admin/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="{{url('public')}}/Admin/assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="{{url('public')}}/Admin/assets/libs/js/main-js.js"></script>
    <script src="{{url('public')}}/Admin/assets/vendor/bootstrap-select/js/bootstrap-select.js"></script>
  </body>