<x-app-layout>
    <div>
         <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
             <div class="container mx-auto px-6 py-8">
                <div class="flex items-center justify-between">
                            <span class="text-3xl font-bold text-gray-900 dark:text-white"></span>
                            <a href="{{ route('admin.submission') }}" >
                                    <button class="flex items-center bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10.707,15.707l-5-5C5.512,10.512,5,10.265,5,9.914s0.512-0.598,0.707-0.793l5-5c0.391-0.391,1.023-0.391,1.414,0s0.391,1.023,0,1.414L8.414,8H15c0.553,0,1,0.447,1,1s-0.447,1-1,1H8.414l3.707,3.707C11.098,14.684,11.195,14.854,11.195,15.025C11.195,15.195,11.098,15.367,10.707,15.707z" />
                                        </svg>
                                        <span>Back</span>
                                    </button>
                            </a>
                </div>

                 <br>

                 <div class="w-full p-4  bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">



                     <div class="mb-6">
                         <label  for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Topic</label>
                     </div>
                     <div class="mb-6">
                        <label  for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">รหัสและชื่อผู้ส่ง </label>
                    </div>
                    <div class="mb-6">
                        <label  for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Year </label>
                    </div>
                     <div class="mb-6">
                        <label  for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name </label>
                    </div>
                     <div class="mb-6">
                         <label  for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Round </label>
                     </div>
                     <div class="mb-6">
                         <label  for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">title </label>
                     </div>

                     <div class="mb-6">

                         <label for="detail" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>

                     </div>
                     <div class="mb-6">
                         <label for="detail" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Meeting Date</label>
                     <div class="relative max-w-sm">

                     <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">


                     </div>


                     <div class="mb-6">
                     <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">Upload File: PDF or PNG</label>
                     </div>



                 </div>







             </div>
         </main>
     </div>
 </div>
 </x-app-layout>
