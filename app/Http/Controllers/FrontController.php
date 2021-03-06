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

	public function getIndex(){
		$static_main_page = $this->queryAgent->getBlock('static_main_page',[],[]);
		$comment          = $this->queryAgent->getGroupFlat('dom_rollback','comment',[],[]);
		return view('front.index.index',[
			'static_main_page' => $static_main_page,
			'comment'          => $comment
		]);
	}

	public function getConnect(){
		$static_connect = $this->queryAgent->getBlock('static_connect',[],[]);
		return view('front.connect.connect',[
			'static_connect' => $static_connect,
		]);
	}
	public function getTarifs(){
		$static_tarifs = $this->queryAgent->getBlock('dom_tarifs',[],[]);
		return view('front.tarifs.tarifs',[
			'static_tarifs' => $static_tarifs,
		]);
	}
	public function getAbout(){
		$static_about = $this->queryAgent->getBlock('static_about_company',[],[]);
		return view('front.about.about',[
			'static_company' => $static_about,
		]);
	}
}
