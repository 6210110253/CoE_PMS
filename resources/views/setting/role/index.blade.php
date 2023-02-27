<x-app-layout>
   <div>
        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
            <div class="container mx-auto px-6 py-2">
                <div class="flex items-center justify-between">
                        @can('Role create')
                            <a href="{{route('admin.roles.create')}}">
                                    <button class="flex items-center bg-green-500 hover:bg-green-800 text-white font-bold py-2 px-4 rounded">
                                         <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"><path fill="currentColor" d="M16 5c-3.9 0-7 3.1-7 7a6.96 6.96 0 0 0 3.07 5.813C8.51 19.346 6 22.892 6 27h2c0-4.4 3.6-8 8-8c3.9 0 7-3.1 7-7s-3.1-7-7-7zm0 2c2.8 0 5 2.2 5 5s-2.2 5-5 5s-5-2.2-5-5s2.2-5 5-5zm5 12c-1.1 0-2 .9-2 2v4.4l6 6c.4.4.9.6 1.4.6c.5 0 1-.2 1.4-.6l3.6-3.6c.4-.4.6-.9.6-1.4c0-.5-.2-1-.6-1.4l-6-6H21zm0 2h3.6l5.4 5.4l-3.6 3.6l-5.4-5.4V21zm2 1a1 1 0 0 0 0 2a1 1 0 0 0 0-2z"/></svg>
                                        <span>New Role</span>
                                    </button>
                            </a>
                        @endcan

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


              <div class="bg-white shadow-md rounded my-6">
                <table class="text-left w-full border-collapse">
                  <thead>
                    <tr>
                      <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light w-2/12">Role Name</th>
                      <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">Permissions</th>
                      <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light text-right w-2/12">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    @can('Role access')
                      @foreach($roles as $role)
                      <tr class="hover:bg-grey-lighter">
                        <td class="py-4 px-6 border-b border-grey-light">{{ $role->name }}</td>
                        <td class="py-4 px-6 border-b border-grey-light">
                            @foreach($role->permissions as $permission)
                              <span class="inline-flex items-center justify-center px-2 py-1 mr-2 text-xs font-bold leading-none text-white bg-gray-500 rounded-full">{{ $permission->name }}</span>
                            @endforeach
                        </td>
                        <td class="py-4 px-6 border-b border-grey-light text-right">

                          @can('Role edit')
                          <a href="{{route('admin.roles.edit',$role->id)}}" class="text-grey-lighter font-bold py-1 px-3 rounded text-xs bg-green hover:bg-green-dark text-blue-400">Edit</a>
                          @endcan

                          @can('Role delete')
                          <form action="{{ route('admin.roles.destroy', $role->id) }}" method="POST" class="inline">
                              @csrf
                              @method('delete')
                              <button class="text-grey-lighter font-bold py-1 px-3 rounded text-xs bg-blue hover:bg-blue-dark text-red-400">Delete</button>
                          </form>
                          @endcan

                        </td>
                      </tr>
                      @endforeach
                    @endcan
                  </tbody>
                </table>
              </div>

            </div>
        </main>
    </div>
</div>
</x-app-layout>
