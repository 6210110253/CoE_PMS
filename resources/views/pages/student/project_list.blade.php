<x-app-layout>
   <div>
        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
            <div class="container mx-auto px-6 py-8">
                <div class="flex items-center justify-between">
                            <span class="text-3xl font-bold text-gray-900 dark:text-white"></span>
                            <a href="{{ route('student.project.select') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Back</a>
                </div>
                <br>
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                เทอม
                            </th>
                            <th scope="col" class="px-6 py-3 rounded-l-lg">
                                หัวข้อ
                            </th>
                            <th scope="col" class="px-6 py-3 rounded-r-lg">
                                รายละเอียด
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($projects as $project )
                            
                        
                         <tr class="bg-white dark:bg-gray-800">
                            <td class="px-6 py-4">
                                {{ $project->semester->name }}
                             </td>
                             <td class="px-6 py-4">
                                {{ $project->title }}
                             </td>
                             <td class="px-6 py-4">
                                <span class="text-3xl font-bold text-gray-900 dark:text-white"></span>
                                <a href="{{ route('teacher.project.detail', $project) }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">View more</a>
                             </td>
                         </tr>
                        @endforeach
                


        {{-- @foreach ($projects as $project )
        <div class="w-full  bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">


            <div class="px-5 pb-5">
                <br>

                <a >
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"> {{ $project->title }}</h5>
                    <p class="font-normal text-gray-700 dark:text-gray-400">Description : {{ $project->detail }}</p>
                </a>

               
                <div class="flex items-center justify-between">
                    <span class="text-3xl font-bold text-gray-900 dark:text-white"></span>
                    <a href="{{ route('teacher.project.detail', $project) }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">View Detail</a>
                </div>
            </div>

        </div>
        <br>
        @endforeach --}}





            </div>
        </main>
    </div>
</div>
</x-app-layout>
