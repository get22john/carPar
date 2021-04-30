<?php
require_once "SendMail.php";

$sendMail = new SendMail();

$errors = [];
$errorMessage = '';
$successMessage = '';

if (isset($_POST['send'])) {
    if (!empty($_POST)) {
        $name = $_POST['name'];
        $subject = $_POST['subject'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        if (empty($name)) {
            $errors[] = 'Name is required';
        }

        if (empty($subject)) {
            $errors[] = 'Subject is required';
        }

        if (strlen($subject) > 50) {
            $errors[] = 'Subject cannot be more than 50 characters';
        }

        if (empty($email)) {
            $errors[] = 'Email is required';
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = 'Email is invalid';
        }

        if (empty($message)) {
            $errors[] = 'Message is required';
        }

        if (!empty($errors)) {
            $allErrors = join('<br/>', $errors);
            $errorMessage = "<p style='color: red;'>{$allErrors}</p>";

        } else {

            $mailBody = '<h4>Message from: ' . $name . ' - '. $email.'</h4> 
                        <p>'. $message . '</p>
						<div>Sent: ' . date('d, M Y') . '</div>';
            $mailSubject = $subject;
            if($sendMail->sendMailSMTP('sales@stevenautomobilesales.com', $mailSubject, $mailBody))
            {
                $sendMail->scream('ok');
            } 
            else 
            {
                $sendMail->scream($sendMail->showMessage('danger', 'An error occured!'));
            }
        }
    }
}
