<x-app-layout>
   <div>
        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
            <div class="container mx-auto px-6 py-1 pb-16">
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
                <form method="POST" action="{{ route('admin.users.update',$user->id)}}">
                  @csrf
                  @method('put')
                  <div class="flex flex-col space-y-2">
                    <label for="name" class="text-gray-700 select-none font-medium">User Name</label>
                    <input id="name" type="text" name="name" value="{{ old('name',$user->name) }}"
                      placeholder="Enter name" class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200"
                    />
                </div>
                <br>

                <div class="flex flex-col space-y-2">
                    <label for="email" class="text-gray-700 select-none font-medium">Email</label>
                    <input id="email" type="text" name="email" value="{{ old('email',$user->email) }}"
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
                                  @if(count($user->roles->where('id',$role->id)))
                                      checked 
                                  @endif
                                  ><span class="ml-2 text-gray-700">{{ $role->name }}</span>
                              </label>
                          </div>
                      </div>
                  @endforeach
                </div>
                <div class="text-center mt-16 mb-16">
                  <button type="submit" class="bg-blue-500 text-white font-bold px-5 py-1 rounded focus:outline-none shadow hover:bg-blue-500 transition-colors ">Submit</button>
                </div>
              </div>

             
            </div>
        </main>
    </div>
</div>
</x-app-layout>
