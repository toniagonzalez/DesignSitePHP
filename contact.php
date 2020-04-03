<?php
if(isset($_POST["submit"])){

//check for empty required fields
if($_POST["firstname"]==""||$_POST["lastname"]==""||$_POST["email"]==""||$_POST["subject"]==""||$_POST["message"]==""){
echo "Fill All Required Fields..";  
}else {
//sanitize, and validate senders email
$email=$_POST["email"];
$email=filter_var($email, FILTER_SANITIZE_EMAIL);
$email=filter_var($email, FILTER_VALIDATE_EMAIL);
if (!$email_from){
    echo "Looks like that email isn't valid.";
}
else{
$subject = "Contact Form Submission";
$subject2 = "Re: Tonia Gonzalez Design";
$email2 = "toniagonzalez.design@gmail.com"; //Tonia Gonzalez Design Email
$firstname = $_POST("firstname");
$fullname = $_POST("firstname")." ".$_POST("lastname");
$organization = $_POST("orgname");
$phone = $_POST("phone");
$message = $fullname." : ".$organization. "wrote ".$_POST("message") ."\n\n"."Phone: " .$phone;
$message2 = "Hi, ".$firstname."! Thank you for contacting Tonia Gonzalez Design! I'll review your message and follow up with you soon."."\n"."Kind regards, Tonia Gonzalez";
$headers = 'From: '.$email ."\r\n"; // Sender's Email
$headers2 = 'Cc:'. $email . "\r\n"; // Cc to Sender

// Message lines max 70 characters per (PHP limits)
$message = wordwrap($message, 70);
// Send email with PHP mail Function
mail($email2, $subject, $message, $headers);
mail($email, $subject2, $message2, $headers2);
echo "Hi, ".$firstname."! Thank you for contacting me. I'll be in touch with you very soon.";
}
}


}

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Tonia Gonzalez Design</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="styles.css" /> 
    </head>
    <body class="container-fluid">
            <nav class="navbar  navbar-dark bg-dark navbar-expand-md fixed-top">
            <a class="navbar-brand" href="#top">tgd</a>
            <button onclick="toggleNav()" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul onclick="toggleNav()" class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#top">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
        <header>
            <div class="jumbotron" id="top">
                <h1 class="display-4">Websites that promote your <span class="passionVariable">passion</span>.</h1>
                <hr class="my-4">
                <h2 class="lead">tonia gonzalez design</h2>
            </div>
        </header>
        <main>
            <!--Services-->
            <section class="services" id="services">
                <div class="section-header">
                    <h2>Services</h2>
                    <hr>
                </div>
                <ul class="circle-animation">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
                <div class="section-content">
                    <div class="card">
                        <p>New Websites</p>
                    </div>
                    <div class="card">
                        <p>Redesigns & Content Updates</p>
                    </div>
                    <div class="card">
                        <p>Multi-lingual Sites</p>
                    </div>
                    <div class="card">
                        <p>Wordpress Plugins & Themes</p>
                    </div>
                    <div class="card">
                        <p>Custom CSS</p>
                    </div>
                </div>
            </section>
             <!--Contact-->
            <section class="contact" id="contact">
                <div class="section-header">
                    <h2>Contact</h2>
                    <hr>
                </div>
                <div class="section-content">
                    <form action="contact.php" method="post" name="contact_form" enctype="application/x-www-form-urlencoded">
                        <fieldset>
                            <legend>Let's talk!<br> Tell me a little about what you are looking for.</legend>
                            <div class="input-field">
                                <label for="firstname">First Name: *</label>
                                <input type="text" id="firstname" name="firstname" required><br>
                            </div>
                            <div class="input-field">
                                <label for="lastname">Last Name: *</label>
                                <input type="text" id="lastname" name="lastname" required><br>
                            </div>
                            <div class="input-field">
                                <label for="orgname">Organization:</label>
                                <input type="text" id="orgname" name="orgname"><br>
                            </div>
                            <div class="input-field">
                                <label for="email">Your Email: *</label>
                                <input type="email" id="email" name="email" required><br>
                            </div>
                            <div class="input-field">
                                <label for="phone">Phone: 123-456-789 </label>
                                <input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"><br>
                            </div>
                            <div class="input-field">
                                <label for="message">Message: *</label><br>
                                <textarea id="message" name="message" required></textarea><br>
                            </div>
                            <p class="required">* Required field</p>
                            <p><?php include "contact.php" ?></p>
                            <div class="input-field">
                                <input type="submit" id="contact" value="Send Message"> 
                            </div>
                        </fieldset>
                    </form>
                    <ul class="social">
                        <li class="twitter"><a href="https://twitter.com/encantoarboles" target="_blank" title="Twitter">Twitter</a></li>
                        <li class="linkedin"><a href="https://www.linkedin.com/in/tonia-gonzalez-71404416a/" target="_blank" title="LinkedIn">Linkedin</a></li>
                        <li class="github"><a  href="https://github.com/toniagonzalez" target="_blank" title="Github">Github</a></li>
                    </ul>
                    <p>Reach out on social media or email: <a href="mailto: toniagonzalez.design@gmail.com">toniagonzalez.design@gmail.com</a></p>
                </div>
            </section>
             <!--About-->
            <section class="about" id="about">
                <div class="section-header">
                    <h2>About</h2>
                    <hr>
                </div>
                <div class="section-content">
                    <img src="images/ToniaGonzalez.jpg" title="Photo of Tonia Gonzalez Credit: Isabella Villareal" alt="Photo of Tonia Gonzalez Credit: Isabella Villareal"> 
                    <p>
                         Tonia Gonzalez is a software developer based in Portland, Oregon.  She is committed to fostering community and the arts through the web.  She has been inspired by her past work in the service industry where she served along side amazing artists, musicians, writers, thinkers, activist, and small business owners. <br> She believes that humanity thrives when we bring our projects to life.  As a web developer she serves people through creating amazing platforms that showcase those passion projects. 
                    </p>
                </div>
            </section>
        </main>
        <script src="main.js"></script>
    </body>
    <footer>
        <h7>Tonia Gonzalez Design &copy; 2020</h7>
    </footer>
</html>