<x-app-layout>
    <div>
         <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
            <br>

                {{-- <div class="flex justify-center gap-4 mx-auto>
                    <div class="w-full p-4 text-center bg-white border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">

                    <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">

                        <svg class=" w-10 h-10 mb-2 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 5a3 3 0 015-2.236A3 3 0 0114.83 6H16a2 2 0 110 4h-5V9a1 1 0 10-2 0v1H4a2 2 0 110-4h1.17C5.06 5.687 5 5.35 5 5zm4 1V5a1 1 0 10-1 1h1zm3 0a1 1 0 10-1-1v1h1z" clip-rule="evenodd"></path><path d="M9 11H3v5a2 2 0 002 2h4v-7zM11 18h4a2 2 0 002-2v-5h-6v7z"></path></svg>
                            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">ประวัติการนัดพบ</h5>
                        <p class="mb-3 font-normal text-gray-500 dark:text-gray-400 text-center	">5 ครั้ง</p>
                    </div>


                    <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <svg class=" w-10 h-10 mb-2 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 5a3 3 0 015-2.236A3 3 0 0114.83 6H16a2 2 0 110 4h-5V9a1 1 0 10-2 0v1H4a2 2 0 110-4h1.17C5.06 5.687 5 5.35 5 5zm4 1V5a1 1 0 10-1 1h1zm3 0a1 1 0 10-1-1v1h1z" clip-rule="evenodd"></path><path d="M9 11H3v5a2 2 0 002 2h4v-7zM11 18h4a2 2 0 002-2v-5h-6v7z"></path></svg>
                            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">รายการจองนัดพบอาจารย์</h5>
                        <p class="mb-3 font-normal text-gray-500 dark:text-gray-400 text-center	"> 6 คน</p>
                    </div>

                    </div>
                </div> --}}




                <div class="container mx-auto px-6 py-8">


                    <div class="flex items-center justify-between">
                    <span class="text-3xl font-bold text-gray-900 dark:text-white"></span>
                            <a href="{{ route('student.meeting') }}">
                                    <button class="flex items-center bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10.707,15.707l-5-5C5.512,10.512,5,10.265,5,9.914s0.512-0.598,0.707-0.793l5-5c0.391-0.391,1.023-0.391,1.414,0s0.391,1.023,0,1.414L8.414,8H15c0.553,0,1,0.447,1,1s-0.447,1-1,1H8.414l3.707,3.707C11.098,14.684,11.195,14.854,11.195,15.025C11.195,15.195,11.098,15.367,10.707,15.707z" />
                                        </svg>
                                        <span>Back</span>
                                    </button>
                            </a>

                    </div>
                    <br>
<div class="w-full p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                    <form
                        action="{{ Request::route()->getName() == 'student.meeting.create' ?  route('student.meeting.store') : route('student.meeting.update', $meeting) }}"
                        method="post">
                    @csrf

                        <input type="hidden" name="created_by" value="{{ Auth()->user()->id }}">
                        {{-- <div class="mb-6">
                            <label for="semester_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Semester <span class="text-red-500">*</span></label>
                            <select name="semester_id" id="semester_id" >
                                <option value="">--select term/year--</option>
                                @foreach ($semesters as $semester)
                                <option value="{{ $semester->id }}" {{ !empty(@$meeting) ? $meeting->semester_id == $semester->id  ? 'selected' : ''  : '' }}> {{ $semester->name }}</option>
                                @endforeach
                            </select>
                        </div> --}}

                        <div class="mb-6">
                            <label for="aprove_by" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Teacher <span class="text-red-500">*</span></label>
                            <select name="approve_by" id="approve_by" class="select2">
                                <option value="">--select teacher--</option>
                                @foreach ($teachers as $teacher)
                                     <option value="{{ $teacher->id }}" {{ !empty($meeting->approve_by) ? $meeting->approve_by == $teacher->id ? 'selected' : ''  : '' }} > {{ $teacher->name }} </option>
                                @endforeach

                            </select>
                        </div>


                        <div class="mb-6">
                            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                            <input value="{{ $meeting->title ?? '' }}" type="text" name="title" id="title" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Title" required>
                        </div>

                        <div class="mb-6">
                            <label for="detail" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description <span class="text-red-500">*</span></label>
                            <textarea id="detail" name="detail" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Leave a comment...">{{ $meeting->detail ?? '' }}</textarea>
                        </div>

                        <div class="formkit-outer" data-family="text" data-type="datetime-local" data-invalid="true">
                            <div class="formkit-wrapper">
                              <label class="formkit-label" for="input_0">Start Date</label>
                              <div class="formkit-inner">
                                <input name="start_date"
                                    value="{{ $meeting->start_date ?? '' }}"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                    type="datetime-local"
                                    id="sdate"
                                    aria-describedby="help-input_0 input_0-rule_date_after">
                              </div>
                            </div>
                        </div>

                        <br>

                        <div class="formkit-outer" data-family="text" data-type="datetime-local" data-invalid="true">
                            <div class="formkit-wrapper">
                                <label class="formkit-label" for="input_0">End Date</label>
                                <div class="formkit-inner">
                                    <input name="end_date"
                                    value="{{ $meeting->end_date ?? '' }}"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                    type="datetime-local"
                                    id="edate"
                                    aria-describedby="help-input_0 input_0-rule_date_after">
                                </div>
                            </div>
                        </div>

                        <br>

                        <div class="mb-6">
                            <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status <span class="text-red-500">*</span></label>
                            <select name="status" id="status">
                                <option value="">--select status--</option>
                                <option value="draft" {{  @$meeting->status == 'draft' ? 'selected' : '' }} > draft</option>
                                <option value="publish" {{  @$meeting->status == 'publish' ? 'selected' : '' }}> publish</option>

                            </select>
                        </div>

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
 </x-app-layout>
