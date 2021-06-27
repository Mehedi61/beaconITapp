<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\TestJob;

class TestJobController extends Controller
{
    public function runMyJob()
    {
        TestJob::dispatch();
    }
}
