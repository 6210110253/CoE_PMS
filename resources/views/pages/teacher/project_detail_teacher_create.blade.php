<x-app-layout>
    <div>
         <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
             <div class="container mx-auto px-6 py-8">
                        <div class="flex items-center justify-between">
                            <span class="text-3xl font-bold text-gray-900 dark:text-white"></span>
                            <a href="{{ route('teacher.project.teacher') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Back</a>
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
                                        {{  $project->title }}
                                     </td>

                                 </tr>
                                 <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                     <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                         Description
                                     </th>
                                     <td class="px-6 py-4">

                                        {{ $project->detail}}
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
                                     <td>
                                        {{ $project->member_count}}
                                     </td>
                                 </tr>
                             </tbody>
                         </table>

                         @if( $project->status == 'draft' )
                         <div class="gap-4">
                             <span class="text-3xl font-bold text-gray-900 dark:text-white"></span>
                             <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Edit</a>
                             <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Delete</a>
                         </div>
                         @else
                         @endif
 
                         <br>
                     </div>

                     <br>

                 </div>
                 <br>
             </div>
         </main>
     </div>
 </div>
 </x-app-layout>
