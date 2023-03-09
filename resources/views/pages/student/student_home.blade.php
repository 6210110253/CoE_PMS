<x-app-layout>

    <div>
         <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">

             <div class="container mx-auto px-6 py-8">
                <div class="container mx-auto px-6 py-8">
                <h2 class="mb-4 text-2xl font-bold">Announcement</h2>

                <div class="flex justify-start gap-4">

                    <a href="{{ route('student.show') }}" class="flex items-center rounded-xl bg-white p-4 shadow-lg">
                        <div class="flex h-12 w-12 items-center justify-center rounded-full border border-orange-100 bg-orange-50">
                             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><g fill="none" fill-rule="evenodd"><path d="M24 0v24H0V0h24ZM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018Zm.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022Zm-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01l-.184-.092Z"/><path fill="currentColor" d="M15.992 3.013C17.326 2.236 19 3.197 19 4.741V8a3 3 0 1 1 0 6v3c0 1.648-1.881 2.589-3.2 1.6l-2.06-1.546A8.658 8.658 0 0 0 10 15.446v2.844a2.71 2.71 0 0 1-5.316.744l-1.57-5.496a4.7 4.7 0 0 1 3.326-7.73l3.018-.168a9.344 9.344 0 0 0 4.19-1.259l2.344-1.368ZM5.634 15.078l.973 3.407A.71.71 0 0 0 8 18.29v-3.01l-1.56-.087a4.723 4.723 0 0 1-.806-.115ZM20 11a1 1 0 0 0-1-1v2a1 1 0 0 0 1-1Z"/></g></svg>
                        </div>

                        <div class="ml-4">
                            <h2 class="font-semibold">Announcement</h2>

                        </div>
                    </a>

                </div>

                <br>
                <h2 class="mb-4 text-2xl font-bold">About Project</h2>
                <div class="flex justify-start gap-4">
                     <a href="{{ route('student.project.select')}}" class="flex items-center rounded-xl bg-white p-4 shadow-lg">
                        <div class="flex h-12 w-12 items-center justify-center rounded-full border border-blue-100 bg-blue-50">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M15 3H5c-1.11 0-2 .89-2 2v5.82a6.505 6.505 0 0 1 9.1.08a6.525 6.525 0 0 1 0 9.2c-.36.35-.75.64-1.16.9H19c1.11 0 2-.89 2-2V9l-6-6m-1 7V4.5l5.5 5.5H14m-6.5 1C5 11 3 13 3 15.5c0 .88.25 1.71.69 2.4L.61 21L2 22.39l3.12-3.07c.69.43 1.51.68 2.38.68c2.5 0 4.5-2 4.5-4.5S10 11 7.5 11m0 7a2.5 2.5 0 0 1 0-5a2.5 2.5 0 0 1 0 5Z"/></svg>
                        </div>

                        <div class="ml-4">
                            <h2 class="font-semibold">Project</h2>

                        </div>
                    </a>



                    <a href="{{ route('admin.old.project')}}" class="flex items-center rounded-xl bg-white p-4 shadow-lg">
                        <div class="flex h-12 w-12 items-center justify-center rounded-full border border-orange-100 bg-orange-50">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M13 19c0 .34.04.67.09 1H4a2 2 0 0 1-2-2V6c0-1.11.89-2 2-2h6l2 2h8a2 2 0 0 1 2 2v5.81c-.88-.51-1.9-.81-3-.81c-3.31 0-6 2.69-6 6m8.34-3.16l-3.59 3.59l-1.59-1.59L15 19l2.75 3l4.75-4.75l-1.16-1.41Z"/></svg>
                        </div>

                        <div class="ml-4">
                            <h2 class="font-semibold">Finished Project</h2>

                        </div>
                    </a>

                </div>

                <br>
                <h2 class="mb-4 text-2xl font-bold">About Submission</h2>
                <div class="flex justify-start gap-4">


                    <a href="#" class="flex items-center rounded-xl bg-white p-4 shadow-lg">
                        <div class="flex h-12 w-12 items-center justify-center rounded-full border border-orange-100 bg-orange-50">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M19 13c.7 0 1.37.13 2 .35V9l-6-6H5c-1.11 0-2 .89-2 2v14a2 2 0 0 0 2 2h8.35c-.22-.63-.35-1.3-.35-2c0-3.31 2.69-6 6-6m-5-8.5l5.5 5.5H14V4.5M23 18v2h-3v3h-2v-3h-3v-2h3v-3h2v3h3Z"/></svg>
                        </div>

                        <div class="ml-4">
                            <h2 class="font-semibold">Submission</h2>

                        </div>
                    </a>

                </div>

            </div>


             </div>
         </main>

    </div>
 </x-app-layout>

