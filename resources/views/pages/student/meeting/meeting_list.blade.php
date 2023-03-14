<x-app-layout>
    <div>
         <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
             <div class="container mx-auto px-6 py-8">
                 <div class="flex items-center justify-between">
                             <span class="text-3xl font-bold text-gray-900 dark:text-white"></span>
                             <a href="{{ route('student.meeting') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Back</a>
                 </div>
                 <br>
@foreach($meetings as $meeting)
    <div class="w-full  bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <div class="px-5 pb-5">
                <br>

            <a >
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $meeting->title }}</h5>
                <p class="font-normal text-gray-700 dark:text-gray-400">รายละเอียด : {{ $meeting->detail }}</p>
                <p class="font-normal text-gray-700 dark:text-gray-400">ช่วงเวลาที่เข้าพบ <span>{{ $meeting->start_date}} - {{ $meeting->end_date}}</span></p>
                <p class="font-normal text-gray-700 dark:text-gray-400">สถานะ {{ $meeting->status}}</p>
            </a>
    
            <div class="flex justify-center gap-4">
                <div>
                    <span class="text-3xl font-bold text-gray-900 dark:text-white"></span>
                    <a href="{{ route('student.meeting.edit' , $meeting->id) }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Edit</a>
                </div>
                <div>
                    <span class="text-3xl font-bold text-gray-900 dark:text-white"></span>
                    <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Cancel</a>
                </div>
            </div>
            
        </div> 
    </div>
    <br>
 @endforeach
 
 
 
             </div>
         </main>
     </div>
 </div>
 </x-app-layout>
 