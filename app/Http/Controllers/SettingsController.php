<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Storage;
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
      $fileWithExt = $request->file('logo_image')->getClientOriginalName();
      $fileName = pathinfo($fileWithExt, PATHINFO_FILENAME);
      $ext = $request->file('logo_image')->getClientOriginalExtension();
      $fileNameToStore = $fileName.'_'.time().'_'.$ext;
      $path = $request->file('logo_image')->storeAs('public/logo_images', $fileNameToStore);
      $settings->logo_image = $fileNameToStore;
    } else {
      if(empty($settings->logo_image)) {
        $settings->logo_image = 'nologoimage.png';
      }
    }
    $settings->save();
    return redirect('/admin/dashboard');
  }


}
