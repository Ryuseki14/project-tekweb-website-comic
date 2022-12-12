<?php
require('Persistence.php');

$db = new Persistence();
$added = $db->add_comment($_POST);

if($added) {
  header( 'Location: Comics.php' );
}
else {
  header( 'Location: Comics.php?error=Your comment was not posted due to errors in your form submission' );
}
?>