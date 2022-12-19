<!doctype html>
<html>
<head>

    <script src="{{ mix('js/app.js') }}" defer></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   
   
</head>

<body>
    <h1 class="ms-5">Add Product</h1>

    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" class="ms-5 me-5 w-50">
        @csrf
        {{-- <div class="row">
            <div class="col-6">
                <p>Hello</p>
            </div>
            <div class="col-6">Hello 2</div>
        </div> --}}

        {{-- <div class="form-row row mb-3">
          
            <div class="form-group col-md-6">
              <label for="inputfname">First Name</label>
              <input type="text" class="form-control" id="inputfname" name='fname' placeholder="First Name">
            </div>
            <div class="form-group  col-md-6">
              <label for="inputlname">Last Name</label>
              <input type="text" class="form-control" id="inputlname" name="lname" placeholder="Last Name">
            </div>
         </div>
        <div class="form-row row mb-3">
          
          <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input type="email" class="form-control" id="inputEmail4" name="email" placeholder="Email">
          </div>
          <div class="form-group  col-md-6">
            <label for="inputphoneNumber">Phone Number</label>
            <input type="tel" class="form-control" id="inputphoneNumber" name="phoneNumber" maxlength = "8" placeholder="Phone Number">
          </div>
        </div> --}}
        <div class="form-group mb-3">
          <label for="inputtitle">Title</label>
          <input type="text" class="form-control" id="inputtitle" name="title" placeholder="title">
        </div>
        <div class="form-group mb-3">
        <label for="inputcategory">Category</label>
          <input type="text" class="form-control" id="inputcategory" name="category" placeholder="category">
        </div>
        <div class="form-group mb-3">
            <label for="inputweight">Weight in Kg</label>
              <input type="number" class="form-control" id="inputweight" name="weight" placeholder="weight">
            </div>
        <div class="form-group mb-3">
            <label for="inputsize">Size</label>
              <input type="text" class="form-control" id="inputsize" name="size" placeholder="size">
            </div>
        <div class="form-group mb-3">
          <label for="inputmanufacturer">Manufacturer</label>
          <input type="text" class="form-control" id="inputmanufacturer" name="manufacturer" placeholder="manufacturer">
        </div>
        <div class="form-group mb-3">
          <label for="container">Container Id</label>
          <select id="container" name="container" class="form-control">
            @foreach ($containers as $container)
            <option value="{{ $container->id}}">{{ $container->id}}</option>
            @endforeach
            

          </select>
          </div>
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
            <input type="number" class="form-control" id="inputpayment" name="payment" placeholder="Payment">
          </div> --}}
        <button type="submit" class="btn btn-primary">Add</button>
      </form>

</body>

</html>