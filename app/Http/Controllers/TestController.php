<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index()
    {
        // エロクアント
        $values = Test::all();
        $count = Test::count();
        $first = Test::findOrFail(1);
        $text = Test::where('text', '=', 'sample2')->get();

        // クエリビルダー
        $queryBuilder = DB::table('tests')->where('text', '=', 'sample')->select('id', 'text')->get();
        // dd($values);
        return view('tests/test', compact('values', 'count', 'first', 'text', 'queryBuilder'));
    }
}
