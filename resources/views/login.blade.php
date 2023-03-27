<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="login.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
   <!-- component -->
<body class="bg-gray-10 ">


            <form action='login-submit' method="post">
                @csrf
   <div class="flex justify-center h-screen w-screen items-center">
    <div class="w-full md:w-1/2 flex flex-col items-center " >
        <!-- text login -->
        <h1 class="text-center text-2xl font-bold text-gray-600 mb-6">LOGIN</h1>
        @if ($errors->any())
                <div class="alert alert-danger text-2xl font-bold">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        <!-- email input -->
        <div class="w-3/4 mb-6">
            <input type="email" name="email" id="email" class="w-full py-4 px-8 bg-slate-200 placeholder:font-semibold rounded hover:ring-1 outline-blue-500" placeholder="User Name">
        </div>
        <!-- password input -->
        <div class="w-3/4 mb-6">
            <input type="password" name="password" id="password" class="w-full py-4 px-8 bg-slate-200 placeholder:font-semibold rounded hover:ring-1 outline-blue-500 " placeholder="Password">
        </div>
        <!-- remember input -->
        <div class="w-3/4 flex flex-row justify-between">
            <div class=" flex items-center gap-x-1">
                <!-- <input type="checkbox" name="remember" id="" class=" w-4 h-4  "> -->
                <label for="" class="text-sm text-slate-400"></label>
            </div>
            <div>
                <a href="#" class="text-sm text-slate-400 hover:text-blue-500">Forgot?</a>
            </div>
        </div>
        <!-- button -->
        <div class="w-3/4 mt-4">
            <button type="submit" class="py-4 bg-blue-400 w-full rounded text-blue-50 font-bold hover:bg-blue-700"> LOGIN</button>
        </div>
            </form>
    </div>
   </div>
</body>
</body>

</html>