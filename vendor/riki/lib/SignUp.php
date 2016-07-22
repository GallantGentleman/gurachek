<?php

namespace riki\lib;

use \riki\core\Model;
use \riki\lib\Common;

class SignUp extends Model {

    public $email;
    public $name;
    public $pass;

    public $success;

    public function getData(){}

    public function regUser() {
      if(isset($_POST['signup']['sign_up'])) {

        $this->email = trim(htmlspecialchars($_POST['signup']['email']));
        $this->name = trim(htmlspecialchars($_POST['signup']['name']));
        $this->pass = trim(htmlspecialchars($_POST['signup']['pass']));
        $pass2 = trim(htmlspecialchars($_POST['signup']['pass2']));
        $img = rand(1, 66);

        if(!empty($this->email) and !empty($this->name) and !empty($this->pass) and !empty($pass2)) {

            if($this->pass != $pass2) {
                echo Common::e("Passwords do not match !");
                return false;
            }

            $this->pass = md5($this->pass);

            $sql = $this->db->prepare("INSERT INTO `users`(`name`, `email`, `password`, `img`) VALUES (?, ?, ?, ?)");
            $sql->execute(array($this->name, $this->email, $this->pass, $img));

            $this->success = true;
        }
      }
    }
}
