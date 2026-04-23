<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>login</title>
</head>
<body>
    <div class="w-full h-[100vh] flex items-center justify-center">
        <div class="login w-[400px] h-[300px] border-1 border-gray-300 rounded-2xl shadow-xl p-5">
            <h2 class="text-2xl font-bold">Login</h2>
            <form action="/admin/login" method="post" class="p-5 flex flex-col gap-3">
                @csrf
                <div class="email">
                    <label for="" class="text-[14px] font-[500]">Email</label>
                    <input type="text" name="email" id="" class="w-full border-1 border-gray-300 rounded-lg px-2 py-1 outline-0" placeholder="Email">
                </div>
                <div class="email">
                    <label for="" class="text-[14px] font-[500]">Password</label>
                    <input type="password" name="password" id="" class="w-full border-1 border-gray-300 rounded-lg px-2 py-1 outline-0" placeholder="Password">
                </div>
                <div class="btn bg-green-400 hover:bg-green-500 text-white text-[16px]">
                    <button type="submit" class="w-full ">Login</button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>
