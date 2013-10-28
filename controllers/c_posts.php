<?php
class posts_controller extends base_controller {

public function __construct(){

parent::__construct();

if(!$this->user){
die ("Members only. <a href='/users/login'>Login</a>");
}
}

public function add(){

$this->template->content = View::instance('v_posts_add');
$this->template->title="New Post";

echo $this->template;
}

public function p_add(){
$_POST['user_id']=$this->user->user_id;
$_POST['created']=Time::now();
$_POST['modified']=Time::now();

DB::instance(DB_NAME)->insert('posts',$_POST);
echo "Your post has been added. <a href='/posts/add'>Add another</a>";

}

}