<x-app-layout>
    <div>
         <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
             <div class="container mx-auto px-6 py-8">
                        <div class="flex items-center justify-between">
                            <span class="text-3xl font-bold text-gray-900 dark:text-white"></span>
                            <a href="{{ route('teacher.project.teacher') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Back</a>
                        </div>

                 <div class="w-full p-4 text-center bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">


                    <div class="relative overflow-x-auto">



                         <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">

                             <tbody>
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
                                         Member
                                     </th>
                                     <td class="px-6 py-4">
                                        @if(!empty($project->student_reservetion))

                                            @foreach ($project->student_reservetion_list as $key => $member )
                                            <p class="font-medium mb-5 text-left text-gray-400 sm:text-lg dark:text-gray-400">{{ $key+1 }}.{{ $member }}</p>

                                            @endforeach

                                        @else
                                            <p class="font-medium mb-5 text-left text-gray-500 sm:text-lg dark:text-gray-400">1.{{ $project->member->name }}</p>

                                        @endif
                                     </td>

                                 </tr>
                             </tbody>
                         </table>
                     </div>

                     <br>

                     <div class="flex justify-center gap-4 mx-auto">

                        <div class="flex items-center justify-between">
                            <span class="text-3xl font-bold text-gray-900 dark:text-white "></span>
                            <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Accept</a>
                        </div>

                        <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                            Reject
                        </button>


                    </div>
                 </div>









             </div>
         </main>
     </div>

     <div id="authentication-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
        <div class="relative w-full h-full max-w-md md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="authentication-modal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="px-6 py-6 lg:px-8">
                    <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Comment</h3>
                    <form class="space-y-6" action="#">
                        <div>
                            <label for="comment" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your comment</label>
                            <textarea id="objective" name="objective" rows="4" class="block p-2.5 w-full text-sm
                            text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500
                            focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400
                            dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="comment..."></textarea>
                        </div>

                        <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
 </div>
 </x-app-layout>
