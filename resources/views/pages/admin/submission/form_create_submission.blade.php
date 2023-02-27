<x-app-layout>
    <div>
         <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
             <div class="container mx-auto px-6 py-8">
                <div class="flex items-center justify-between">
                            <span class="text-3xl font-bold text-gray-900 dark:text-white"></span>
                            <a href="{{ route('admin.management') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Back</a>
                </div>
                <br>

                <div class="w-full p-8  bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">

                         <p class="text-lg text-gray-900 dark:text-white">ฟอร์มสร้างการส่งงาน </p>
                         <hr><br>

                         <form
                            method="post"
                            action=" {{ route('admin.submission.store') }}">
                            @csrf

                        <div class="mb-6">
                            <label for="topic" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Topic</label>
                            <input type="text" name="topic" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="หัวข้อการส่งงาน" required>
                        </div>

                        <div class="formkit-outer" data-family="text" data-type="datetime-local" data-invalid="true">
                            <div class="formkit-wrapper">
                              <label class="formkit-label" for="input_0">Start Date</label>
                              <div class="formkit-inner">
                                <input name="start_date" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" type="datetime-local"  id="sdate" aria-describedby="help-input_0 input_0-rule_date_after">
                              </div>
                            </div>
                        </div>
                        <br>
                        <div class="formkit-outer" data-family="text" data-type="datetime-local" data-invalid="true">
                            <div class="formkit-wrapper">
                                <label class="formkit-label" for="input_0">End Date</label>
                                <div class="formkit-inner">
                                    <input name="end_date" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" type="datetime-local"  id="edate" aria-describedby="help-input_0 input_0-rule_date_after">
                                </div>
                            </div>
                        </div>

                          <br>
                        <div class="mb-6">
                            <label for="process" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Process <span class="text-red-500">*</span></label>
                            <select name="process" id="status" >
                                <option value="">--select process--</option>
                                <option value="Pre-Project" {{  @$semester->process == 'Pre-Project' ? 'selected' : '' }} >Pre-Project</option>
                                <option value="Project I" {{  @$semester->process == 'Project I' ? 'selected' : '' }} >Project I</option>
                                <option value="Project II" {{  @$semester->process == 'Project II' ? 'selected' : '' }}>Project II</option>
                                <option value="Project II" {{  @$semester->process == 'Finished' ? 'selected' : '' }}>Finished</option>

                            </select>
                        </div>

                        <div class="mb-6">
                            <label for="semester_id " class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Semester <span class="text-red-500">*</span></label>
                            <select name="semester_id " id="semester_id" >
                                <option value="">--select term/year--</option>
                                @foreach ($semesters as $semester)
                                <option value="{{ $semester->id }}" {{ !empty($job_processes->semester_id) ? $job_processes->semester_id == $semester->id  ? 'selected' : ''  : '' }}> {{ $semester->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-6">
                            <label for="type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Type <span class="text-red-500">*</span></label>
                            <select name="type" id="type" >
                                <option value="">--select type--</option>
                                <option value="appointment" {{  @$semester->type == 'appointment' ? 'selected' : '' }} >การนัดพบอาจารย์ที่ปรึกษา</option>
                                <option value="submission" {{  @$semester->type == 'submission' ? 'selected' : '' }} >ส่งไฟล์งานรายงาน</option>
                                <option value="report" {{  @$semester->type == 'report' ? 'selected' : '' }}>ส่งรายงานทั้งหมด</option>
                            </select>
                        </div>

                        <div class="mb-6">
                            <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status <span class="text-red-500">*</span></label>
                            <select name="status" id="status" >
                                <option value="">--select status--</option>
                                <option value="draft" {{  @$semester->status == 'draft' ? 'selected' : '' }}> draft</option>
                                <option value="publish" {{  @$semester->status == 'publish' ? 'selected' : '' }}> publish</option>

                            </select>
                        </div>

                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create</button>
                    </form>
                </div>


             </div>
         </main>
     </div>
     <script>
        $(function() {
            $('#sdate').datepicker({
            dateFormat: 'dd/mm/yy'
  });

        });
     </script>
 </x-app-layout>
