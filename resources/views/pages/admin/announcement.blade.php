<x-app-layout>
    <div>
         <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">




                <div class="container mx-auto px-6 py-8">
                    <div class="flex items-center justify-between">
                            <span class="text-3xl font-bold text-gray-900 dark:text-white"></span>
                            <a href="{{ route('admin.dashboard') }}">
                                    <button class="flex items-center bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10.707,15.707l-5-5C5.512,10.512,5,10.265,5,9.914s0.512-0.598,0.707-0.793l5-5c0.391-0.391,1.023-0.391,1.414,0s0.391,1.023,0,1.414L8.414,8H15c0.553,0,1,0.447,1,1s-0.447,1-1,1H8.414l3.707,3.707C11.098,14.684,11.195,14.854,11.195,15.025C11.195,15.195,11.098,15.367,10.707,15.707z" />
                                        </svg>
                                        <span>Back</span>
                                    </button>
                            </a>
                    </div>
                <br>

                 <div class="w-full p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">

                    <form
                    action="{{ route('admin.announcement.store')  }}"
                    method="post"
                    >
                    @csrf
                        <div class="mb-6">
                            <label for="topic" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                            <input type="text" name="title" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="หัวข้อ" required>
                        </div>

                        {{-- <div class="mb-6">
                            <label for="topic" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Start</label>
                            <input type="text"  class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="เลือกชื่ออาจารย์" required>
                        </div>

                        <div class="mb-6">
                            <label for="topic" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Finish</label>
                            <input type="text" name="finish" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="เลือกชื่ออาจารย์" required>
                        </div> --}}

                        <div class="formkit-outer" data-family="text" data-type="datetime-local" data-invalid="true">
                            <div class="formkit-wrapper">
                              <label class="formkit-label" for="input_0">Start Date/Time</label>
                              <div class="formkit-inner">
                                <input class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" type="datetime-local" name="start" id="input_0" aria-describedby="help-input_0 input_0-rule_date_after">
                              </div>
                            </div>


                          </div>
                          <br>

                          <div class="formkit-outer" data-family="text" data-type="datetime-local" data-invalid="true">
                            <div class="formkit-wrapper">
                              <label class="formkit-label" for="input_0">End Date/Time</label>
                              <div class="formkit-inner">
                                <input class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" type="datetime-local" name="finish" id="input_0" aria-describedby="help-input_0 input_0-rule_date_after">
                              </div>
                            </div>


                          </div>
                          <br>

                        <button class="flex items-center bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M17.707,3.293C17.316,2.902,16.684,2.902,16.293,3.293L7,12.586V8c0-0.553-0.447-1-1-1s-1,0.447-1,1v6c0,0.553,0.447,1,1,1h10c0.553,0,1-0.447,1-1s-0.447-1-1-1H8.414l9.293-9.293c0.391-0.391,0.391-1.023,0-1.414S18.098,2.902,17.707,3.293z" />
                        </svg>
                        Submit
                        </button>

                 </div>



            </div>
        </main>
 </div>
 </x-app-layout>
