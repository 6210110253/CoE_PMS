<x-app-layout>
    <div>
        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">

            <div class="container mx-auto px-6 py-8">
                <div class="flex items-center justify-between">
                            <span class="text-3xl font-bold text-gray-900 dark:text-white"></span>
                            <a href="{{ route('teacher.project.create')}}">
                                    <button class="flex items-center bg-green-500 hover:bg-green-800 text-white font-bold py-2 px-4 rounded">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21"><g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><path d="M10 4.5H5.5a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V11"/><path d="M17.5 3.467a1.462 1.462 0 0 1-.017 2.05L10.5 12.5l-3 1l1-3l6.987-7.046a1.409 1.409 0 0 1 1.885-.104zm-2 2.033l.953 1"/></g></svg>
                                        <span>Create Project</span>
                                    </button>
                            </a>
                </div>
                <div class="flex justify-center gap-4">
                        <a class='relative bg-blue-700 hover:bg-blue-800 text-white p-6 rounded text-sm font-bold overflow-visible'>

                                นักศึกษาจองโปรเจกต์ 2565
                                <div class="absolute top-0 right-0 -mt-4 -mr-4 px-4 py-1 bg-green-500 rounded-full">2000</div>
                        </a>

                        <a class='relative bg-blue-700 hover:bg-blue-800 text-white p-6 rounded text-sm font-bold overflow-visible'>

                                นักศึกษาเสนอโปรเจกต์ปี 2565
                                <div class="absolute top-0 right-0 -mt-4 -mr-4 px-4 py-1 bg-red-500 rounded-full">2000</div>
                        </a>
                    </div>


                <br>
                <div class="w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <div class="sm:hidden">
                        <label for="tabs" class="sr-only">Select tab</label>
                        <select id="tabs" class="bg-gray-50 border-0 border-b border-gray-200 text-gray-900 text-sm rounded-t-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option>Statistics</option>
                            <option>Services</option>
                            <option>FAQ</option>
                        </select>
                    </div>
                    <ul class="hidden text-sm font-medium text-center text-gray-500 divide-x divide-gray-200 rounded-lg sm:flex dark:divide-gray-600 dark:text-gray-400" id="fullWidthTab" data-tabs-toggle="#fullWidthTabContent" role="tablist">
                        <li class="w-full">
                            <button id="stats-tab" data-tabs-target="#stats" type="button" role="tab" aria-controls="stats" aria-selected="true" class="inline-block w-full p-4 rounded-tl-lg bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600">โปรเจกต์ที่นักศึกษาเสนอหรือจองเข้ามา</button>
                        </li>
                        <li class="w-full">
                            <button id="about-tab" data-tabs-target="#about" type="button" role="tab" aria-controls="about" aria-selected="false" class="inline-block w-full p-4 bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600">โปรเจกต์ที่อาจารย์สร้าง</button>
                        </li>
                        <li class="w-full">
                            <button id="faq-tab" data-tabs-target="#faq" type="button" role="tab" aria-controls="faq" aria-selected="false" class="inline-block w-full p-4 rounded-tr-lg bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600">โปรเจกต์ที่ดูแลอยู่</button>
                        </li>
                    </ul>
                    <div id="fullWidthTabContent" class="border-t border-gray-200 dark:border-gray-600">
                        <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="stats" role="tabpanel" aria-labelledby="stats-tab">

                            {{-- <div class = "flex justify-end gap-4">

                                <button id="dropdownDefaultButton" data-dropdown-toggle="years" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">ปีการศึกษา<svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
                                <!-- Dropdown menu -->
                                    <div id="years" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                                             <li>
                                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">2/2565</a>
                                            </li>
                                            <li>
                                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">2/2566</a>
                                            </li>
                                            <li>
                                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">2/2567</a>
                                            </li>
                                        </ul>
                                    </div>

                                <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">ตัวเลือกโปรเจกต์<svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
                                <!-- Dropdown menu -->
                                    <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                                             {{-- <li>
                                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">โปรเจกต์ทั้งหมด</a>
                                            </li> --}}
                                            {{-- <li>
                                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">โปรเจกต์ที่นักศึกษาจอง</a>
                                            </li>
                                            <li>
                                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">โปรเจกต์ที่นักศึกษาเสนอ</a>
                                            </li>
                                        </ul>
                                    </div>
                            </div> --}}

                            <br>
                            <div>
                                @foreach ($project_reservations as $project_reservation )
                                <div class="w-full  bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">

                                    <div class="px-5 pb-5">
                                        <br>

                                        <a >
                                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"> {{ $project_reservation->project->title }}
                                                 <span class="bg-purple-200 text-purple-600 py-1 px-3 mt-2 rounded-full text-xs">{{ $project_reservation->type }}
                                                 </span>
                                                 <span class=" bg-gray-200 text-black-600 py-1  px-3 mt-2 rounded-full text-xs">{{ $project_reservation->status }}</span>


                                            </p></h5>

                                            <p class="font-normal text-gray-700 dark:text-gray-400">Description : {{ $project_reservation->project->detail }}</p>


                                            @if(!empty($project_reservation->student_reservetion))

                                                @foreach ($project_reservation->student_reservetion_list as $key => $member )
                                                    <p class="font-normal text-gray-700 dark:text-gray-400">{{ $key+1 }}.{{ $member }}</p>

                                                @endforeach

                                            @else
                                                <p class="font-normal text-gray-700 dark:text-gray-400">1.{{ $project_reservation->member->name }}</p>

                                            @endif
                                        </a>
                                        <br>
                                        <div class="froutelexcenter justify-between">
                                            <a href="{{ route('teacher.project.detail.teacher', $project_reservation) }}" class="text-white bg-blue-500 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">View more</a>
                                        </div>
                                    </div>


                                </div>
                                <br>
                                @endforeach

                            </div>



                        </div>
                    </div>
                        <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="about" role="tabpanel" aria-labelledby="about-tab">


                            <div>
                                @foreach ($projects as $project )
                                <div class="w-full  bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">

                                    <div class="px-5 pb-5">
                                        <br>

                                        <a >
                                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"> {{ $project->title }}
                                            @if( $project->status == 'publish' )
                                                <span class="bg-purple-200 text-purple-600 py-1 px-3 mt-2 rounded-full text-xs">publish</span>
                                            @else
                                                <span class="bg-green-200 text-purple-600 py-1  px-3 mt-2 rounded-full text-xs">draft</span>
                                            @endif


                                            </h5>
                                            <p class="font-normal text-gray-700 dark:text-gray-400">Description : {{ $project->detail }}</p>
                                        </a>

                                        <br>

                                        <div class="flex items-center justify-between">
                                            <a href="{{ route('teacher.project.detail.teacher.create', $project) }}" class="text-white bg-blue-500 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">View more</a>
                                        </div>
                                    </div>


                                </div>
                                <br>
                                @endforeach

                            </div>


                        </div>
                        <br>

                        <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="faq" role="tabpanel" aria-labelledby="faq-tab">

                                @foreach ($project_in_charts as $project )
                                   <div class="w-full p-4 text-center bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                                        <h5 class="mb-2 text-3xl text-left font-bold text-gray-900 dark:text-white">ชื่อโปรเจกต์ : {{ $project->reservaton->project->title }}</h5>
                                        <p class="mb-5 text-left text-gray-500 sm:text-lg dark:text-gray-400">คำอธิบายโปรเจกต์ : {{ $project->reservaton->project->detail }}</p>
                                        <p class="mb-5 text-left text-gray-500 sm:text-lg dark:text-gray-400">นักศึกษา: </p>
                                        @if(!empty($project->reservaton->student_reservetion))
                                                @foreach ($project->reservaton->student_reservetion_list as $key => $member )
                                                    <p class=" flex leftfont-normal text-gray-700 dark:text-gray-400">{{ $key+1 }}.{{ $member }}</p>
                                                @endforeach
                                                @else
                                                    <p class="flex left font-normal text-gray-700 dark:text-gray-400">1.{{ $project->reservaton->member->name }}</p>
                                                @endif
                                        </p>
                                        <br>
                                        <div class="flex left justify-between">
                                                <a href="{{ route('teacher.project.detail.teacher',$project->reservaton ) }}" class="text-white bg-blue-500 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">View more</a>
                                        </div>


                                    </div>
                                    <br>
                                    @endforeach


                        </div>






                </div>
            </div>
        </main>
    </div>
</x-app-layout>
