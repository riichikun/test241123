<?php


$name = $_POST['name'];
$tel = $_POST['tel'];
$subject = 'Консультация по телефону';
$message = 'Здравствуйте, меня зовут' . $name . '. Прошу позвонить мне на номер: ' . $tel;
$headers = array(
    'From' => 'test@example.com',
    'Reply-To' => 'test@example.com',
    'X-Mailer' => 'PHP/' . phpversion()
);

mail('mail1@example.com', $subject, $message, $headers);
mail('mail2@example.com', $subject, $message, $headers);
?>
