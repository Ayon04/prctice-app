
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Detalis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    @if(session()->has('message_success'))
    <div class="alert alert-success">
        {{ session()->get('message_success') }}
    </div>
    @endif


    @if(session()->has('deleted'))
    <div class="alert alert-danger">
        {{ session()->get('deleted') }}
    </div>
    @endif


    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">username</th>
            <th scope="col">Fullname</th>
            <th scope="col">Mobile</th>
            <th scope="col">Email</th>
            <th scope="col">File Name</th>
            <th scope="col">Image</th>
            <th scope="col">Delete/Edit</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($students as $students )
            <tr>
                <th scope="row">{{$students->id}}</th>
                <td>{{$students->username}}</td>
                <td>{{$students->full_name}}</td>
                <td>{{$students->mobile_no}}</td>
                <td>{{$students->email}}</td>
                <td>{{$students->image}}</td>
                <td>
                  <img src="{{ asset('storage/' . $students->image) }}" height="70" width="70" />
                </td> 
                <td><button class="btn btn-dark"> <a href ={{ url("student-edit/". $students->id)}} >update</a></button></td> 
                {{-- add button further  --}}
                <td><button class="btn btn-danger"> <a href ={{"delete/".$students['id']}}>Delete</a></button></td></td>
              </tr>
                
            @endforeach
        </tbody>
      </table>
</body>
</html>