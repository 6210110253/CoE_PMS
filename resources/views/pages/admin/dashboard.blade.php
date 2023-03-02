<x-app-layout>
   <div>
        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">

            <div class="container mx-auto px-6 py-8">

                <div class="flex justify-center gap-4">
                        <a href="" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2">

                                    โปรเจกต์ปีนี้
                        </a>

                        <a href="{{ route('admin.old.project') }}" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2">

                                    โปรเจกต์ในอดีต
                        </a>
                        <a class='relative bg-blue-700 hover:bg-blue-800 text-white p-6 rounded text-sm font-bold overflow-visible'>

                                จำนวนนักศึกษาที่ส่งรายงานความก้าวหน้า
                                <div class="absolute top-0 right-0 -mt-4 -mr-4 px-4 py-1 bg-green-500 rounded-full">2000</div>
                        </a>

                        <a class='relative bg-blue-700 hover:bg-blue-800 text-white p-6 rounded text-sm font-bold overflow-visible'>

                                จำนวนนักศึกษาที่ไม่ส่งรายงานความก้าวหน้า
                                <div class="absolute top-0 right-0 -mt-4 -mr-4 px-4 py-1 bg-red-500 rounded-full">2000</div>
                        </a>
                    </div>
            </div>
        </main>
    </div>
</div>
</x-app-layout>

