<x-app-layout>
   <div>
        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
            <div class="container mx-auto px-6 py-8">


                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">


                        <tbody>
                            <tr class="bg-white border-b dark:bg-gray-800 ">
                                <td class="px-6 py-2">
                                    ชื่อโปรเจกต์ :
                                </td>
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900  dark:text-white">
                                    {{ $showproject->project->title }}
                                </th>
                            </tr>


                            <tr class="bg-white border-b dark:bg-gray-800">
                                <td class="px-6 py-2">
                                    อาจารย์ที่ปรึกษา :
                                </td>
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900  dark:text-white">
                                    {{ $showproject->project->teacher->name}}
                                </th>

                            </tr>

                            <tr class="bg-white border-b dark:bg-gray-800">
                                <td class="px-6 py-2">
                                    ผู้ร่วมโปรเจค :
                                </td>
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900  dark:text-white">
                                @if(!empty($showproject->student_reservetion))

                                                @foreach ($showproject->student_reservetion_list as $key => $member )
                                                    <p class="font-medium text-gray-900 dark:text-gray-400">{{ $key+1 }}.{{ $member }}</p>

                                                @endforeach

                                            @else
                                                <p class="font-medium text-gray-900 dark:text-gray-400">1.{{ $showproject->member->name }}</p>
                                @endif
                                </th>
                            </tr>
                        </tbody>

                    </table>
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
                        @foreach($job_pro_groups as $key => $job_pro)
                        @php
                         $group=  Illuminate\Support\Str::camel($key);
                        @endphp
                        <li class="w-full">
                            <button id="{{ $group }}-tab" data-tabs-target="#{{ $group }}" type="button" role="tab" aria-controls="{{  $group }}"
                            aria-selected="{{  $group == 'Pre-Project' ? 'true' : 'false' }}" class="inline-block w-full p-4 rounded-tl-lg bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600">
                                {{ $key }}
                            </button>
                        </li>
                        @endforeach

                    </ul>
                    <div id="fullWidthTabContent" class="border-t border-gray-200 dark:border-gray-600">
                        @foreach($job_pro_groups as $group => $job_pros)
                        @php
                        $group=  Illuminate\Support\Str::camel( $group);
                       @endphp
                        <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="{{ $group }}" role="tabpanel" aria-labelledby="{{ $group }}-tab">



                           <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">
                                            Topic
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Round
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Start Date
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Extended Date
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Type
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Status
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Time Remainning
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($job_pros as $job_pro)
                                    <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">

                                        <td class="px-6 py-4">
                                            {{ $job_pro['topic'] }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $job_pro['semester_name'] }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $job_pro['start_date'] }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $job_pro['end_date'] }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $job_pro['type'] }}
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="flex items-center">
                                                @if(!empty($job_pro['processed']))
                                                <div class="h-2.5 w-2.5 rounded-full bg-green-500 mr-2"></div>    ส่งแล้ว
                                                @else
                                                <div class="h-2.5 w-2.5 rounded-full bg-red-500 mr-2"></div>    ยังไม่ส่ง                                                @endif
                                            </div>
                                        </td>

                                        <td class="px-6 py-4">
                                            Out of time
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="flex space-x-2 justify-center">
                                                <div>
                                                    @if(empty($job_pro['processed']))
                                                    <a href="{{ route('student.submit.meeting', $job_pro['id']) }}" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-[#050708]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center  mr-2 mb-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 11.25l-3-3m0 0l-3 3m3-3v7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                    </svg>

                                                    Submission
                                                    </a>
                                                    @endif
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                       <td colspan="7">No information</td>
                                    </tr>
                                    @endforelse
                                </tbody>

                            </table>


                        </div>
                        @endforeach


                </div>
            </div>
        </main>
    </div>
</div>
</x-app-layout>
