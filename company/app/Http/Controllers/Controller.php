<?php namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

abstract class Controller extends BaseController {

	use DispatchesCommands, ValidatesRequests;
        public function getFileName($file)
        {
            $name =$file->getClientOriginalName(); 
            $fileName =rand(0,99999).$name; 
            return $fileName;
        }
        public function saveFile($file,$destinationPath,$fileName)
        {
            $file->move($destinationPath, $fileName);
        }
        public function back()
        {
            return redirect()->back();
        }
}
