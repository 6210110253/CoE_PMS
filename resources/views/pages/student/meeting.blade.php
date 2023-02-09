<x-app-layout>
    <div>
         <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
             <div class="container mx-auto px-6 py-8">
                
                <div class="flex justify-center gap-4 mx-auto>
                    <div class="w-full p-4 text-center bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">



                    <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">

                        <svg class=" w-10 h-10 mb-2 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 5a3 3 0 015-2.236A3 3 0 0114.83 6H16a2 2 0 110 4h-5V9a1 1 0 10-2 0v1H4a2 2 0 110-4h1.17C5.06 5.687 5 5.35 5 5zm4 1V5a1 1 0 10-1 1h1zm3 0a1 1 0 10-1-1v1h1z" clip-rule="evenodd"></path><path d="M9 11H3v5a2 2 0 002 2h4v-7zM11 18h4a2 2 0 002-2v-5h-6v7z"></path></svg>
                            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">ประวัติการนัดพบ</h5>
                        <p class="mb-3 font-normal text-gray-500 dark:text-gray-400 text-center	">5 ครั้ง</p>
                        {{-- <a href="{{ route('project.propose.to.teacher') }}" class="inline-flex items-center text-blue-600 hover:underline">
                            See our guideline

                        </a> --}}
                    </div>


                    <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <svg class=" w-10 h-10 mb-2 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 5a3 3 0 015-2.236A3 3 0 0114.83 6H16a2 2 0 110 4h-5V9a1 1 0 10-2 0v1H4a2 2 0 110-4h1.17C5.06 5.687 5 5.35 5 5zm4 1V5a1 1 0 10-1 1h1zm3 0a1 1 0 10-1-1v1h1z" clip-rule="evenodd"></path><path d="M9 11H3v5a2 2 0 002 2h4v-7zM11 18h4a2 2 0 002-2v-5h-6v7z"></path></svg>
                            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">รายการจองนัดพบอาจารย์</h5>
                        <p class="mb-3 font-normal text-gray-500 dark:text-gray-400 text-center	"> 6 คน</p>

                        {{-- <svg class="w-10 h-10 mb-2 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 5a3 3 0 015-2.236A3 3 0 0114.83 6H16a2 2 0 110 4h-5V9a1 1 0 10-2 0v1H4a2 2 0 110-4h1.17C5.06 5.687 5 5.35 5 5zm4 1V5a1 1 0 10-1 1h1zm3 0a1 1 0 10-1-1v1h1z" clip-rule="evenodd"></path><path d="M9 11H3v5a2 2 0 002 2h4v-7zM11 18h4a2 2 0 002-2v-5h-6v7z"></path></svg>
                        <a href="{{ route('project.request') }}">
                            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">นักศึกษาจองโปรเจกต์</h5>
                        </a> --}}

                    </div>

                    </div>
                </div>
 
 
 
                 <div class="w-full p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                    
                    <form>
                        <div class="mb-6">
                            <label for="topic" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Supervisor</label>
                            <input type="text" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="เลือกชื่ออาจารย์" required>
                        </div>
                        <div class="mb-6">
    
                            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                            <input type="text" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Title" required>
                        </div>
                        <div class="mb-6">
    
                            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date</label>
                            <div class="relative max-w-sm">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                            </div>
                            <input datepicker datepicker-buttons type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
                            </div>
    
                        </div>
                        <div class="mb-6">
    
                            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Start Time</label>
                           <!-- component -->
                            
                                <div class="flex">
                                <select name="hours" class="bg-transparent text-sm appearance-none outline-none">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">10</option>
                                    <option value="12">12</option>
                                </select>
                                <span class="text-xl mr-3">:</span>
                                <select name="minutes" class="bg-transparent text-sm appearance-none outline-none mr-4">
                                    <option value="0">00</option>
                                    <option value="30">30</option>
                                </select>
                                <select name="ampm" class="bg-transparent text-sm appearance-none outline-none">
                                    <option value="am">AM</option>
                                    <option value="pm">PM</option>
                                </select>
                                </div>
                            
    
                        </div>

                        <div class="mb-6">
    
                            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Start Time</label>
                            <!-- component -->
                            
                                <div class="flex">
                                <select name="hours" class="bg-transparent text-sm appearance-none outline-none">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">10</option>
                                    <option value="12">12</option>
                                </select>
                                <span class="text-xl mr-3">:</span>
                                <select name="minutes" class="bg-transparent text-sm appearance-none outline-none mr-4">
                                    <option value="0">00</option>
                                    <option value="30">30</option>
                                </select>
                                <select name="ampm" class="bg-transparent text-sm appearance-none outline-none">
                                    <option value="am">AM</option>
                                    <option value="pm">PM</option>
                                </select>
                                </div>
                           
    
                        </div>
                        

                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Propose Project</button>
                        </form>
    
                 </div>
 
 
 
             </div>
         </main>
     </div>
 </div>
 </x-app-layout>
 