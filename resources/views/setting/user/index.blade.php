<x-app-layout>
   <div>
        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
            <div class="container mx-auto px-6 py-2">
                <div class="flex items-center space-x-4 gap-4">
                    @can('User create')
                    <a href="{{route('admin.users.create')}}">
                        <button class="flex items-center bg-green-500 hover:bg-green-800 text-white font-bold py-2 px-4 rounded">
                           <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"><path fill="currentColor" d="M15 14c-2.67 0-8 1.33-8 4v2h16v-2c0-2.67-5.33-4-8-4m-9-4V7H4v3H1v2h3v3h2v-3h3v-2m6 2a4 4 0 0 0 4-4a4 4 0 0 0-4-4a4 4 0 0 0-4 4a4 4 0 0 0 4 4Z"/></svg>
                            <span>Add User</span>
                        </button>

                    </a>

                    <a href="{{route('admin.import.user')}}">
                      <button class="flex items-center bg-green-500 hover:bg-green-800 text-white font-bold py-2 px-4 rounded">
                          <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28"><path fill="currentColor" d="M19 17v2H7v-2s0-4 6-4s6 4 6 4m-3-9a3 3 0 1 0-3 3a3 3 0 0 0 3-3m3.2 5.06A5.6 5.6 0 0 1 21 17v2h3v-2s0-3.45-4.8-3.94M18 5a2.91 2.91 0 0 0-.89.14a5 5 0 0 1 0 5.72A2.91 2.91 0 0 0 18 11a3 3 0 0 0 0-6M8 10H5V7H3v3H0v2h3v3h2v-3h3Z"/></svg>
                          <span>Import user with csv</span>
                      </button>
                    </a>
                    @endcan

                    <a href="{{ route('admin.roles.index') }}">
                        <button class="flex items-center bg-blue-500 hover:bg-blue-800 text-white font-bold py-2 px-4 rounded">
                           <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"><path fill="currentColor" d="M16 5c-3.9 0-7 3.1-7 7a6.96 6.96 0 0 0 3.07 5.813C8.51 19.346 6 22.892 6 27h2c0-4.4 3.6-8 8-8c3.9 0 7-3.1 7-7s-3.1-7-7-7zm0 2c2.8 0 5 2.2 5 5s-2.2 5-5 5s-5-2.2-5-5s2.2-5 5-5zm5 12c-1.1 0-2 .9-2 2v4.4l6 6c.4.4.9.6 1.4.6c.5 0 1-.2 1.4-.6l3.6-3.6c.4-.4.6-.9.6-1.4c0-.5-.2-1-.6-1.4l-6-6H21zm0 2h3.6l5.4 5.4l-3.6 3.6l-5.4-5.4V21zm2 1a1 1 0 0 0 0 2a1 1 0 0 0 0-2z"/></svg>
                            <span>Add Role</span>
                        </button>
                    </a>
                    <a href="{{ route('admin.permissions.index') }}">
                        <button class="bg-yellow-500 hover:bg-yellow-800 text-white font-bold py-2 px-4 rounded flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"><path fill="currentColor" d="M6 8c0-2.21 1.79-4 4-4s4 1.79 4 4s-1.79 4-4 4s-4-1.79-4-4m6 10.2c0-.96.5-1.86 1.2-2.46V14.5c0-.05.02-.11.02-.16c-.99-.22-2.07-.34-3.22-.34c-4.42 0-8 1.79-8 4v2h10v-1.8m10 .1v3.5c0 .6-.6 1.2-1.3 1.2h-5.5c-.6 0-1.2-.6-1.2-1.3v-3.5c0-.6.6-1.2 1.2-1.2v-2.5c0-1.4 1.4-2.5 2.8-2.5s2.8 1.1 2.8 2.5v.5h-1.3v-.5c0-.8-.7-1.3-1.5-1.3s-1.5.5-1.5 1.3V17h4.3c.6 0 1.2.6 1.2 1.3Z"/></svg>
                            <span>Add Permission</span>
                        </button>
                    </a>
                </div>



              <div class="bg-white shadow-md rounded my-6">
                <table class="text-left w-full border-collapse">
                  <thead>
                    <tr>
                      <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">User Name</th>
                      <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">Role</th>
                      <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light text-right">Actions</th>
                    </tr>
                  </thead>
                  <tbody>

                    @can('User access')
                      @foreach($users as $user)
                      <tr class="hover:bg-grey-lighter">
                        <td class="py-4 px-6 border-b border-grey-light">{{ $user->name }}</td>
                        <td class="py-4 px-6 border-b border-grey-light">
                            @foreach($user->roles as $role)
                              <span class="inline-flex items-center justify-center px-2 py-1 mr-2 text-xs font-bold leading-none text-white bg-gray-500 rounded-full">{{ $role->name }}</span>
                            @endforeach
                        </td>
                        <td class="py-4 px-6 border-b border-grey-light text-right">
                          @can('User edit')
                          <a href="{{route('admin.users.edit',$user->id)}}" class=" underline text-grey-lighter font-bold py-1 px-3 rounded text-xs bg-green hover:bg-green-dark text-blue-400">Edit</a>
                          @endcan

                          @can('User delete')
                          <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" class="inline">
                              @csrf
                              @method('delete')
                              <button class=" underline text-grey-lighter font-bold py-1 px-3 rounded text-xs bg-blue hover:bg-blue-dark text-red-400">Delete</button>
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
