<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body id="asd">

        <img src="https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png" alt=""/>
        <form action="https://www.google.com/search" method="get" >

            <!-- INPUT TAG must be inside form -->
            <INPut type="text" name="name" id="q" class="myClass"  >
            <input type="submit">
        </form>
        <?php
            echo 'From Server I am writing this';
        ?>
        <br>
        <script>
        document.write('From Browser I am writing this.')
        alert('hi')
        </script>
    </body>
</html>

