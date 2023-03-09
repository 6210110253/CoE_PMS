<x-app-layout>
    <div>
         <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
            <div class="container mx-auto px-6 py-2">
              <br>

            <div class="bg-white shadow-md rounded my-6">
                <table class="text-left w-full border-collapse">
                  <thead>
                    <tr>
                      <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">Semeter</th>
                      <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">Title</th>
                      <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">Detail</th>
                      <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light ">Start</th>
                      <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light ">Finish</th>
                      <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light ">Status</th>
                      <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">Action</th>
                    </tr>
                  </thead>
                  <tbody>


                      @foreach($announcements as $announcement )
                      <tr class="hover:bg-grey-lighter">
                        <td class="py-4 px-6 border-b border-grey-light">{{ $announcement->semester->name}}</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{ $announcement->title }}</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{ $announcement->detail }}</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{ dateThai($announcement->start) }}</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{ dateThai($announcement->finish) }}</td>

                        <td class="py-4 px-6 border-b border-grey-light">
                            @if($announcement->status == 'draft')
                            <span class="bg-green-200 text-green-600 py-1 px-3 mt-2 rounded-full text-xs"> {{ $announcement->status }} </span>
                            @else
                            <span class="bg-purple-200 text-purple-600 py-1 px-3 mt-2 rounded-full text-xs"> {{ $announcement->status }} </span>
                            @endif

                        </td>

                        <td class="py-4 px-6">

                          <a href="{{ route('admin.announcement.edit', $announcement) }}" class="underline text-grey-lighter font-bold py-1 px-3 rounded text-xs bg-green hover:bg-green-dark text-blue-400">Edit</a>

                          <button class="underline text-grey-lighter font-bold py-1 px-3 rounded text-xs bg-green hover:bg-green-dark text-red-400" id="delete"> Delete</button>

                        </td>
                      </tr>
                    @endforeach


                  </tbody>
                </table>
              </div>
            </div>





        </main>
 </div>
 </x-app-layout>
