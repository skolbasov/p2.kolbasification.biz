<?phpclass users_controller extends base_controller {public function __construct(){        parent::__construct();}public function index(){echo "This is the index page";}public function login($error=NULL) {        $this->template->content = View::instance('v_users_login');       $this->template->content->error=$error;
    //    $this->template->title   = "Login";        echo $this->template;}public function p_login() {    $_POST = DB::instance(DB_NAME)->sanitize($_POST);    $_POST['password'] = sha1(PASSWORD_SALT.$_POST['password']);    $q = "SELECT token         FROM users         WHERE email = '".$_POST['email']."'         AND password = '".$_POST['password']."'";    $token = DB::instance(DB_NAME)->select_field($q);    if(!$token) {        Router::redirect("/users/login/error");    } else {        setcookie("token", $token, strtotime('+1 year'), '/');        # Send them to the main page - or whever you want them to go        Router::redirect("/");    }}public function logout(){       $new_token=sha1(TOKEN_SALT.$this->user->email.Utils::generate_random_string());
       $data= Array("token"=>$new_token);
       DB::instance(DB_NAME)->update("users",$data, "WHERE token ='".$this->user->token."'");
       setcookie("token","",strtotime('-1 year'),'/');
       Router::redirect("/");}public function profile($user_name = NULL){
    if(!$this->user) {
        Router::redirect('/users/login');
    }
    $this->template->content = View::instance('v_users_profile');
    $this->template->title   = "Profile of".$this->user->first_name;

    # Render template
    echo $this->template;}public function signup() {        # Setup view            $this->template->content = View::instance('v_users_signup');            $this->template->title   = "Sign Up";        # Render template            echo $this->template;    }    public function p_signup() {    # Dump out the results of POST to see what the form submitted    // print_r($_POST);$_POST['created']=Time::now();$_POST['modified']=Time::now();$_POST['password']=sha1(PASSWORD_SALT.$_POST['password']);$_POST['token']=sha1(TOKEN_SALT.$_POST['email'].Utils::generate_random_string());    # Insert this user into the database    $user_id = DB::instance(DB_NAME)->insert('users', $_POST);    # For now, just confirm they've signed up -     # You should eventually make a proper View for this    echo 'You\'re signed up';           }}