<?php
include_once '../CONTROLLER/CategorieC.php';




$errorMessage = "";
$successMessage = "" ;

// create user
$Categorie = null;

// create an instance of the controller
$CategorieC = new CategorieC();
if (		
    isset($_POST["NomCategorie"])
){
    if ( !empty($_POST["NomCategorie"]) )
    {   
        $Categorie = new Categorie(
            null,
            $_POST['NomCategorie']
        );
        $CategorieC->ajouterCategorie($Categorie);
        header("Location:indexcategorie.php?successMessage= Categorie ajoutée avec successee");
    }
    else
        $errorMessage = "<label id = 'form' style = 'color: red; font-weight: bold;'>&emsp;Une Information manquant !</label>   ";    
}   


?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>AGRICLICK - Organic Farm Website </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet"href="style.css">
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>
    <title>Categories</title>
    <script>
        function validateForm() {
    var NomCategorie = document.getElementById("NomCategorie").value;
    
    if (NomCategorie.trim() === "") {
        alert("Tous les champs sont obligatoires.");
        return false;
    }
    
    if (NomCategorie.length <= 5) {
        alert("Le nom du Categorie doit contenir plus de 5 caractères.");
        return false;
    }
    
    var firstChar = NomCategorie.charAt(0);
    if (firstChar !== firstChar.toUpperCase()) {
        alert("Le nom du Categorie doit commencer par une lettre majuscule.");
        return false;
    }
    

    if (/\d/.test(NomCategorie)) {
        alert("Le nom du Categorie ne doit pas contenir de chiffres.");
        return false;
    }
    
    
    if (/[!@#$%^&*(),.?":{}|<>]/.test(NomCategorie)) {
        alert("Le nom du Categorie ne doit pas contenir de signes spéciaux.");
        return false;
    }
    
    return true;
}
    </script>
</head>
    <body>
    <style>
  .error-message {
    color: red;
    font-size: 0.8em;
    margin-top: 0.2em;
  }
     </style>

  
    <div class="container my-5">
    <center><h1>Nouveau categorie</h1></center>
    <hr>
    <br>
        
      


        <form method="post" class="form" name="form"  id="form" enctype="multipart/form-data" onsubmit="return validateForm()">



            <!--------------------------------------------nom ------------------------------------------------->
            <div class=" input-group mb-3 ">
                <label class="col-sm-3 col-form-label "> Nom Categorie </label>
                <div class="col-sm-6">
                    <input type="text" class="form-control"  name="NomCategorie" id="NomCategorie"  placeholder= "nomCategorie">
                </div>
            </div>
 <!---------------------------------------------Buttons---------------------------------------------->
 <div class="row mb-5">
             <div class="offset-sm-3 col-sm-3 d-grid">
                <button  type="submit" class="btn btn-primary" name = "Ajouter"  id ="Ajouter">ajouter</button>
             </div>
             <div class="col-sm-3 d-grid">
                 <a class="btn btn-secondary py-md-3 px-md-5" href="indexcategorie.php" role="button">quitter</a>
             </div>
          </div>





        </form>
        </div>
        <!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/counterup/counterup.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
    </body>
</html>




