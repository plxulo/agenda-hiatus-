<?php
  namespace Agenda;
  include_once("db_connection.php");

  class Contato
  {
    private $contact_name;
    private $contact_email;
    private $contact_phone;

    public function __construct($name, $email, $phone)
    {
      $this->contact_name = $name;
      $this->contact_email = $email;
      $this->contact_phone = $phone;
    }

  }

  $contato = new Contato('João', 'XXXXXXXXXXXXXX', '999999999');
?>