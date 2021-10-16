<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('admins.services.index', [
            'page_title' => 'List of All Services',
            'services' => $services
        ]);
        return $services;
    }
    public function create()
    {
        $service = new Service();
        return view('admins.services.create', [
            'service' => $service
        ]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:15',
            'description' => 'required|string'
        ]);

        $service = Service::create($request->all());
        return redirect()->route('services.index');
    }
    public function edit($id)
    {
        $service = Service::findOrFail($id);
        return view('admins.services.edit', [
            'service' => $service
        ]);
    }
    public function update(Request $request, $id)
    {
        $service = Service::findOrFail($id);
        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string'
        ]);
        $service->update($request->all());
        return redirect()->route('services.index');
    }
    public function destroy($id)
    {
        $service = Service::findOrFail($id);
        $service->delete();
        return redirect()->route('services.index');
    }
}