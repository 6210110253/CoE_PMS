<x-app-layout>
    <div>
         <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">

             <div class="container mx-auto px-6 py-8">

                <form id="form">
                    <select name="semester" id="semester">
                        <option value="">--Select semester--</option>
                        @foreach ($semesters as $semester)
                            <option
                            {{  request('semester') == $semester->id ? 'selected' : ''  }}
                            value="{{ $semester->id }}">
                              {{  $semester->name }}
                            </option>
                        @endforeach
                    </select>
                </form>
                <br>

                <div class="w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <div class="sm:hidden">
                        <label for="tabs" class="sr-only">Select tab</label>
                        <select id="tabs" class="bg-gray-50 border-0 border-b border-gray-200 text-gray-900 text-sm rounded-t-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option>Pre-Project</option>
                            <option>Project I</option>
                            <option>Project II</option>
                            <option>Finished</option>
                        </select>
                    </div>
                    <ul class="hidden text-sm font-medium text-center text-gray-800 divide-x divide-gray-400 rounded-lg sm:flex dark:divide-gray-600 dark:text-gray-400" id="fullWidthTab" data-tabs-toggle="#fullWidthTabContent" role="tablist">
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
                        <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="{{ $group}}" role="tabpanel"
                         aria-labelledby="{{ $group}}-tab">

                                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>

                                        <th scope="col" class="px-6 py-3">
                                            Student ID
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Name
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Status
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Topic
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            detail
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Year
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>

                                      @forelse ($job_pros as $job_pro)
                                    <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">

                                        <td class="px-6 py-4">
                                            xxxx
                                        </td>
                                        <td class="px-6 py-4">
                            
                                        </td>

                                        <td class="px-6 py-4">
                                            <div class="flex items-center">
                                                <div class="h-2.5 w-2.5 rounded-full bg-red-500 mr-2"></div> ส่งแล้ว
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            ชื่อโปรเจกต์
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-3xl font-bold text-gray-900 dark:text-white"></span>
                                                <a href="{{ route('admin.submission.detail') }}">
                                                        <button class="flex items-center bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M2 19v-2h10v2H2Zm0-5v-2h5v2H2Zm0-5V7h5v2H2Zm18.6 10l-3.85-3.85q-.6.425-1.313.638T14 16q-2.075 0-3.538-1.463T9 11q0-2.075 1.463-3.538T14 6q2.075 0 3.538 1.463T19 11q0 .725-.213 1.438t-.637 1.312L22 17.6L20.6 19ZM14 14q1.25 0 2.125-.875T17 11q0-1.25-.875-2.125T14 8q-1.25 0-2.125.875T11 11q0 1.25.875 2.125T14 14Z"/></svg>
                                                            <span>View detail</span>
                                                        </button>
                                                </a>


                                        </td>
                                        <td class="px-6 py-4">
                                            2565
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                       <td colspan="6">No information</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>

                        </div>
                         @endforeach
                    </div>
                </div>
                <br>


             </div>
         </main>
     </div>
 </div>
 <script>
  $(document).ready(function() {
  $('#semester').on('change', function() {
     $("#form").submit();
  });
});
</script>
 </x-app-layout>



