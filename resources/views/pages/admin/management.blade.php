<x-app-layout>
    <style>
/* CHECKBOX TOGGLE SWITCH */
/* @apply rules for documentation, these do not work as inline style */
.toggle-checkbox:checked {
  @apply: right-0 border-green-400;
  right: 0;
  border-color: #68D391;
}
.toggle-checkbox:checked + .toggle-label {
  @apply: bg-green-400;
  background-color: #68D391;
}
</style>
    <div>
         <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">

             <div class="container mx-auto px-6 py-8">

                 <div class="">

                     <div class="w-full p-8  bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">

                         <p class="text-lg text-gray-900 dark:text-white">Create semester/year</p>
                         <hr><br>

                         <div class="relative overflow-x-auto">
                                 {{-- <div class="flex justify-end pb-4 bg-white dark:bg-gray-900">


                                     <label for="table-search" class="sr-only">Search</label>
                                     <div class="relative mt-1">
                                         <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                             <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                                         </div>
                                         <input type="text" id="table-search" class="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for items">
                                     </div>

                                 </div> --}}

                            <form class="flex flex-justify-left gap-4"
                                method="post"
                                action=" {{ route('admin.semester.store') }}">
                                @csrf
                                <label class="">Name</label>
                                <input type="text" name="name" id="table-search" class="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="กรอกข้อมูล">

                                <label class="">Year</label>
                                <input type="text"  name="year" id="table-search" class="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="กรอกข้อมูล">

                                <button class="flex items-center text-white bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <span class="inline-flex justify-center items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                                    </svg>                        
                                </span>
                                
                                <span class="mx-3">Create</span>
                                </button>
                            </form>

                                <br>
                             <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                 <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                                     <tr>
                                         <th scope="col" class="px-6 py-3">
                                             Name
                                         </th>
                                         <th scope="col" class="px-6 py-3">
                                             Year
                                         </th>
                                         <th scope="col" class="px-6 py-3">
                                             Status
                                        </th>
                                         <th scope="col" class="px-6 py-3">
                                            Action
                                        </th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                    @foreach ($semesters as $semester)

                                     <tr class="bg-white dark:bg-gray-800">
                                         <td class="px-6 py-4">
                                            {{ $semester->name }}
                                         </td>
                                         <td class="px-6 py-4">
                                            {{ $semester->year }}
                                         </td>
                                         <td class="px-6 py-4">
                                            <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                                                <input  value="1"
                                                @if( $semester->is_active == 1)
                                                        checked
                                                @endif
                                                        type="checkbox"
                                                        name="is_active[]"
                                                        data-id="{{ $semester->id }}"
                                                        id="toggle{{ $semester->id }}" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer"/>
                                                <label for="toggle{{ $semester->id }}" class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
                                            </div>
                                            <label for="toggle{{ $semester->id }}" class="text-xs text-gray-700">Active</label>
                                         </td>
                                         <td class="px-6 py-4">
                                            <a class=" underline text-grey-lighter font-bold py-1 px-3 rounded text-xs bg-blue hover:bg-blue-dark text-blue-400" href="{{ route('admin.semester.edit', $semester) }}">Edit</a>
                                            <button class="underline text-grey-lighter font-bold py-1 px-3 rounded text-xs bg-green hover:bg-green-dark text-red-400" id="delete_semester"> Delete</button>
                                         </td>

                                     </tr>
                                     @endforeach


                             </table>

                         </div>




                     </div>


              </div>
              <br>

              <div class="">

                     <div class="w-full p-8  bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">

                         <p class="text-lg text-gray-900 dark:text-white">Create submission </p>
                         <hr><br>
                         <div class="flex justify-end gap-4">
                            <a href="{{ route('admin.form.create.submission')}}" class="flex items-center text-white bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <span class="inline-flex justify-center items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                                    </svg>                        
                                </span>
                                
                                <span class="mx-3">Create Form</span>
                            </a>
                        </div>

                         <div class="relative overflow-x-auto">
                                 {{-- <div class="flex justify-end pb-4 bg-white dark:bg-gray-900">


                                     <label for="table-search" class="sr-only">Search</label>
                                     <div class="relative mt-1">
                                         <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                             <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                                         </div>
                                         <input type="text" id="table-search" class="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for items">
                                     </div>

                                 </div> --}}


                                <br>
                             <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                 <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">

                                    <tr>
                                         <th scope="col" class="px-6 py-3 ">
                                             Name
                                         </th>
                                         <th scope="col" class="px-6 py-3">
                                             Round
                                         </th>
                                         <th scope="col" class="px-6 py-3 ">
                                             Process
                                         </th>
                                         <th scope="col" class="px-6 py-3 ">
                                            Topic
                                        </th>
                                         <th scope="col" class="px-6 py-3 ">
                                            START DATE
                                        </th>
                                         <th scope="col" class="px-6 py-3 ">
                                             EXTENDED DATE
                                         </th>
                                         <th scope="col" class="px-6 py-3 ">
                                             STATUS
                                         </th>
                                         <th scope="col" class="px-6 py-3 ">
                                             ACTION
                                         </th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                    @foreach ($job_pros as $job_pro)
                                     <tr class="bg-white dark:bg-gray-800">
                                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $job_pro->process }}
                                         </th>
                                         <td class="px-6 py-4">
                                            {{ $job_pro->semester->name }}
                                         </td>
                                         <td class="px-6 py-4">
                                            @if( $job_pro->type == 'appointment')
                                            <span class="bg-green-200 text-green-600 py-1 px-3 mt-2 rounded-full text-xs">appointment</span>
                                            @elseif ( $job_pro->type == 'submission')
                                            <span class="bg-green-200 text-green-600 py-1 px-3 mt-2 rounded-full text-xs">submission</span>
                                            @elseif ( $job_pro->type == 'report')
                                            <span class="bg-green-200 text-green-600 py-1 px-3 mt-2 rounded-full text-xs">report</span>
                                            @endif
                                         </td>
                                         <td class="px-6 py-4">
                                            {{ $job_pro->topic  }}
                                         </td>
                                         <td class="px-6 py-4">
                                            {{ dateThai($job_pro->start_date) }}
                                         </td>
                                         <td class="px-6 py-4">
                                            {{ dateThai($job_pro->end_date) }}
                                         </td>
                                         <td class="px-6 py-4">
                                            @if( $job_pro->status == 'publish')
                                            <span class="bg-green-200 text-green-600 py-1 px-3 mt-2 rounded-full text-xs"> {{ $job_pro->status }} </span>
                                            @else
                                            <span class="bg-purple-200 text-purple-600 py-1 px-3 mt-2 rounded-full text-xs"> {{ $job_pro->status }} </span>
                                            @endif
                                         </td>
                                         <td class="px-6 py-4">
                                            <a class="underline text-grey-lighter font-bold py-1 px-3 rounded text-xs bg-blue hover:bg-blue-dark text-blue-400">Edit</a>
                                            <button class="underline text-grey-lighter font-bold py-1 px-3 rounded text-xs bg-green hover:bg-green-dark text-red-400" id="delete_submission"> Delete</button>
                                         </td>

                                     </tr>
                                     @endforeach

                                 </tbody>

                             </table>
                         </div>




                     </div>

                        <br>
              </div>

            </div>


         </main>
     </div>
 </div>
 <script>
    $('.toggle-checkbox').change(function() {
          if(this.checked) {
           var id = $(this).attr('data-id')
             updateActive(id,1)
          }else{
             var id = $(this).attr('data-id')
             updateActive(id,0)
          }
    });
    function updateActive(id,is_active){
        $.ajax({
            url: "{{ route('admin.update.active') }}",
            type: "POST",
            data: {
                _token : $('meta[name="csrf-token"]').attr('content'),
                id : id ,
                is_active : is_active
            },
            success: function(result){
                if(result.status)
                {
                        Swal.fire('Saved!', '', 'success')
                }else{
                        Swal.fire(result.massege, '', 'error')
                }
            }

        })
    }

    $('#delete_semester').click(function(){
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

    $('#delete_submission').click(function(){
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

