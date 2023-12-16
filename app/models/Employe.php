<?php


class Employe
{
   
    static public  function getAll()
    {
    $stmt =DB::connect()->prepare('SELECT * from employes');
    $stmt->execute();
      return $stmt->fetchAll();
      $stmt=null;
    }
}
