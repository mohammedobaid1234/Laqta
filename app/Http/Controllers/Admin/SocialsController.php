<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Social;
use Illuminate\Http\Request;

class SocialsController extends Controller
{
    public function index()
    {
        $socials = Social::all();
        return view('admins.socials.index', [
            'page_title' => 'List of All Socials',
            'socials' => $socials
        ]);
    }
    public function create()
    {
        $social = new Social();
        return view('admins.socials.create', [
            'social' => $social
        ]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:15',
            'link' => 'required|string'
        ]);

        $social = Social::create($request->all());
        return redirect()->route('socials.index');
    }
    public function edit($id)
    {
        $social = Social::findOrFail($id);
        return view('admins.socials.edit', [
            'social' => $social
        ]);
    }
    public function update(Request $request, $id)
    {
        $social = Social::findOrFail($id);
        $request->validate([
            'name' => 'required|string',
            'link' => 'required|string'
        ]);
        $social->update($request->all());
        return redirect()->route('socials.index');
    }
    public function destroy($id)
    {
        $socials = Social::findOrFail($id);
        $socials->delete();
        return redirect()->route('socials.index');
    }
}