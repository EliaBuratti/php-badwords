<?php


$paragraph = $_POST['paragraph'];
$wordBan = $_POST['wordBan'];
$paragraphBan = str_replace($wordBan, '***', $paragraph);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paragraph Ban</title>
</head>

<style>
    body {
        width: 80%;
        height: 80%;
        margin: 2rem auto;
        text-align: center;
    }

    section {
        border: 2px solid lightgray;
        border-radius: 1rem;
        margin-bottom: 4rem;
        padding: 1rem;
    }
</style>

<body>


    <section id="input-user">
        <h3> Paragrafo: </h3>
        <p>
            <?php echo $paragraph ?>
        </p>
        <h3> Lunghezza: <?php echo strlen($paragraph) ?></h3>
    </section>

    <section id="paragraph-word-banned">
        <h2> Parola da bannare: <?php echo $wordBan ?> </h2>

        <h3> Paragrafo con parole bannate: </h3>
        <p>
            <?php echo $paragraphBan ?>
        </p>
        <h3> Lunghezza: <?php echo strlen($paragraphBan) ?></h3>
    </section>






</body>

</html>