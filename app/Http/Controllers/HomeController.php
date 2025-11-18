<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $perPage = $request->query('per_page', 12);

        $query = Product::notBlocked()->with('variants')->latest();

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where('name', 'like', "%$search%")
                ->orWhere('brand', 'like', "%$search%");
        }

        $products = $query->paginate($perPage)->withQueryString();

        return view('home.index', compact('products'));
    }
}
