<?php

class Database {
  public static function ConnectDb() {
    $db="f2i";
    $dbhost="localhost";
    $dbport=3306;
    $dbuser="root";
    $dbpasswd="";
    try {
      $pdo = new PDO('mysql:host='.$dbhost.';port='.$dbport.';dbname='.$db.'', $dbuser, $dbpasswd);
      return $pdo;
    } catch (PDOException $e) {
      return false;
    }
  }

  public static function Select($table = null,$ceQueJeCherche = null, $maDonnerQueJeCherche = null) {
    // connexion a la base de données des
    $db = Database::ConnectDb();
    // attraper l'erreur
    try {
      // si la table est null on retourne false
      if ($table == null) {
        return false;
      }
      // selectionne la table
      $sql = 'SELECT * FROM '.$table;
      // 
      if ($maDonnerQueJeCherche == null && $ceQueJeCherche == null) {
        $sth = $db->prepare($sql);
        $sth->execute([]);
        return $sth;
      } elseif ($maDonnerQueJeCherche != null && $ceQueJeCherche != null) {
        $sql .= ' WHERE '.$ceQueJeCherche;
        $sth = $db->prepare($sql);
        $sth->execute($maDonnerQueJeCherche);
        return $sth;
      } else {
        return false;
      }
    } catch (PDOException $e) {
      return false;
    }
  }
// Comment sécuriser un mdp?
  $newpassword = password_hash($mdp1, PASSWORD_ARGON2ID);
  var_dump($newpassword);


  public static function static Insert ($table = null, $ceQueJeCherche = null, $maDonnerQueJeCherche = null ) {
    $db = Database::ConnectDb();

    try {
      if ($table == null) {
        return false;
      }
    } 
    

    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    $stmt = $conn->prepare("INSERT INTO User (firstname, lastname, email) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $firstname, $lastname, $email);
  }
}