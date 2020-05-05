<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
    <div id="autodata"></div>
    <script>
        $(document).ready(function(){
            setInterval(function(){
                $("#autodata").load("simple_page.php");
                refresh()
            }, 1000);
        });
    </script>
</body>
</html>