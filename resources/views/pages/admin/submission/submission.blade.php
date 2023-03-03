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
                                                <a href="{{ route('admin.submission.detail') }}">
                                                        <button class="flex items-center bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M2 19v-2h10v2H2Zm0-5v-2h5v2H2Zm0-5V7h5v2H2Zm18.6 10l-3.85-3.85q-.6.425-1.313.638T14 16q-2.075 0-3.538-1.463T9 11q0-2.075 1.463-3.538T14 6q2.075 0 3.538 1.463T19 11q0 .725-.213 1.438t-.637 1.312L22 17.6L20.6 19ZM14 14q1.25 0 2.125-.875T17 11q0-1.25-.875-2.125T14 8q-1.25 0-2.125.875T11 11q0 1.25.875 2.125T14 14Z"/></svg>
                                                            <span>View detail</span>
                                                        </button>
                                                </a>


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
                                                <a href="{{ route('admin.submission.detail') }}">
                                                        <button class="flex items-center bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M2 19v-2h10v2H2Zm0-5v-2h5v2H2Zm0-5V7h5v2H2Zm18.6 10l-3.85-3.85q-.6.425-1.313.638T14 16q-2.075 0-3.538-1.463T9 11q0-2.075 1.463-3.538T14 6q2.075 0 3.538 1.463T19 11q0 .725-.213 1.438t-.637 1.312L22 17.6L20.6 19ZM14 14q1.25 0 2.125-.875T17 11q0-1.25-.875-2.125T14 8q-1.25 0-2.125.875T11 11q0 1.25.875 2.125T14 14Z"/></svg>
                                                            <span>View detail</span>
                                                        </button>
                                                </a>


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
                                                <a href="{{ route('admin.submission.detail') }}">
                                                        <button class="flex items-center bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M2 19v-2h10v2H2Zm0-5v-2h5v2H2Zm0-5V7h5v2H2Zm18.6 10l-3.85-3.85q-.6.425-1.313.638T14 16q-2.075 0-3.538-1.463T9 11q0-2.075 1.463-3.538T14 6q2.075 0 3.538 1.463T19 11q0 .725-.213 1.438t-.637 1.312L22 17.6L20.6 19ZM14 14q1.25 0 2.125-.875T17 11q0-1.25-.875-2.125T14 8q-1.25 0-2.125.875T11 11q0 1.25.875 2.125T14 14Z"/></svg>
                                                            <span>View detail</span>
                                                        </button>
                                                </a>
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
                                            Woranut Dangworawith
                                        </td>

                                        <td class="px-6 py-4">
                                            <div class="flex items-center">
                                                <div class="h-2.5 w-2.5 rounded-full bg-green-500 mr-2"></div> Submited
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            Wireless Signal Converter System
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-3xl font-bold text-gray-900 dark:text-white"></span>
                                                <a href="{{ route('admin.submission.detail') }}">
                                                        <button class="flex items-center bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M2 19v-2h10v2H2Zm0-5v-2h5v2H2Zm0-5V7h5v2H2Zm18.6 10l-3.85-3.85q-.6.425-1.313.638T14 16q-2.075 0-3.538-1.463T9 11q0-2.075 1.463-3.538T14 6q2.075 0 3.538 1.463T19 11q0 .725-.213 1.438t-.637 1.312L22 17.6L20.6 19ZM14 14q1.25 0 2.125-.875T17 11q0-1.25-.875-2.125T14 8q-1.25 0-2.125.875T11 11q0 1.25.875 2.125T14 14Z"/></svg>
                                                            <span>View detail</span>
                                                        </button>
                                                </a>
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

                 {{-- <div class="">

                     <div class="w-full p-8 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">

                        <p class="text-lg text-gray-900 dark:text-white">การส่งงาน</p>

                            <br>

                        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                            <div class="flex items-center justify-between pb-4 bg-white dark:bg-gray-900">
                                <div>
                                    <button id="dropdownActionButton" data-dropdown-toggle="dropdownAction" class="inline-flex items-center text-gray-500 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-3 py-1.5 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700" type="button">
                                        <span class="sr-only">Action button</span>
                                        Action
                                        <svg class="w-3 h-3 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                                    </button>
                                    <!-- Dropdown menu -->
                                    <div id="dropdownAction" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                        <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownActionButton">
                                            <li>
                                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Reward</a>
                                            </li>
                                            <li>
                                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Promote</a>
                                            </li>
                                            <li>
                                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Activate account</a>
                                            </li>
                                        </ul>
                                        <div class="py-1">
                                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete User</a>
                                        </div>
                                    </div>
                                </div>
                                <label for="table-search" class="sr-only">Search</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                                    </div>
                                    <input type="text" id="table-search-users" class="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for users">
                                </div>
                            </div>
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



              </div> --}}
             </div>
         </main>
     </div>
 </div>
 </x-app-layout>



