<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="../../public/stylesheets/style.css">
    <title>Ticket system</title>
</head>
<body>

<?php require_once ('../functions/date.php');?>

<section id="page">

        <! –– Begin header -->
            <header>
                <h1>Ticket system</h1>
            </header>
        <! –– Einde header -->
    <main>
        
        <form method="post" action="../functions/insert.php">

                <input type="text" name="ID" disabled value="">

                <input type="text" name="Date" required value="<?php echo $date?>">

                <input type="text" name="Customer_id" required value="">

                <input type="text" name="Omschrijving" required value="">

            <input type="submit"  name="submit" value="Submit">

        </form>

    </main>
         <! –– Einde main -->

         <! –– Begin nav -->   
    <nav>
        
    </nav>
         <! –– Einde nav -->

         <! –– Begin footer -->
    <footer>

    </footer>
        <! –– Einde footer -->
</section>

</body>
</html>