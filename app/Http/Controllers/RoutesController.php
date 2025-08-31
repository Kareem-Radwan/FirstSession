<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RoutesController extends Controller
{
    public function index()
    {
        return view("users.index");
    }

    public function products($id)
    {
        if (is_numeric($id)) {
            return "Product id is $id";
        } else {
            return redirect()->route("index");
        }
    }

    public function show($id)
    {
        return "User ID is $id";
    }

    public function search()
    {
        return view("search");
    }

    public function result(Request $request)
    {
        $name = $request->name;
        return view("result", compact("name"));
    }

    public function ShowSave()
    {
        return view("save");
    }

    public function save(Request $request) {
        $data = [
            $request->username,
            Hash::make($request->password)
        ];
        return view("show", ["data" => $data]);
    }
}
