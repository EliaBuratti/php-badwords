<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad words</title>
</head>

<style>
    body {
        width: 80%;
        height: 80%;
        margin: 2rem auto;
        text-align: center;
        font-family: sans-serif;
    }

    section {
        border: 2px solid lightgray;
        border-radius: 1rem;
        margin-bottom: 4rem;
        padding: 1rem;
    }
</style>

<body>

    <section>

        <h1>Write a phrase and type a word to be banned.</h1>
        <h3> <mark>Warning: it's case sensitive!!</mark> </h3>

        <form action="script.php" method="post">
            <input type="text" name="paragraph" id="paragraph" placeholder="Type a phrase" required>
            <input type="text" name="wordBan" id="wordBan" placeholder="Type word to be banned" required>
            <button type="submit">Censura</button>
        </form>

    </section>

</body>

</html>