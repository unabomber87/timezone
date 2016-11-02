<?php

namespace Unabomber\Timezone;

use App\Http\Controllers\Controller;
use Carbon\Carbon;

class TimezonesController extends Controller
{
    public function index($timezone)
    {
        $datetime = Carbon::now(str_replace('-', '/', $timezone))->toDateTimeString();

        return view('timezones::time', compact('datetime'));
    }
}
