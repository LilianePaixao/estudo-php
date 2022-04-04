<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Beneficiário</title>

        <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        
        <!--Materialize css-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
        
        <style type= "text/css">
          #centro {
            position: absolute;
            top: 50%;
            left:50%;
            transform: translate(-50%, -50%);
          }
        </style>
    </head>
    
    <body>
    
        <div class = "container" style="width:700px" id="centro">
            <div class="row">
            <h3 class="ligth">Dados Informados</h3>
             
            <?php
                $name = $_POST['name'];
                $document = $_POST['document'];
                $birthdate = $_POST['birthdate'];
                $group1= $_POST['group1'];
                $status = $_POST['status'];
                $adress= $_POST['adress'];
                $number = $_POST['number'];
                $district = $_POST['district'];
                $city = $_POST['city'];
                $state = $_POST['state'];
                $email = $_POST['email'];
                $tel = $_POST['tel'];
                

                echo "Nome : $name.<br>";
                echo "Documento : $document.<br>";
                echo "Data de Nascimento : $birthdate.<br>";
                echo "Sexo : $group1.<br>";
                echo "Situação : $status.<br>";
                echo "Endereço : $adress.<br>";
                echo "Número : $number.<br>";
                echo "Bairro : $district.<br>";
                echo "Estado : $state.<br>";
                echo "E-mail : $email.<br>";
                echo "Telefone : $tel.<br>";
            ?>
                    
            <a href="index.php" class="btn green"> Voltar </a>       
        </div>
        
        <!--Jquery--> 
        <script src="https://code.jquery.com/jquery-1.12.0.min.js"> </script> 

        <!--Materialize JS--> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

        <script type="text/javascript">
        window.onload=function(){
        $(document).ready(function() {
        $('select').material_select();
        });
        }
        </script>

    </body>
</html>    
