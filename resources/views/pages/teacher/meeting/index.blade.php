{{-- 
<x-app-layout>
    <div>
         <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
             <div class="container mx-auto px-6 py-8">
                <div class="flex justify-end gap-4">
                    <div class="flex items-center justify-between">
                                <span class="text-3xl font-bold text-gray-900 dark:text-white"></span>
                                <a href="{{ route('student.meeting') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Back</a>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-3xl font-bold text-gray-900 dark:text-white"></span>
                        <a href="{{ route('student.meeting.list') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Meeting List</a>
                    </div>
                </div>
 
                <div class="w-full  bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                </div>
 
 
 
 
             </div>
         </main>
     </div>
 </div>
 </x-app-layout>
  --}}
  <x-app-layout>
    <head>
        <title>How to Use Fullcalendar in Laravel 8</title>
        
        <meta name="csrf-token" content="{{ csrf_token() }}" />
    
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>
    </head>
    <body>
    <div class="container mx-auto px-6 py-8">  
    
        <div class="flex justify-end gap-4">
            <div class="flex items-center justify-between">
                <span class="text-3xl font-bold text-gray-900 dark:text-white"></span>
                <a href="{{ route('teacher.meeting.list') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Meeting List</a>
            </div>
        </div>
        <br>
        
        <div class="w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
           
            
            <div class="container mx-auto px-6 py-8"   id="calendar"></div>
        </div>
    </div>
       
    <script>
    
    $(document).ready(function () {


    var calendar = $('#calendar').fullCalendar({
        editable:true,
        header:{
            left:'prev,next today',
            center:'title',
            right:'month,agendaWeek,agendaDay'
        },
        events:[
                
                @foreach($meeting_aps as $meeting_ap)
                {
                    title : '{{ $meeting_ap->meeting->title}}',
                    start : '{{ $meeting_ap->meeting->start_date }}',
                    end : '{{ $meeting_ap->meeting->end_date }}',
                },
                @endforeach
            ]
        });
    });
      
    </script>
</body>
</html>
</x-app-layout>