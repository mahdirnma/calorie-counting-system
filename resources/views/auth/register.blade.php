<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>register</title>
    @vite('resources/css/app.css')
</head>
<body>
<div class="w-svw h-svh flex justify-center items-center bg-gray-200">
    <div class="w-2/6 h-11/12 bg-white rounded-xl flex flex-col items-center justify-start">
        <h1 class="text-3xl pt-2">register</h1>
        <form action="{{route('register')}}" method="post" class="w-5/6 flex flex-col items-end justify-start">
            @csrf
            <label for="name" class="mt-8">نام</label>
            <input type="text" name="name" id="name" class="w-full h-10 bg-gray-100 rounded mt-1">
            @if($errors->has('name'))
                <p class="text-red-600 mt-2">{{$errors->first('name')}}</p>
            @endif
            <label for="email" class="mt-8">ایمیل</label>
            <input type="email" name="email" id="email" class="w-full h-10 bg-gray-100 rounded mt-1">
            @if($errors->has('email'))
                <p class="text-red-600 mt-2">{{$errors->first('email')}}</p>
            @endif
            <label for="password" class="mt-8">رمز عبور</label>
            <input type="password" name="password" id="password" class="w-full h-10 bg-gray-100 rounded mt-1">
            @if($errors->has('password'))
                <p class="text-red-600 mt-2">{{$errors->first('password')}}</p>
            @endif
            <label for="height" class="mt-8">قد</label>
            <input type="number" name="height" id="height" min="50" max="250" placeholder="(cm)" class="w-full h-10 bg-gray-100 rounded mt-1">
            @if($errors->has('height'))
                <p class="text-red-600 mt-2">{{$errors->first('height')}}</p>
            @endif
            <label for="gender" class="mt-8">جنسیت</label>
            <select name="gender" id="gender" class="w-full h-10 bg-gray-100 rounded mt-1 cursor-pointer">
                <option value="male" class="cursor-pointer">male</option>
                <option value="female" class="cursor-pointer">female</option>
            </select>
            @if($errors->has('gender'))
                <p class="text-red-600 mt-2">{{$errors->first('gender')}}</p>
            @endif
            <input type="submit" value="register" class="mt-10 w-full h-12 text-gray-100 bg-gray-600 rounded  cursor-pointer">
        </form>
    </div>
</div>
</body>
</html>
