<x-app-layout>

    <div>
         <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">

             <div class="container mx-auto px-6 py-8">


            {{-- <div class="flex gap-4 mx-auto justify-center w-full p-4 text-center bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                    <!-- component -->
            <div class="bg-white-50 ">
			<h3 class="mb-2 font-semibold">Title: <span class="font-thin">Create Todo App</span></p>
				<div class="pt-2">
					<h3 class="font-semibold">Description:</p>
						<p class="font-thin mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa vitae,
							aliquid deserunt beatae nam est?</p>
				</div>
				<h3 class="border-t mb-2 pt-3 font-semibold">Name: <span class="font-thin">Joker Banny</span></p>
					<h3 class="border-t mb-2 pt-3 font-semibold">Email:
						<span class="font-thin">jokerbanny@gmail.com</span></p>
						<div class="flex justify-end space-x-2">
							<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-500 cursor-pointer" fill="none"
								viewBox="0 0 24 24" stroke="currentColor">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
									d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
									d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
							</svg>
							<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600 cursor-pointer"
								fill="none" viewBox="0 0 24 24" stroke="currentColor">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
									d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
							</svg>
							<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-500 cursor-pointer"
								fill="none" viewBox="0 0 24 24" stroke="currentColor">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
									d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
							</svg>
						</div>

            </div>
            </div> --}}

            <!-- component -->
            <div class="bg-white-50 h-screen ">
                <nav>
                    <div class="w-full bg-gradient-to-tr from-indigo-600 to-purple-600 py-4">
                        <h1 class="text-center text-indigo-100 text-xl font-bold">รายการโปรเจกต์เก่า ๆ </h1>
                    </div>
                </nav>
                <div class="px-10 mt-10">
                    <div class="bg-white rounded-md max-w-4xl mx-auto p-4 space-y-4 shadow-lg">
                        <h3 class="mb-2 font-semibold">Title: <span class="font-thin">Project Name</span></p>

                            <h3 class="border-t mb-2 pt-3 font-semibold">ผู้จัดทำ: <span class="font-thin">Joker Banny</span></p>
                                <h3 class="border-t mb-2 pt-3 font-semibold">อาจารย์ที่ปรึกษา:
                                    <span class="font-thin">ชื่ออาจารย์ที่ปรึกษา</span></p>
                                    <div class="flex justify-end space-x-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-600 cursor-pointer" width="16" height="16" viewBox="0 0 16 16">
                                            <g fill="currentColor"><path d="M5.523 12.424c.14-.082.293-.162.459-.238a7.878 7.878 0 0 1-.45.606c-.28.337-.498.516-.635.572a.266.266 0 0 1-.035.012a.282.282 0 0 1-.026-.044c-.056-.11-.054-.216.04-.36c.106-.165.319-.354.647-.548zm2.455-1.647c-.119.025-.237.05-.356.078a21.148 21.148 0 0 0 .5-1.05a12.045 12.045 0 0 0 .51.858c-.217.032-.436.07-.654.114zm2.525.939a3.881 3.881 0 0 1-.435-.41c.228.005.434.022.612.054c.317.057.466.147.518.209a.095.095 0 0 1 .026.064a.436.436 0 0 1-.06.2a.307.307 0 0 1-.094.124a.107.107 0 0 1-.069.015c-.09-.003-.258-.066-.498-.256zM8.278 6.97c-.04.244-.108.524-.2.829a4.86 4.86 0 0 1-.089-.346c-.076-.353-.087-.63-.046-.822c.038-.177.11-.248.196-.283a.517.517 0 0 1 .145-.04c.013.03.028.092.032.198c.005.122-.007.277-.038.465z"/>
                                            <path fill-rule="evenodd" d="M4 0h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zm5.5 1.5v2a1 1 0 0 0 1 1h2l-3-3zM4.165 13.668c.09.18.23.343.438.419c.207.075.412.04.58-.03c.318-.13.635-.436.926-.786c.333-.401.683-.927 1.021-1.51a11.651 11.651 0 0 1 1.997-.406c.3.383.61.713.91.95c.28.22.603.403.934.417a.856.856 0 0 0 .51-.138c.155-.101.27-.247.354-.416c.09-.181.145-.37.138-.563a.844.844 0 0 0-.2-.518c-.226-.27-.596-.4-.96-.465a5.76 5.76 0 0 0-1.335-.05a10.954 10.954 0 0 1-.98-1.686c.25-.66.437-1.284.52-1.794c.036-.218.055-.426.048-.614a1.238 1.238 0 0 0-.127-.538a.7.7 0 0 0-.477-.365c-.202-.043-.41 0-.601.077c-.377.15-.576.47-.651.823c-.073.34-.04.736.046 1.136c.088.406.238.848.43 1.295a19.697 19.697 0 0 1-1.062 2.227a7.662 7.662 0 0 0-1.482.645c-.37.22-.699.48-.897.787c-.21.326-.275.714-.08 1.103z"/></g></svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-600 cursor-pointer" width="15" height="15" viewBox="0 0 15 15">
                                            <path fill="currentColor" d="M3 8h.5a.5.5 0 0 0 0-1H3v1Z"/>
                                            <path fill="currentColor" fill-rule="evenodd" d="M1 1.5A1.5 1.5 0 0 1 2.5 0h8.207L14 3.293V13.5a1.5 1.5 0 0 1-1.5 1.5h-10A1.5 1.5 0 0 1 1 13.5v-12ZM2 6h1.5a1.5 1.5 0 1 1 0 3H3v2H2V6Zm8 0h3v1h-2v3h1V8.5h1V11h-3V6ZM7 8.618V11H6V6h1v.382l1 2V6h1v5H8v-.382l-1-2Z" clip-rule="evenodd"/></svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-orange-600 cursor-pointer" width="22" height="24" viewBox="0 0 22 24">
                                            <path fill="currentColor" d="M7.058 20.277q0-1.339-2.21-1.339q-2.116 0-2.116 1.393q0 1.353 2.303 1.353q2.022-.003 2.022-1.406zm-.79-10.112l.002-.083c0-.48-.15-.925-.406-1.29l.005.007a1.384 1.384 0 0 0-1.196-.549h.004q-1.661 0-1.661 1.942Q3.016 12 4.677 12q1.592.001 1.592-1.834zm3.6-4.339v2.706q-.48.16-1.058.294c.132.333.211.719.214 1.123v.002l.002.118a4.42 4.42 0 0 1-.986 2.79l.007-.008a4.287 4.287 0 0 1-2.615 1.503l-.025.003a1.562 1.562 0 0 0-.802.363l.002-.002a1.035 1.035 0 0 0-.26.781v-.004v.02c0 .266.116.505.301.669l.001.001c.217.19.476.337.762.425l.015.004q.475.154 1.051.294t1.152.342c.402.14.749.31 1.072.515l-.021-.012c.328.215.591.504.771.844l.006.012c.191.363.303.793.303 1.249l-.001.074v-.004q.003 4.073-4.855 4.073h-.046c-.6 0-1.185-.061-1.75-.177l.056.01a5.946 5.946 0 0 1-1.586-.564l.033.016a2.952 2.952 0 0 1-1.165-1.085l-.007-.013a3.19 3.19 0 0 1-.436-1.62l.001-.09v.004q0-2.21 2.438-3.014v-.054a1.843 1.843 0 0 1-.898-1.692v.005q0-1.46.844-1.835v-.054a2.955 2.955 0 0 1-1.592-1.436l-.008-.017a4.455 4.455 0 0 1-.64-2.212v-.005l-.001-.11a4.14 4.14 0 0 1 1.272-2.99l.001-.001a4.32 4.32 0 0 1 3.036-1.241l.117.002h-.006h.031c.866 0 1.678.234 2.376.642l-.022-.012a8.08 8.08 0 0 0 2.976-.651l-.053.02zm4.259 11.799h-2.971q.054-.602.054-1.794V7.675q0-1.259-.054-1.714h2.974q-.054.442-.054 1.661v8.21q0 1.192.054 1.794zm8.049-2.974v2.629a4.715 4.715 0 0 1-2.338.522h.008l-.085.001c-.486 0-.949-.099-1.37-.278l.023.009a2.54 2.54 0 0 1-.935-.667l-.002-.003a2.917 2.917 0 0 1-.524-1.024l-.005-.021a5.995 5.995 0 0 1-.246-1.206l-.002-.026q-.054-.59-.054-1.379V8.504h.026V8.45q-.094 0-.254-.014t-.24-.014a5.46 5.46 0 0 0-.823.085l.033-.005V5.958h1.286V4.94l.001-.111a7.29 7.29 0 0 0-.086-1.122l.005.041h3.04a18.336 18.336 0 0 0-.08 2.231v-.022h2.288v2.545q-.201 0-.582-.026t-.569-.026h-1.135v4.888q0 1.754 1.165 1.754h.036c.532 0 1.026-.165 1.432-.447l-.008.005zM14.464 1.969v.023c0 .517-.199.987-.524 1.339l.001-.001a1.659 1.659 0 0 1-1.263.583h-.024h.001h-.024c-.513 0-.973-.225-1.287-.581l-.002-.002a1.937 1.937 0 0 1-.536-1.341v-.042c0-.523.201-1 .53-1.356l-.001.001a1.7 1.7 0 0 1 1.288-.59h.033h-.002h.029c.508 0 .962.231 1.262.594l.002.003c.32.358.515.833.515 1.354v.02v-.001z"/></svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600 cursor-pointer" width="24" height="24" viewBox="0 0 24 24">
                                            <path fill="currentColor" d="M9 18h4q.425 0 .713-.288T14 17v-1l1.275.675q.25.125.488-.025t.237-.425v-2.45q0-.275-.238-.425t-.487-.025L14 14v-1q0-.425-.288-.712T13 12H9q-.425 0-.713.288T8 13v4q0 .425.288.713T9 18Zm-3 4q-.825 0-1.413-.588T4 20V4q0-.825.588-1.413T6 2h7.175q.4 0 .763.15t.637.425l4.85 4.85q.275.275.425.638t.15.762V20q0 .825-.588 1.413T18 22H6Zm8-13h4l-5-5v4q0 .425.288.713T14 9Z"/></svg>
                                    </div>
                    </div>
                </div>


            </div>
            </div>



         </main>
     </div>


 </x-app-layout>
