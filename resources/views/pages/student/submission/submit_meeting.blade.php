<x-app-layout>
   <div>
        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
            <div class="container mx-auto px-6 py-8">
                <div class="flex items-center justify-between">
                            <span class="text-3xl font-bold text-gray-900 dark:text-white"></span>
                            <a href="{{ route('student.submission') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Back</a>
                </div>
                <br>

                <div class="w-full p-4  bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">

                    <form id="propose_project"
                        action=" {{ route('student.submit.meeting.store') }}"
                        method="post"
                        enctype="multipart/form-data" >
                    @csrf
                    <input type="hidden" name="created_by" value="{{ Auth()->user()->id }}">
                    <input type="hidden" name="job_process_id" value="{{ $job_process->id }}">
                    <input type="hidden" name="approve_by" value="{{ $projectList->reservaton->project->approve_by }}">
                    <input type="hidden" name="project_id" value="{{ $projectList->reservaton->project->id }}">
                    <input type="hidden" name="project_list_id" value="{{ $projectList->id }}">
                    <input type="hidden" name="project_list_id" value="{{ $projectList->id }}">
                    <div class="mb-6">
                        <label  for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Topic <span class="text-red-500">*</span></label>
                        <input type="text" value="{{ $projectList->reservaton->project->title }}" name="topic" id="title" name="title" value="" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="ตรงนี้แสดงชื่อโปรเจคของนักศึกษามาเลย" required>
                    </div>
                    <div class="mb-6">
                        <label  for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Supervisor <span class="text-red-500">*</span></label>
                        <input type="text" value="{{ $projectList->reservaton->project->teacher->name}}" id="title" name="title" value="" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="ตรงนี้แสดงชื่ออาจารย์ที่ปรึกษาโปรเจคของนักศึกษามาเลย" required>
                    </div>
                    <div class="mb-6">
                        <label  for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">title <span class="text-red-500">*</span></label>
                        <input type="text" id="title" name="title" value="" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="หัวข้อเรื่องที่ส่งมา" required>
                    </div>

                    <div class="mb-6">

                        <label for="detail" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description <span class="text-red-500">*</span></label>
                        <textarea id="detail" name="detail" name="detail" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Leave a comment..."></textarea>

                    </div>

                    <div class="mb-6">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">Report File</label>
                        <input name="file_report" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">
                    </div>

                    <div class="mb-6">
                        <label
                         class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">Poster File</label>
                        <input
                         name="file_poster" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">

                        {{-- @if(!empty($project->file_design))
                        <br>
                        <a target="_blank" href="{{ Storage::url($project->file_design) }}">
                          <img src="{{ asset('images\icon_file.png') }}" width="50">
                        </a>
                        @endif --}}
                    </div>

                    <div class="mb-6">
                        <label
                         class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">Other</label>
                        <input
                        name="file_other[]" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file" multiple="">
                    </div>


                    @if( $job_process->type == 'appointment')
                    <div class="mb-6">
                        <label
                        for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Vedio URL <span class="text-red-500">*</span></label>
                        <input
                        type="text" name="file_video" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="หัวข้อเรื่องที่ส่งมา" required>
                    </div>


                    <div class="mb-6">
                        <label

                        for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Git URL <span class="text-red-500">*</span></label>
                        <input
                        id="git_input" type="text" name="git_url" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="หัวข้อเรื่องที่ส่งมา" required>
                    </div>

                    <div class="formkit-outer" data-family="text" data-type="datetime-local" data-invalid="true">
                        <div class="formkit-wrapper">
                          <label class="formkit-label" for="input_0">Meeting Date</label>
                          <div class="formkit-inner">
                            <input name="date_meeting" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" type="datetime-local" name="start" id="input_0" aria-describedby="help-input_0 input_0-rule_date_after">
                          </div>
                        </div>
                    </div>

                    <br>

                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                    </form>

                </div>







            </div>
        </main>
    </div>
</div>
</x-app-layout>
