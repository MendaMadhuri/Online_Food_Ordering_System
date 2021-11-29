<html>
<body>
<form action="test2.php" method="POST">
<button name="button">arun</button>
</form>

<?php

if (isset($_POST['button'])) {
    echo"clicked";
}
?>
</body>
</html>