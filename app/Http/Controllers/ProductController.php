<?php

namespace App\Http\Controllers;

use App\Models\Product;
use domain\Facades\ProductFacade;
use Illuminate\Http\Request;

class ProductController extends ParentController
{
    public function index()
    {
        $response['tasks'] = ProductFacade::all();
        return view('pages.product.index')->with($response);
    }

    public function store (Request $request)
    {
        ProductFacade::store($request->all());
        return redirect ()->back();
        //return redirect()->route('home');
    }

    public function delete($task_id)
    {
        ProductFacade::delete($task_id);
        return redirect ()->back();
    }

    public function active($task_id)
    {
        ProductFacade::active($task_id);
        return redirect()->back();
    }

    public function inactive($task_id)
    {
        ProductFacade::inactive($task_id);
        return redirect()->back();
    }

}
