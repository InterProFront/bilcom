<?php namespace App\Http\Controllers;

use Interpro\QuickStorage\Laravel\QueryAgent;

class BackController extends Controller {

	private  $queryAgent;
	public function __construct(QueryAgent $queryAgent)
	{
		$this->middleware('auth');
		$this->queryAgent = $queryAgent;
	}


	public function editAll(){
		$block = $this->queryAgent->getBlock('static_all_site',[],[]);
		return view('back.blocks.static_all_site',[
			'static_all_site' =>  $block
		]);
	}
	public function editMain(){
		$block = $this->queryAgent->getBlock('static_main_page',[],[]);
		return view('back.blocks.static_main_page',[
			'static_main_page' =>  $block
		]);
	}
	public function editConnect(){
		$block = $this->queryAgent->getBlock('static_connect',[],[]);
		return view('back.blocks.static_connect',[
			'static_connect' =>  $block
		]);
	}
	public function editAbout(){
		$block = $this->queryAgent->getBlock('static_about_company',[],[]);
		return view('back.blocks.static_about_company',[
			'static_about_company' =>  $block
		]);
	}
	public function editRollback(){
		$block = $this->queryAgent->getBlock('dom_rollback',[],[]);
		return view('back.blocks.dom_rollback',[
			'dom_rollback' =>  $block
		]);
	}
	public function editRollbackItem($id){
		$block = $this->queryAgent->getGroupItem('dom_rollback','comment',$id);
		return view('back.blocks.groupitems.dom_rollback.comment_edit',[
			'comment_item' =>  $block
		]);
	}
	public function editTarif(){
		$block = $this->queryAgent->getBlock('dom_tarifs',[],[]);
		return view('back.blocks.dom_tarifs',[
			'dom_tarifs' =>  $block
		]);
	}
	public function editTarifItem($id){
		$block = $this->queryAgent->getGroupItem('dom_tarifs','tarif_category',$id);
		return view('back.blocks.groupitems.dom_tarifs.tarif_category_edit',[
			'tarif_category_item' =>  $block
		]);
	}



}
