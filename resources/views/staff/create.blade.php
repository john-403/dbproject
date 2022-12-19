<!doctype html>
<html>
<head>

    <script src="{{ mix('js/app.js') }}" defer></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   
   
</head>

<body>
    <h1 class="ms-5">Add Staff</h1>

    <form action="{{ route('staffs.store') }}" method="POST" enctype="multipart/form-data" class="ms-5 me-5 w-50">
        @csrf
        {{-- <div class="row">
            <div class="col-6">
                <p>Hello</p>
            </div>
            <div class="col-6">Hello 2</div>
        </div> --}}
        <div class="form-row row mb-3">
          
            <div class="form-group col-md-6">
              <label for="inputfname">First Name</label>
              <input type="text" class="form-control" id="inputfname" name='fname' placeholder="John">
            </div>
            <div class="form-group  col-md-6">
              <label for="inputlname">Last Name</label>
              <input type="text" class="form-control" id="inputlname" name="lname" placeholder="Doe">
            </div>
         </div>
        <div class="form-row row mb-3">
          
          <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input type="email" class="form-control" id="inputEmail4" name="email" placeholder="john.Doe@gmail.com">
          </div>
          <div class="form-group  col-md-6">
            <label for="inputphoneNumber">Phone Number</label>
            <input type="tel" class="form-control" id="inputphoneNumber" name="phoneNumber" maxlength = "8" placeholder="71452652">
          </div>
        </div>
        <div class="form-group mb-3">
            <label for="inputposition">Position</label>
            <input type="text" class="form-control" id="inputposition" name="position" placeholder="Manager">
          </div>
        <div class="form-group mb-3">
          <label for="inputAddress">Address</label>
          <input type="text" class="form-control" id="inputAddress" name="address" placeholder="Beirut">
        </div>
        <div class="form-group mb-3">
            <label for="inputsalary">Salary in $</label>
            <input type="number" class="form-control" id="inputsalary" name="salary" placeholder="5000">
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
        
        <button type="submit" class="btn btn-primary">Add</button>
      </form>

</body>

</html>