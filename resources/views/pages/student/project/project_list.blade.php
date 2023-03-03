<x-app-layout>
   <div>
        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
            <div class="container mx-auto px-6 py-8">
                <div class="flex items-center justify-between">
                            <span class="text-3xl font-bold text-gray-900 dark:text-white"></span>
                            <a href="{{ route('student.project.select') }}">
                                    <button class="flex items-center bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10.707,15.707l-5-5C5.512,10.512,5,10.265,5,9.914s0.512-0.598,0.707-0.793l5-5c0.391-0.391,1.023-0.391,1.414,0s0.391,1.023,0,1.414L8.414,8H15c0.553,0,1,0.447,1,1s-0.447,1-1,1H8.414l3.707,3.707C11.098,14.684,11.195,14.854,11.195,15.025C11.195,15.195,11.098,15.367,10.707,15.707z" />
                                        </svg>
                                        <span>Back</span>
                                    </button>
                            </a>
                </div>

                <br>
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Semester/Year
                            </th>
                            <th scope="col" class="px-6 py-3 ">
                                Project Name
                            </th>
                            <th scope="col" class="px-6 py-3 ">
                                Description
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
                                <a href="{{ route('teacher.project.detail', $project) }}" class="text-white bg-blue-500 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">View more</a>
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
