<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\File;


class LocalizationController extends Controller
{
    //
    public function change(Request $request)
    {
        App::setLocale($request->lang);
        session()->put('locale', $request->lang);
        // print_r(app()->getLocale());
        // View::share('rtl', true);
        return redirect()->back();
    }

    public function view($lang="ar"){

        $path = resource_path('lang/'.$lang.'.json');
        $file = File::get($path);
        $data = json_decode($file, true);
        $translations = [];
        foreach($data as $key => $value){
            $translations[] = [$key, $value];
        }
        return view('translate',['translations'=>$translations, "lang"=>$lang]);

    }

    public function edit(Request $request, $lang="ar"){

        $translations = $request->input('translations');

        // Arabic Translation
        $path = resource_path('lang/'.$lang.'.json');

        $data = [];

        // English Translation
        $pathEn = resource_path('lang/en.json');

        $dataEn = [];

        $translationskey = $translations['key'];

        foreach($translationskey as $key => $value){
            $data[$value] = $translations['value'][$key];
            $dataEn[$value] = [$value][0];
        }

        File::put($path,"");

        File::put($path, json_encode($data, JSON_PRETTY_PRINT));

        File::put($pathEn, json_encode($dataEn, JSON_PRETTY_PRINT));

        return response()->json("Translations updated successfully.");
    }
}
