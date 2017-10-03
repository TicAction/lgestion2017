<?php

namespace App\Http\Controllers;

use App\Kid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class KidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kids = Kid::all();
        $req = Kid::selectRaw ("monthname(anniversary) mois, count(*) tata")
                            ->groupBy('anniversary')
                            ->orderByRaw('min(created_at) desc')->get()->toArray();


        return view('kids.index',compact('kids','req'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kid = new Kid();
        $kid->load('users');
        return view('kids.create',compact('kid'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $owner = Auth::user()->id;
        $kids = new Kid();

        $kids->firstname = ucfirst($request->get('firstname'));
        $kids->lastname = ucfirst($request->get('lastname'));
        $kids->anniversary = $request->get('anniversary');
        $kids->save();
        $kids->users()->attach($owner);
        Session::flash('success',"L'élève a bien été sauvegarder");
        return redirect('eleve');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kid = Kid::findOrFail($id);

        return view('kids.show',compact('kid'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kid = Kid::findOrFail($id);


        return view('kids.edit',compact('kid'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $owner = Auth::user()->id;
       $kid = Kid::findOrFail($id);

        $kid->firstname = $request->get('firstname');
        $kid->lastname = $request->get('lastname');
        $kid->anniversary = $request->get('anniversary');
        $kid->save();
        $kid->users()->sync($owner);
        Session::flash('success',"L'élève a bien été modifier");
        return redirect('eleve');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $owner = Auth::user();
        $kid = Kid::findOrFail($id);
        $kid->destroy($id);
        $kid->users()->detach($owner);

        Session::flash('alert',"L'élève a bien été effacer");

        return redirect('eleve');
    }
}
