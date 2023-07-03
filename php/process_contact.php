<?php
  namespace agenda;
  // include_once("db_connection.php");

  class contato
  {
    // Propriedades:
    public $contact_name;
    public $contact_email;
    public $contact_phone;

    // Métodos (construtor poupa linhas, evitando os setters):
    // SETTER:
    public function __construct($name, $email, $phone)
    {
      $this->contact_name = $name;
      $this->contact_email = $email;
      $this->contact_phone = $phone;
    }
    
    public function get_message()
    {
      echo "O nome é: {$this->contact_name} e seu email é: {$this->contact_email} e seu telefone é {$this->contact_phone}.";
    }
  }

  // OBJECT CONTATO (usando __construct)
  $name = $_POST["frm_name"];
  $name = filter_var($name, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

  $email = $_POST["frm_email"];
  $email = filter_var($email, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

  $phone = $_POST["frm_phone"];
  $phone = filter_var($phone, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

  $contato = new contato($name, $email, $phone);

  // OUTPUT:
  $contato->get_message();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Retorno OOP</title>
</head>

<body>
  <a href="teste.php"><button>Voltar</button></a>
</body>
</html>
