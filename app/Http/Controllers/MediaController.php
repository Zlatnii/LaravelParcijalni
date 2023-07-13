<?php

namespace App\Http\Controllers;

use App\Models\Media;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $media = Media::all();
        return view('media', compact('media'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $media = Media::create(request()->all());
        return $media;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate(
            [
                'title' => 'required',
                'description' => 'required',
                'type' => 'nullable',
                'year' => 'required|email|unique:users',
            ],
        );

        $media = new Media();
        $media->title = $request->input('title');
        $media->description = $request->input('description');
        $media->type = $request->input('type');
        $media->year = $request->input('year');        // Save user to database
        $media->save();
        // Redirect to the users page
        return redirect()->route('media')->with('status', 'User created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Media::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $media = Media::findOrFail($id);
        return view('media.edit', compact('media'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Media::destroy($id);
        return redirect()->route('media'); 
    }
}
