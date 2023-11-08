<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\rc;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class AddArticles extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::where('id',Auth::user()->id)->get();

return redirect()->route("dashboard", compact("articles"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('addarticle');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    { 
        $currentDateTime = Carbon::now();
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();

            // Define the directory where you want to save the image file.
            $directory = 'upload/image'; 

            // Save the image to the specified directory.
            $image->move($directory, $imageName);

            Article::create([
                'title' => $request->input('title'),
                'description' => $request->input('description'),
                'image' => $directory . '/' . $imageName,
                // Store the full path to the image in the database.
                'current_date_time' => $currentDateTime,
                'user_id' => $request->input('user_id'),
            ]);
          

            return redirect()->route('dashboard')->with('success', 'تم اضافه المقال بنجاح');
        } else {
            return redirect()->back()->with('error', 'Image upload failed');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
       $article=Article::find($id);
       return view('editarticle',compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        

        // Get the current user
        $user = Auth::user();

        // Find the article by its ID
        $article = Article::find($id);

        if (!$article) {
            return redirect()->route('dashboard')->with('error', 'المقال غير موجود.');
        }

        // Update the article attributes
        $article->title = $request->input('title');
        $article->description = $request->input('description');

        // Check if a new image file was uploaded and update it
        if ($request->hasFile('image')) {
            // You can add logic to handle image upload here, for example, storing it in the public directory.
            $imagePath = $request->file('image')->store('public/images');
            $article->image = $imagePath;
        }

        // Save the changes to the database
        $article->save();

        return redirect()->route('dashboard')->with('success', 'تم تحديث المقال بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
       $article=Article::find($id);
       $article->delete();
        return redirect()->route('dashboard')->with('success', 'تم حذف المقال بنجاح');

    }
}
