<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Category;
use App\Models\Beverages;
class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $categories = Category::all();
        // $beverages = Beverages::where('publish', 1)->get();
        $beveragesSpecial = Beverages::where('check', 1)->get();
        $beverages = Beverages::with('category')->where('publish', 1)->get();
        return view("front.index", compact('categories', 'beveragesSpecial','beverages'  ));
    }
    
    public function admin(){
        $contacts = Contact::all();
        $category = Category::all();
        return view('admin.users.index', compact('contacts', 'category'));
    }
}
