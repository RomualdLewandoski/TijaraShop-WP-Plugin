<?php


class Login
{
    protected $wpdb;
    protected $request;

    public function __construct(Request $request, $wpdb)
    {
        $this->request = $request;
        $this->wpdb = $wpdb;

    }

    public function getLogin()
    {
        $rows = $this->wpdb->get_results("SELECT * FROM {$this->wpdb->prefix}shop_login");
        $obj = new stdClass();
        $users = array();
        foreach ($rows as $user):
            /*$userObj = new stdClass();
            $userObj->userName = $user->userName;
            $userObj->password = $user->password;
            $userObj->rank = $user->rank;
            array_push($users, $userObj);*/
            array_push($users, $user);
        endforeach;
        $obj->users = $users;
        return $obj;
    }

    public function addLogin()
    {
        $userName = $this->request->get('userName');
        $password = $this->request->get('password');
        $rank = $this->request->get('rank');
        $crypt_pass = $this->crypt_password($password);
        if (empty($userName) OR empty($password) OR empty($rank)){
            //todo erreur ici champs manquants
        }else{
            //todo verification etc...  
        }
    }

    public function editLogin()
    {

    }

    public function deleteLogin()
    {

    }

    function crypt_password($password)
    {
        return password_hash($password);
    }
}