<?php

namespace App\Http\Controllers;

use App\Models\Loker;
use Illuminate\Http\Request;

class LokerController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->get('cari');
        $loker = Loker::query();
        if ($keyword) {
            $keyword = strtolower($keyword);
            $loker->where('title', 'LIKE', "%" . $keyword . "%");
        }
        $loker = $loker->paginate(10);
        $loker->appends(['cari' => $keyword]);
        return view('admin.Loker.new.index', compact('loker', 'keyword'));
    }
}
