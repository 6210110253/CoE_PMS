<x-app-layout>
    <div>
         <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
            <div class="container mx-auto px-6 py-2">
              <br>


            <div class="bg-white shadow-md rounded my-6">
                <table class="text-left w-full border-collapse">
                  <thead>
                    <tr>
                      <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">Semeter</th>
                      <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">Title</th>
                      <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">Detail</th>
                      <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light ">Start</th>
                      <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light ">Finish</th>

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
