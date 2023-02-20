<x-app-layout>
    <style>
/* CHECKBOX TOGGLE SWITCH */
/* @apply rules for documentation, these do not work as inline style */
.toggle-checkbox:checked {
  @apply: right-0 border-green-400;
  right: 0;
  border-color: #68D391;
}
.toggle-checkbox:checked + .toggle-label {
  @apply: bg-green-400;
  background-color: #68D391;
}
</style>
    <div>
         <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">

             <div class="container mx-auto px-6 py-8">

                 <div class="">

                     <div class="w-full p-8  bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">

                         <p class="text-lg text-gray-900 dark:text-white">สร้างเทอม/ปีที่จะใช้งาน</p>
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

                            <form class="flex flex-justify-left gap-4"
                                method="post"
                                action=" {{ route('admin.semester.store') }}">
                                @csrf
                                <label class="">Name</label>
                                <input type="text" name="name" id="table-search" class="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="กรอกข้อมูล">

                                <label class="">Year</label>
                                <input type="text"  name="year" id="table-search" class="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="กรอกข้อมูล">

                                <button type="submit" class="text-white  bg-green-500 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create</button>
                            </form>

                                <br>
                             <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                 <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                                     <tr>
                                         <th scope="col" class="px-6 py-3 rounded-l-lg">
                                             No
                                         </th>
                                         <th scope="col" class="px-6 py-3">
                                             Name
                                         </th>
                                         <th scope="col" class="px-6 py-3 rounded-r-lg">
                                             Year
                                         </th>
                                         <th scope="col" class="px-6 py-3 rounded-r-lg">
                                            Action
                                        </th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                    @foreach ($semesters as $semester)

                                     <tr class="bg-white dark:bg-gray-800">
                                         <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                             {{ $semester->id }}
                                         </th>
                                         <td class="px-6 py-4">
                                            {{ $semester->name }}
                                         </td>
                                         <td class="px-6 py-4">
                                            {{ $semester->year }}
                                         </td>
                                         <td class="px-6 py-4">
                                            <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                                                <input type="checkbox" name="toggle" id="toggle" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer"/>
                                                <label for="toggle" class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
                                            </div>
                                            <label for="toggle" class="text-xs text-gray-700">Active</label>
                                        </td>
                                     </tr>
                                     @endforeach

                                     
                             </table>

                         </div>




                     </div>


              </div>
              <br>

              <div class="">

                     <div class="w-full p-8  bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">

                         <p class="text-lg text-gray-900 dark:text-white">ฟอร์มสร้างการส่งงาน </p>
                         <hr><br>
                         <div class="flex items-center justify-between">
                            <span class="text-3xl font-bold text-gray-900 dark:text-white"></span>
                            <a href="{{ route('admin.form.create.submission') }}" class="text-white bg-green-500 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Create Form</a>
                        </div>

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


                                <br>
                             <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                 <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                                     <tr>
                                         <th scope="col" class="px-6 py-3 ">
                                             Name
                                         </th>
                                         <th scope="col" class="px-6 py-3">
                                             Round
                                         </th>
                                         <th scope="col" class="px-6 py-3 ">
                                             Process
                                         </th>
                                         <th scope="col" class="px-6 py-3 ">
                                            START DATE
                                        </th>
                                         <th scope="col" class="px-6 py-3 ">
                                             EXTENDED DATE
                                         </th>
                                         <th scope="col" class="px-6 py-3 ">
                                             STATUS
                                         </th>
                                         <th scope="col" class="px-6 py-3 ">
                                             ACTION
                                         </th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <tr class="bg-white dark:bg-gray-800">
                                         <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                             Apple MacBook Pro 17"
                                         </th>
                                         <td class="px-6 py-4">
                                             1
                                         </td>
                                         <td class="px-6 py-4">
                                             $2999
                                         </td>
                                         <td class="px-6 py-4">
                                            Toggle
                                         </td>
                                         <td class="px-6 py-4">
                                             $2999
                                         </td>
                                         <td class="px-6 py-4">
                                            Toggle
                                         </td>
                                         <td class="px-6 py-4">
                                            <a href="">Delete</a>
                                            <a href="">Edit</a>
                                         </td>
                                     </tr>


                                 </tbody>

                             </table>
                         </div>




                     </div>

                        <br>
              </div>

            </div>


         </main>
     </div>
 </div>
 </x-app-layout>

