<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hi</h1>
    <p>Hello </p>
    <?php

    echo 'Hello from server: '.date('Y-m-d');
    ?>
    <br>
    <script>
        document.write('Helo from client'+new Date())
        alert('Hi')
    </script>
</body>
</html>