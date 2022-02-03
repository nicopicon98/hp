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
}
