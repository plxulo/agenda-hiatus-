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
  <link rel="stylesheet" href="../../global/global.css">

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
    <footer class="agenda_footer_overall">
      <header aria-labelledby="company_info_title" class="company_info">
        <svg width="26" height="25" viewBox="0 0 26 25" fill="none" xmlns="http://www.w3.org/2000/svg">
          <g id="agenda_icon">
            <path d="M23.4004 0H20.2754V0.195312C19.8848 0.0651042 19.543 0 19.25 0H4.65039C4.09701 0 3.61686 0.203451 3.20996 0.610352C2.80306 1.01725 2.59961 1.51367 2.59961 2.09961V5.22461H1.52539C0.841797 5.22461 0.5 5.56641 0.5 6.25C0.5 6.93359 0.841797 7.27539 1.52539 7.27539H2.59961V11.4746H1.52539C0.841797 11.4746 0.5 11.8164 0.5 12.5C0.5 13.1836 0.841797 13.5254 1.52539 13.5254H2.59961V17.7246H1.52539C0.841797 17.7246 0.5 18.0664 0.5 18.75C0.5 19.4336 0.841797 19.7754 1.52539 19.7754H2.59961V22.9004C2.59961 23.4863 2.80306 23.9827 3.20996 24.3896C3.61686 24.7965 4.09701 25 4.65039 25H19.25C20.1289 25 20.8695 24.6989 21.4717 24.0967C22.0739 23.4945 22.375 22.7539 22.375 21.875V17.7246C23.2539 17.7246 23.9945 17.4235 24.5967 16.8213C25.1989 16.2191 25.5 15.4785 25.5 14.5996V10.4004H25.3047C25.4349 10.0098 25.5 9.66797 25.5 9.375V5.22461H25.3047C25.4349 4.76888 25.5 4.41081 25.5 4.15039V2.09961C25.5 1.51367 25.2965 1.01725 24.8896 0.610352C24.4827 0.203451 23.9863 0 23.4004 0ZM22.375 2.09961H23.4004V4.15039C23.4004 4.86654 23.0586 5.22461 22.375 5.22461V2.09961ZM22.375 7.27539C22.668 7.27539 23.0098 7.21029 23.4004 7.08008V9.375C23.4004 10.0586 23.0586 10.4004 22.375 10.4004V7.27539ZM20.2754 21.875C20.2754 22.5586 19.9336 22.9004 19.25 22.9004H4.65039V19.7754H5.72461C6.4082 19.7754 6.75 19.4336 6.75 18.75C6.75 18.0664 6.4082 17.7246 5.72461 17.7246H4.65039V13.5254H5.72461C6.4082 13.5254 6.75 13.1836 6.75 12.5C6.75 11.8164 6.4082 11.4746 5.72461 11.4746H4.65039V7.27539H5.72461C6.4082 7.27539 6.75 6.93359 6.75 6.25C6.75 5.56641 6.4082 5.22461 5.72461 5.22461H4.65039V2.09961H19.25C19.9336 2.09961 20.2754 2.44141 20.2754 3.125V21.875ZM22.375 15.625V12.5C22.668 12.5 23.0098 12.4349 23.4004 12.3047V14.5996C23.4004 15.2832 23.0586 15.625 22.375 15.625Z" fill="black"/>
            <path d="M11.125 17.7625L7.24375 13.8813L9.0125 12.1125L11.125 14.2312L17.3 8.05L19.0687 9.81875L11.125 17.7625Z" fill="black"/>
          </g>
        </svg>
        <h1 id="company_info_title">Agenda Paulo</h1>
        <p class="header_subtitle">Agenda telefônica integrada com um banco de dados, para cadastrar os seus contatos com <b>facilidade</b>.</p>
      </header>
      <section aria-labelledby="navlinks_title" class="navlinks">
        <header>
          <h1 id="navlinks_title">Navegar</h1>
        </header>
        <a href="main.php">Página inicial</a>
        <a href="new_contact.php">Novo contato</a>
        <a href="https://github.com/plxulo/agenda">Github</a>
      </section>
      <section aria-labelledby="contact_info_title" class="contact_info">
        <header>
          <h1 id="contact_info_title">Contato</h1>
        </header>
        <p>+55 (11) 4002-8922</p>
        <p>email_falso@email.com</p>
        <p>Av. Paulista, 1000</p>
      </section>
      <p>Feito por <b>Paulo Amarante</b>, 2023</p>
    </footer>
  </main>
</body>
<script>
  function new_contact()
  {
    window.open("new_contact.php");
  }
</script>
</html>