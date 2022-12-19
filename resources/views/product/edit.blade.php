<!doctype html>
<html>
<head>

    <script src="{{ mix('js/app.js') }}" defer></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   
   
</head>

<body>
   

    <h1 class="ms-5">Edit Product:</h1>

    <form action="{{ route('products.update', $product) }}" method="POST" enctype="multipart/form-data" class="ms-5 me-5 w-50">
        @csrf
        @method('PATCH')
        {{-- <div class="row">
            <div class="col-6">
                <p>Hello</p>
            </div>
            <div class="col-6">Hello 2</div>
        </div> --}}
        {{-- <div class="form-row row mb-3">
          
            <div class="form-group col-md-6">
              <label for="inputfname">First Name</label>
              <input type="text" class="form-control" id="inputfname" name='fname' value="{{ $client->fname }}">
            </div>
            <div class="form-group  col-md-6">
              <label for="inputlname">Last Name</label>
              <input type="text" class="form-control" id="inputlname" name="lname" value="{{ $client->lname }}">
            </div>
         </div>
        <div class="form-row row mb-3">
          
          <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input type="email" class="form-control" id="inputEmail4" name="email" value="{{ $client->email }}">
          </div>
          <div class="form-group  col-md-6">
            <label for="inputphoneNumber">Phone Number</label>
            <input type="tel" class="form-control" id="inputphoneNumber" name="phoneNumber" maxlength = "8" value="{{ $client->phoneNumber}}">
          </div>
        </div> --}}
        <div class="form-group mb-3">
            <label for="inputtitle">Title</label>
            <input type="text" class="form-control" id="inputtitle" name="title" value="{{ $product->title }}">
          </div>
          <div class="form-group mb-3">
          <label for="inputcategory">Category</label>
            <input type="text" class="form-control" id="inputcategory" name="category" value="{{ $product->category }}">
          </div>
          <div class="form-group mb-3">
              <label for="inputweight">Weight</label>
                <input type="number" class="form-control" id="inputweight" name="weight" value="{{ $product->weight }}">
              </div>
          <div class="form-group mb-3">
              <label for="inputsize">Size</label>
                <input type="text" class="form-control" id="inputsize" name="size" value="{{ $product->size }}">
              </div>
          <div class="form-group mb-3">
            <label for="inputmanufacturer">Manufacturer</label>
            <input type="text" class="form-control" id="inputmanufacturer" name="manufacturer" value="{{ $product->manufacturer }}">
          </div>

          <div class="form-group mb-3">
            <label for="container">Container Id</label>
            <select id="container" name="container" class="form-control">
              @foreach ($containers as $container)
              <option {{ $product->container_id == $container->id ? "selected": "" }} value="{{ $container->id}}">{{ $container->id}}</option>
              @endforeach
              
  
            </select>
          </div>
        {{-- <div class="form-group mb-3">
          
          <label for="inputAddress">Address</label>
          <input type="text" class="form-control" id="inputAddress" name="address" value="{{ $client->address }}">
        </div> --}}
        {{-- <div class="form-group mb-3">
          <label for="inputAddress2">Address 2</label>
          <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
        </div> --}}
        {{-- <div class="form-row row mb-3">
          <div class="form-group  col-md-6">
            <label for="inputCity">City</label>
            <input type="text" class="form-control" id="inputCity">
          </div>
          <div class="form-group col-md-4">
            <label for="inputState">State</label>
            <select id="inputState" class="form-control">
              <option selected>Choose...</option>
              <option>...</option>
            </select>
          </div>
          <div class="form-group col-md-2">
            <label for="inputZip">Zip</label>
            <input type="text" class="form-control" id="inputZip">
          </div>
        </div>
        <div class="form-group mb-3">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
              Check me out
            </label>
          </div>
        </div> --}}
        {{-- <div class="form-group mb-3">
            <label for="inputpayment">Payment</label>
            <input type="number" class="form-control" id="inputpayment" name="payment" value="{{ $client->payment }}">
          </div> --}}
        <button type="submit" class="btn btn-primary">Submit Edit</button>
      </form>
</body>

</html>