<?php

include('User.php');
include('Registration.php');

$myAccount =  new User();



$myAccount->eintragen($_POST ['name'], "name");
$myAccount->eintragen($_POST ['email'], "email");
$myAccount->eintragen($_POST ['password'], "password");



// $_GET & $_POST
 
print_r($_POST);


?>

<html>
    <head>
    </head>
        <body>
            <h1>Registriere dich jetzt!<h1>
            <?php echo "Benutzername: ".$myAccount->usrname ;?>
            <?php echo "E-Mail: ".$myAccount->email ;?>
            
        

            
            <form action="" method="POST">
                <div>
                    <div>
                        <p>Bitte gib dein Benutzernamen an</p>
                        <input type="text" value="" name="name"/>

                        <p>Bitte E-Mail Adresse angeben</p>
                        <input type="text" value="E-Mail*" name="email"/>

                        <p>Bitte Passwort definieren</p>
                        <input type="text" value="Passwort setzen" name="password"/>
                    </div>
                </div>

                <input type="submit" value="Registrieren & Senden by POST"/>

            </form>

        </body>
</html>

<?php


?>
