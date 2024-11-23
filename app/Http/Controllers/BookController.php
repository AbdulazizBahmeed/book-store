<?php

namespace App\Http\Controllers;

use App\DataTables\BooksDataTable;
use App\Http\Requests\Book\StoreBookRequest;
use App\Http\Requests\Book\UpdateBookRequest;
use App\Models\Book;
use App\Models\Category;
use App\Services\FileUploadService;

class BookController extends Controller
{

    public function __construct(
        private FileUploadService $fileUploadService
    ) {}

    /**
     * Display a listing of the resource.
     */
    public function index(BooksDataTable $dataTable)
    {
        return $dataTable->render('dashboard.books.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'categories' => Category::all(),
        ];
        return view('dashboard.books.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookRequest $request)
    {
        $data = $request->safe()->all();
        if (!is_null($data['cover_image'])) {
            $data['cover_image'] = $this->fileUploadService
                ->uploadFile($data['cover_image'], Book::$storageFolderName);
        } else {
            unset($data['cover_image']);
        }
        $data['reviews'] = rand(50, 999);
        $data['rating'] = mt_rand(1 * 100, 5 * 100) / 100;
        $book = Book::create($data);
        return redirect()->route('dashboard.books.index')
            ->with('success', 'book ' . $book->name . ' create successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        $data = [
            'categories' => Category::all(),
            'book' => $book,
        ];
        return view('dashboard.books.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookRequest $request, Book $book)
    {
        $data = $request->safe()->all();
        if (!is_null($data['cover_image'])) {
            $data['cover_image'] = $this->fileUploadService
                ->uploadFile($data['cover_image'], Book::$storageFolderName);
        } else {
            unset($data['cover_image']);
        }
        $data['reviews'] = rand(50, 999);
        $data['rating'] = mt_rand(1 * 100, 5 * 100) / 100;
        $book->update($data);
        return redirect()->route('dashboard.books.index')
            ->with('success', 'book ' . $book->name . ' updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('dashboard.books.index')
            ->with('success', 'book ' . $book->name . ' deleted successfully');
    }
}
