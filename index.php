<?php 

if (!isset($_GET["page"])){

    include "acceuil.php";

}else{
   $target = ($_GET["page"]);

    switch($target){

        case "Home":
            include "acceuil.php";
        break;

        case "Gallery":
            include "Pages/gallery.php";
        break;

        case "Tutorial":
            include "Pages/tutorial.php";
        break;

        case "Resume":
            include "Pages/resume.php";
        break;

        case "Contact":
            include "Pages/contact.php";
        break;
        default:
            include "Pages/404.php";
    }
}

?>