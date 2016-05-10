<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class Reservasi extends Controller {
	
		
		public function flight()
		{
			//add airport data
			$s['airport'] = \App\Airport::all();
			//view reservasi/flight.blade.php with data
			return view('reservasi.flight')->with($s);
		}
	
}
