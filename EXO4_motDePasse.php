
<html>
<head>
    <!-- lien CDN Bootstrap 5  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">    <!-- CSS Styling -->
    <style>
        .passwordEntree{
    margin-top: 5%;
            text-align :center;
        }

        .affichageQualiteMdp{
    margin-top: 5%;
            display: none;
            text-align :center;
        }
    </style>
</head>
<body onload='document.formulaireMdp.saisieMdp.focus()'>
    <div class="d-flex text-danger justify-content-center">
        <h4 style="margin-top: 10%; text-align :center">
    Vérification force du mot de passe </h4>
    </div>
    <form name="formulaireMdp" action="#">

        <input type="password" placeholder="Entre votre mot de passe" id="saisieMdp" class="form-control passwordEntree"/>
        <input type="submit" name="soumettre" value="Soumettre" onclick="verifieMdp(document.formulaireMdp.saisieMdp)" class="form-control passwordEntree"/>


    </form>
    <script src="EXO4_VerifieMdp.js"></script>

</body>
</html>