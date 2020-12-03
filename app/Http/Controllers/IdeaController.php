<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Resources;
use App\Idea;
use App\User;
use App\Http\Controllers;


class IdeaController extends Controller
{
    protected $ideas;

    /**
     * �������� ������ ���������� �����������.
     *
     * @return void
     */

    /*public function __construct(IdeaRepository $ideas)
    {
        $this->ideas = $ideas;
    }*/
    /**
     * ����������� ������ ���� ����� ������������.
     *
     * @param Request $request
     * @return Response
     */
    /**
     * �������� ������ ���� ����� ������������.
     *
     * @param Request $request
     * @return Response
     */

    public function Update($id, Request $request)
    {
        Idea::find($id)->update(['statuses' => 'Public']);
        return redirect('/ideas');
    }

    /**
     * Get all of the tasks for a given user.
     * @param User $user
     * @return Collection
     */

    public function index2(Idea $user_id)
    {
        $ideas = Idea::where('statuses', '=', 'Public')->orderBy('created_at', 'desc')->get();
        return view('welcome', [
            'ideas' => $ideas
        ]);
    }

    public function index(Idea $user_id)
    {

        $user_id = Auth::id();
        //dd($user_id);
        if ($user_id == '1') {
            $ideas = Idea::all();

            // $ideas=Idea::all();
            return view('ideas.index', [
                'ideas' => $ideas,
                'user_id' => $user_id
            ]);
        } else {
            $ideas = Idea::where('user_id', '=', $user_id)->orderBy('created_at', 'desc')->get();

            // $ideas=Idea::all();
            return view('ideas.index', [
                'ideas' => $ideas,
                'user_id' => $user_id
            ]);
        }

    }

    public function welcome(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'mail' => 'required|max:255',
            'phone' => 'required|max:15',
            'idea' => 'required|max:1000',
        ]);

//        $request->user()->ideas()->create([
//            'name' => $request->name,
//            'mail' => $request->mail,
//            'phone' => $request->phone,
//            'idea' => $request->idea,
//        ]);
        return redirect('/ideas');
    }

    /**
     * �������� ����� ������.
     *
     * @param Request $request
     * @return Response
     */


    public function store(Request $request)
    {
        $this->validate($request, [
            'user_id' => 'max:255',
            'name' => 'required|max:255',
            'mail' => 'required|max:255',
            'phone' => 'required|max:15',
            'idea' => 'required|max:1000',
        ]);
        Idea::create([
            'user_id' => $request->user_id,
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
