<?php
namespace App\Http\Controllers;
use App\Models\Book;
use App\Models\Category;
use App\Models\Detail;
use Illuminate\Http\Request;

class BookstoreController extends Controller
{
    public function viewHome(){
        $books = Book::paginate(5);
        return view('home', ['books'=>$books]);
    }

    public function viewCategory($id){
        $books = Book::where('category_id', $id)->get();
        $category = Category::where('id', $id)->first();
        return view('category', ['books'=>$books, 'category'=>$category]);
    }

    public function viewDetail($id){
        $details = Detail::where('book_id', $id)->first();
        return view('detail', ['details'=>$details]);
    }

    public function viewContact(){
        return view('contact');
    }
}
