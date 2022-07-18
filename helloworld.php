<html>
    <head>

        <link rel="stylesheet" href="style.css"> 
    </head>
    <body>
        <?php
            echo "hiiiiiii";
            echo "Hello world -PHP-" ;
            # this is a comment in php
            // this a comment in php
            /**
             * this is  a
             * multi-line comment 
             * in php 
             */
            echo "test";
        ?>
        <h1 style="color:brown"> This is my first page -HTML- </h1>
<!--        <script>-->
<!--                alert("Good morning Team from js")-->
<!--        </script>-->

        <?php

            echo  "<h1> End of the page  </h1>";
            echo htmlspecialchars("<h1 Hello Ahmed </h1>");
            echo "<br> hi";
            echo "<br>";
            echo "Bye";

            echo "<p>Now, Its ";
            echo date('H:i , jS F Y');
            echo "</p>";


        ?>


    </body>

</html>


