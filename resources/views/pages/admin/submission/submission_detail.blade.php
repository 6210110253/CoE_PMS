<x-app-layout>
    <div>
         <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
             <div class="container mx-auto px-6 py-8">
                 <div class="flex items-center justify-between">
                             <span class="text-3xl font-bold text-gray-900 dark:text-white"></span>
                             <a href="{{ route('admin.submission') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Back</a>
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
 