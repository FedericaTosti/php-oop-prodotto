<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Prodotto-oop</title>
  </head>
  <body>
    <!-- Provare a immaginare una classe, definendo le variabili d'ambiente per disegnare un ipotetico prodotto di magazzino;
    Definire anche costruttore completo (tutte le variabili che avete creato) + printMe per fare il log -->

    <?php

      class Prodotto {
         public $codice;
         public $settore;
         public $costo;

         public function __construct($codice, $settore, $costo) {
           $this -> codice = $codice;
           $this -> settore = $settore;
           $this -> costo = $costo;
         }

         public function printMe(){
           echo "Codice: " . $this -> codice . "<br>" . " Settore: " . $this -> settore . "<br>" . " Costo: " . $this -> costo . "<br>";
           echo "<br>";
         }
      }

      $cibo = new Prodotto(0, 0, 0);
      $cibo -> codice = "Sigla";
      $cibo -> settore = "Alimentari";
      $cibo -> costo = "Prezzo";

      echo "CIBO <br>";
      $cibo -> printMe();

      class Verdura extends Prodotto {
        public $reparto;
        public $pezziDisponibili;

        public function __construct($codice, $settore, $costo, $reparto, $pezziDisponibili) {
          parent::__construct($codice, $settore, $costo);
          $this -> reparto = $reparto;
          $this -> pezziDisponibili = $pezziDisponibili;
        }

        public function printMe(){
          echo "Codice: " . $this -> codice . "<br>" . " Settore: " . $this -> settore . "<br>" . " Costo: " . $this -> costo . "<br>" . " Reparto: " . $this -> reparto . "<br>" . " Pezzi Disponibili: " . $this -> pezziDisponibili . "<br>";
          echo "<br>";
        }
      }

      $lattuga = new Verdura(0, 0, 0, 0, 0);
      $lattuga -> codice = "958753209";
      $lattuga -> settore = "Alimentari";
      $lattuga -> costo = "0,99 €";
      $lattuga -> reparto = "12";
      $lattuga -> pezziDisponibili = "100";

      echo "LATTUGA <br>";
      $lattuga -> printMe();

    ?>

  </body>
</html>
