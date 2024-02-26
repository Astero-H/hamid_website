<?php
require_once '../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/..');
$dotenv->load();

header('Content-type: application/json');
ini_set('display_errors','Off');

$response = array();
// check email into post data
if (isset($_POST['submit_message'])) {
    $email = trim($_POST['email']);
    $name = trim($_POST['name']);
    $message = trim($_POST['message']);
    $recipient = $_ENV['RECIPIENT'];
    $email = filter_var(@$email, FILTER_SANITIZE_EMAIL );
    
    $name = htmlentities($name);
    $message = htmlentities($message);
    
    // Validate data first
    if (!filter_var($email, FILTER_VALIDATE_EMAIL) || strlen($email) > 50 ) {
        http_response_code(403);
        $response['error']['email'] = "A valid email is required";
    }
    if (empty($name) ) {
        http_response_code(403);
        $response['error']['name'] = 'Name is required ';
    }
    if (empty($message)) {
        http_response_code(403);
        $response['error']['message'] = 'Empty message is not allowed';
    }
    
    // Process to emailing if forms are correct
    if (!isset($response['error']) || $response['error'] === '') {
        
        /* in this sample code, messages will be stored in a text file */
        //        PROCESS TO STORE MESSAGE GOES HERE
        
        $content = "Name: " . $name . " \r\nEmail: " . $email .  " \r\nMessage: " . $message;
        $content = str_replace(array('<','>'),array('&lt;','&gt;'),$content);
        $name = str_replace(array('<','>'),array('&lt;','&gt;'),$name);
        $message = str_replace(array('<','>'),array('&lt;','&gt;'),$message);
        
        // -- BELOW : EXAMPLE SEND YOU AN EMAIL CONTAINING THE MESSAGE (comment to disable it/ uncomment it to enable it)
        // Set the recipient email address.
        // IMPORTANT - FIXME: Update this to your desired email address (relative to your server domaine).
        
        // Set the email subject.
        $subject = "Need support message From ".$name;
        
        // Build the email content.
        $email_content = $message."<br><br>";
        $email_content .= "Sincerely, <br><br>";
        $email_content .= "From: $name <br><br>";
        $email_content .= "Email: $email<br><br>";
        
        // Build the email headers.
        $email_headers = "MIME-Version: 1.0" . "\r\n";
        $email_headers .= "Content-Type: text/html; charset=UTF-8" . "\r\n";
        $email_headers .= "From: $name <$email>" . "\r\n";
        $email_headers .= "Reply-To: <$email>";
        
        
        // Send the email.
        if ( mail($recipient, $subject, $email_content, $email_headers) ) {
            // Set a 200 (okay) response code.
            http_response_code(200);
            $response['success'] = 'Thank You! Your message has been sent';
            
        } else {
            // Set a 500 (internal server error) response code.
            http_response_code(500);
            $response['error'] = 'Oops! Something went wrong and we couldn\'t send your message';
            $content = 'Message delivery error - can not send message'. "\r\n" . $content;
            // Uncomment below to Write message into a file as a backup
            //file_put_contents("message.txt", $content . "\r\n---------\r\n", FILE_APPEND | LOCK_EX);
        }
        
    }
    else {
        // Set a 403 (error) forbidden response code due missing data to error.
        http_response_code(403);
        //$response['error'] = '<ul>' . $response['error'] . '</ul>';
    }
    
    
    $response['email'] = $email;
    $response['form'] = 'submit_message';
    echo json_encode($response);
    /*
    response will be : {
        email : 'user@email.com',
        form : 'submit_message',
        success : 'Feedback message if success',
        error : 'A feedback message if an error happened, or a JSON'
    }
    */
}