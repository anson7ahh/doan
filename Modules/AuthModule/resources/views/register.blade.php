<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="{{ asset('AuthModule/Register.css') }}">
<h3>ĐĂNG KÝ</h3>

<body>
   <div class='register'>
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
            {{-- <label for="Password">
                Password:
                <input type="text" name="password" value="{{ old('password') }}">
                @error('password')
                <span style="color: red">{{ $message }}</span>
                @enderror
            </label><br><br> --}}
            {{-- <div>
                <label for="password">Password</label>
                <input id="password" type="password" name="password" required autocomplete="current-password">
            </div> --}}
            {{-- <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
            
                <div class="col-md-6">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" 
                    name="password" required autocomplete="current-password">
            
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            
            <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">Confirm Password</label>
            
                <div class="col-md-6">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" required autocomplete="current-password">
                </div>
            </div> --}}
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