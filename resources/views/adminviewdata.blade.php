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
  <nav class="navbar navbar-dark bg-dark nav justify-content-end">
    <a class="navbar-brand" href="/admin_logout">LOGOUT</a>
  </nav>
    <br><h3 style="text-align: center; color:rosybrown">CUSTOMER FEEDBACK</h3><br>
      <table class="table" id="table">
        <thead>
          <tr>
            <th scope="col">CUSTOMER ID</th>
            <th scope="col">ORGANIZATION NAME</th>
            <th scope="col">PERSON NAME</th>
            <th scope="col">PHONE NUMBER</th>
            <th scope="col">DATE OF FILLING THE FORM</th>
            <th scope="col">ACTION</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
            <tr>
                <th scope="row">{{$item->customer_id}}</th>
                <td>{{$item->organization_name}}</td>
                <td>{{$item->person_name}}</td>
                <td>{{$item->phone_number}}</td>
                <td>{{$item->created_at}}</td>
                <td><a href="/admin_view_response/{{$item->customer_id}}"<button class="btn btn-primary">VIEW</button></td>
              </tr>
            @endforeach
        </tbody>
      </table>
      <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">

      <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
      <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>

      <script>
        $('#table').DataTable();
      </script>
  </body>
</html>