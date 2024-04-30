<li class="mb-1 group" id="show_model" data-model="model">
    <a href="#"
        class="flex font-semibold items-center py-2 px-4 text-gray-900 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100">
        <i class="ri-home-2-line mr-3 text-lg"></i>
        <span class="text-sm">+ Create Board</span>
    </a>
</li>


<div id="model" class="fixed top-0 left-0 w-full h-screen hidden bg-gray-700/45">
    <form id="createBoard" class="bg-white max-w-md mx-auto mt-20 p-4 rounded-md">
        @csrf
        <div class="flex items-center justify-between">
            <h1 class="text-xl font-bold ">Add New Board</h1>
            <button id="hide_model">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        <div class="my-3">
            <label for="" class="text-gray-400 font-normal text-base mb-2">Board Name</label>
            <input type="text" name="board_name" id="board_name" placeholder="e.g Web development"
                class="my-2 w-full py-2 px-3 text-base outline-none border rounded-md">
        </div>
        <div class="my-3">
            <div>
                <label for="" class="text-gray-400 font-normal text-base mb-2">Board Columns</label>
                {{-- <div class="flex items-center space-x-3">
                    <input type="text" name="" id="" value="Doing" placeholder="e.g Todo"
                        class="my-2 w-full py-2 px-3 text-base outline-none border rounded-md">
                    <button class="removeBtn">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div> --}}
            </div>

            <div id="more_columns"></div>
        </div>
        <div>
            <button id="addColumnBtn" type="button"
                class="w-full py-2 text-center bg-gray-200 rounded-full font-semibold text-blue-600">+ Add New
                Column</button>
            <button type="submit"
                class="w-full py-2 text-center bg-[#635fc7] rounded-full font-semibold text-white my-4">Create New
                Board</button>
        </div>
    </form>
</div>
