<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
@vite('resources/css/app.css')




<body class='font-sans text-gray-900 antialiased  '>

    {{-- <div class='min-h-screen bg   flex flex-col sm:justify-center items-center pt-6 
     overflow-hidden '>
        <div class="  w-full sm:max-w-md leading-tight focus:outline-none focus:shadow-outline border border-gray-100 ">
            <form action="{{ route('Register.store') }}" method="post"
                class="  w-70 shadow-md rounded  pt-4 pb-4 mb-4 flex flex-col  items-center justify-center">
                @csrf
                <h3 class="text-2xl font-semibold mb-4 flex flex-col items-center justify-center">ĐĂNG KÝ</h3>
                <div class="py-1 px-2">
                    <input type="text" placeholder="Full Name"
                        class="  border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        name="name" value="{{ old('name') }}">
                    @error('name')
                        <span style="color: red">{{ $message }}</span>
                    @enderror
                </div>
                <div class="py-1 px-2">
                    <input type="text" placeholder="Email"
                        class='  border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline'
                        name="email" value="{{ old('email') }}" />
                    @error('email')
                        <span style="color: red">{{ $message }}</span>
                    @enderror
                </div>
                <div class="py-1 px-2">
                    <input type="number" placeholder="Phone number"
                        class='appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline'
                        name='phone_number' value="{{ old('Phone_number') }}" />
                    @error('phone_number')
                        <span style="color: red">{{ $message }}</span>
                    @enderror
                </div>

                <div class="py-1 px-2">
                    <input type="password" placeholder="Password"
                        class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        name ='password' />
                    @error('password')
                        <span style="color: red">{{ $message }}</span>
                    @enderror
                </div>
                <div class="py-1 px-2">
                    <input type="password" placeholder="password confirm"
                        class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        name = 'password_confirm'>
                    @error('password_confirm')
                        <span style="color: red">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex items-center justify-between">
                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Đăng
                        kí</button>
                </div>
                <a class="pt-1 pb-4 mb-4" href='http://127.0.0.1:8000/login'>Đã có tài khoản</a>
            </form>
        </div>
    </div> --}}

    <div class="bg-[url('image/register.jpg')]"></div>
</body>

</html>
