<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class LanguageController extends Controller
{
    //
    public function changeLanguage(Request $request): View
    {
        $language = $request->input('language');
        App::setLocale($language);
        Session::put('locale', $language);
        return view('foo');
    }
}
