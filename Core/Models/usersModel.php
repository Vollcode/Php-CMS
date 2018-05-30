<?php
namespace Models;
use Models\firstModel;

class usersModel extends firstModel
{
  public function selectAll()
  {
    $statement = $this->pdo->prepare("select * from users");
    $statement->execute();
    $results=$statement->fetchAll(\PDO::FETCH_OBJ);
    var_dump($results);
  }

  public function insert($name,$lastName,$email,$password)
  {
    $sql = 'insert into users(firstname, lastname, email, password) values (:firstname, :lastname, :email, :password)';
    $statement = $this->pdo->prepare("insert into users(firstname, lastname, email, password) values (:firstname, :lastname, :email, :password)");
    $statement->execute(array(
      "firstname"=>$name,
      "lastname" =>$lastname,
      "email" => $email,
      "password" =>$password
    ));
  }

  public function getUser($email){
    $statement = $this->pdo->prepare("select * from users where email='" . $email ."' limit 1");
    $statement->execute();
    $results=$statement->fetchAll(\PDO::FETCH_OBJ);
    var_dump($results);
  }
}
