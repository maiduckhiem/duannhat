<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script
      src="https://kit.fontawesome.com/79e1832a3e.js"
      crossorigin="anonymous"
    ></script>
    <link
      href="https://cdn.jsdelivr.net/npm/daisyui@2.15.0/dist/full.css"
      rel="stylesheet"
      type="text/css"
    />
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body>
    <div class="flex items-center justify-center min-h-screen bg-gray-200">
      <div class="px-8 rounded-md py-4 mx-4 mt-4 text-left bg-white shadow-lg md:w-1/3 lg:w-1/3 sm:w-1/3">
         <div class="flex">
          <div class="mx-auto pl-20 md:pl-26 xl:pl-36"><h3 class="text-2xl font-bold ">Register</h3></div>
          <i class="fas mt-3 fa-times ml-auto"></i>
         </div>
          <form action="" method="POST">
              @csrf
              <div class="mt-4">
                  <div>
                      <label class="block" for="Name">Name<label>
                              <input type="text" name="name" placeholder="Name"
                                  class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                                  @error('name')
                                  <p class="text-red-500">{{$message}}</p>
                                  @enderror
                  </div>
                  <div class="mt-4">
                      <label class="block" for="email">Email<label>
                              <input type="text" name="email" placeholder="Email"
                                  class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                                  @error('email')
                                  <p class="text-red-500">{{$message}}</p>
                                  @enderror
                  </div>
                  <div class="mt-4">
                      <label class="block">Password<label>
                              <input type="password" name="password" placeholder="Password"
                                  class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                                  @error('password')
                                  <p class="text-red-500">{{$message}}</p>
                                  @enderror
                  </div>
                  <div class="mt-4">
                      <label class="block">Confirm Password<label>
                              <input type="password" name="password_confirmation" placeholder="Password"
                                  class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                                  @error('password_confirmation')
                                  <p class="text-red-500">{{$message}}</p>
                                  @enderror
                  </div>
                  <div class="flex">
                      <button style="
                      background: linear-gradient(
                        to right,
                        #ee7724,
                        #d8363a,
                        #dd3675,
                        #b44593
                      );
                    " class="w-full px-6 py-2 mt-4 text-white rounded-lg hover:bg-blue-900">Create
                          Account</button>
                  </div>
                  <div class="mt-6 text-grey-dark">
                      Already have an account?
                      <a class="text-blue-600 hover:underline" href="{{route('login')}}">
                          Log in
                      </a>
                  </div>
              </div>
          </form>
      </div>
  </div>
  </body>
</html>
