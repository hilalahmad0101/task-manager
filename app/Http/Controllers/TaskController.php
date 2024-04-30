<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TaskController extends Controller
{
    public function createTask(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'title' => 'required',
                'description' => 'required',
                'board_id'=>'required',
                'deadline' => 'required',
                'mood' => 'required',
            ]);
            if ($validator->fails()) {
                return response()->json(['success' => false, 'message' => $validator->errors()->all()]);
            } else {
                $task = Task::create([
                    'board_id'=>$request->board_id,
                    'title' => $request->title,
                    'description' => $request->description,
                    'deadline' => $request->deadline,
                    'mood' => $request->mood,
                ]);
                return response()->json(['success' => true, 'message' => ['task create successfully']]);
            }
        } catch (\Throwable $th) {
            return response()->json(['success' => false, 'message' => [$th->getMessage()]]);
        }
    }
}
