<div id="task_model" class="fixed top-0 left-0 w-full h-screen hidden bg-gray-700/45">
    <form id="createTask" class="bg-white max-w-md mx-auto mt-20 p-4 rounded-md">
        @csrf
        <div class="flex items-center justify-between">
            <h1 class="text-xl font-bold ">Add New Task</h1>
            <button type="button" id="hide_task_model">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        <input type="hidden" name="board_id" value="{{ request()->id }}">
        <div class="my-3">
            <label for="" class="text-gray-400 font-normal text-base mb-2">Title</label>
            <input type="text" name="title" id="title" placeholder="Title"
                class="my-2 w-full py-2 px-3 text-base outline-none border rounded-md">
        </div>
        <div class="my-3">
            <label for="" class="text-gray-400 font-normal text-base mb-2">Description</label>
            <input type="text" name="description" id="description" placeholder="Description"
                class="my-2 w-full py-2 px-3 text-base outline-none border rounded-md">
        </div>
        <div class="my-3">
            <label for="" class="text-gray-400 font-normal text-base mb-2">Dead Line</label>
            <input type="date" name="deadline" id="deadline" placeholder=""
                class="my-2 w-full py-2 px-3 text-base outline-none border rounded-md">
        </div>
        <div class="my-3">
            <label for="" class="text-gray-400 font-normal text-base mb-2">Mood</label>
            <select name="mood" id=""
                class="my-2 w-full py-2 px-3 text-base outline-none border rounded-md">
                <option value="1">Low priority</option>
                <option value="2">Medium priority</option>
                <option value="3">Heigh priority</option>
            </select>
        </div>
        <div>
            <button type="submit"
                class="w-full py-2 text-center bg-[#635fc7] rounded-full font-semibold text-white my-4">Create New
                Task</button>
        </div>
    </form>
</div>
