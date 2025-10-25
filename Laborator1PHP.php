<!-- Laborator 1 PHP

Setarea mediului de lucru:
- instalam XAMPP;
- intram in C:\xampp\htdocs;
- cream un nou folder cu numele laboratorului sau proiectului, de exemplu C:\xampp\htdocs\Laborator1PHP;
- in folderul creat vom salva fisierul Laborator1PHP, type PHP (il putem salva si ca type All Files dar
va trebui sa adaugam la nume Laborator1PHP.php);
- dupa ce pagina va fi gata, o vom putea vizualiza scriind in browser http://localhost/Laborator1PHP; 
- scriem http://localhost/phpmyadmin/ daca vrem sa intram pe pagina principala a xampp-ului.  -->

<!-- Crearea primei pagini PHP

Scripturile PHP pot fi incluse si in fisiere HTML, ca in urmatorul exemplu: 

<!DOCTYPE html>
<html lang="ro">
  <head>
    <meta charset ="UTF-8">
    <title>Test</title>
  </head>
  <body>
    <?php
      echo "<h4>Script PHP inclus in HTML</h4>";
    ?>
  </body>
</html> -->

<!-- Exemplul 1:

Sa se creeze o pagina PHP care foloseste comenzile print si echo pentru afisarea
in browser a unei pagini web statice ce va contine doua mesaje text. -->

<!DOCTYPE html>
<html lang="ro">
  <head>
    <meta charset ="UTF-8">
    <title>Exemplu de afisare</title>
  </head>
  <body>
    <?php
      print "Comanda de afisare a datelor pe ecran"; // se afiseaza pe ecran textul scris intre ghilimele
    ?>
    <br/>
    <?php
      echo "Limbajul PHP"; // afiseaza pe ecran textul dintre ghilimele
    ?>
  </body>
</html>

<!-- Exemplul 2:

Sa se creeze o pagina php care sa permita generarea de tag-uri HTML din cod PHP. -->

<!DOCTYPE html>
<html lang="ro">
  <head>
    <meta charset ="UTF-8">
    <title>Exemplu de afisare</title>
  </head>
  <body>
    <?php
      echo "<h1>Hello world!</h1>";
      echo "<br/>";
      echo "This is <b>bold</b> and <i>italic</i>";
    ?>
  </body>
</html>

<!-- Exemplu 3

Creati o pagina php care sa exemplifice:
1. modul de utilizare a comentariilor in php si in html pe o linie respective pe 2 linii.
2. initializarea variabilei $an si afisarea valorii ei. -->

<!DOCTYPE html>
<html lang="ro">
  <head>
    <meta charset ="UTF-8">
    <title>Exemplu de afisare variabila si comentarii</title>
  </head>
  <body>
    <!-- Comentariu HTML -->
    <?php
      $an = 2025; // comentariu PHP pe o singura linie
      echo "An curent: "; # o alta linie de comentariu
      echo $an;
    ?>
    <!-- in afara PHP deci se foloseste din nou comenteriu HTML -->
    <br/>
    <?php
      $an = 2026; /* comentariu PHP pe o mai mult de o
      linie */
      echo "An curent: ";
      echo "<br/>";
      echo $an;
    ?>
    <!-- in afara PHP deci se foloseste din nou comenteriu HTML -->
</body>
</html>