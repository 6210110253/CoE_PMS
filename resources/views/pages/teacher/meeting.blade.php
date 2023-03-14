<x-app-layout>
    <div>
         <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
             <div class="container mx-auto px-6 py-8">
                <div class="flex justify-center gap-4">
                 
                    <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">

                        <svg class=" w-10 h-10 mb-2 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 5a3 3 0 015-2.236A3 3 0 0114.83 6H16a2 2 0 110 4h-5V9a1 1 0 10-2 0v1H4a2 2 0 110-4h1.17C5.06 5.687 5 5.35 5 5zm4 1V5a1 1 0 10-1 1h1zm3 0a1 1 0 10-1-1v1h1z" clip-rule="evenodd"></path><path d="M9 11H3v5a2 2 0 002 2h4v-7zM11 18h4a2 2 0 002-2v-5h-6v7z"></path></svg>
                            <h5 class="mb-2 text-2xl  text-center font-semibold tracking-tight text-gray-900 dark:text-white">รายการที่ยังไม่เลือกเวลาการนัดพบแล้ว</h5>
                        <p class="mb-3 font-normal text-gray-500 dark:text-gray-400 text-center	">จำนวน 6 รายการ</p>
                        {{-- <a href="{{ route('project.propose.to.teacher') }}" class="inline-flex items-center text-blue-600 hover:underline">
                            See our guideline

                        </a> --}}
                    </div>


                    <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <svg class=" w-10 h-10 mb-2 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 5a3 3 0 015-2.236A3 3 0 0114.83 6H16a2 2 0 110 4h-5V9a1 1 0 10-2 0v1H4a2 2 0 110-4h1.17C5.06 5.687 5 5.35 5 5zm4 1V5a1 1 0 10-1 1h1zm3 0a1 1 0 10-1-1v1h1z" clip-rule="evenodd"></path><path d="M9 11H3v5a2 2 0 002 2h4v-7zM11 18h4a2 2 0 002-2v-5h-6v7z"></path></svg>
                            <h5 class="mb-2 text-2xl text-center font-semibold tracking-tight text-gray-900 dark:text-white">นักศึกษาจองโปรเจกต์ 2565</h5>
                        <p class="mb-3 font-normal text-gray-500 dark:text-gray-400 text-center	">จำนวน 6 รายการ</p>

                        {{-- <svg class="w-10 h-10 mb-2 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 5a3 3 0 015-2.236A3 3 0 0114.83 6H16a2 2 0 110 4h-5V9a1 1 0 10-2 0v1H4a2 2 0 110-4h1.17C5.06 5.687 5 5.35 5 5zm4 1V5a1 1 0 10-1 1h1zm3 0a1 1 0 10-1-1v1h1z" clip-rule="evenodd"></path><path d="M9 11H3v5a2 2 0 002 2h4v-7zM11 18h4a2 2 0 002-2v-5h-6v7z"></path></svg>
                        <a href="{{ route('project.request') }}">
                            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">นักศึกษาจองโปรเจกต์</h5>
                        </a> --}}

                    </div>

                    <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <svg class=" w-10 h-10 mb-2 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 5a3 3 0 015-2.236A3 3 0 0114.83 6H16a2 2 0 110 4h-5V9a1 1 0 10-2 0v1H4a2 2 0 110-4h1.17C5.06 5.687 5 5.35 5 5zm4 1V5a1 1 0 10-1 1h1zm3 0a1 1 0 10-1-1v1h1z" clip-rule="evenodd"></path><path d="M9 11H3v5a2 2 0 002 2h4v-7zM11 18h4a2 2 0 002-2v-5h-6v7z"></path></svg>
                            <h5 class="mb-2 text-2xl  text-center font-semibold tracking-tight text-gray-900 dark:text-white">รายการที่เลือกเวลาการนัดพบแล้ว</h5>
                        <p class="mb-3 font-normal text-gray-500 dark:text-gray-400 text-center	">จำนวน 6 รายการ</p>

                        {{-- <svg class="w-10 h-10 mb-2 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 5a3 3 0 015-2.236A3 3 0 0114.83 6H16a2 2 0 110 4h-5V9a1 1 0 10-2 0v1H4a2 2 0 110-4h1.17C5.06 5.687 5 5.35 5 5zm4 1V5a1 1 0 10-1 1h1zm3 0a1 1 0 10-1-1v1h1z" clip-rule="evenodd"></path><path d="M9 11H3v5a2 2 0 002 2h4v-7zM11 18h4a2 2 0 002-2v-5h-6v7z"></path></svg>
                        <a href="{{ route('project.request') }}">
                            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">นักศึกษาจองโปรเจกต์</h5>
                        </a> --}}

                    </div>
                    
 
                </div>

                <br>

                <div class="w-full p-4  bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                   @foreach ($meetings as $meeting)
                    <div class="w-full  bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
 
                        <div class="px-5 pb-5">
                               <br>
                            <a >
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $meeting->title }}</h5>
                                <p class="font-normal text-gray-700 dark:text-gray-400">รายละเอียด {{ $meeting->detail }}</p>
                                <p class="font-normal text-gray-700 dark:text-gray-400">ช่วงเวลาที่เข้าพบ <span>{{ $meeting->start_date }} - {{ $meeting->end_date }} </span></p>
                                <p class="font-normal text-gray-700 dark:text-gray-400">ชื่อผู้เข้าพบ {{ $meeting->created_by }}</p>
                                {{-- <a href="{{ route('teacher.meeting.datail') }}">เพิ่มเติม...</a> --}}
                            </a>
                            
                            <div class="flex justify-center gap-4">
                                <div>
                                    <span class="text-3xl font-bold text-gray-900 dark:text-white"></span>
                                    <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Approve</a>
                                </div>
                                <div>
                                    <span class="text-3xl font-bold text-gray-900 dark:text-white"></span>
                                    <a href="#" class="reject text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" data-id="{{ $meeting->id }}" >Reject</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                   @endforeach

                </div>
                
 
             </div>
         </main>
     </div>
 </div>
 <script>
    $('.reject').click(function(){

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
                            url: "",
                            type: "POST",
                            data: {
                                _token : $('meta[name="csrf-token"]').attr('content'),
                                status : 'reject',
                                comment : result.value,
                                teacher_id : "{{ Auth::id() }}",
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
 </x-app-layout>
 