<x-app-layout>
   <div>
        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
            <div class="container mx-auto px-6 py-8">

                <div class="flex items-center justify-between">
                            <span class="text-3xl font-bold text-gray-900 dark:text-white"></span>
                            <a href="{{ route('student.project.select') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Back</a>
                </div>
                <br>


                <div class="w-full p-8  bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">

                         <p class="text-lg text-gray-900 dark:text-white">ข้อมูลกำลังดำเนินการที่จองและเสนอ</p>

                         <div class="relative overflow-x-auto">
                                 <div class="flex justify-end pb-4 bg-white dark:bg-gray-900">
                                     <label for="table-search" class="sr-only">Search</label>
                                     <div class="relative mt-1">
                                         <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                             <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                                         </div>
                                         <input type="text" id="table-search" class="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for items">
                                     </div>
                                 </div>
                             <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                 <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                                     <tr>
                                         <th scope="col" class="px-6 py-3 rounded-l-lg">
                                             หัวข้อ
                                         </th>
                                         <th scope="col" class="px-6 py-3">
                                             ชื่ออาจารย์
                                         </th>
                                         <th scope="col" class="px-6 py-3 rounded-r-lg">
                                             สถานะ
                                         </th>

                                         <th scope="col" class="px-6 py-3 rounded-r-lg">
                                             Action
                                         </th>
                                     </tr>
                                 </thead>
                                
                                 {{-- <tfoot>
                                    
                                     <tr class="font-semibold text-gray-900 dark:text-white">
                                         <th scope="row" class="px-6 py-3 text-base">Total</th>
                                         <td class="px-6 py-3">3</td>
                                         <td class="px-6 py-3">21,000</td>
                                         <td class="px-6 py-4">$2999</td>
                                         <td class="px-6 py-3">21,000</td>
                                         <td class="px-6 py-4">$2999</td>
                                     </tr>
                                 </tfoot> --}}
                             </table>
                         </div>




                </div>

                <br>














            </div>
        </main>
    </div>

</x-app-layout>
