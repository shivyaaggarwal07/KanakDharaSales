<html>
<body>
<!-- <?php

$errors = ”;

$myemail = ‘yourname@website.com’;//<—–Put Your email address here. if(empty($_POST[‘name’]) ||

empty($_POST[’email’]) ||

empty($_POST[‘message’]))

{

$errors .= “\n Error: all fields are required”;

}

$name = $_POST[‘name’];

$email_address = $_POST[’email’];

$message = $_POST[‘message’];

if (!preg_match(

“/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i”, $email_address))

{

$errors .= “\n Error: Invalid email address”;

}

if( empty($errors))

{

$to = $myemail;

$email_subject = “Contact form submission: $name”;

$email_body = “You have received a new message. “.

” Here are the details:\n Name: $name \n “.

“Email: $email_address\n Message \n $message”;

$headers = “From: $myemail\n”;

$headers .= “Reply-To: $email_address”;

mail($to,$email_subject,$email_body,$headers);

 //redirect to the ‘thank you’ page -->

<!-- header(‘Location: contact-form-thank-you.html’); 

}

?> -->
<iframe src="https://docs.google.com/forms/d/e/1FAIpQLSc0YNqSCzHsKltWmq2iwLb_Xjl8DZFQcB2IOkjj4I_tO-O3rg/viewform?embedded=true" width="640" height="705" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
</body>
</html>
<iframe src="https://docs.google.com/forms/d/e/1FAIpQLSc0YNqSCzHsKltWmq2iwLb_Xjl8DZFQcB2IOkjj4I_tO-O3rg/viewform?embedded=true" width="640" height="705" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>