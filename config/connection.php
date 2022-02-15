<?php

use harry_potter_vocabulary\DotEnv;

require __DIR__ . '/../dotenv.php';
(new DotEnv(__DIR__ . '/../.env'))->load();

class basedatos
{
  private $con;
  private $servername = null;
  private $user = null;
  private $password = null;
  private $dbname = null;

  public function __construct()
  {
    $this->servername = $_ENV['SERVERNAME'];
    $this->user = $_ENV['USERNAME'];
    $this->password = $_ENV['PASSWORD'];
    $this->dbname = $_ENV['DB_NAME'];
    $this->conectar();
  }

  public function conectar(): mysqli
  {
    $this->con = mysqli_connect($this->servername, $this->user, $this->password, $this->dbname);

    if (mysqli_connect_error()) {
      die("Error: No se pudo conectar a la base de datos: " . mysqli_connect_error() . mysqli_connect_errno());
    }

    return $this->con;
  }

  public function read_voc()
  {
    $sql = "SELECT * FROM words INNER JOIN type ON words.type_id = type.id";
    $stmt = $this->con->prepare($sql);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result;
  }

  public function search_voc($keyword)
  {
    $keyword = "%{$keyword}%";
    $sql = "SELECT * FROM words INNER JOIN type ON words.type_id = type.id WHERE words.word LIKE ?";
    $stmt = $this->con->prepare($sql);
    $stmt->bind_param('s', $keyword);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result;
  }

  public function live_search_voc($keyword)
  {
    $keyword = "%{$keyword}%";
    $sql = "SELECT word FROM words WHERE words.word LIKE ?";
    $stmt = $this->con->prepare($sql);
    $stmt->bind_param('s', $keyword);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result;
  }



  public function login($email, $password)
  {
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $this->con->prepare($sql);
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $validation = $this->login_validation($result, $password);
    return $validation;
  }

  /**
   * 1 -> ok
   * 2 -> user doesn't exist or password is not correct  
   */

  public function login_validation($result, $password)
  {
    if ($result->num_rows === 1) {
      $user = mysqli_fetch_assoc($result);
      $auth = password_verify($password, $user['passwords']);
      if ($auth) :
        session_start();
        $_SESSION['usuario'] = $user['email'];
        return true;
      else :
        return false;
      endif;
    }
    return false;
  }
}
