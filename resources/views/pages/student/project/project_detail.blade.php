<x-app-layout>
   <div>
        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
            <div class="container mx-auto px-6 py-8">
                <div class="flex items-center justify-between">
                            <span class="text-3xl font-bold text-gray-900 dark:text-white"></span>
                            <a href="{{ route('student.project.select') }}">
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
                                        {{ $project->semester->name }}
                                    </td>

                                </tr>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Topic
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $project->title }}
                                    </td>

                                </tr>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Description
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $project->detail }}
                                    </td>

                                </tr>
                                <tr class="bg-white dark:bg-gray-800">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Scope
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $project->scope }}
                                    </td>

                                </tr>
                                <tr class="bg-white dark:bg-gray-800">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Objective
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $project->objective }}
                                    </td>

                                </tr>
                                <tr class="bg-white dark:bg-gray-800">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Results
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $project->results }}
                                    </td>

                                </tr>
                                <tr class="bg-white dark:bg-gray-800">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        ER Diagram
                                    </th>
                                    <td class="px-6 py-4">
                                        @if(!empty($project->file_er_diagram))
                                        <br>
                                        <a target="_blank" href="{{ Storage::url($project->file_er_diagram) }}">
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
                                        @if(!empty($project->file_design))
                                        <br>
                                        <a target="_blank" href="{{ Storage::url($project->file_design) }}">
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
                                        @if(!empty($project->usecase))
                                        <br>
                                        <a target="_blank" href="{{ Storage::url($project->usecase) }}">
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
                                        @if(!empty($project->file_other))
                                        <br>
                                        <div class="flex flex-row gap-2">
                                        @foreach ($project->file_other as $file_other )
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
                                        Number Member
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $project->member_count }}
                                    </td>

                                </tr>

                                 <tr>
                                   <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                     Member
                                    </th>
                                     <td class="px-6 py-4">

                                    <select name="student_reservetion[]" id="student_reservetion" multiple="multiple" class="select2">
                                        <option value="">--select member--</option>
                                        @foreach ($students as $student)
                                        <option value="{{ $student->id }}" {{ !empty($project->student_reservetion) ? in_array($student->id,$project->student_reservetion) ? 'selected' : ''  : '' }}>{{ $student->name }}</option>
                                        @endforeach

                                    </select>
                                    </td>
                                </tr>


                            </tbody>
                        </table>

                        @if(empty(hasProjectList(Auth::id())))

                            @if(@$project_reservation->status == 'wait')
                                <div class="w-full bg-gradient-to-tr from-orange-300 to-orange-300 py-4">
                                    <h1 class="text-center text-orange-800 text-xl font-bold">pending approval</h1>
                                </div>
                            @else
                                <div class="flex justify-center gap-4 mx-auto">
                                        <button id="reservation" class="w-1/3 sm:w-auto bg-green-500 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-gray-300 text-white rounded-lg inline-flex items-center justify-center px-4 py-2.5 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"><path fill="currentColor" d="M13 7h-2v4H7v2h4v4h2v-4h4v-2h-4V7zm-1-5C6.48 2 2 6.48 2 12s4.48 10 10 10s10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8s8 3.59 8 8s-3.59 8-8 8z"/></svg>
                                            <span class="-mt-1 font-sans text-sm font-semibold">Reservation</span>
                                        </button>
                                </div>
                            @endif
                        @endif
                    </div>

                </div>









            </div>
        </main>
    </div>

</div>

<script>
    $('.select2').select2();

    $('#reservation').click(function(){

        Swal.fire({
            title: 'Do you want to reservation the project?',
            showCancelButton: true,
            confirmButtonText: 'Yes',
        }).then((result) => {

            if (result.isConfirmed) {

                var student_reser = $('#student_reservetion').val();
                var member_count = parseInt('{{ $project->member_count ?? 0 }}')

                if(student_reser.length +1 == member_count){
                     $.ajax({
                    url: "{{ route('student.reservation') }}",
                        type: "POST",
                        data: {
                            _token : $('meta[name="csrf-token"]').attr('content'),
                            project_id : `{{ $project->id }}`,
                            student_reservetion: $('#student_reservetion').val(),
                        },
                        success: function(result){
                            if(result.status)
                            {
                                Swal.fire('Saved!', '', 'success')
                                $('#reservation').prop('disabled', true);
                            }else{
                                Swal.fire(result.massege, '', 'error')
                            }
                        }

                    });
                }else{
                    Swal.fire('จำนวนสมาชิกไม่ถูกต้อง', '', 'warning')
                }



            }
        })

    })





</script>
</x-app-layout>
