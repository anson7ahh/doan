<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="image/logo.png" type="image/gif" sizes="16x16">
    <title>Tân Minh Hà</title>
</head>
@vite('resources/css/app.css')




<body class='font-sans text-gray-900 antialiased  '>

    <div class='  min-h-screen  flex flex-col sm:justify-center items-center overflow-hidden '>
        <div
            class="  w-full  sm:max-w-md leading-tight focus:outline-none focus:shadow-outline border border-gray-100 ">
            <form action="{{ route('Register.store') }}" method="post"
                class="bg-gray-100  shadow-md rounded pt-4 pb-4 mb-4  ">
                @csrf
                <h3 class="text-2xl font-semibold mb-4 flex flex-col items-center justify-center">Login</h3>
                <div class=" px-6 grow-0   ">
                    <input type="number" placeholder="Phone Number"
                        class="  border rounded w-full   text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        name="phone_number" value="{{ old('phone_number') }}">

                    @error('name')
                        <span class=' text-sm text-red-600'>{{ $message }}</span>
                    @enderror
                </div>



                <div class="p-6 grow-0">
                    <input type="password" placeholder="Password"
                        class="appearance-none border rounded w-full text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        name ='password' />
                    @error('password')
                        <span class='text-sm text-red-600'>{{ $message }}</span>
                    @enderror
                </div>


                <div class="flex flex-col items-center justify-between">
                    <button type="submit"
                        class="font-bold py-2 px-4 rounded focus:outline-none
                        focus:shadow-outline">Login</button>

                    <button class="pt-1 pb-4 ">Forgot the password</button>
                </div>
            </form>
        </div>

    </div>

</body>

</html>
