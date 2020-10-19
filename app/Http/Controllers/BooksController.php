<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Books;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('books.index', ["books"=>Books::get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("books.add");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Books::create([
            "title" => $request->input('title'),
            "description" => $request->input('description'),
            "author_name" => $request->input('author_name'),
            "genre_id" => $request->input('genre_id'),
            "picture" => $request->input('picture'),
        ]);
        return redirect()->route('books');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('books.show', ["books"=>Books::get()]);
    }
    public function filter($id)
    {
        $books = Books::where("genre_id", $id)->get();
        return view('books.filter', ["books"=>$books]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Books::where("id", $id)->firstOrFail();
        return view("books.edit", ["book"=> $book]);
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
        
        Books::where('id', $request->input("id"))
                ->update(['title' => $request->input('title'),
                         'description'=>$request->input('description'),
                         'authro_name'=>$request->input('author_name'),
                         'genre_id'=>$request->input('genre_id'),
                         'picture'=>$request->input('picture'),
                         ]
                        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Books::where("id", $request->input('id'))->delete();
        return redirect()->back();
    }
}
