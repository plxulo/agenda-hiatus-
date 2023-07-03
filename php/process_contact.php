<?php
  namespace agenda;
  include_once("db_connection.php");

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
      echo "O nome é: {$this->contact_name} e seu número é: {$this->contact_phone}";
    }

  }

  // OBJECT CONTATO (usando __construct)
  $contato = new contato('João', 'XXXXXXXXXXXXXX', '999999999');

  // OUTPUT:
  $contato->get_message();
?>

<?php
namespace Html;
class Table {
  public $title = "";
  public $numRows = 0;
  
  // $titulo e $linhas são parametros da função __construct
  public function __construct($titulo, $linhas) {
    // $this se refere ao próprio objeto, no caso o objeto table criado fora da classe.
  	$this->title = $titulo;
    $this->numRows = $linhas;
  }
  
  public function message() {
    echo "<p>Table '{$this->title}' has {$this->numRows} rows.</p>";
  }
}
// Objeto table, é o que é referido pelo $this na função __construct
// Parâmetros = new classe(titulo, linhas):
$table = new Table("My table", 5);
?>

<!DOCTYPE html>
<html>
<body>

<?php
$table->message();
?>

</body>
</html>
