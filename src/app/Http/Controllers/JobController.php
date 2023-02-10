<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\test;

use Illuminate\Support\Facades\Queue;

class JobController extends Controller
{
    public function addJob(Request $request)
    {
        test::dispatch($request->all());
        return response()->json(['message' => 'Job Added to Queue'], 200);
    }
}