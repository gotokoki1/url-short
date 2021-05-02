<?php
  $dsn = "mysql:dbname=url_short;host=127.0.0.1;charset=utf8mb4";
  $username = "root";
  try {
    $pdo = new PDO($dsn, $username);
  // } catch (PDOException $e) {
  //   var_dump($e->getMessage());
  // }
  $url = $_POST['url'];
  $sql = "INSERT INTO url_short (url) VALUES ($url)";
  $stmt = $pdo->query($sql);
  // $stmt->bindParam(':url',$url, PDO::PARAM_STR);
  // $params = array(':url' => $url);
  // $stmt->execute($stmt);

} catch (PDOException $e) {
  var_dump($e->getMessage());
}
