<x-app-layout>
    <div>
         <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
             <div class="container mx-auto px-6 py-8">
                <div class="flex justify-center gap-4 mx-auto> 
                    <div class="w-full p-4 text-center bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                    

                    
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

                    

                    
                    
                    


                    </div>
                </div>

                
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
                            <button id="stats-tab" data-tabs-target="#stats" type="button" role="tab" aria-controls="stats" aria-selected="true" class="inline-block w-full p-4 rounded-tl-lg bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600">โปรเจกต์ที่นักศึกษาเสนอ</button>
                        </li>
                        <li class="w-full">
                            <button id="about-tab" data-tabs-target="#about" type="button" role="tab" aria-controls="about" aria-selected="false" class="inline-block w-full p-4 bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600">โปรเจกต์ที่นักศึกษาจอง</button>
                        </li>
                        <li class="w-full">
                            <button id="faq-tab" data-tabs-target="#faq" type="button" role="tab" aria-controls="faq" aria-selected="false" class="inline-block w-full p-4 rounded-tr-lg bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600">โปรเจกต์ที่สำเร็จ</button>
                        </li>
                    </ul>
                    <div id="fullWidthTabContent" class="border-t border-gray-200 dark:border-gray-600">
                        <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="stats" role="tabpanel" aria-labelledby="stats-tab">
                            
                            <div class="w-full p-4 text-center bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                                <h5 class="mb-2 text-3xl text-left font-bold text-gray-900 dark:text-white">ชื่อโปรเจกต์</h5>
                                <p class="mb-5 text-left text-gray-500 sm:text-lg dark:text-gray-400">คำอธิบายโปรเจกต์</p>
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

                        </div>
                        <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="about" role="tabpanel" aria-labelledby="about-tab">
                            <div class="w-full p-4 text-center bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                                <h5 class="mb-2 text-3xl text-left font-bold text-gray-900 dark:text-white">ชื่อโปรเจกต์</h5>
                                <p class="mb-5 text-left text-gray-500 sm:text-lg dark:text-gray-400">คำอธิบายโปรเจกต์</p>
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
                        </div>
                        <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="faq" role="tabpanel" aria-labelledby="faq-tab">
                            <div class="w-full p-4 text-center bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                                <h5 class="mb-2 text-3xl text-left font-bold text-gray-900 dark:text-white">ชื่อโปรเจกต์</h5>
                                <p class="mb-5 text-left text-gray-500 sm:text-lg dark:text-gray-400">คำอธิบายโปรเจกต์</p>
                                <div class="flex justify-center gap-4 mx-auto"> 
                                </div>
                            </div>
                    </div>
                </div>



 
             </div>
 
 
 
 
 
 
 
 
 
 
 
 
 
             </div>
         </main>
     </div>
 </div>
 </x-app-layout>
 