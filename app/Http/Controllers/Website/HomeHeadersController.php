<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Home\HomeHeader;
use Illuminate\Http\Request;

class HomeHeadersController extends Controller
{
    public function edit()
    {
        $header = HomeHeader::first();
        
        return view('website.home.header.edit', [
            'header' => $header
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
        // $request->validate(HomeHeader::validateRule($id));
        $request->validate([
            'title' => 'required',
            'paragraph1' => 'required',
            'paragraph2' => 'required',
            'slider' => 'required',
            // 'video_url1' => 'nullable|mimetypes:video',
            // 'video_url2' => 'nullable|mimetypes:video'
        ]);
        
        $header = HomeHeader::find($id);
        // return $header;
        #Method 4 : Mass assignment
        // $request->merge([
        //     'slug' => Str::slug($request->get('name')) . '-2',
        // ]);
            // return $request;
        if ($request->hasFile('video_url1')) {
          
            if($header->video1 !== null ){

                unlink(public_path('uploads/' . $header->video1));
            }
            $uploadedFile = $request->file('video_url1');
            $video_url = $uploadedFile->store('/', 'upload');
            $request->merge([
                'video1' => $video_url
            ]);
        }
        
        if ($request->hasFile('video_url2')) {
            if($header->video1 !== null ){

                unlink(public_path('uploads/' . $header->video2));
            }
            $uploadedFile = $request->file('video_url2');
            $video_url = $uploadedFile->store('/', 'upload');
            $request->merge([
                'video2' => $video_url
            ]);
        }
        if ($request->hasFile('profile_avatar')) {
            if($header->poster_image !== null ){

                unlink(public_path('uploads/' . $header->poster_image));
            }
            $uploadedFile = $request->file('profile_avatar');
            $poster_image = $uploadedFile->store('/', 'upload');
            $request->merge([
                'poster_image' => $poster_image
            ]);
        }
        // return $request;
        $header->update($request->all());

        return redirect()->route('index');
    }
}
