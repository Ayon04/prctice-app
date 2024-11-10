
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student-signup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

      
  
    <h1>Update Student</h1>
  
    @if(session()->has('updated'))
    <div class="alert alert-success">
        {{ session()->get('updated') }}
    </div>
    @endif


    @if(session()->has('update_fail'))
    <div class="alert alert-danger ">
        {{ session()->get('update_fail') }}
    </div>
    @endif

    <form action="{{ url('student-update/' . $student->id) }}" method="POST">

                {{csrf_field()}}
                @method('PUT')
      
        <div>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username"  value="{{$student->username }}">

            @error('username')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div><br>


        <div>
            <label for="full_name">Full Name:</label>
            <input type="text" id="full_name" name="full_name"  value="{{ $student->full_name}}" >

            @error('full_name')
            <span class="text-danger">{{ $message }}</span>
            @enderror

            
        </div><br>

        <div>
            <label for="mobile_no">Mobile:</label>
            <input type="text" id="mobile_no" name="mobile_no"  value="{{ $student->mobile_no }}">

            @error('mobile_no')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div><br>

        <div>
            <label for="email">Email:</label>
            <input type="text" id="email" name="email"  value="{{ $student->email}}">

            @error('email')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div><br>


        <div>
            <label for="password">Password:</label>
            <input type="text" id="password" name="password"  value="{{ $student->password }}" >

            @error('password')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div><br>


        <div>
            <button class="btn btn-primary" type="submit"> Submit</button>
        </div>
    </form>

</body>
</html>
