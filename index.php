
<?php


/** User class
* @author brolyno@brolyno.com
* @copyright 2021 brolyno
 */

class User
{  // creo la classe User

    // definisco delle variabili d'istanza

    public $user_name;
    public $psw;
    public $mail;
    public $name;
    public $date_of_birth;

    public function __construct($user, $psw, $mail = "default@domain.com")
    // creo la funzione __costruct che richiede come argomenti username, password e mail ma alla mail assegno un valore di default nel caso non venga messa come argomento. ATTENZIONE il valore di default può anche essere null o "" (stringa vuota) per permettere di creare un oggetto omettendo dei valori ma senza per forza sostituirli con dei valori determinati.
    {

        $this->user_name = $user;
        $this->psw = $psw;
        $this->mail = $mail;
    }
    public function __toString()
    {

        $string = "User: <br>" . "Username: " . $this->user_name . "<br>" . "Email: " . $this->mail . "<br>"; 


        if ($this->name) {
            $string .= "Nome Completo: " . $this->name . "<br>";
        } else {
            $string .= "Nome Completo: " . "---" . "<br>";
        }

        if ($this->date_of_birth) {
            $string .= "Data di nascita: " . $this->date_of_birth . "<br>";
        } else {
            $string .= "Data di nascita: " . "---" . "<br>";
        }

        return $string;

    }
}



$user1 = new User("Homer", "Doh", "homer@simpson.us");
$user1->date_of_birth = "12 maggio 1956";
$user1->name= "Homer Jay Simpson";

$user2 = new User("Paola", "Bruna", "paola@gmail.it");
$user2->date_of_birth = "12 giugno 1958";
$user2->name = "Paola Bruna Bionda";

$user3 = new User("Peter", "Griffin", "peter@griffin.it");
$user3->date_of_birth = "12 dicembre 1954";
$user3->name = "Peter Legendary Griffin";


echo $user1;
echo $user2;
echo $user3;




  