<!doctype html>
<html>
<head>
    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
   
    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}

    {{-- <link rel="stylesheet" href="{{ mix('css/app.css') }}"> --}}
    <script src="{{ mix('js/app.js') }}" defer></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Scripts -->
   
</head>
<body>
    {{-- <h1 class="mx-auto">This is example from ItSolutionStuff.com</h1> --}}
    {{-- <span class="border-top"> TESTTT</span>

    <div class="btn-group" role="group" aria-label="Basic example">
        <button type="button" class="btn btn-primary">Left</button>
        <button type="button" class="btn btn-primary">Middle</button>
        <button type="button" class="btn btn-primary">Right</button>
      </div> --}}

      {{-- @foreach ($clients as $client)
          <a href="{{ route('clients.show', $client->id) }}">
            TEST: {{ $client->fname }}
        </a> <br>
      @endforeach --}}

      <h1 class="mt-3" style="text-align: center">All Staff</h1>
      @if (Auth::user())
        <div class="text-center">
          <a href="{{ route('staffs.create') }}">  <button class="btn btn-primary mb-3 btn-rounded">New Staff</button></a>
        </div>
        @endif
      {{-- <div class="text-center">
        <a href="{{ route('staffs.create') }}">  <button class="btn btn-primary mb-3 btn-rounded">New Staff</button></a>
      </div> --}}

      @if (session()->has('message'))
      <div class="text-center">
        <div class="alert alert-danger" role="alert">
            <p>{{ session() -> get('message') }}</p>
          </div>
      </div>
     
              
           
      @endif
      

      {{-- <div class="row">
        <div class="col-sm-5">
          <div class="card" style="width: 300px">
            <div class="card-header">
                Featured
              </div>
            <div class="card-body">
              <h5 class="card-title">Special title treatment</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="col-sm-5">
          <div class="card">
            <div class="card-header">
                Featured
              </div>
            <div class="card-body">
              <h5 class="card-title">Special title treatment</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
      </div> --}}

      <div class="container">
        <div class="d-flex flex-row flex-wrap" style="gap: 35px">
            @foreach ($staffs as $staff)
            <div class="card" style="width: 400px">
                <div class="card-header">
                   Staff {{ $staff->id }}
                  </div>
                <div class="card-body">
                  <h5 class="card-title">Information about {{ $staff->fname }} {{ $staff->lname }}</h5>
                  {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}
                  
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"> <span> <strong>Name:</strong> </span> {{ $staff->fname }} {{ $staff->lname }}</li>
                    <li class="list-group-item"><span><strong>Staff Position:</strong></span> {{ $staff->position }}</li>
                    <li class="list-group-item"><span><strong>Staff Phone Number:</strong></span> {{ $staff->phoneNumber }}</li>
                    <li class="list-group-item"><span><strong>Staff Email:</strong></span> {{ $staff->email }}</li>
                    <li class="list-group-item"><span><strong>Staff Address:</strong></span> {{ $staff->address }}</li>
                    <li class="list-group-item"><span><strong>Staff Salary:</strong></span> {{ $staff->salary }}</li>
                  </ul>
                  @if (Auth::user())
                  <div class="card-body">
                    <a style="display: inline-block"> <form action="{{ route('staffs.destroy', $staff) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form></a>
                    <a href="{{ route('staffs.edit', $staff) }}" class="btn btn-info ms-2">Edit</a>
                  </div>
                  @endif
                  
              </div>
              
            @endforeach

            {{-- <div class="card" style="width: 300px">
                <div class="card-header">
                   Client {{ $client->id }}
                  </div>
                <div class="card-body">
                  <h5 class="card-title">Special title treatment</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
              <div class="card" style="width: 300px">
                <div class="card-header">
                    Featured
                  </div>
                <div class="card-body">
                  <h5 class="card-title">Special title treatment</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div> --}}
        </div>
      </div>
</body>
</html>