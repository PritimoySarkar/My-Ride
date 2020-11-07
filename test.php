<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <h1>Hey</h1>
    <button onclick="myFunc()">Click</button>
    <script type="text/javascript">
        function myFunc() {
            console.log("hey")
            <?php
                echo "hey";
            ?>
        }
    </script>
</body>
</html>