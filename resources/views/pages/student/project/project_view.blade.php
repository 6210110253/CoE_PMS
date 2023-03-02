<x-app-layout>
   <div>
        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
            <div class="container mx-auto px-6 py-8">
                <div class="flex items-center justify-between">
                            <span class="text-3xl font-bold text-gray-900 dark:text-white"></span>
                            <a href="{{ route('student.project.select') }}">
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

                         <p class="text-lg text-gray-900 dark:text-white">Tasks in progress</p>

                         <div class="relative overflow-x-auto">
                                 {{-- <div class="flex justify-end pb-4 bg-white dark:bg-gray-900">
                                     <label for="table-search" class="sr-only">Search</label>
                                     <div class="relative mt-1">
                                         <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                             <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                                         </div>
                                         <input type="text" id="table-search" class="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for items">
                                     </div>
                                 </div> --}}
                             <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                 <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                                     <tr>
                                         <th scope="col" class="px-6 py-3 rounded-l-lg">
                                             Project Name
                                         </th>
                                         <th scope="col" class="px-6 py-3">
                                             Teacher
                                         </th>
                                         <th scope="col" class="px-6 py-3 ">
                                             Status
                                         </th>

                                         <th scope="col" class="px-6 py-3 ">
                                             Action
                                         </th>
                                     </tr>
                                 </thead>

                                 <tfoot>

                                    @foreach ($project_bookings as $project_booking)


                                    <tr class="bg-white dark:bg-gray-800">
                                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                           {{ $project_booking->project->title }}
                                           <br>
                                           @if( $project_booking->type == 'propose' )
                                               <span class="bg-purple-200 text-purple-600 py-1 px-3 mt-2 rounded-full text-xs">propose</span>
                                           @else
                                               <span class="bg-green-200 text-purple-600 py-1  px-3 mt-2 rounded-full text-xs">reservetion</span>
                                           @endif
                                        </th>

                                        <td class="px-6 py-4">
                                             {{ $project_booking->project->teacher->name }}
                                        </td>

                                        <td class="px-6 py-4">
                                            @if($project_booking->status == 'wait')
                                            <span class="bg-yellow-300 text-yellow-600 py-1 px-3 mt-2 rounded-full text-xs">wait</span>
                                           @elseif($project_booking->status == 'reject')
                                            <span class="bg-red-200 text-red-600 py-1  px-3 mt-2 rounded-full text-xs">reject</span>
                                           @endif

                                        </td>
                                        <td class="px-6 py-4">
                                           @if($project_booking->status == 'wait')
                                            <button class="cancel underline text-red-600 " data-id="{{ $project_booking->id }}"> Cancel</button>
                                           @elseif($project_booking->status == 'reject')

                                            <button class="comment underline text-blue-600 " data-id="{{ $project_booking->id }}"> View comment</button>
                                           @endif
                                        </td>
                                    </tr>

                                   @endforeach
                                 </tfoot>
                             </table>
                         </div>




                </div>

                <br>














            </div>
        </main>
    </div>

</x-app-layout>
