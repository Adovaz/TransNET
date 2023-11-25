<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>TransNET</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                fontFamily: {
                    sans: ["Oxygen", "sans-serif"],
                    serif: ["Merriweather", "serif"],
                },
                extend: {
                    colors: {
                        //Define Trans flag colors
                        TPink: "#F5A9B8",
                        TBlue: "#5BCEFA",
                    },
                },
            },
        };
    </script>
</head>

<body class="dark:bg-slate-800 dark:text-white min-h-screen flex flex-col">
    <!--Menu Bar-->
    <?php include "include/menu.php"; ?>
    <!--Content-->
    <?php 
    include "universal.php";
    $title = "Title";
    $description = "Description of something and things ect.";
    $pdfUri = "comethin";
    $tile = new resourceTile($title, $description, $pdfUri);
    echo $tile->display();
    ?>
    <!--Footer-->
<?php include "include/footer.php"; ?>

</body>

</html>