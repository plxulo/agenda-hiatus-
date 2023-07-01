<?php
  $usuario = 'Paulo';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../css/main.css">

  <title>Agenda de <?php echo $usuario ?></title>
</head>

<body>
  <main>
    <nav class="top_navbar">
      
    </nav>

    <header aria-labelledby="main_title" class="main_header">
      <h1 id="main_title">Minha Agenda Telefônica</h1>
      <div aria-labelledby="add_new_contact" class="container_add_new">
        <svg width="7" height="7" viewBox="0 0 7 7" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path id="+" d="M3.5 0V7M0 3.5H7" stroke="black" stroke-width="2"/>
        </svg>

        <h2 id="add_new_contact" onclick="new_contact();">Adicionar novo contato</h2>
      </div>
    </header>

    <!-- Retângulo grande com os contatos: -->
    <section class="big_rectangle" aria-labelledby="contacts_title">
      <header aria-labelledby="contacts_title" class="contacts_header">
        <h1 id="contacts_title" class="h1_contacts_header">Meus contatos</h1>
      </header>
      <!-- Cards de contatos: -->
      <section class="container_contact_card" aria-label="Lista de contatos">
        <div class="contact_photo">
            
        </div>
        <h2>Contato 1</h2>
        <div class="phone_number">
          <!-- SVG telefone -->
          <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g id="phone">
            <path id="phone_2" d="M6.60899 7.99994C6.30393 7.99994 5.8754 7.88963 5.23371 7.53118C4.45339 7.09368 3.84983 6.68977 3.07373 5.91585C2.32546 5.16819 1.96132 4.68412 1.45168 3.75692C0.87594 2.71003 0.974085 2.16128 1.0838 1.92674C1.21445 1.64643 1.4073 1.47877 1.65657 1.31236C1.79815 1.21961 1.94798 1.14011 2.10416 1.07486C2.11979 1.06814 2.13432 1.06173 2.14729 1.05595C2.22465 1.02111 2.34187 0.968448 2.49033 1.0247C2.58942 1.06189 2.67787 1.13798 2.81634 1.2747C3.1003 1.55471 3.48835 2.17831 3.6315 2.48456C3.72762 2.69097 3.79122 2.82722 3.79138 2.98004C3.79138 3.15894 3.70136 3.29691 3.59212 3.44582C3.57165 3.47379 3.55133 3.50051 3.53164 3.52645C3.41271 3.6827 3.38661 3.72786 3.4038 3.80848C3.43865 3.97052 3.69855 4.45287 4.12567 4.87896C4.55279 5.30506 5.02132 5.5485 5.18401 5.58319C5.26809 5.60116 5.31419 5.57397 5.47547 5.45085C5.4986 5.43319 5.52236 5.41491 5.54721 5.39663C5.7138 5.27272 5.84539 5.18506 6.02012 5.18506H6.02106C6.17312 5.18506 6.3033 5.251 6.51897 5.35975C6.80028 5.50163 7.44275 5.8846 7.72453 6.16882C7.86159 6.30695 7.93801 6.39508 7.97536 6.49398C8.03162 6.64289 7.97864 6.75961 7.9441 6.83774C7.93832 6.85071 7.93191 6.86493 7.92519 6.88071C7.85941 7.03658 7.77942 7.18606 7.68624 7.32728C7.52011 7.57572 7.3518 7.76806 7.0708 7.89884C6.92651 7.96708 6.7686 8.00165 6.60899 7.99994Z" fill="black"/>
            </g>
          </svg>
          <p>+55 (47) 99735-5556</p>
        </div>
        <a href="#">Alterar</a>
        <a href="#">Excluir</a>
      </section>
    </section>
  </main>
</body>
<script>
  function new_contact()
  {
    window.open("new_contact.php");
  }
</script>
</html>