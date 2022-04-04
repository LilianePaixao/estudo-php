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
            <h3 class="ligth">Beneficiário</h3>
                <form action= "exibirDados.php" method="POST" class="col s12">
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="name" type="text" name ="name">
                            <label for="name">Nome Completo</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s3">
                            <input placeholder="Placeholder" id="document" type="text" name="document">
                            <label for="document">Documento</label>
                        </div>
                        <div class="input-field col s3">
                            <input  placeholder="dd/mm/aaaa"id="birthdate" type="text" class="validate" name="birthdate">
                            <label for="birthdate">Data de Nascimento</label>
                        </div>
                        
                        <div class="input-field col s3 ">
                        <p>
                            <input name="gender" type="radio" id="male">
                            <label for= "male">Masculino</label>
                        </p>
                        <p>
                            <input name="gender" type="radio" id="fem">
                            <label for= "fem">Masculino</label>
                        </p>
                        <p>
                            <input name="gender" type="radio" id="others">
                            <label for= "others">Outros</label>
                        </p>
                        </div>
                        
                        <div class="input-field col s3">
                            <input placeholder="status" id="status" type="text" name="status">
                            <label for="status">Situação</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="adress" type="text" class="validate" name="adress">
                            <label for="first_name">Logradouro</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s3">
                            <input id="number" type="text" name="number">
                            <label for="number">Número</label>
                        </div>
                        <div class="input-field col s3">
                            <input id="district" type="text" name="district">
                            <label for="district">Bairro</label>
                        </div>
                        <div class="input-field col s3">
                            <input id="city" type="text" name="city">
                            <label for="city">Cidade</label>
                        </div>
                        <div class="input-field col s3">
                            <input placeholder="MG" id="state" type="text" name="state">
                            <label for="state">Estado</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="email" type="email" class="validate" name="email">
                            <label data-error="E-mail inválido" for="email">Email</label>
                        </div>
                        <div class="input-field col s6">
                            <input placeholder="(xx)xxxxx-xxxx" id="tel" type="tel" name="tel">
                            <label for="tel">Telefone</label>
                    </div>
                    <div style="text-align:right">
                         <i class="material-icons right"></i>
                        
                         <input type="submit" name="enviar" class="btn">
                        <!-- <a href="exibirDados.php" class="btn green"> Exibir Dados </a> -->
                    </div>
                </form>
            </div>
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
        setTimeout(function(){
        $("#radio-element").attr('checked','checked');
        },10);
        </script>

    </body>
</html>    
