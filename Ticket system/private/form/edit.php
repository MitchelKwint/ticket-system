<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="../../public/stylesheets/style.css">
    <title>Ticket system</title>
</head>
<body>

<?php require_once ('../functions/select.php');?>

<section id="page">

        <! –– Begin header -->
            <header>
                <h1>Ticket system</h1>
            </header>
        <! –– Einde header -->
    <main>
        
        <form method="post" action="../functions/edit.php?ID=<?=$row['ID']?>">

                <input type="text" name="ID" disabled value="<?php echo $ID;?>">

                <input type="date" name="Date" disabled value="<?php echo $Date;?>">

                <input type="text" name="Customer_id" disabled value="<?php echo $Customer_id;?>">

                <input type="text" name="Omschrijving" required value="<?php echo $Omschrijving;?>">

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