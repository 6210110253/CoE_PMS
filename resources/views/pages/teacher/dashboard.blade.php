<x-app-layout>
    <div>
         <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">

             <div class="container mx-auto px-6 py-8">


                    <div class="flex justify-center gap-4">
                        <a href="{{ route('teacher.project.teacher') }}" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2">

                                    โปรเจกต์ที่ดูแลในปีนี้
                        </a>

                        <a href="{{ route('teacher.old.project') }}" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2">

                                    โปรเจกต์ที่ดูแลในอดีต
                        </a>
                        <a class='relative bg-blue-700 hover:bg-blue-800 text-white p-6 rounded text-sm font-bold overflow-visible'>

                                จำนวนนักศึกษาที่ส่งรายงานความก้าวหน้า
                                <div class="absolute top-0 right-0 -mt-4 -mr-4 px-4 py-1 bg-green-500 rounded-full">2000</div>
                        </a>

                        <a class='relative bg-blue-700 hover:bg-blue-800 text-white p-6 rounded text-sm font-bold overflow-visible'>

                                จำนวนนักศึกษาที่ไม่ส่งรายงานความก้าวหน้า
                                <div class="absolute top-0 right-0 -mt-4 -mr-4 px-4 py-1 bg-red-500 rounded-full">2000</div>
                        </a>
                    </div>
                    <br>
                    <hr>





                <div class="w-full p-8  bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">

                         <p class="text-lg text-gray-900 dark:text-white">กำหนดการ</p>

                         <hr><br>

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
                                         <th scope="col" class="px-6 py-3 ">
                                             หัวข้อ
                                         </th>
                                         <th scope="col" class="px-6 py-3">
                                             วันที่ส่ง
                                         </th>
                                         <th scope="col" class="px-6 py-3 ">
                                             วันที่สิ้นสุดการส่ง
                                         </th>
                                         <th scope="col" class="px-6 py-3 ">
                                             สถานะ
                                         </th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                    <tbody>
                                        @foreach ($announcements as $announcement)
                                         <tr class="bg-white dark:bg-gray-800">
                                             <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $announcement->title }}
                                            </th>
                                             <td class="px-6 py-4">
                                                {{ $announcement->start }}
                                             </td>
                                             <td class="px-6 py-4">
                                                {{ $announcement->finish }}
                                             </td>
                                             <td class="px-6 py-4">
                                                {{ $announcement->status }}
                                             </td>

                                         </tr>
                                          @endforeach
                                     </tbody>
                                 </tbody>

                             </table>
                         </div>




                </div>






              </div>

         </main>
     </div>

 </x-app-layout>

