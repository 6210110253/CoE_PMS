<x-app-layout>
    <div>
        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">

            <div class="container mx-auto px-6 py-8">
                <div class="flex justify-center gap-4" >

                    <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">

                        <svg class=" w-10 h-10 mb-2 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 5a3 3 0 015-2.236A3 3 0 0114.83 6H16a2 2 0 110 4h-5V9a1 1 0 10-2 0v1H4a2 2 0 110-4h1.17C5.06 5.687 5 5.35 5 5zm4 1V5a1 1 0 10-1 1h1zm3 0a1 1 0 10-1-1v1h1z" clip-rule="evenodd"></path><path d="M9 11H3v5a2 2 0 002 2h4v-7zM11 18h4a2 2 0 002-2v-5h-6v7z"></path></svg>
                            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">นักศึกษาเสนอโปรเจกต์ปี 2565</h5>
                        <p class="mb-3 font-normal text-gray-500 dark:text-gray-400 text-center	">จำนวน 6 คน</p>
                        {{-- <a href="{{ route('project.propose.to.teacher') }}" class="inline-flex items-center text-blue-600 hover:underline">
                            See our guideline

                        </a> --}}
                    </div>


                    <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <svg class=" w-10 h-10 mb-2 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 5a3 3 0 015-2.236A3 3 0 0114.83 6H16a2 2 0 110 4h-5V9a1 1 0 10-2 0v1H4a2 2 0 110-4h1.17C5.06 5.687 5 5.35 5 5zm4 1V5a1 1 0 10-1 1h1zm3 0a1 1 0 10-1-1v1h1z" clip-rule="evenodd"></path><path d="M9 11H3v5a2 2 0 002 2h4v-7zM11 18h4a2 2 0 002-2v-5h-6v7z"></path></svg>
                            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">นักศึกษาจองโปรเจกต์ 2565</h5>
                        <p class="mb-3 font-normal text-gray-500 dark:text-gray-400 text-center	">จำนวน 6 คน</p>

                        {{-- <svg class="w-10 h-10 mb-2 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 5a3 3 0 015-2.236A3 3 0 0114.83 6H16a2 2 0 110 4h-5V9a1 1 0 10-2 0v1H4a2 2 0 110-4h1.17C5.06 5.687 5 5.35 5 5zm4 1V5a1 1 0 10-1 1h1zm3 0a1 1 0 10-1-1v1h1z" clip-rule="evenodd"></path><path d="M9 11H3v5a2 2 0 002 2h4v-7zM11 18h4a2 2 0 002-2v-5h-6v7z"></path></svg>
                        <a href="{{ route('project.request') }}">
                            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">นักศึกษาจองโปรเจกต์</h5>
                        </a> --}}

                    </div>

                    <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <svg class=" w-10 h-10 mb-2 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 5a3 3 0 015-2.236A3 3 0 0114.83 6H16a2 2 0 110 4h-5V9a1 1 0 10-2 0v1H4a2 2 0 110-4h1.17C5.06 5.687 5 5.35 5 5zm4 1V5a1 1 0 10-1 1h1zm3 0a1 1 0 10-1-1v1h1z" clip-rule="evenodd"></path><path d="M9 11H3v5a2 2 0 002 2h4v-7zM11 18h4a2 2 0 002-2v-5h-6v7z"></path></svg>
                            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">สร้างโปรเจกต์ปี 2565</h5>

                        <div class="flex items-center justify-between">
                            <span class="text-3xl font-bold text-gray-900 dark:text-white"></span>


                            <a href="{{ route('teacher.project.create')}}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create Project</a>
                        </div>
                    </div>

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
                            <button id="faq-tab" data-tabs-target="#faq" type="button" role="tab" aria-controls="faq" aria-selected="false" class="inline-block w-full p-4 rounded-tr-lg bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600">โปรเจกต์ที่สำเร็จ</button>
                        </li>
                    </ul>
                    <div id="fullWidthTabContent" class="border-t border-gray-200 dark:border-gray-600">
                        <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="stats" role="tabpanel" aria-labelledby="stats-tab">

                            <div class = "flex justify-end">

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
                                            <li>
                                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">โปรเจกต์ที่นักศึกษาจอง</a>
                                            </li>
                                            <li>
                                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">โปรเจกต์ที่นักศึกษาเสนอ</a>
                                            </li>
                                        </ul>
                                    </div>
                            </div>

                            <br>
                            <div>
                                @foreach ($projects as $project )
                                <div class="w-full p-4 text-center bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                                    <p class="mb-2 text-2xl text-left font-bold text-gray-900 dark:text-white">{{ $project->title }}</p>
                                    <p class="mb-5 text-left text-gray-500 sm:text-lg dark:text-gray-400">รายละเอียด : {{ $project->detail }}</p>

                                    <p class="mb-5 text-left text-gray-500 sm:text-lg dark:text-gray-400">สมาชิกในกลุ่ม : </p>
                                    @if(!empty($project->student_reservetion))

                                        @foreach ($project->student_reservetion_list as $key => $member )
                                        <p class="mb-5 text-left text-gray-500 sm:text-lg dark:text-gray-400">{{ $key+1 }}.{{ $member }}</p>

                                        @endforeach

                                    @else
                                        <p class="mb-5 text-left text-gray-500 sm:text-lg dark:text-gray-400">1.{{ $project->member->name }}</p>

                                    @endif
                                    <a href="{{ route('teacher.project.detail.teacher', $project) }}" class="flex justify-left  text-blue-600">View more</a>

                                <div class="flex justify-center gap-4 mx-auto">
                                    <a href="#" class="w-1/3 sm:w-auto bg-gray-800 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 text-white rounded-lg inline-flex items-center justify-center px-4 py-2.5 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700">

                                        <div class="text-left">
                                            <div class="-mt-1 font-sans text-sm font-semibold">Accect</div>
                                        </div>
                                    </a>

                                    <a href="#" class="w-1/3 sm:w-auto bg-gray-800 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 text-white rounded-lg inline-flex items-center justify-center px-4 py-2.5 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700">

                                        <div class="text-left">
                                            <div class="-mt-1 font-sans text-sm font-semibold">Deny</div>
                                        </div>
                                    </a>
                                    <a href="#" class="w-1/3 sm:w-auto bg-gray-800 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 text-white rounded-lg inline-flex items-center justify-center px-4 py-2.5 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700">

                                        <div class="text-left">
                                            <div class="-mt-1 font-sans text-sm font-semibold">Comment</div>
                                        </div>
                                    </a>
                                </div>

                                </div>
                                <br>
                                @endforeach

                            </div>
                    </div>
                        <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="about" role="tabpanel" aria-labelledby="about-tab">
                            @foreach ($projects as $project )
                            <div class="w-full p-4 text-center bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">

                                <h5 class="mb-2 text-3xl text-left font-bold text-gray-900 dark:text-white">{{ $project->title }}</h5>
                                <p class="mb-5 text-left text-gray-500 sm:text-lg dark:text-gray-400">{{ $project->detail }}</p>

                            </div>
                            <br>
                            @endforeach
                        </div>
                        <br>

                        <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="faq" role="tabpanel" aria-labelledby="faq-tab">
                            <div class="w-full p-4 text-center bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                                <h5 class="mb-2 text-3xl text-left font-bold text-gray-900 dark:text-white">ชื่อโปรเจกต์</h5>
                                <p class="mb-5 text-left text-gray-500 sm:text-lg dark:text-gray-400">คำอธิบายโปรเจกต์</p>

                            </div>
                        </div>
                </div>
            </div>
        </main>
    </div>
</x-app-layout>
