<x-app-layout>
    <div>
         <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
             <div class="container mx-auto px-6 py-8">
                <div class="flex items-center justify-between">
                            <span class="text-3xl font-bold text-gray-900 dark:text-white"></span>
                            <a href="{{ route('admin.management') }}">
                                    <button class="flex items-center bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10.707,15.707l-5-5C5.512,10.512,5,10.265,5,9.914s0.512-0.598,0.707-0.793l5-5c0.391-0.391,1.023-0.391,1.414,0s0.391,1.023,0,1.414L8.414,8H15c0.553,0,1,0.447,1,1s-0.447,1-1,1H8.414l3.707,3.707C11.098,14.684,11.195,14.854,11.195,15.025C11.195,15.195,11.098,15.367,10.707,15.707z" />
                                        </svg>
                                        <span>Back</span>
                                    </button>
                            </a>
                </div>
                
                <br>

                <div class="w-full p-8  bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">

                         <p class="text-lg text-gray-900 dark:text-white">ฟอร์มสร้างการส่งงาน </p>
                         <hr><br>

                         <form
                            method="post"
                            action="{{ Request::route()->getName() == 'admin.form.create.submission' ?  route('admin.submission.store') : route('admin.submission.update', $jobprocess) }}">
                            @csrf

                        <div class="mb-6">
                            <label for="topic" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Topic</label>
                            <input type="text"
                                    name="topic"
                                    value="{{ $jobprocess->topic ?? '' }}"
                                    id="topic"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                                    focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600
                                    dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="หัวข้อการส่งงาน" required>
                        </div>

                        
                        <div date-rangepicker class="flex items-center">
                        <div class="relative">
                            <label>Start Date</label>
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                            </div>
                            <input name="start_date" type="text" 
                            data-date="{{ !empty($jobprocess->start_date) ? $jobprocess->start_date->format('m/d/Y') : '' }}"
                             value="{{ !empty($jobprocess->start_date) ? $jobprocess->start_date->format('m/d/Y') : '' }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date start">
                        </div>
                        <span class="mx-4 text-gray-500">to</span>
                        <div class="relative">
                             <label>End Date</label>
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                            </div>
                            <input name="end_date" type="text" 
                            data-date="{{ !empty($jobprocess->end_date) ? $jobprocess->end_date->format('m/d/Y') : '' }}"
                             value="{{ !empty($jobprocess->end_date) ? $jobprocess->end_date->format('m/d/Y') : '' }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date end">
                        </div>
                        </div>



                          <br>
                        <div class="mb-6">
                            <label for="process" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Process <span class="text-red-500">*</span></label>
                            <select name="process" id="status" >
                                <option value="">--select process--</option>
                                @foreach($processes as $process )
                                <option value="{{ $process }}" {{  @$jobprocess->process == $process  ? 'selected' : '' }} >{{ $process }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-6">
                            <label for="semester_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Semester <span class="text-red-500">*</span></label>
                            <select name="semester_id" id="semester_id" >
                                <option value="">--select term/year--</option>
                                @foreach ($semesters as $semester)
                                <option value="{{ $semester->id }}" {{ !empty(@$jobprocess) ? $jobprocess->semester_id == $semester->id  ? 'selected' : ''  : '' }}> {{ $semester->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-6">
                            <label for="type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Type <span class="text-red-500">*</span></label>
                            <select name="type" id="type" >
                                <option value="">--select type--</option>
                                <option value="appointment" {{  @$jobprocess->type == 'appointment' ? 'selected' : '' }} >การนัดพบอาจารย์ที่ปรึกษา</option>
                                <option value="submission" {{  @$jobprocess->type == 'submission' ? 'selected' : '' }} >ส่งไฟล์งานรายงาน</option>
                                <option value="report" {{  @$jobprocess->type == 'report' ? 'selected' : '' }}>ส่งรายงานทั้งหมด</option>
                            </select>
                        </div>

                        <div class="mb-6">
                            <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status <span class="text-red-500">*</span></label>
                            <select name="status" id="status" >
                                <option value="">--select status--</option>
                                <option value="draft" {{  @$jobprocess->status == 'draft' ? 'selected' : '' }}> draft</option>
                                <option value="publish" {{  @$jobprocess->status == 'publish' ? 'selected' : '' }}> publish</option>

                            </select>
                        </div>

                        <div class="text-center mt-16 mb-16">
                    <button class="flex items-center bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M17.707,3.293C17.316,2.902,16.684,2.902,16.293,3.293L7,12.586V8c0-0.553-0.447-1-1-1s-1,0.447-1,1v6c0,0.553,0.447,1,1,1h10c0.553,0,1-0.447,1-1s-0.447-1-1-1H8.414l9.293-9.293c0.391-0.391,0.391-1.023,0-1.414S18.098,2.902,17.707,3.293z" />
                        </svg>
                        Submit
                    </button>
                    </div>
                    </form>
                </div>


             </div>
         </main>
     </div>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/datepicker.min.js"></script>
     <script>
         const start_date_input = document.getElementById("sdate");
         const end_date_input = document.getElementById("edate");

        start_date_input.addEventListener("change", checkDateValidity);
        end_date_input.addEventListener("change", checkDateValidity);

        function checkDateValidity() {
            const start_date_value = start_date_input.value;
            const end_date_value = end_date_input.value;

        if (start_date_value >= end_date_value) {
            alert("Start date must be less than end date");
        }
  }
     </script>
 </x-app-layout>
