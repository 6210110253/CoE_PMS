<x-app-layout>
   <div>
        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
            <div class="container mx-auto px-6 py-8 pb-16">

                    <div class="flex items-center justify-between">
                            <span class="text-3xl font-bold text-gray-900 dark:text-white"></span>
                            <a href="{{ route('admin.users.index')}}">
                                    <button class="flex items-center bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10.707,15.707l-5-5C5.512,10.512,5,10.265,5,9.914s0.512-0.598,0.707-0.793l5-5c0.391-0.391,1.023-0.391,1.414,0s0.391,1.023,0,1.414L8.414,8H15c0.553,0,1,0.447,1,1s-0.447,1-1,1H8.414l3.707,3.707C11.098,14.684,11.195,14.854,11.195,15.025C11.195,15.195,11.098,15.367,10.707,15.707z" />
                                        </svg>
                                        <span>Back</span>
                                    </button>
                            </a>
                    </div>

              <div class="bg-white shadow-md rounded my-6 p-5">
                <form method="POST" action="{{ route('admin.users.store')}}">
                     <h1 class="text-3xl font-bold mb-4">Create User</h1>
                     <hr><br>
                  @csrf
                  @method('post')
                    <div class="flex flex-col space-y-2">
                        <label for="name" class="text-gray-700 select-none font-medium">User Name</label>
                        <input id="name" type="text" name="name" value="{{ old('name') }}"
                        placeholder="Enter name" class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200"
                        />
                    </div>
                    <br>

                    <div class="flex flex-col space-y-2">
                        <label for="email" class="text-gray-700 select-none font-medium">Email</label>
                        <input id="email" type="text" name="email" value="{{ old('email') }}"
                        placeholder="Enter email" class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200"
                        />
                    </div>
                    <br>

                    <div class="flex flex-col space-y-2">
                        <label for="password" class="text-gray-700 select-none font-medium">Password</label>
                        <input id="password" type="password" name="password" value="{{ old('password') }}"
                        placeholder="Enter password" class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200"
                        />
                    </div>
                    <br>


                    <div class="flex flex-col space-y-2">
                        <label for="password_confirmation" class="text-gray-700 select-none font-medium">Confirm Password</label>
                        <input id="password_confirmation" type="password" name="password_confirmation" placeholder="Re-enter password" class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200"
                        />
                    </div>
                    <br>

                    <h3 class="text-xl my-4 text-gray-600">Role</h3>
                    <div class="grid grid-cols-3 gap-4">
                    @foreach($roles as $role)
                        <div class="flex flex-col justify-cente">
                            <div class="flex flex-col">
                                <label class="inline-flex items-center mt-3">
                                    <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600" name="roles[]" value="{{$role->id}}"
                                    ><span class="ml-2 text-gray-700">{{ $role->name }}</span>
                                </label>
                            </div>
                        </div>
                    @endforeach
                    </div>
                    <div class="flex justify-center mt-16 mb-16">
                    <button class="flex items-center bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M17.707,3.293C17.316,2.902,16.684,2.902,16.293,3.293L7,12.586V8c0-0.553-0.447-1-1-1s-1,0.447-1,1v6c0,0.553,0.447,1,1,1h10c0.553,0,1-0.447,1-1s-0.447-1-1-1H8.414l9.293-9.293c0.391-0.391,0.391-1.023,0-1.414S18.098,2.902,17.707,3.293z" />
                        </svg>
                        Submit
                    </button>
                    </div>
                </form>
              </div>


            </div>


        </main>
    </div>
</div>
</x-app-layout>
