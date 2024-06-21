<?php
session_start();

$input = json_decode(file_get_contents('php://input'), true);
if (isset($input['cart'])) {
    $_SESSION['cart'] = $input['cart'];
}
?>
