<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
@vite('resources/css/app.css')
<link rel="stylesheet" href="{{ asset('AuthModule/Register.css') }}">
<h3>ĐĂNG KÝ</h3>

<body>
    
   <div class='flex Space between '>
        <form action="{{ route('Register.store') }}" method="post">
            @csrf
            <label for="Name">
                Name:
                <input type="text" name="name" value="{{ old('name') }}">
              
                @error('name')
                <span style="color: red">{{ $message }}</span>
                @enderror
            </label>
            <br><br>
            <label for="Email">
                Email:
                <input type="text" name="email" value="{{ old('email') }}" />
                @error('email')
                <span style="color: red">{{ $message }}</span>
                @enderror
            </label><br><br>
            <label for="Phone_number">
                Phone number:
                <input type="number" name="Phone_number"  value="{{ old('Phone_number') }}" />
                @error('Phone_number')
                <span style="color: red">{{ $message }}</span>
                @enderror
            </label><br><br>
            
            <div class="form-group">
                <label for="password">Password</label>
                <input id="password" type="password" class="form-control" name="password" required>
            </div>
        
            <div class="form-group">
                <label for="password_confirmation">Confirm Password</label>
                <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required>
               
                <br><button type="submit">Đăng kí</button>
            </div>
            <p>Đã có tài khoản</p>
        </form>
    </div>

</body>

</html>
