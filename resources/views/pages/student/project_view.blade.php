<x-app-layout>
   <div>
        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
            <div class="container mx-auto px-6 py-8">
<h2>รายการโปรเจกต์ที่จอง/เสนอ</h2>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    No
                </th>
                <th scope="col" class="px-6 py-3">
                    Topic
                </th>
                <th scope="col" class="px-6 py-3">
                    teacher
                </th>
                <th scope="col" class="px-6 py-3">
                    detail
                </th>
                <th scope="col" class="px-6 py-3">
                    Status
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>

            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    **********
                </th>
                <td class="px-6 py-4">
                    ********
                </td>
                <td class="px-6 py-4">
                   ***********
                </td>
                <td class="px-6 py-4">
                    <a href="{{ route('student.project.detail')}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">view more</a>
                </td>
                <td class="px-6 py-4">
                   ***********
                </td>

                <td class="px-6 py-4">
                    <a href="" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Remove</a>
                </td>


            </tr>




            </tbody>
        </table>
    </div>
<br>
<h2>รายการโปรเจกต์ของอาจารย์ทั้งหมด</h2>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    No.
                </th>
                <th scope="col" class="px-6 py-3">
                    Topic
                </th>
                <th scope="col" class="px-6 py-3">
                    teacher
                </th>
                <th scope="col" class="px-6 py-3">
                    detail
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>

            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    **********
                </th>
                <td class="px-6 py-4">
                    ********
                </td>
                <td class="px-6 py-4">
                   ***********
                </td>
                <td class="px-6 py-4">
                    <a href="{{ route('student.project.detail')}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">view more</a>
                </td>
                <td class="px-6 py-4">
                    <a href="" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Reservation</a>
                </td>



            </tr>




            </tbody>
        </table>
    </div>






            </div>
        </main>
    </div>

</x-app-layout>
