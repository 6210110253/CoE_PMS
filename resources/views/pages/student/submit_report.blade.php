<x-app-layout>
   <div>
        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
            <div class="container mx-auto px-6 py-8">
                <div class="flex items-center justify-between">
                            <span class="text-3xl font-bold text-gray-900 dark:text-white"></span>
                            <a href="{{ route('student.submission') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Back</a>
                </div>
                <br>

                <div class="w-full p-4  bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">

                    <form id="propose_project"
                        action="#"
                        method="post"
                        enctype="multipart/form-data" >
                    @csrf
                    <input type="hidden" name="created_by" value="{{ Auth()->user()->id }}">
                    <div class="mb-6">
                        <label  for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Topic <span class="text-red-500">*</span></label>
                        <input type="text" id="title" name="title" value="" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="ตรงนี้แสดงชื่อโปรเจคของนักศึกษามาเลย" required>
                    </div>
                    <div class="mb-6">
                        <label  for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Supervisor <span class="text-red-500">*</span></label>
                        <input type="text" id="title" name="title" value="" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="ตรงนี้แสดงชื่ออาจารย์ที่ปรึกษาโปรเจคของนักศึกษามาเลย" required>
                    </div>
                    <div class="mb-6">
                        <label  for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">title <span class="text-red-500">*</span></label>
                        <input type="text" id="title" name="title" value="" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="หัวข้อเรื่องที่ส่งมา" required>
                    </div>


                    <div class="mb-6">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">Upload File: PDF<span class="text-red-500">*</span></label>
                    <input name="usecase" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">

                    </div>








                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                    </form>

                </div>







            </div>
        </main>
    </div>
</div>
</x-app-layout>
