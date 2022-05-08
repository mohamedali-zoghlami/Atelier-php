<html>
<head><title>Recap</title>
<link rel="stylesheet" href="recap.css"></head>

<body>
<div class="container">
<h1> Recap du Commande </h1>
<p>Nom : </p><?= $_POST["nom"] ?><br>
<p>Prenom : </p><?= $_POST["prenom"] ?><br>
<p>Adresse : </p><?= $_POST["adr"]?><br>
<p>Nombre de sandiwch :</p><?= $_POST["nbr"]?><br>
<p>Type de sandwich :</p><?php if (isset($_POST["type"]))
                                echo($_POST["type"]);?><br>
<p>Ingrediants : </p>
        <?php   if(isset($_POST["Harissa"]))
                {echo("Harissa");?>
                <br>
                <?php
                } 
                if(isset($_POST["Salade"]))
                {echo("Salade");?>
                <br>
                <?php
                }
                if(isset($_POST["Mayo"]))
                {echo("Mayo");}?>
                <br>

<hr size="2" color="black">
<div class="text">Prix = <?php $total=$_POST["nbr"]*4; 
        if($total>40)
         echo($total*0.9);
         else
         echo($total);
         ?>Dt</div>
<div>
</div>
</body>
</html>