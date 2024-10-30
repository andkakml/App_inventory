<!doctype html>
<html lang="en">
  <head>
    <title>Login</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">

     <!-- Bootstrap core CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- sweetalert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <!-- Custom styles for this template -->
    
    <style>
      html,
    body {
      height: 100%;
    }

    body {
      display: flex;
      align-items: center;
      padding-top: 40px;
      padding-bottom: 40px;
      background-color: #f5f5f5;
    }

    .form-signin {
      width: 100%;
      max-width: 330px;
      padding: 15px;
      margin: auto;
    }

    .form-signin .checkbox {
      font-weight: 400;
    }

    .form-signin .form-floating:focus-within {
      z-index: 2;
    }

    .form-signin input[type="email"] {
      margin-bottom: -1px;
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
    }

    .form-signin input[type="password"] {
      margin-bottom: 10px;
      border-top-left-radius: 0;
      border-top-right-radius: 0;
    }

    </style>
    
  </head>
  <body class="text-center">
    
    <main class="form-signin">
      <form action="/actionlogin" method="POST">
        @csrf
        <h1 class="h3 mb-3 fw-normal">Please Login</h1>
        
        <div class="form-floating">
          <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
          <label for="email">Email address</label>
        </div>
        <div class="form-floating">
          <input type="password" class="form-control" id="password" name="password" placeholder="Password">
          <label for="password">Password</label>
        </div>
        
        <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
      </form>
    </main>
    
    @if(session('failed'))
        <script>
            Swal.fire({
            title: "Gagal",
            text: "{{ session('failed') }}",
            icon: "error"
        });
        </script>
    @endif
    
  </body>
  </html>