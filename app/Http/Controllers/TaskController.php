<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\TaskRepository;



class TaskController extends Controller
{
    protected $tasks;
    /**
     * Создание нового экземпляра контроллера.
     *
     * @return void
     */

    public function __construct(TaskRepository $tasks)
    {
        $this->middleware('auth');

        $this->tasks = $tasks;
    }
    /**
     * Отображение списка всех задач пользователя.
     *
     * @param  Request  $request
     * @return Response
     */
    /**
     * Показать список всех задач пользователя.
     *
     * @param  Request  $request
     * @return Response
     */
    public function index(Request $request)
    {
        return view('tasks.index', [
            'tasks' => $this->tasks->forUser($request->user()),
        ]);
    }
    /**
     * Создание новой задачи.
     *
     * @param  Request  $request
     * @return Response
     */


    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
		'mail' => 'required|max:255',
		'phone' => 'required|max:15',
		'idea' => 'required|max:1000',
        ]);

        $request->user()->tasks()->create([
            'name' => $request->name,
		'mail' => $request->mail,
		'phone' => $request->phone,
		'idea' => $request->idea,
        ]);


        return redirect('/tasks');
    }

    public function destroy(Request $request, Task $task)
    {
        $this->authorize('destroy', $task);

        $task->delete();

        return redirect('/tasks');
    }

    public function update(Request $request, Task $task)
    {
        $this->authorize('update', $task);

        $task->update();

        return redirect('/tasks');
    }
}
