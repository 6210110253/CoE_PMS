<x-app-layout>
    <div>
         <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
             <div class="container mx-auto px-6 py-8">
                <div class="flex items-center justify-between">
                            <span class="text-3xl font-bold text-gray-900 dark:text-white"></span>
                            <a href="{{ route('admin.submission') }}" >
                                    <button class="flex items-center bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10.707,15.707l-5-5C5.512,10.512,5,10.265,5,9.914s0.512-0.598,0.707-0.793l5-5c0.391-0.391,1.023-0.391,1.414,0s0.391,1.023,0,1.414L8.414,8H15c0.553,0,1,0.447,1,1s-0.447,1-1,1H8.414l3.707,3.707C11.098,14.684,11.195,14.854,11.195,15.025C11.195,15.195,11.098,15.367,10.707,15.707z" />
                                        </svg>
                                        <span>Back</span>
                                    </button>
                            </a>
                </div>

                 <br>

                 <div class="w-full p-4  bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">

                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">

                             <tbody>
                                 <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                     <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                         Topic
                                     </th>
                                     <td class="px-6 py-4">
                                        {{ $processed->project->title }}
                                     </td>

                                 </tr>
                                 <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                     <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                         Submit by
                                     </th>
                                     <td class="px-6 py-4">

                                       {{ $processed->student->name }}
                                     </td>
                                 </tr>
                                 <tr class="bg-white dark:bg-gray-800">
                                     <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                         Round
                                     </th>
                                     <td class="px-6 py-4">
                                        {{ $processed->projectList->semester->name }}
                                     </td>
                                 </tr>
                                 <tr class="bg-white dark:bg-gray-800">
                                     <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                         Process
                                     </th>
                                     <td class="px-6 py-4">
                                        {{ $processed->jobProcess->process }}
                                     </td>

                                 </tr>
                                 <tr class="bg-white dark:bg-gray-800">
                                     <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                         Title
                                     </th>
                                     <td class="px-6 py-4">
                                        {{ $processed->jobProcess->topic }}
                                     </td>

                                 </tr>
                                 <tr class="bg-white dark:bg-gray-800">
                                     <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                         Description
                                     </th>
                                     <td class="px-6 py-4">
                                        @if(!empty($processed->detail))
                                            <div class="mb-6">
                                                <label for="detail" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> {{ $processed->detail }}</label>
                                            </div>
                                        @endif
                                     </td>

                                 </tr>
                                 <tr class="bg-white dark:bg-gray-800">
                                     <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                         File_progress
                                     </th>
                                     <td class="px-6 py-4">
                                        @if(!empty($processed->file_progress))
                                            <div class="mb-6">

                                                <a target="_blank" href="{{ Storage::url($processed->file_progress) }}">
                                                    <img src="{{ asset('images\icon_file.png') }}" width="50">
                                                </a>
                                            </div>
                                        @endif
                                     </td>

                                 </tr>
                                 <tr class="bg-white dark:bg-gray-800">
                                     <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                         File_report
                                     </th>
                                     <td class="px-6 py-4">
                                        @if(!empty($processed->file_report))
                                            <div class="mb-6">

                                                <a target="_blank" href="{{ Storage::url($processed->file_report) }}">
                                                    <img src="{{ asset('images\icon_file.png') }}" width="50">
                                                </a>
                                            </div>
                                        @endif
                                     </td>

                                 </tr>

                                 <tr class="bg-white dark:bg-gray-800">
                                     <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                         File_poster
                                     </th>
                                     <td class="px-6 py-4">
                                        @if(!empty($processed->file_poster))
                                            <div class="mb-6">

                                                <a target="_blank" href="{{ Storage::url($processed->file_poster) }}">
                                                    <img src="{{ asset('images\icon_file.png') }}" width="50">
                                                </a>
                                            </div>
                                        @endif
                                     </td>

                                 </tr>
                                  {{-- <tr class="bg-white dark:bg-gray-800">
                                     <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                         File_other
                                     </th>
                                     <td class="px-6 py-4">
                                        <div class="mb-6">

                                            @foreach ($processed->file_other as $file_other )
                                                <a target="_blank" href="{{ Storage::url($file_other) }}">
                                                <img src="{{ asset('images\icon_file.png') }}" width="50">
                                                </a>
                                            @endforeach
                                        </div>
                                     </td>

                                 </tr> --}}
                                  <tr class="bg-white dark:bg-gray-800">
                                     <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                         File_poster
                                     </th>
                                     <td class="px-6 py-4">
                                        @if(!empty($processed->file_video))
                                        <div class="mb-6">

                                            <a href="{{ $processed->file_video }}">
                                                <img src="{{ asset('images\icon_file.png') }}" width="50">
                                            </a>
                                        </div>
                                        @endif
                                     </td>

                                 </tr>

                                 <tr class="bg-white dark:bg-gray-800">
                                     <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                         Date_meeting
                                     </th>
                                     <td class="px-6 py-4">
                                        @if(!empty($processed->date_meeting))
                                            <div class="mb-6">
                                                <label for="file_video" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ $processed->date_meeting }}</label>
                                            </div>
                                        @endif
                                     </td>

                                 </tr>


                             </tbody>
                         </table>

                     <br>

                     @if($processed->jobProcess->type == "report")
                        @if($processed->projectList->status != "Finished")
                        <button class="statusFinished flex items-center bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10.707,15.707l-5-5C5.512,10.512,5,10.265,5,9.914s0.512-0.598,0.707-0.793l5-5c0.391-0.391,1.023-0.391,1.414,0s0.391,1.023,0,1.414L8.414,8H15c0.553,0,1,0.447,1,1s-0.447,1-1,1H8.414l3.707,3.707C11.098,14.684,11.195,14.854,11.195,15.025C11.195,15.195,11.098,15.367,10.707,15.707z" />
                                </svg>
                            <span>Up to Finished Project</span>
                        </button>
                        @endif
                    @endif

                 </div>







             </div>
         </main>
     </div>
 </div>
 <script>
    $('.statusFinished').click(function(){
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
               let id = $(this).attr('data-id');
                 $.ajax({
                    url: "{{ route('admin.project.finish') }}",
                    type: "POST",
                    data: {
                        _token : $('meta[name="csrf-token"]').attr('content'),
                        id : id ,
                        project_list_id : '{{ $processed->project_list_id }}',
                        status : 'Finished'
                    },
                    success: function(result){
                        if(result.status)
                        {
                                Swal.fire('updated!', '', 'success')
                                location.reload();
                        }else{
                                Swal.fire(result.massege, '', 'error')
                        }
                    }

                 })

            }
        })

    })
 </script>
 </x-app-layout>
