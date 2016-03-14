
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf8" >
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title name="Saint Etienne de Crossey: contact"></title>
       
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
        <!-- Fonts-->
        <link href='https://fonts.googleapis.com/css?family=Niconne' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
        
         <link rel="stylesheet" href="entete_Cassiau.css" type="text/css" charset="utf-8">
        
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <?php
include ( "entete_Cassiau.php");
?>

    
    <body class="contact">
        <h1 class="col-xs-12 col-sm-6 col-sm-offset-3">N'hésitez pas à nous contacter</h1>
        <div class="panel panel-default col-xs-10 col-xs-offset-1">        
        <div class="panel-body">
         <form class="form-horizontal col-xs-offset-1  col-xs-10 " role="form">
             <div class="form-group ">
                 <label class="control-label col-sm-4 col-xs-12 " for="Titre"><h3>Titre de votre message</h3></label>
                 <input type="textarea" id="Titre" class="control-label col-sm-6 col-xs-12" placeholder="Titre de votre message" >
             </div>
             <div class="form-group">
                 <label class="control-label col-sm-4 col-xs-12" for="nom">Votre nom</label>
                 <input type="textarea" id="nom" class="control-label col-sm-6 col-xs-12" >
             </div>
             <div class="form-group">
                 <label class="control-label col-sm-4 col-xs-12" for="naissance">Votre date de naissance</label>
                 <input type="date" id="naissance" class="control-label col-sm-6 col-xs-12" placeholder="JJ/MM/AAAA">
             </div>
             <div class="form-group">
                 <label class="control-label col-sm-4 col-xs-12" for="email">Votre email</label>
                 <input type="e-mail" id="email" class="control-label col-sm-6 col-xs-12" >
             </div>
             <div class="form-group">
                 <label class="control-label col-sm-4 col-xs-12" for="nationalite">Le pays de votre nationalité:</label>
                 <select name="nationalite"id="nationalite" class="control-label col-sm-6 col-xs-12" >
                     <option>France</option>
                     <option>Suisse</option>
                     <option>Italie</option>
                     <option>Allemande</option>
                     <option>Autre Pays Européen</option>
                     <option>Pays du continent africain</option>
                     <option>Pays du continent asiatique</option>
                     <option>Pays du continent américain</option>
                     <option>Pays de l'Océanie</option>
                     <option>Pays du Moyen-Orient</option>
                     <option>Autres</option>
                 </select>       
             </div>
             <div class="form-group">
                 <label class="control-label col-sm-4 col-xs-12" for="message">Votre message</label>
                 <input type="text-area" id="message" class="control-label col-sm-6 col-xs-12" >
             </div>
             <input id="valider"type="button" value="Envoyer" class="col-xs-12 col-sm-6 col-sm-offset-4">
            
        </form>
            </div>
        </div>
        
       <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <!-- Javascript de Bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
 
    </body>
</html>