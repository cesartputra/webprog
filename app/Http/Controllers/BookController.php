<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Book;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('book.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        return view('book.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validation data
        // dd($request->all());
        request()->validate([
            'title' => 'required|min:10|unique:books',
            'category' => 'required|numeric|exists:categories,id',
            'description' => 'required',
            'picture' => 'required|image',
        ]);

        //move file upload
        $picture_name = uniqid() . $request->picture->getClientOriginalName();
        request()->picture->move(public_path('images'), $picture_name);

        //insert data
        $book = new Book();
        $book->title = $request->title;
        $book->category_id = $request->category;
        $book->description = $request->description;
        $book->price = rand(10000, 100000);
        $book->picture = $picture_name;
        $book->save();

        return back()->with('success', 'Succesfully insert a new book');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('book.detail');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('book.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //dapat data dulu
        $book = Book::find($request->id);

        //isi datanya
        $book = new Book();
        $book->title = $request->title;
        $book->category_id = $request->category;
        $book->description = $request->description;
        $book->price = rand(10000, 100000);
        $book->picture = "picture";

        //save()
        $book->save();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //dapatin object
        $book = Book::find($request->id);

        //delete
        $book->delete();

        return back();
    }
}
