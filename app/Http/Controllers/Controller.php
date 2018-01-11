<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Storage;

class Controller extends BaseController
{
  use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
  public function save_image($req, $set,  $file,  $storePl) {
      $fileWithExt = $req->file($file)->getClientOriginalName();
      $fileName = pathinfo($fileWithExt, PATHINFO_FILENAME);
      $ext = $req->file($file)->getClientOriginalExtension();
      $fileNameToStore = $fileName.'_'.time().'_'.$ext;
      $path = $req->file($file)->storeAs($storePl, $fileNameToStore);
      return $fileNameToStore;
  }
}
