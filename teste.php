<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>
</head>

<style>
    :focus {
        outline: 1px solid coral;
    }

    form {
        height: 50vh;
    }

    form input {
        border: none;
        border-bottom: 1px solid;
        height: 1.375rem;
        transition: height 0.125s;
    }

    form input:focus {
        height: 1.500rem;
    }
</style>

<body>
    <form action="inc/process_contact.inc.php" method="POST">
        <input type="text" name="frm_name" placeholder="Nome">
        <input type="text" name="frm_email" placeholder="Email">
        <input type="text" name="frm_phone" placeholder="Telefone">
        <input type="submit">
    </form>
</body>
</html>