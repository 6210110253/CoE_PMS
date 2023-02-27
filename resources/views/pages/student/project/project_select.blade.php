<x-app-layout>
   <div>
        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
            <div class="container mx-auto px-6 py-8">

                <div class="flex justify-end gap-4 ">
                    <span class="text-3xl font-bold text-gray-900 dark:text-white"></span>
                    @if(empty(hasProjectList(Auth::id())))
                        <a href="{{ route('student.project.propose')}}" class="flex items-center text-white bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <span class="inline-flex justify-center items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                                </svg>                        
                            </span>
                            
                            <span class="mx-3">Propose Project</span>
                        </a>
                        <a href="{{ route('student.project.view')}}" class="flex items-center text-white bg-lime-500 hover:bg-lime-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <span class="inline-flex justify-center items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 5.25h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5" />
                                </svg>
                            </span>
                            <span class="mx-3">Project List</span>
                        </a>
                    @else
                    <a href="{{ route('student.submission')}}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        My Project
                    </a>
                    @endif
                </div>


                <br>

            <div class="grid grid-cols-3 gap-4 content-center">
                @foreach($teachers as $teacher)
                <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">

                    <div class="flex flex-col items-center pb-10">
                        <br>
                        <img class="h-24 w-24 rounded-full object-cover shadow-lg" src="{{ !empty($teacher->profile) ? asset('images/'. $teacher->profile) : asset('images/1651389508_user.avif') }}" alt="Bonnie image"/>
                        <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Supervisor: {{ $teacher->name }}</h5>
                        <span class="text-sm text-gray-500 dark:text-gray-400">Email: {{ $teacher->email }}</span>
                        <br>
                        <div class="flex items-center justify-between">
                            <span class="text-3xl font-bold text-gray-900 dark:text-white"></span>
                            <a href="{{ route('teacher.project.list', $teacher->id)}}" class="flex items-center text-white bg-purple-500 hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <span class="inline-flex justify-center items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                                    </svg>                                                      
                                </span>
                                
                                <span class="mx-3">View Project</span>
                                
                            </a>
                        </div>
                    </div>
                    <br>
                </div>
                @endforeach
            </div>


            </div>
        </main>
    </div>

</x-app-layout>
