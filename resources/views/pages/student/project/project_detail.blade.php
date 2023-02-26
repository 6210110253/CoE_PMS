<x-app-layout>
   <div>
        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
            <div class="container mx-auto px-6 py-8">
                <div class="flex items-center justify-between">
                            <span class="text-3xl font-bold text-gray-900 dark:text-white"></span>
                            <a href="{{ route('student.project.select') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Back</a>
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
                                รออาจารย์อนุมัติ
                            @else
                                <div class="flex justify-center gap-4 mx-auto">
                                        <button id="reservation" class="w-1/3 sm:w-auto bg-gray-800 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 text-white rounded-lg inline-flex items-center justify-center px-4 py-2.5 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700">
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
