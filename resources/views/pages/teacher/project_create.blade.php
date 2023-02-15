<x-app-layout>
   <div>
        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
            <div class="container mx-auto px-6 py-8">
                 <div class="flex items-center justify-between">
                            <span class="text-3xl font-bold text-gray-900 dark:text-white"></span>
                            <a href="{{ route('teacher.project.teacher') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Back</a>
                </div>
                <br>



                <div class="w-full p-4  bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">

                    <form id="project_teacher"
                   
                        action=" {{ Request::route()->getName() == 'teacher.project.create' ?  route('teacher.project.store') : route('teacher.project.update', $project) }}"
                        method="post"
                        enctype="multipart/form-data" >
                        @csrf
                        <input type="hidden" name="created_by" value="{{ Auth()->user()->id }}">
                        <input type="hidden" name="approve_by" value="{{ Auth()->user()->id }}">
                    <div class="mb-6">
                        <label  for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Topic <span class="text-red-500">*</span></label>
                        <input type="text" id="title" name="title" value="{{$project->title ?? ''}}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Topic" required>
                    </div>
                    <div class="mb-6">

                        <label for="detail" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description <span class="text-red-500">*</span></label>
                        <textarea id="detail" name="detail" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Leave a comment...">{{$project->detail ?? ''}}</textarea>

                    </div>
                    <div class="mb-6">

                        <label for="scope" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Scope <span class="text-red-500">*</span></label>
                        <textarea id="scope" name="scope" rows="4" class="block p-2.5 w-full
                            text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300
                            focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600
                            dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Leave a comment...">{{$project->scope ?? ''}}</textarea>

                    </div>
                    <div class="mb-6">

                        <label for="objective" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Objective <span class="text-red-500">*</span></label>
                        <textarea id="objective" name="objective" rows="4" class="block p-2.5 w-full text-sm
                            text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500
                            focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400
                            dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Leave a comment...">{{$project->objective ?? ''}}</textarea>

                    </div>

                    <div class="mb-6">

                        <label for="results" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Results <span class="text-red-500">*</span></label>
                        <textarea id="results" name="results" rows="4" class="block p-2.5 w-full
                            text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300
                            focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600
                            dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500
                            dark:focus:border-blue-500" placeholder="Leave a comment...">{{$project->results ?? ''}}</textarea>

                    </div>

                    <div class="mb-6">

                        <label for="condition" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Condition</label>
                        <textarea name="condition" id="condition" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50
                            rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500
                            dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white
                            dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Leave a comment...">{{$project->condition ?? ''}}</textarea>

                    </div>

                    <div class="mb-6">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">ER Diagram</label>
                    <input name="file_er_diagram" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">

                    @if(!empty($project->file_er_diagram))
                    <br>
                    <a target="_blank" href="{{ Storage::url($project->file_er_diagram) }}">
                      <img src="{{ asset('images\icon_file.png') }}" width="50">
                    </a>
                    @endif
                    </div>

                    <div class="mb-6">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">Design File</label>
                    <input name="file_design" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">

                    @if(!empty($project->file_design))
                    <br>
                    <a target="_blank" href="{{ Storage::url($project->file_design) }}">
                      <img src="{{ asset('images\icon_file.png') }}" width="50">
                    </a>
                    @endif
                    </div>

                    <div class="mb-6">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">Use Case</label>
                    <input name="usecase" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">

                    @if(!empty($project->usecase))
                    <br>
                    <a target="_blank" href="{{ Storage::url($project->usecase) }}">
                      <img src="{{ asset('images\icon_file.png') }}" width="50">
                    </a>
                    @endif

                    </div>

                    <div class="mb-6">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">Other</label>
                    <input name="file_other[]" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file" multiple="">

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

                    </div>

                    <div class="mb-6">
                        <label for="member_count" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Number Member <span class="text-red-500">*</span></label>
                        <input type="text" value="{{$project->member_count ?? ''}}" id="member_count" name="member_count" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Member" required>
                    </div>

                    <div class="mb-6">
                        <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status <span class="text-red-500">*</span></label>
                        <select name="status" id="status">
                            <option value="">--select status--</option>
                            <option value="draft" {{  @$project->status == 'draft' ? 'selected' : '' }}> draft</option>
                            <option value="publish" {{  @$project->status == 'publish' ? 'selected' : '' }}> publish</option>

                        </select>
                    </div>




                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">submit</button>
                    </form>

                </div>

            </div>
        </main>
    </div>
</div>
<script>
    $("#project_teacher").validate({
        rules: {
            title: {
                required: true,
                maxlength: 250,
                minlength: 3
            },
            detail: {
                required: true
            },
            scope: {
                required: true
            },
            objective: {
                required: true
            },
            results: {
                required: true
            },
            student_reservetion: {
                required: true
            }


        }

});
</script>
</x-app-layout>
