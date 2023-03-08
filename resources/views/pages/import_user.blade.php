<x-app-layout>
    <div>
         <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
             <div class="container mx-auto px-6 py-8">

                <div class="w-full p-8  bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">

                         <p class="text-lg text-gray-900 dark:text-white">Import User</p>
                         <hr><br>

                         <form
                            method="post"
                            action=" {{ route('admin.import-excel') }}"
                            enctype="multipart/form-data">
                            @csrf


                        <div class="mb-6">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">CSV File</label>
                            <input name="file" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">
                        </div>


                            <div class="text-center mt-16 mb-16">
                            <button class="flex items-center bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M17.707,3.293C17.316,2.902,16.684,2.902,16.293,3.293L7,12.586V8c0-0.553-0.447-1-1-1s-1,0.447-1,1v6c0,0.553,0.447,1,1,1h10c0.553,0,1-0.447,1-1s-0.447-1-1-1H8.414l9.293-9.293c0.391-0.391,0.391-1.023,0-1.414S18.098,2.902,17.707,3.293z" />
                                </svg>
                                Submit
                            </button>
                            </div>
                    </form>
                </div>


             </div>
         </main>
     </div>

 </x-app-layout>
