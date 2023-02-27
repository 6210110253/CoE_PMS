<x-app-layout>
    <div>
         <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
             <div class="container mx-auto px-6 py-8">
                <div class="flex items-center justify-between">
                            <span class="text-3xl font-bold text-gray-900 dark:text-white"></span>
                            <a href="{{ route('teacher.project.teacher') }}">
                                    <button class="flex items-center bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10.707,15.707l-5-5C5.512,10.512,5,10.265,5,9.914s0.512-0.598,0.707-0.793l5-5c0.391-0.391,1.023-0.391,1.414,0s0.391,1.023,0,1.414L8.414,8H15c0.553,0,1,0.447,1,1s-0.447,1-1,1H8.414l3.707,3.707C11.098,14.684,11.195,14.854,11.195,15.025C11.195,15.195,11.098,15.367,10.707,15.707z" />
                                        </svg>
                                        <span>Back</span>
                                    </button>
                            </a>
                </div>
                <br>

                 <div class="w-full p-4 text-center bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">


                    <div class="relative overflow-x-auto">



                         <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">

                             <tbody>
                                 <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                     <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                         Topic
                                     </th>
                                     <td class="px-6 py-4">
                                        {{  $project_reservation->project->title }}
                                     </td>

                                 </tr>
                                 <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                     <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                         Description
                                     </th>
                                     <td class="px-6 py-4">

                                        {{ $project_reservation->project->detail}}
                                     </td>

                                 </tr>
                                 <tr class="bg-white dark:bg-gray-800">
                                     <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                         Scope
                                     </th>
                                     <td class="px-6 py-4">
                                        {{ $project_reservation->project->scope }}
                                     </td>

                                 </tr>
                                 <tr class="bg-white dark:bg-gray-800">
                                     <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                         Objective
                                     </th>
                                     <td class="px-6 py-4">
                                        {{ $project_reservation->project->objective }}
                                     </td>

                                 </tr>
                                 <tr class="bg-white dark:bg-gray-800">
                                     <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                         Results
                                     </th>
                                     <td class="px-6 py-4">
                                        {{ $project_reservation->project->results }}
                                     </td>

                                 </tr>
                                 <tr class="bg-white dark:bg-gray-800">
                                     <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                         ER Diagram
                                     </th>
                                     <td class="px-6 py-4">
                                        @if(!empty($project_reservation->project->file_er_diagram))
                                        <br>
                                        <a target="_blank" href="{{ Storage::url($project_reservation->project->file_er_diagram) }}">
                                          <img src="{{ asset('images\icon_file.png') }}" width="50">
                                        </a>
                                        @endif
                                     </td>

                                 </tr>
                                 <tr class="bg-white dark:bg-gray-800">
                                     <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                         Design File
                                     </th>
                                     <td class="px-6 py-4">
                                        @if(!empty($project_reservation->project->file_design))
                                        <br>
                                        <a target="_blank" href="{{ Storage::url($project_reservation->project->file_design) }}">
                                        <img src="{{ asset('images\icon_file.png') }}" width="50">
                                        </a>
                                        @endif
                                     </td>

                                 </tr>
                                 <tr class="bg-white dark:bg-gray-800">
                                     <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                         Use Case
                                     </th>
                                     <td class="px-6 py-4">
                                        @if(!empty($project_reservation->project->usecase))
                                        <br>
                                        <a target="_blank" href="{{ Storage::url($project_reservation->project->usecase) }}">
                                        <img src="{{ asset('images\icon_file.png') }}" width="50">
                                        </a>
                                        @endif
                                     </td>

                                 </tr>

                                 <tr class="bg-white dark:bg-gray-800">
                                     <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                         Other
                                     </th>
                                     <td class="px-6 py-4">
                                        @if(!empty($project_reservation->project->file_other))
                                        <br>
                                        <div class="flex flex-row gap-2">
                                        @foreach ($project_reservation->project->file_other as $file_other )
                                            <a target="_blank" href="{{ Storage::url($file_other) }}">
                                            <img src="{{ asset('images\icon_file.png') }}" width="50">
                                            </a>
                                        @endforeach
                                        </div>
                                        @endif
                                     </td>

                                 </tr>

                                 <tr class="bg-white dark:bg-gray-800">
                                     <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                         Member
                                     </th>
                                     <td class="px-6 py-4">
                                        @if(!empty($project_reservation->student_reservetion))

                                            @foreach ($project_reservation->student_reservetion_list as $key => $member )
                                                <p class="font-normal text-gray-700 dark:text-gray-400">{{ $key+1 }}.{{ $member }}</p>

                                            @endforeach

                                        @else
                                            <p class="font-normal text-gray-700 dark:text-gray-400">1.{{ $project_reservation->member->name }}</p>

                                        @endif
                                     </td>

                                 </tr>
                             </tbody>
                         </table>
                     </div>

                     <br>


                     <div class="flex justify-center gap-4 mx-auto">
                        @if($project_reservation->status == 'wait')

                        <div class="flex items-center justify-between">
                            <span class="text-3xl font-bold text-gray-900 dark:text-white "></span>
                            <a href="#" id="accept" class="text-white bg-green-500 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center  ">Accept</a>
                        </div>

                        <button id="reject" class="block text-white bg-red-500 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center " type="button">
                            Reject
                        </button>
                        @elseif($project_reservation->status == 'remove')
                        55555
                        @elseif($project_reservation->status == 'approve')
                        approved
                        @elseif($project_reservation->status == 'reject')
                        {{ $project_reservation->comment }}
                        rejected
                        @endif




                    </div>
                 </div>









             </div>
         </main>
     </div>



    <script>

         $('#accept').click(function(){

            Swal.fire({

                text: "คุณต้องการยืนยันรับโปรเจกต์ใช่ไหม!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes'
                }).then((result) => {
                        if (result.isConfirmed) {
                            $.ajax({
                                url: "{{ route('teacher.project.reservation.update_status') }}",
                                type: "POST",
                                data: {
                                    _token : $('meta[name="csrf-token"]').attr('content'),
                                    project_reservation_id : `{{ $project_reservation->id }}`,
                                    status : 'approve',
                                    comment : '',
                                    teacher_id : "{{ Auth::id() }}",
                                    semester_id : '1'
                                },
                                success: function(result){
                                    if(result.status)
                                    {
                                        Swal.fire('Approved!', '', 'success').then((result)=>{
                                            location.reload();
                                        })
                                    }else{
                                        Swal.fire(result.massege, '', 'error')
                                    }
                                }

                            });
                        }
                })
        })

        $('#reject').click(function(){

            Swal.fire({
                title: 'Enter your comment',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes',
                input: 'text',
                customClass: {
                    validationMessage: 'my-validation-message'
                },
                preConfirm: (value) => {
                    if (!value) {
                    Swal.showValidationMessage(
                        '<i class="fa fa-info-circle"></i> Your name is required'
                    )
                    }
                }
                }).then((result) => {
                    console.log(result.value);
                        if (result.isConfirmed) {

                            $.ajax({
                                url: "{{ route('teacher.project.reservation.update_status') }}",
                                type: "POST",
                                data: {
                                    _token : $('meta[name="csrf-token"]').attr('content'),
                                    project_reservation_id : `{{ $project_reservation->id }}`,
                                    status : 'reject',
                                    comment : result.value,
                                    teacher_id : "{{ Auth::id() }}",
                                    semester_id : '{{ $project_reservation->project->semester_id }}' ,
                                },
                                success: function(result){
                                    if(result.status)
                                    {
                                        Swal.fire('Rejected!', '', 'success').then((result)=>{
                                            location.reload();
                                        })

                                    }else{
                                        Swal.fire(result.massege, '', 'error')
                                    }
                                }

                            });
                        }
                })
        })
    </script>
 </div>
 </x-app-layout>


