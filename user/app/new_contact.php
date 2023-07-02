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
  <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../../global/global.css">
  <link rel="stylesheet" href="../css/new_contact.css">

  <title><?php echo $usuario ?>, adicionar novo contato</title>
</head>

<body>
  <main>
    <nav class="top_navbar">
        
    </nav>

    <header aria-labelledby="main_title" class="main_header">
      <h1 id="main_title">Adicionar Contato</h1>
      <a href="main.php">
      <div aria-labelledby="add_new_contact" class="container_add_new">
        <svg width="7" height="7" viewBox="0 0 7 7" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path id="+" d="M3.5 0V7M0 3.5H7" stroke="black" stroke-width="2"/>
        </svg>

        <h2 id="add_new_contact">Ver seus contatos</h2>
      </div>
      </a>
    </header>

    <!-- Retângulo grande com os contatos: -->
    <section class="big_rectangle" aria-labelledby="contacts_title">
      <header aria-labelledby="contacts_title" class="contacts_header">
        <h1 id="contacts_title" class="h1_contacts_header">Insira as informações de seu contato</h1>
      </header>
      <!-- Cards de contatos: -->
      <section class="add_contact_container">
        <section class="contact_image_container">
          <div class="contact_photo">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g id="image 1">
              <path id="Vector" d="M3.5 3H16C16.6628 3.00072 17.2983 3.26435 17.767 3.73303C18.2357 4.20172 18.4993 4.83718 18.5 5.5V15.5C18.4993 16.1628 18.2357 16.7983 17.767 17.267C17.2983 17.7357 16.6628 17.9993 16 18H3.5C2.83718 17.9993 2.20172 17.7357 1.73303 17.267C1.26435 16.7983 1.00072 16.1628 1 15.5V5.5C1.00072 4.83718 1.26435 4.20172 1.73303 3.73303C2.20172 3.26435 2.83718 3.00072 3.5 3ZM6.625 5.5C6.25416 5.5 5.89165 5.60997 5.58331 5.81599C5.27496 6.02202 5.03464 6.31486 4.89273 6.65747C4.75081 7.00008 4.71368 7.37708 4.78603 7.74079C4.85837 8.10451 5.03695 8.4386 5.29917 8.70083C5.5614 8.96305 5.89549 9.14163 6.25921 9.21397C6.62292 9.28632 6.99992 9.24919 7.34253 9.10727C7.68514 8.96536 7.97798 8.72504 8.18401 8.41669C8.39003 8.10835 8.5 7.74584 8.5 7.375C8.49948 6.87788 8.30177 6.40126 7.95025 6.04975C7.59874 5.69823 7.12212 5.50052 6.625 5.5ZM16 16.75C16.3315 16.75 16.6495 16.6183 16.8839 16.3839C17.1183 16.1495 17.25 15.8315 17.25 15.5V12.8582L13.5453 9.56523C13.1879 9.24823 12.723 9.07942 12.2455 9.09321C11.7679 9.107 11.3136 9.30235 10.975 9.63945L8.43789 12.1711L13.0168 16.75H16ZM2.25 15.5C2.25 15.8315 2.3817 16.1495 2.61612 16.3839C2.85054 16.6183 3.16848 16.75 3.5 16.75H11.2488L6.50586 12.007C6.17005 11.7215 5.74391 11.5641 5.3031 11.563C4.86228 11.5618 4.43533 11.717 4.09805 12.0008L2.25 13.5406V15.5Z" fill="black"/>
              </g>
            </svg>
          </div>
          <header class="contact_info">
            <h1>Contato 1</h1>
            <p>(47) 99735-5556</p>
          </header>
        </section>
        <form action="../../php/process_contact.php" method="POST">
          <div class="input_box">
            <div class="container_label">
              <svg width="7" height="7" viewBox="0 0 7 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path id="user" d="M3.5 0C5.42988 0 7 1.57012 7 3.5C7 5.42988 5.42988 7 3.5 7C1.57012 7 -3.57628e-07 5.42988 -3.57628e-07 3.5C-3.57628e-07 1.57012 1.57012 0 3.5 0ZM4.34505 1.96572C4.13185 1.73974 3.83183 1.61538 3.5 1.61538C3.16817 1.61538 2.87084 1.74058 2.6568 1.96774C2.4399 2.19793 2.3344 2.50721 2.3593 2.83971C2.40911 3.5 2.92065 4.03846 3.5 4.03846C4.07935 4.03846 4.5919 3.5 4.6407 2.83954C4.66543 2.50435 4.5601 2.19406 4.34505 1.96572ZM3.5 6.46154C3.89535 6.4618 4.28674 6.38267 4.65093 6.22884C5.01513 6.07501 5.34474 5.84961 5.62019 5.56601C5.46243 5.34103 5.26142 5.14974 5.02889 5.00332C4.59998 4.72837 4.05714 4.57692 3.5 4.57692C2.94286 4.57692 2.40002 4.72837 1.97161 5.00332C1.7389 5.14967 1.5377 5.34097 1.37981 5.56601C1.65524 5.84964 1.98484 6.07506 2.34904 6.22889C2.71325 6.38272 3.10464 6.46184 3.5 6.46154Z" fill="black"/>
              </svg>
              <label for="name">Nome:</label>
            </div>
            <input type="text" class="username_input" id="username_input" name="username_input" placeholder="Nome">
          </div>
          <div class="input_box">
            <div class="container_label">
            <svg width="6" height="4" viewBox="0 0 8 6" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path id="Vector" d="M1.93964 2.08858L3.82464 3.48801C3.87479 3.52522 3.93649 3.54542 4 3.54542C4.06351 3.54542 4.12521 3.52522 4.17536 3.48801L6.74679 1.57892C6.777 1.55714 6.80237 1.52985 6.82144 1.49863C6.84051 1.46741 6.85288 1.43288 6.85785 1.39706C6.86281 1.36123 6.86027 1.32482 6.85037 1.28994C6.84047 1.25506 6.8234 1.22241 6.80016 1.19388C6.77692 1.16535 6.74798 1.14151 6.715 1.12375C6.68203 1.106 6.64569 1.09467 6.60809 1.09043C6.57049 1.0862 6.53239 1.08914 6.49599 1.09908C6.45959 1.10902 6.42563 1.12577 6.39607 1.14835L4 2.92722L2.3175 1.67812C2.4803 1.42673 2.56861 1.1379 2.57305 0.842384C2.57748 0.54687 2.49787 0.25574 2.34268 0H7C7.26513 0.00027072 7.51932 0.100926 7.70679 0.279879C7.89427 0.458832 7.99972 0.701467 8 0.954545V5.04545C7.99972 5.29853 7.89427 5.54117 7.70679 5.72012C7.51932 5.89907 7.26513 5.99973 7 6H1C0.73487 5.99973 0.480681 5.89907 0.293206 5.72012C0.105731 5.54117 0.000283254 5.29853 -3.57628e-07 5.04545V2.23619C0.300768 2.40249 0.64745 2.47744 0.993933 2.45107C1.34042 2.4247 1.67028 2.29827 1.93964 2.08858Z" fill="black"/>
            </svg>
              <label for="name">Email:</label>
            </div>
            <input type="text" class="username_input" id="username_input" name="email_input" placeholder="Email">
          </div>
          <div class="input_box">
            <div class="container_label">
            <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g id="phone">
              <path id="phone_2" d="M6.60899 7.99994C6.30393 7.99994 5.8754 7.88963 5.23371 7.53118C4.45339 7.09368 3.84983 6.68977 3.07373 5.91585C2.32545 5.16819 1.96132 4.68412 1.45168 3.75692C0.87594 2.71003 0.974085 2.16128 1.0838 1.92674C1.21445 1.64643 1.4073 1.47877 1.65657 1.31236C1.79815 1.21961 1.94798 1.14011 2.10416 1.07486C2.11979 1.06814 2.13432 1.06173 2.14729 1.05595C2.22465 1.02111 2.34187 0.968448 2.49033 1.0247C2.58942 1.06189 2.67787 1.13798 2.81634 1.2747C3.1003 1.55471 3.48835 2.17831 3.6315 2.48456C3.72762 2.69097 3.79122 2.82722 3.79138 2.98004C3.79138 3.15894 3.70136 3.29691 3.59212 3.44582C3.57165 3.47379 3.55133 3.50051 3.53164 3.52645C3.41271 3.6827 3.38661 3.72786 3.4038 3.80848C3.43865 3.97052 3.69855 4.45287 4.12567 4.87896C4.55279 5.30506 5.02132 5.5485 5.18401 5.58319C5.26809 5.60116 5.31419 5.57397 5.47547 5.45085C5.4986 5.43319 5.52236 5.41491 5.54721 5.39663C5.7138 5.27272 5.84539 5.18506 6.02012 5.18506C6.17218 5.18506 6.3033 5.251 6.51897 5.35975C6.80028 5.50163 7.44275 5.8846 7.72453 6.16882C7.86159 6.30695 7.93801 6.39508 7.97536 6.49398C8.03162 6.64289 7.97864 6.75961 7.9441 6.83774C7.93832 6.85071 7.93191 6.86493 7.92519 6.88071C7.85941 7.03658 7.77942 7.18606 7.68624 7.32728C7.52011 7.57572 7.35179 7.76806 7.0708 7.89884C6.92651 7.96708 6.7686 8.00165 6.60899 7.99994Z" fill="black"/>
              </g>
            </svg>
              <label for="name">Telefone:</label>
            </div>
            <input type="text" class="username_input" id="username_input" name="phone_input" placeholder="Telefone">
          </div>
          <button type="submit" class="submit_button">Adicionar</button>
          <a href="main.php"><button onclick="cancelar();" class="cancel_button">Cancelar</button></a>
        </form>
      </section>
    </section>
  </main>
</body>

<script>
  // Botão cancelar envia novamente para a página principal
  function cancelar() {
    window.location.href = "main.php";
    event.preventDefault();
  }
</script>

</html>