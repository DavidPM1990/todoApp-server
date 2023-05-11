<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

/**
 * Class TaskController
 * @package App\Http\Controllers
 */
class TaskController extends Controller
{
    public function fetchAll()
    {
        $tasks = Task::all();

        return json_encode($tasks);
    }

    public function save(Request $request)
    {
        request()->validate(Task::$rules);

        $task = Task::create($request->all());

        return json_encode($task);
    }

    public function fetchById($id)
    {
        $task = Task::find($id);

        return json_encode($task);
    }

    public function update($id, Request $request)
    {

        $task = Task::find($id);

        if ($task === null) {
            return response(
                "Task {$request->id} not found",
                Response::HTTP_NOT_FOUND
            );
        }

        return json_encode($task);
    }

    public function delete($id)
    {
        $task = Task::find($id);

        $task->delete();

        return json_encode($task);
    }
}
