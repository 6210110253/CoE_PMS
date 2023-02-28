<x-app-layout>
    <div>
         <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">

             <div class="container mx-auto px-6 py-8">

                <div class="w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <div class="sm:hidden">
                        <label for="tabs" class="sr-only">Select tab</label>
                        <select id="tabs" class="bg-gray-50 border-0 border-b border-gray-200 text-gray-900 text-sm rounded-t-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option>Pre-Project</option>
                            <option>Project I</option>
                            <option>Project II</option>
                            <option>Finished</option>
                        </select>
                    </div>
                    <ul class="hidden text-sm font-medium text-center text-gray-800 divide-x divide-gray-400 rounded-lg sm:flex dark:divide-gray-600 dark:text-gray-400" id="fullWidthTab" data-tabs-toggle="#fullWidthTabContent" role="tablist">
                        <li class="w-full">
                            <button id="stats-tab" data-tabs-target="#stats" type="button" role="tab" aria-controls="stats" aria-selected="true" class="inline-block w-full p-4 rounded-tl-lg bg-gray-50 hover:bg-gray-300 focus:outline-none ">Pre-Project</button>
                        </li>
                        <li class="w-full">
                            <button id="about-tab" data-tabs-target="#about" type="button" role="tab" aria-controls="about" aria-selected="false" class="inline-block w-full p-4 bg-gray-50 hover:bg-gray-300 focus:outline-none">Project I</button>
                        </li>
                        <li class="w-full">
                            <button id="faq-tab" data-tabs-target="#faq" type="button" role="tab" aria-controls="faq" aria-selected="false" class=" inline-block w-full p-4 rounded-tr-lg bg-gray-50 hover:bg-gray-300 focus:outline-none">Project II</button>
                        </li>
                        <li class="w-full">
                            <button id="test-tab" data-tabs-target="#test" type="button" role="tab" aria-controls="test" aria-selected="false" class="inline-block w-full p-4 rounded-tr-lg bg-gray-50 hover:bg-gray-300 focus:outline-none">Finished</button>
                        </li>
                    </ul>
                    <div id="fullWidthTabContent" class="border-t border-gray-200 dark:border-gray-600">
                        <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="stats" role="tabpanel" aria-labelledby="stats-tab">

                                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>

                                        <th scope="col" class="px-6 py-3">
                                            Student ID
                                        </th>
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
                                            detail
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Year
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>


                                    <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">

                                        <td class="px-6 py-4">
                                            6210110566
                                        </td>
                                        <td class="px-6 py-4">
                                            นางสาววรนุช แดงวรวิทย์
                                        </td>

                                        <td class="px-6 py-4">
                                            <div class="flex items-center">
                                                <div class="h-2.5 w-2.5 rounded-full bg-red-500 mr-2"></div> ส่งแล้ว
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            ชื่อโปรเจกต์
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-3xl font-bold text-gray-900 dark:text-white"></span>
                                            <a href="{{ route('admin.submission.detail') }}" class="text-white bg-blue-500 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">View Detail</a>


                                        </td>
                                        <td class="px-6 py-4">
                                            2565
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                        <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="about" role="tabpanel" aria-labelledby="about-tab">

                            <!-- List -->
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>

                                        <th scope="col" class="px-6 py-3">
                                            Student ID
                                        </th>
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
                                            detail
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Year
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>


                                    <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">

                                        <td class="px-6 py-4">
                                            6210110566
                                        </td>
                                        <td class="px-6 py-4">
                                            นางสาววรนุช แดงวรวิทย์
                                        </td>

                                        <td class="px-6 py-4">
                                            <div class="flex items-center">
                                                <div class="h-2.5 w-2.5 rounded-full bg-red-500 mr-2"></div> ส่งแล้ว
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            ชื่อโปรเจกต์
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-3xl font-bold text-gray-900 dark:text-white"></span>
                                            <a href="{{ route('admin.submission.detail') }}" class="text-white bg-blue-500 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">View Detail</a>


                                        </td>
                                        <td class="px-6 py-4">
                                            2565
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="faq" role="tabpanel" aria-labelledby="faq-tab">
                            <div id="accordion-flush" data-accordion="collapse" data-active-classes="bg-white dark:bg-gray-800 text-gray-900 dark:text-white" data-inactive-classes="text-gray-500 dark:text-gray-400">
                                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>

                                        <th scope="col" class="px-6 py-3">
                                            Student ID
                                        </th>
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
                                            detail
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Year
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>


                                    <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">

                                        <td class="px-6 py-4">
                                            6210110566
                                        </td>
                                        <td class="px-6 py-4">
                                            นางสาววรนุช แดงวรวิทย์
                                        </td>

                                        <td class="px-6 py-4">
                                            <div class="flex items-center">
                                                <div class="h-2.5 w-2.5 rounded-full bg-red-500 mr-2"></div> ส่งแล้ว
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            ชื่อโปรเจกต์
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-3xl font-bold text-gray-900 dark:text-white"></span>
                                            <a href="{{ route('admin.submission.detail') }}" class="text-white bg-blue-500 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">View Detail</a>


                                        </td>
                                        <td class="px-6 py-4">
                                            2565
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            </div>
                        </div>
                        <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="test" role="tabpanel" aria-labelledby="test-tab">
                            <div id="accordion-flush" data-accordion="collapse" data-active-classes="bg-white dark:bg-gray-800 text-gray-900 dark:text-white" data-inactive-classes="text-gray-500 dark:text-gray-400">
                                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>

                                        <th scope="col" class="px-6 py-3">
                                            Student ID
                                        </th>
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
                                            detail
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Year
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>


                                    <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">

                                        <td class="px-6 py-4">
                                            6210110566
                                        </td>
                                        <td class="px-6 py-4">
                                            นางสาววรนุช แดงวรวิทย์
                                        </td>

                                        <td class="px-6 py-4">
                                            <div class="flex items-center">
                                                <div class="h-2.5 w-2.5 rounded-full bg-red-500 mr-2"></div> ส่งแล้ว
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            ชื่อโปรเจกต์
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-3xl font-bold text-gray-900 dark:text-white"></span>
                                            <a href="{{ route('admin.submission.detail') }}" class="text-white bg-blue-500 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">View Detail</a>


                                        </td>
                                        <td class="px-6 py-4">
                                            2565
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                </div>
                <br>


             </div>
         </main>
     </div>
 </div>
 </x-app-layout>



