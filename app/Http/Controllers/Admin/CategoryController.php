<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_title = 'Categories';
        $page_description = 'This is databases test page';
        $categories = Category::orderBy('created_at', 'ASC')
            ->orderBy('name', 'DESC')
            ->latest()
            ->get();
        return view('admins.categories.index', [
            'page_title' => $page_title,
            'page_description' => $page_description,
            'categories' => $categories,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = 'Create New Category';
        $page_description = 'This is databases test page';
        $category = new Category();
        return view('admins.categories.create', [
            'page_title' => $page_title,
            'page_description' => $page_description,
            'category' => $category
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
        // Gate::authorize('categories.create');

        $request->validate(Category::validateRule());
        $input = $request->all();
        if ($request->hasFile('image')) {
            $image_path = $request->file('image')->store('uploads', 'public');
            $input['image'] = $image_path;
        }
        $categories = Category::create($input);
        return redirect()->route('categories.index');
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
        //Gate::authorize('categories.update');
        $page_title = 'Edit a Category';
        $category = Category::findOrFail($id);
        $categories = Category::where('status', '=', 'Active')->get();

        return view('admins.categories.edit', [
            'categories' => $categories,
            'category' => $category,
            'page_title' => $page_title,
        ]);
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

        //Gate::authorize('categories.update');
        $request->validate(Category::validateRule($id));
        $category = Category::find($id);

        #Method 4 : Mass assignment
        $request->merge([
            'slug' => Str::slug($request->get('name')) . '-2',
        ]);

        $input = $request->all();
        if ($request->hasFile('image')) {
            $image_path = $request->file('image')->store('uploads', 'public');
            $input['image'] = $image_path;
        }
        $category->update($input);

        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::findorFail($id);
        $category->delete();
        return redirect()->back();
    }
}
