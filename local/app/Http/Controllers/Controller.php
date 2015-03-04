<?php namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use View;

abstract class Controller extends BaseController {
public $styles = array('css/app.css', 'css/slider.css');
public $scripts = array('');
public function __construct(){

 View::composer('app', function($view){
 $view->with('styles', $this->styles);
       //->with('scripts', $this->scripts);

 });
	

}
}
