<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\reporte;
use Illuminate\Http\Request;

class ReporteController extends Controller
{
    public function index(){
        $reportes = Reporte::where('status', 2)->latest('id')->paginate(8);
        return view('reportes.index', compact('reportes'));

    }

    public function show(Reporte $reporte){

        $similares = Reporte::where('category_id', $reporte->category_id)
                                ->where('status', 2)
                                ->where('id', '!=',$reporte->id)
                                ->latest('id')
                                ->take(4)
                                ->get();

        return view('reportes.show', compact('reporte', 'similares'));
    }

    public function category(Category $category){
        $reportes = Reporte::where('category_id', $category->id)
                        ->where('status', 2 )
                        ->latest('id')
                        ->paginate(2);
        return view('reportes.category', compact('reportes', 'category'));
    }
    //
}
