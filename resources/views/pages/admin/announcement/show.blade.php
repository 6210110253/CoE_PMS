<x-app-layout>
    <div>
         <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
            <div class="container mx-auto px-6 py-2">
              <br>

              <div class="flex items-right justify-between">
                <span class="text-3xl font-bold text-white-900 dark:text-white"></span>
                <a href="{{ route('admin.announcement')  }}">
                    <button class="bg-green-500 hover:bg-green-800 text-white-800 text-white font-bold py-2 px-4 rounded inline-flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="m14.06 9l.94.94L5.92 19H5v-.92L14.06 9m3.6-6c-.25 0-.51.1-.7.29l-1.83 1.83l3.75 3.75l1.83-1.83c.39-.39.39-1.04 0-1.41l-2.34-2.34c-.2-.2-.45-.29-.71-.29m-3.6 3.19L3 17.25V21h3.75L17.81 9.94l-3.75-3.75Z"/></svg>
                        <span>Create Announcement</span>
                    </button>
                </a>
            </div>
            
            <div class="bg-white shadow-md rounded my-6">
                <table class="text-left w-full border-collapse">
                  <thead>
                    <tr>
                      <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">Semeter</th>
                      <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">Title</th>
                      <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">Detail</th>
                      <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light ">Start</th>
                      <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light ">Finish</th>
                      <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light ">Status</th>
                      <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">Action</th>
                    </tr>
                  </thead>
                  <tbody>

                   
                      @foreach($announcements as $announcement )
                      <tr class="hover:bg-grey-lighter">
                        <td class="py-4 px-6 border-b border-grey-light">{{ $announcement->semester->name}}</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{ $announcement->title }}</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{ $announcement->detail }}</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{ dateThai($announcement->start) }}</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{ dateThai($announcement->finish) }}</td>

                        <td class="py-4 px-6 border-b border-grey-light">
                            @if($announcement->status == 'draft')
                            <span class="bg-green-200 text-green-600 py-1 px-3 mt-2 rounded-full text-xs"> {{ $announcement->status }} </span>
                            @else
                            <span class="bg-purple-200 text-purple-600 py-1 px-3 mt-2 rounded-full text-xs"> {{ $announcement->status }} </span>
                            @endif
    
                        </td>

                        <td class="py-4 px-6">
                         
                          <a href="{{ route('admin.announcement.edit', $announcement) }}" class="underline text-grey-lighter font-bold py-1 px-3 rounded text-xs bg-green hover:bg-green-dark text-blue-400">Edit</a>

                          <button class="underline text-grey-lighter font-bold py-1 px-3 rounded text-xs bg-green hover:bg-green-dark text-red-400" id="delete"> Delete</button>
                      
                        </td> 
                      </tr>
                    @endforeach
                

                  </tbody>
                </table>
              </div>
            </div>





        </main>
 </div>
 <script>
    $('#delete').click(function(){
        Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                )
            }
        })

    })
 </script>
 </x-app-layout>