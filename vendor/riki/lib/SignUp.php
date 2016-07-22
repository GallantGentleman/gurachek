<?php

namespace riki\lib;

use \riki\core\Model;
use \riki\lib\Common;

class SignUp extends Model {

    public function getData() {}

    public function regUser() {
      if(isset($_POST['signup']['sign_up'])) {

        $email = trim(htmlspecialchars($_POST['signup']['email']));
        $name = trim(htmlspecialchars($_POST['signup']['name']));
        $pass = trim(htmlspecialchars($_POST['signup']['pass']));
        $pass2 = trim(htmlspecialchars($_POST['signup']['pass2']));
        $img = rand(1, 66);

        if($pass != $pass2) {
            echo Common::e("Passwords do not match !");
            return false;
        }

        $pass = md5($pass);

        $sql = $this->db->prepare("INSERT INTO `users`(`name`, `email`, `password`, `img`) VALUES (?, ?, ?, ?)");
        $sql->execute(array($name, $email, $pass, $img));

        if($sql) {
          echo Common::e("Succes! Welcome, " . $name . ".");
          echo Common::linkTo(SITE_NAME);
        } else
          echo Common::e("Some Trouble With Your Request ! Try Later...");

        return true;

      }
    }

}
