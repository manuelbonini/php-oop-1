<?php
    class User {
        public $name;

        public $lastname;

        public $email;

        public $password;

        public $date_of_birth;


        public function __construct($name, $lastname, $email) {
            $this->name = $name;
            $this->lastname = $lastname;
            $this->email = $email;
        }
    }


    $luca = new User('Luca', 'Rossi', 'lucarossi@gmail.com');
    $luca->password = 'liukrox';
    $luca->date_of_birth = '01-12-2000';


    $paolo = new User('Paolo', 'Verdi', 'paoloverdi@gmail.com');
    $paolo->password = 'paolone77';
    $paolo->date_of_birth = '28-5-1996';


    $giovanni = new User('Giovanni', 'Bianchi', 'giovabianchi@gmail.com');
    $giovanni->password = 'giovawhite';
    $giovanni->date_of_birth = '13-10-1990';

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=ù, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <ul>
        <li>
            Nome: <?php echo $luca->name ?> <br>Cognome: <?php echo $luca->lastname ?><br>Email: <?php echo $luca->email ?>
        </li>

        <li>
            Nome: <?php echo $paolo->name ?> <br>Cognome: <?php echo $paolo->lastname ?> <br>Email: <?php echo $paolo->email ?>
        </li>

        <li>
            Nome: <?php echo $giovanni->name ?> <br>Cognome: <?php echo $giovanni->lastname ?> <br>Email: <?php echo $giovanni->email ?>
        </li>
    </ul>

</body>
</html>