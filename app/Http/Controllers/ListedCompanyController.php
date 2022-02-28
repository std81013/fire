<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ListedCompanyController extends Controller
{
    public function get()
    {
        $response = Http::get('https://openapi.twse.com.tw/v1/opendata/t187ap14_L')->json();
        return view('ListedCompany.ListedCompany')->with('listedCompanys', $response);
    }
}
