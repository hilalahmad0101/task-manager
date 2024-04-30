<?php

namespace App\Http\Controllers;

use App\Models\Board;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BoardController extends Controller
{
    public function getAllBoard()
    {
        $boards = Board::all();
        $output = view('components.board', compact('boards'))->render();
        return response()->json(['success' => true, 'boards' => $output]);
    }

    public function createBoard(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'board_name' => 'required|unique:boards,board_name'
            ]);
            if ($validator->fails()) {
                return response()->json(['success' => false, 'message' => $validator->errors()->all()]);
            } else {
                Board::create([
                    'board_name' => $request->board_name,
                    'columns' => json_encode($request->columns)
                ]);

                return response()->json(['success' => true, 'message' => ['Board create successfully']]);
            }
        } catch (\Throwable $th) {
            return response()->json(['success' => false, 'message' => [$th->getMessage()]]);
        }
    }

    public function showBoard($id, $slug)
    {
        $new_slug = str_replace('-', ' ', $slug);
        $board = Board::whereIdAndBoardName($id, $new_slug)->first();
        if ($board) {
            return view('dashboard', compact('board'));
        } else {
            return redirect()->back()->with('error', 'board not found');
        }
    }

    public function editBoard(Request $request)
    {
        $new_slug = str_replace('-', ' ', $request->slug);
        $board = Board::whereIdAndBoardName($request->id, $new_slug)->first();
        if ($board) {
            $output = view('components.edit-board-content', compact('board'))->render();
            return response()->json(['success' => true, 'board' => $output]);
        } else {
            return redirect()->back()->with('error', 'board not found');
        }
    }
}
