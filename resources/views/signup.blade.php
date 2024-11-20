
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student-signup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

      
  
    <h1>Create Student</h1>
  
    @if(session()->has('added'))
    <div class="alert alert-success">
        {{ session()->get('added') }}
    </div>
    @endif    

    <form action="{{route('signup')}}" enctype="multipart/form-data"  method="POST" >

        @csrf     
        @method('POST');
      
        <div>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username"  value="{{ Request::old('username') }}">

            @error('username')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div><br>


        <div>
            <label for="full_name">Full Name:</label>
            <input type="text" id="full_name" name="full_name"  value="{{ Request::old('full_name') }}" >

            @error('full_name')
            <span class="text-danger">{{ $message }}</span>
            @enderror

            
        </div><br>

        <div>
            <label for="mobile_no">Mobile:</label>
            <input type="text" id="mobile_no" name="mobile_no"  value="{{ Request::old('mobile_no') }}">

            @error('mobile_no')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div><br>

        <div>
            <label for="email">Email:</label>
            <input type="text" id="email" name="email"  value="{{ Request::old('email') }}">

            @error('email')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div><br>


        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password"  value="{{ Request::old('password') }}" >

            @error('password')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div><br>



        <div>
            <label for="image">Picture:</label>
           
            <input type="file" name="image" id="image" value="{{ Request::old('image') }}">
            @error('image')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div><br>








        <div>
            <button class="btn btn-primary" type="submit"> Submit</button>
        </div>
    </form>

</body>
</html>
