<?php

class index_controller extends base_controller {
	
	/*-------------------------------------------------------------------------------------------------

	-------------------------------------------------------------------------------------------------*/
	public function __construct() {
		parent::__construct();
	} 
		
	/*-------------------------------------------------------------------------------------------------
	Accessed via http://localhost/index/index/
	-------------------------------------------------------------------------------------------------*/
	public function index() {


		if(!$this->user){
			$this->template->content = View::instance('v_index_index');
			$this->template->title = "Welcome!";
			echo $this->template;
		}

else {
	$this->template->content=View::instance('v_posts_index');
	$this->template->title="All my posts";
	$q='SELECT * FROM posts WHERE user_id = '.$this->user->user_id;
	$posts=DB::instance(DB_NAME)->select_rows($q);
	$this->template->content->posts=$posts;
	echo $this->template;
}

	} # End of method
	
	
} # End of class
