<?php
session_start();
?>
<html>
<h1>Olet nyt kirjautunut ulos</h1>
<?php
session_unset();
session_destroy();
?>
</html>