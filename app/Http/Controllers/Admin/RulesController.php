<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class RulesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_title = 'Rules';
        $page_description = 'This is datatables test page';
        $rules = Rule::get();
        return view('admins.rules.index', [
            'rules' => $rules,
            'page_title' => $page_title,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Gate::authorize('rules.create');

        return view('admins.rules.create', [
            'rule' => new Rule(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Gate::authorize('rules.create');
        $request->validate([
            'name' => 'required',
            'abilities' => 'required|array',
        ]);

        $rule = Rule::create($request->all());
        $success = $request->session()->flash('sucess', 'rules (' . $rule->name . ') added successfully');
        return redirect()->route('rules.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Gate::authorize('rules.update');
        $rule = Rule::findOrfail($id);
        return view('admins.rules.edit', ['rule' => $rule]);
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

        $request->validate([
            'name' => 'required',
            'abilities' => 'required|array',
        ]);
        $rule = Rule::findorfail($id);
        $rule->update($request->all());

        return redirect()->route('rules.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Gate::authorize('rules.delete');
        $rule = Rule::findorfail($id);
        $rule->delete();
        $success = session()->flash('success', 'rules Deleted successfully');
        return redirect()->route('rules.index');
    }
}
