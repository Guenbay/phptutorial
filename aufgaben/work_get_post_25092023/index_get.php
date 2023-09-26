<?php

include('User.php');
include('Registration.php');

$myAccount = new User();

$myAccount->eintragen($_GET ['name'], "name");
$myAccount->eintragen($_GET ['email'], "email");
$myAccount->eintragen($_GET ['password'], "password");


// $_GET & $_POST
 
print_r($_GET);


?>

<html>
    <head>
    </head>
        <body>
            <h1>Registriere dich jetzt!<h1>
            <?php echo "Benutzername: ".$myAccount->usrname;?>
            <br>
            <?php echo "E-Mail: ".$myAccount->email ;?>
            
        

            
            <form action="" method="GET">
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