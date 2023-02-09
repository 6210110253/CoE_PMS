<x-app-layout>
    <div>
         <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
             <div class="container mx-auto px-6 py-8">
                 <div class="flex items-center justify-between">
                        <span class="text-3xl font-bold text-gray-900 dark:text-white"></span>
                        <a href="{{ route('teacher.meeting') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Back</a>
                 </div>

                 <br>

                <div class="w-full p-4  bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                            <form id="propose_project"
                                action="#"
                                method="post"
                                enctype="multipart/form-data" >
                            @csrf
                            <input type="hidden" name="created_by" value="{{ Auth()->user()->id }}">
                            <div class="mb-6">
                                <label  for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">หัวข้อในการเข้าพบ </label>
                                <input type="text" id="title" name="title" value="" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="ตรงนี้แสดงหัวข้อของนักศึกษามาเลย" required>
                            </div>
                            <div class="mb-6">
                                <label  for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ช่วงเวลาที่เข้าพบ </label>
                                <input type="text" id="title" name="title" value="" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="เวลาเริ่มต้น - เวลาสิ้นสุด" required>
                            </div>
                            <div class="mb-6">
                                <label  for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ชื่อผู้เข้าพบ</label>
                                <input type="text" id="title" name="title" value="" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="ชื่อนักศึกษาที่ส่งมา" required>
                            </div>

                            <div class="mb-6">

                                <label for="detail" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                                <textarea id="detail" name="detail" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Leave a comment..."></textarea>

                            </div>

                            <div class="mb-6">
    
                                <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Time : แสดงเวลาเริ่มต้น - เวลสิ้นสุด</label>
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

                            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                            </form>
                
                </div>          
             </div>
         </main>
     </div>
 </div>
 </x-app-layout>
 