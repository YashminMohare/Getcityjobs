<?php

if (isset($_POST['submit'])) {

    //get email form signup form
    $job_title = $_POST['job_title'];
    $applicant_name = $_POST['applicant_name'];
    $applicant_email = $_POST['applicant_email'];
    $application_message = $_POST['application_message'];

    //email headers and message body
    $headers = "From: $applicant_name <$applicant_email>\r\n";
    $headers .= "Reply-To: $applicant_name <$applicant_email>\r\n";
    $message = "Job Title: $job_title \n\n";
    $message .= "Applicant Name: $applicant_name \n\n";
    $message .= "Applicant Email: $applicant_email \n\n";
    $message .= "Application Message: \n\n $application_message";

    // send the email
    $recruiter_email = $email; 
    $subject = "New job application for $job_title";
    $mail_sent = mail($recruiter_email, $subject, $message, $headers);

    if ($mail_sent) {
        echo "Your application has been sent.";
    } else {
        echo "There was an error sending your application.";
    }
}

?>