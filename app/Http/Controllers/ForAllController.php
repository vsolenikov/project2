<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Idea;
use App\Repositories\IdeaRepository;

class ForAllController extends Controller
{
    protected $ideas;

    public function index(Request $request)
    {
        return view('ideas.welcome', [
            'ideas' => $this->ideas->forUser($request->user()),
        ]);
    }

    public function welcome(Request $request)
    {
        return view('ideas.welcome', [
            'ideas' => $this->ideas->forAll($request->status()),
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

        $request->user()->ideas()->create([
            'name' => $request->name,
            'mail' => $request->mail,
            'phone' => $request->phone,
            'idea' => $request->idea,
        ]);
        return redirect('/ideas');
    }
    public function store1(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'mail' => 'required|max:255',
            'phone' => 'required|max:15',
            'idea' => 'required|max:1000',
        ]);

        $request->all([
            'name' => $request->name,
            'mail' => $request->mail,
            'phone' => $request->phone,
            'idea' => $request->idea,
        ]);
        return redirect('/ideas');
    }


    public function destroy(Request $request, Idea $idea)
    {
        $this->authorize('destroy', $idea);

        $idea->delete();

        return redirect('/ideas');
    }

    public function update(Request $request, Idea $idea)
    {
        $this->authorize('update', $idea);

        $idea->update();

        return redirect('/ideas');
    }
}
