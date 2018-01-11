<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use Illuminate\Filesystem\Filesystem;
use App\Setting;

class SettingsController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }

  public function edit()
  {
    $settings = Setting::firstOrCreate(['id' => 1]);
    return view('back.settings.edit')->with('settings', $settings);
  }
  public function update(Request $request, $id)
  {
    $settings = Setting::find($id);
    $settings->fill($request->all());
    if($request->hasFile('logo_image')) {
      $settings->logo_image =  parent::save_image($request, $settings, 'logo_image', 'public/logo_images');
    } else{
      if (empty($settings->logo_image)) {
        $settings->logo_image = 'nologoimage.png';
      }
    }
    if($request->hasFile('favicon_image')) {
      $settings->favicon_image = parent::save_image($request, $settings, 'favicon_image', 'public/favicon_images');
    } else {
      if (empty($settings->favicon_image)) {
        $settings->favicon_image = 'nologoimage.png';
      }
    }
    $settings->save();
    return redirect('/admin/dashboard');
  }

}
