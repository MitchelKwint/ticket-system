<!DOCTYPE html>
<html lang="nl">
<head>
    <link rel="stylesheet" href="../public/stylesheets/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket system</title>
</head>
<body>

    <section id="page">

        <! –– Begin header -->
            <header>
                <h1>Ticket system</h1>
            </header>
        <! –– Einde header -->

        <! –– Begin main -->
            <main>

                 <?php if ($basename == 'index') require_once('../private/functions/show.php'); ?>
               
                 <?php if ($basename == 'edit') require_once('../private/form/edit.php'); ?>

            </main>
        <! –– Einde main -->

        <! –– Begin nav -->   
            <nav>

                 <div id="ticketmaking"> <a href="../private/form/insert.php">Ticket aanmaken</a> </div>

            </nav>
        <! –– Einde nav -->

        <! –– Begin footer -->
            <footer>

                 <?php if ($basename == 'index') require_once('../private/functions/fixed.php'); ?>

            </footer>
        <! –– Einde footer -->

    </section>

</body>
</html>