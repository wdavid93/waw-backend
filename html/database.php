<?php

/**
 * Retourne une connexion à la DB
 * 
 * @return PDO
 */

function getPDO(): PDO
{

  $servername = 'database';
  $dbname = 'ventes';
  $user = 'root';
  $pass = 'my_super_secret_password';

  $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $user, $pass, [
    PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION,
    // mode de requête par défaut => renvoit des tableaux associatifs
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
  ]);

  return $pdo;
}
