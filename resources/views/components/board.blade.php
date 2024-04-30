@foreach ($boards as $board)
    <li class="mb-1 group">
        <a href="{{ route('board.show', ['id' => $board->id, 'slug' => \Illuminate\Support\Str::slug($board->board_name)]) }}"
            class="flex font-semibold items-center py-2 px-4 text-gray-900 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100">
            <i class="ri-home-2-line mr-3 text-lg"></i>
            <span class="text-sm">{{ $board->board_name }}</span>
        </a>
    </li>
@endforeach
