<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function update_profile(Request $request) {
        // Hal yang bisa ditambahkan menurut opini saya
        // $ValidateData = $request->validate([
        //     'name' => 'required|string',
        //     'email' => 'required|email|',
        // ]);


        // Dapat melakukan sanitasi juga memfilter huruf khusu ; dsbnnya
        
        $user = Auth()->user();
        $user -> name = $request->input('name');
        $user -> email - $request->input('email');
        $user->save();
        
        return redirect('/home');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Validasi Input dari Form
        $validateData = $request->valiidate([
            'judul_postingan' => 'required',
            'kontent' => 'required',
        ]);

        // Menyimpan data ke database
        // Misalkan penggunaan model post berdasarkan soal
        $post = new Post();
        $post->title = $validateData['title'];
        $post->content = $validateData['content'];
        $post->save();

        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
        //
    }
}
