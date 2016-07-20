<?php namespace App\Http\Controllers;


use Interpro\QuickStorage\Laravel\QueryAgent;

class FrontController extends Controller {

	private $queryAgent;
	public function __construct(QueryAgent $queryAgent)
	{
		$this->queryAgent = $queryAgent;

		$static_all_site = $this->queryAgent->getBlock('static_all_site',[],[]);

		view()->share('static_all_site',$static_all_site);
	}
	public function getMap()
	{
		return view('front.map.map');
	}
	public function getIndex(){
		return view('front.index.index');
	}
}
