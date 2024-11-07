<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>


     <center>
        <div class="alert alert-success" role="alert">
            Home Page 
          </div>
        <br>
      <button onclick="location.href='{{ url('signup') }}'" type="button" class="btn btn-primary">Signup</button>
      <button onclick="location.href='{{ url('student-table') }}'" type="button" class="btn btn-primary">View</button>
     </center>


</body>
</html>