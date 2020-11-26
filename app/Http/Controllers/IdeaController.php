<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\IdeaRepository;
use Resources;



class IdeaController extends Controller
{
    protected $ideas;

    /**
     * �������� ������ ���������� �����������.
     *
     * @return void
     */

    public function __construct(IdeaRepository $ideas)
    {
        $this->ideas = $ideas;
    }
    /**
     * ����������� ������ ���� ����� ������������.
     *
     * @param  Request  $request
     * @return Response
     */
    /**
     * �������� ������ ���� ����� ������������.
     *
     * @param  Request  $request
     * @return Response
     */

    public function UpdateStatus($id, Request $request)
    {
        App\Idea::find($id)->update(['statuses' => 'Public']);
        return redirect('/ideas');
    }


    public function index(Request $request)
    {
        return view('ideas.index', [
            'ideas' => $this->ideas->forUser($request->user()),
        ]);
    }

    public function welcome(Request $request)
    {
        return view('ideas.welcome', [
            'ideas' => $this->ideas->forQuest($request->status()),
        ]);
    }
    /**
     * �������� ����� ������.
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



    public function destroy(Request $request, Idea $idea)
    {
        $this->authorize('destroy', $idea);

        $idea->delete();

        return redirect('/ideas');
    }

}
