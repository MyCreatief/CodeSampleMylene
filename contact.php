<?php
include 'includes/header.php';
?>

<section>

<!--    TO DO: Add check to form.    -->

    <?php
    if (isset($_POST['submit'])) {
    $to = "myklijn@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "Bericht van mycreatief | " . $_POST['subject_message'];
    $subject2 = "Copy van uw e-mail naar Mylene Klijn | Front-end developer";
    $message = $first_name . " " . $last_name . " Schreef het volgende:" . "\n\n" . $_POST['message'];
    $message2 = "Beste " . $first_name . "\n\n" . "U heeft het volgende bericht verzonden naar Mylene Klijn | Frontend developer:" . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to, $subject, $message, $headers);
    mail($from, $subject2, $message2, $headers2); // sends a copy of the message to the sender
    echo "<div class='message'>Bedankt " . $first_name . ", <br/> Het bericht is verzonden.</div>";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
    ?>

    <form action="" method="post" >
        <label >Voornaam:</label >
        <input type="text" name="first_name" >
        <label >Achternaam: </label >
        <input type="text" name="last_name" >
        <label >E-mail adres:</label >
        <input type="text" name="email" >
        <label >Onderwerp:</label >
        <input type="text" name="subject_message" >
        <label >Bericht:</label >
        <textarea rows="5" name="message" cols="30" ></textarea >
        <button class="hvr_ripple_out" type="submit" name="submit" >Submit</button >
    </form >
</section>

<?php
include 'includes/footer.php';
?>