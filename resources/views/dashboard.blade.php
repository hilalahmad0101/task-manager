@extends('layouts.layouts')
@section('title')
    Dashboard
@endsection
@section('content')
    <x-navbar value="{{ $board->board_name }}" />

    @php
        $columns = json_decode($board->columns);
    @endphp
    <div class="p-6 w-full">
        <div class="flex  gap-4 ">
            @foreach ($columns as $column)
                <div class="w-[300px] ">
                    <h1 class="font-medium text-base my-4 uppercase tracking-[8px]">{{ $column }} ( <span>4</span> )
                    </h1>
                    <div class="bg-white rounded-md border border-gray-100 p-6 shadow-md shadow-black/5">
                        <div class="flex justify-between mb-6">
                            <div>
                                <div class="flex items-center mb-1">
                                    <div class="text-2xl font-semibold">2</div>
                                </div>
                                <div class="text-sm font-medium text-gray-400">Users</div>
                            </div>  
                            <div class="dropdown">
                                <button type="button" class="dropdown-toggle text-gray-400 hover:text-gray-600"><i
                                        class="ri-more-fill"></i></button>
                                <ul
                                    class="dropdown-menu shadow-md shadow-black/5 z-30 hidden py-1.5 rounded-md bg-white border border-gray-100 w-full max-w-[140px]">
                                    <li>
                                        <a href="#"
                                            class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Profile</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Settings</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Logout</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <a href="/gebruikers" class="text-[#f84525] font-medium text-sm hover:text-red-800">View</a>

                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
