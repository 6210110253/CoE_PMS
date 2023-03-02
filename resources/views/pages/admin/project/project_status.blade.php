<x-app-layout>
    <div>
         <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">

             <div class="container mx-auto px-6 py-8">
                    <div class="w-full p-8  bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">

                         <p class="text-lg text-gray-900 dark:text-white">Student project status</p>
                         <hr><br>

                        <div class="relative overflow-x-auto">
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>


                                        <th scope="col" class="px-6 py-3">
                                            Name
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Status
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Topic
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Supervisor
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Year
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($results as $result)
                                        <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">


                                            <td class="px-6 py-4">
                                            {{  $result['student_name'] }}
                                            </td>

                                            <td class="px-6 py-4">
                                                @if($result['status'] == 'true')
                                                <div class="flex items-center">
                                                    <div class="h-2.5 w-2.5 rounded-full bg-green-500 mr-2"></div> available
                                                </div>
                                                @else
                                                <div class="flex items-center">
                                                    <div class="h-2.5 w-2.5 rounded-full bg-red-500 mr-2"></div> unoccupied
                                                </div>
                                                @endif
                                            </td>
                                            <td class="px-6 py-4">
                                                {{  $result['project_title'] }}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{  $result['teacher_name'] }}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{  $result['semester_name'] }}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                     </div>
            </div>
         </main>
 </div>

 </x-app-layout>

