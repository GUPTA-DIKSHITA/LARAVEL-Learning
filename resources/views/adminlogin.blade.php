<!doctype html>
<html lang="en">
  <head>
    <title>EMINENTURE C-SAT DATA</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   
    <style>
      body{
        background-color: ghostwhite;
      }
    </style>
  </head>
  <body>
    <form action="{{url('/')}}/admin_login" method="post">
      @csrf
      <div style="margin-left:30%; margin-right:30%; margin-top:10%; border:solid 3px; padding:31px; border-radius:31px">
        <h3><center style="color: cornflowerblue">ADMIN LOGIN</center></h3><br>
        <div>
          @if (session()->has('msg_login'))
              <div class="alert alert-danger">
                  {{ session('msg_login') }}
              </div>
          @endif
      </div>
       <div class="form-group">
        <label for="admin_email">ENTER A VALID E-MAIL</label>
        <input type="email" class="form-control" name="admin_email" placeholder="example@xyz.com">
        <span class="text-danger">
            @error('admin_email')
                {{$message}}
            @enderror
        </span>
       </div><br>

       <div class="form-group">
        <label for="admin_password">ENTER PASSWORD</label>
        <input type="password" class="form-control" name="admin_password" placeholder="Enter your password">
        <span class="text-danger">
            @error('admin_password')
                {{$message}}
            @enderror
        </span>
       </div><br>

       <button class="btn btn-primary">LOGIN</button>
      </div>
    </form>
  </body>
</html>