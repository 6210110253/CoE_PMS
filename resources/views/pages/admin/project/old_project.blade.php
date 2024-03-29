<x-app-layout>

    <div>
         <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">

             <div class="container mx-auto px-6 py-8">
            <!-- component -->
            <div class="bg-white-50 h-screen ">
                <nav>
                    <div class="w-full bg-gradient-to-tr from-indigo-600 to-purple-600 py-4">
                        <h1 class="text-center text-indigo-100 text-xl font-bold">Finished Project </h1>
                    </div>
                </nav>

                @foreach($projects as $project )
                <div class="px-10 mt-10">
                    <div class="bg-white rounded-md max-w-4xl mx-auto p-4 space-y-4 shadow-lg">
                        <h3 class="mb-2 font-semibold">Title: <span class="font-thin">{{ $project->reservaton->project->title }}</span></p>

                            <h3 class="border-t mb-2 pt-3 font-semibold">Member: <span class="font-thin"></span>
                                @if(!empty($project->student_reservetion))

                                @foreach ($project->student_reservetion_list as $key => $member )
                                    <p class="font-medium text-gray-900 dark:text-gray-400">{{ $key+1 }}.{{ $member }}</p>

                                @endforeach

                                @else
                                    <p class="font-medium text-gray-900 dark:text-gray-400">1.{{ $project->member->name }}</p>
                                @endif
                            </p>

                                <h3 class="border-t mb-2 pt-3 font-semibold">อาจารย์ที่ปรึกษา:
                                    <span class="font-thin">{{ $project->teacher->name }}</span></p>
                                    <div class="flex justify-end space-x-2">
                                        {{-- reprot --}}
                                        {{-- <a href="{{ $project->processFinished->file_report }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600 cursor-pointer" width="16" height="16" viewBox="0 0 16 16">
                                            <g fill="currentColor"><path d="M5.523 12.424c.14-.082.293-.162.459-.238a7.878 7.878 0 0 1-.45.606c-.28.337-.498.516-.635.572a.266.266 0 0 1-.035.012a.282.282 0 0 1-.026-.044c-.056-.11-.054-.216.04-.36c.106-.165.319-.354.647-.548zm2.455-1.647c-.119.025-.237.05-.356.078a21.148 21.148 0 0 0 .5-1.05a12.045 12.045 0 0 0 .51.858c-.217.032-.436.07-.654.114zm2.525.939a3.881 3.881 0 0 1-.435-.41c.228.005.434.022.612.054c.317.057.466.147.518.209a.095.095 0 0 1 .026.064a.436.436 0 0 1-.06.2a.307.307 0 0 1-.094.124a.107.107 0 0 1-.069.015c-.09-.003-.258-.066-.498-.256zM8.278 6.97c-.04.244-.108.524-.2.829a4.86 4.86 0 0 1-.089-.346c-.076-.353-.087-.63-.046-.822c.038-.177.11-.248.196-.283a.517.517 0 0 1 .145-.04c.013.03.028.092.032.198c.005.122-.007.277-.038.465z"/>
                                            <path fill-rule="evenodd" d="M4 0h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zm5.5 1.5v2a1 1 0 0 0 1 1h2l-3-3zM4.165 13.668c.09.18.23.343.438.419c.207.075.412.04.58-.03c.318-.13.635-.436.926-.786c.333-.401.683-.927 1.021-1.51a11.651 11.651 0 0 1 1.997-.406c.3.383.61.713.91.95c.28.22.603.403.934.417a.856.856 0 0 0 .51-.138c.155-.101.27-.247.354-.416c.09-.181.145-.37.138-.563a.844.844 0 0 0-.2-.518c-.226-.27-.596-.4-.96-.465a5.76 5.76 0 0 0-1.335-.05a10.954 10.954 0 0 1-.98-1.686c.25-.66.437-1.284.52-1.794c.036-.218.055-.426.048-.614a1.238 1.238 0 0 0-.127-.538a.7.7 0 0 0-.477-.365c-.202-.043-.41 0-.601.077c-.377.15-.576.47-.651.823c-.073.34-.04.736.046 1.136c.088.406.238.848.43 1.295a19.697 19.697 0 0 1-1.062 2.227a7.662 7.662 0 0 0-1.482.645c-.37.22-.699.48-.897.787c-.21.326-.275.714-.08 1.103z"/></g></svg>
                                        </a>
                                            {{-- poster --}}
                                        {{-- <a href="{{ $project->processFinished->file_poster }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-600 cursor-pointer" width="15" height="15" viewBox="0 0 15 15">
                                            <path fill="currentColor" d="M3 8h.5a.5.5 0 0 0 0-1H3v1Z"/>
                                            <path fill="currentColor" fill-rule="evenodd" d="M1 1.5A1.5 1.5 0 0 1 2.5 0h8.207L14 3.293V13.5a1.5 1.5 0 0 1-1.5 1.5h-10A1.5 1.5 0 0 1 1 13.5v-12ZM2 6h1.5a1.5 1.5 0 1 1 0 3H3v2H2V6Zm8 0h3v1h-2v3h1V8.5h1V11h-3V6ZM7 8.618V11H6V6h1v.382l1 2V6h1v5H8v-.382l-1-2Z" clip-rule="evenodd"/></svg>
                                        </a>  --}}
                                            {{-- git --}}
                                        <a href="{{ $project->processFinished->git_url }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600 cursor-pointer" width="448" height="512" viewBox="0 0 448 512">
                                            <path fill="currentColor" d="M100.59 334.24c48.57 3.31 58.95 2.11 58.95 11.94c0 20-65.55 20.06-65.55 1.52c.01-5.09 3.29-9.4 6.6-13.46zm27.95-116.64c-32.29 0-33.75 44.47-.75 44.47c32.51 0 31.71-44.47.75-44.47zM448 80v352a48 48 0 0 1-48 48H48a48 48 0 0 1-48-48V80a48 48 0 0 1 48-48h352a48 48 0 0 1 48 48zm-227 69.31c0 14.49 8.38 22.88 22.86 22.88c14.74 0 23.13-8.39 23.13-22.88S258.62 127 243.88 127c-14.48 0-22.88 7.84-22.88 22.31zM199.18 195h-49.55c-25-6.55-81.56-4.85-81.56 46.75c0 18.8 9.4 32 21.85 38.11C74.23 294.23 66.8 301 66.8 310.6c0 6.87 2.79 13.22 11.18 16.76c-8.9 8.4-14 14.48-14 25.92C64 373.35 81.53 385 127.52 385c44.22 0 69.87-16.51 69.87-45.73c0-36.67-28.23-35.32-94.77-39.38l8.38-13.43c17 4.74 74.19 6.23 74.19-42.43c0-11.69-4.83-19.82-9.4-25.67l23.38-1.78zm84.34 109.84l-13-1.78c-3.82-.51-4.07-1-4.07-5.09V192.52h-52.6l-2.79 20.57c15.75 5.55 17 4.86 17 10.17V298c0 5.62-.31 4.58-17 6.87v20.06h72.42zM384 315l-6.87-22.37c-40.93 15.37-37.85-12.41-37.85-16.73v-60.72h37.85v-25.41h-35.82c-2.87 0-2 2.52-2-38.63h-24.18c-2.79 27.7-11.68 38.88-34 41.42v22.62c20.47 0 19.82-.85 19.82 2.54v66.57c0 28.72 11.43 40.91 41.67 40.91c14.45 0 30.45-4.83 41.38-10.2z"/></svg>
                                        </a>
                                            {{-- Video --}}
                                        <a href="{{ $project->processFinished->file_video }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-600 cursor-pointer" width="24" height="24" viewBox="0 0 24 24">
                                            <path fill="currentColor" d="m11.5 14.5l7-4.5l-7-4.5v9ZM8 18q-.825 0-1.413-.588T6 16V4q0-.825.588-1.413T8 2h12q.825 0 1.413.588T22 4v12q0 .825-.588 1.413T20 18H8Zm-4 4q-.825 0-1.413-.588T2 20V6h2v14h14v2H4Z"/></svg>
                                        </a>
                                    </div>
                    </div>
                </div>
                @endforeach

                <div class="mt-10">
                {{ $projects->links() }}
                </div>

            </div>
            </div>



         </main>
     </div>

 </x-app-layout>
