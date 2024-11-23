<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::with('category')->limit(6)->get();
        $data = [
            'previewedBook' => $books->random(),
            'books' => $books,
        ];
        return view('index', $data);
    }
}
