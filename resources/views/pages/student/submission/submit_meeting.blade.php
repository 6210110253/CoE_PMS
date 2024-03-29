<x-app-layout>
   <div>
        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
            <div class="container mx-auto px-6 py-8">
                <div class="flex items-center justify-between">
                            <span class="text-3xl font-bold text-gray-900 dark:text-white"></span>
                            <a href="{{ route('student.submission')}}">
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
                    <input type="hidden" name="type"
                    @if($job_process->type == 'appointment')
                        value="appointment"
                    @elseif($job_process->type == 'submission')
                        value="submission"
                    @else
                        value="report"
                    @endif
                   >

                    <div class="mb-6">
                        <label  for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Project Name</label>
                        <input type="text" value="{{ $projectList->reservaton->project->title }}" name="topic" id="title" name="title" value="" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="ตรงนี้แสดงชื่อโปรเจคของนักศึกษามาเลย" required>
                    </div>
                    <div class="mb-6">
                        <label  for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Supervisor</label>
                        <input type="text" value="{{ $projectList->reservaton->project->teacher->name}}" id="title" name="title" value="" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="ตรงนี้แสดงชื่ออาจารย์ที่ปรึกษาโปรเจคของนักศึกษามาเลย" required>
                    </div>
                    <div class="mb-6">
                        <label  for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                        <input type="text" id="title" name="title" value="" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="title" required>
                    </div>

                    @if( $job_process->type == 'appointment')
                    <div class="mb-6">
                        <label for="detail" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                        <textarea id="detail" name="detail" name="detail" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Leave a comment..."></textarea>
                    </div>

                    <div class="formkit-outer" data-family="text" data-type="datetime-local" data-invalid="true">
                        <div class="formkit-wrapper">
                          <label class="formkit-label" for="input_0">Meeting Date</label>
                          <div class="formkit-inner">
                            <input name="date_meeting" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" type="datetime-local" name="start" id="input_0" aria-describedby="help-input_0 input_0-rule_date_after">
                          </div>
                        </div>
                    </div>
                    <br>

                    @endif

                    <div class="mb-6">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">File or PNG</label>
                        <input name="file_report" class="block text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">
                    </div>

                    @if( $job_process->type == 'report')
                    <div class="mb-6">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">Report File</label>
                        <input name="file_progress" class="block text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">
                    </div>

                    <div class="mb-6">
                        <label
                         class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">Poster File</label>
                        <input
                         name="file_poster" class="block  text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">
                    </div>

                    <div class="mb-6">
                        <label
                         class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">Other</label>
                        <input
                        name="file_other[]" class="block  text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file" multiple="">
                    </div>

                    <div class="file_video">
                        <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Vedio URL</label>
                        <input
                        type="text" name="file_video" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Vedio URL" required>
                    </div>
                    <br>

                    <div class="mb-6">
                        <label for="git_input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Git URL</label>
                        <input id="git_input" type="text" name="git_url" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Git URL" required>
                    </div>

                    @endif


                    <br>

                    <button class="flex items-center bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M17.707,3.293C17.316,2.902,16.684,2.902,16.293,3.293L7,12.586V8c0-0.553-0.447-1-1-1s-1,0.447-1,1v6c0,0.553,0.447,1,1,1h10c0.553,0,1-0.447,1-1s-0.447-1-1-1H8.414l9.293-9.293c0.391-0.391,0.391-1.023,0-1.414S18.098,2.902,17.707,3.293z" />
                        </svg>
                        Submit
                    </button>
                    </form>

                </div>







            </div>
        </main>
    </div>
</div>
</x-app-layout>
