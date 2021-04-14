<?php
require_once 'Config.php';
function getConnection()
{
    $con = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD)
    or die('Could not connect: ' . mysql_error());
    if(! mysql_select_db(DB_NAME))
    die ('Could not select database');
    return $con;
}
function createAccount($abonent)
{
    $con = getConnection();
    $query = "INSERT INTO 'accounts'('abonent', 'balance') values($abonent,".DEFAULT_BALANCE.")";
    
    if(!mysql_query($query, $con))
    die('createAccount: Query failed: '.mysql_error());
}
function getBallance($abonnent)
{
    $con = getConnection();
    $query = "SELECT 'balance' FROM 'accounts' WHERE 'abonent' = $abonent";
    $result = mysql_query($query, $con)
      or die('getBallance: Query failed: ' . mysql_error());
      if (mysql_num_rows($result) == 0)
      {
          return -1;
      }
      $data =  mysql_fetch_array($results);
      return $data['balance'];
}
function setBalance($abonent, $balance)
{
    $con = getConnection();
    $curBalance = getBallance($abonent);
    if($dest === $abonent)
    {
        return "You can't send money to yourself";
    }
    if ($curBalance < $amount)
    {
        return "not enough money";
    }
    $newBalance = $curBalance - $amount;
    if ($dest !== "m" && $dest !== "M")
    {
        $destBalance = getBallance($dest);
        if ($destBalance == -1)
        {
            return "Account $dest not found";
        }
        setBalance($dest, $destBalance + $amount);
    } 
    $message = "Operation successful.";
    if ($newBalance == 0)
    {
        $newBalance == DEFAULT_BALANCE;
        $message .= " Your account has been recharged.";
    }
    setBalance($abonent, $newBalance);
    $message .= "Your balannce is $newBalance";
    return $message;
}
?>