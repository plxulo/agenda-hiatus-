<?php
  namespace agenda;
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
    
    // GETTER : sem param
    public function get_message()
    {
      return "Nome: {$this->contact_name}, email: {$this->contact_email}, telefone: {$this->contact_phone}"; 
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
  
  // RETURN:
  $return = $contato->get_message();
?>

<!-- === OUTPUT HTML : === -->
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="../global/global.css">

  <title>Retorno OOP</title>
</head>

<body>
  <p><?php echo $return ?></p>
  <a href="../teste.php"><button>Voltar</button></a>
</body>
</html>