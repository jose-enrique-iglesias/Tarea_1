<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
    <link rel="stylesheet" href="<?php echo asset('css/bootstrap.min.css')?>">
    <script src="<?php echo asset('js/jquery.min.js')?>"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-2">

            </div>
            <div class="col-lg-8">
                <div class="panel panel-primary">
                    <div class="panel panel-heading">
                        <h3 align="center">EJERCICIO 1: NUMERO MAYOR</h3>
                    </div>
                    <div class="panel-body">
                        <form method="post" id = "formulario_ejercicio_1">
                        @csrf
                            <div class="form-group">
                                <label>Primer numero</label>
                                <input type="text" name="numero_1" id="numero_1" class = "form-control" required autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label>Segundo numero</label>
                                <input type="text" name="numero_2" id="numero_2" class = "form-control" required autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label>Tercer numero</label>
                                <input type="text" name="numero_3" id="numero_3" class = "form-control" required autocomplete="off">
                            </div>
                            <div class="form-group">
                                <button type="submit" class = "btn btn-primary btn-lg">CALCULAR</button>
                                <button type="submit" class = "btn btn-info btn-lg" onclick = "location.href = '/'">PAGINA PRINCIPAL</button>
                            </div>
                            <div class="form-group">
                                <label>Resultado</label>
                                <input type="text" name="resultado" id="resultado" class = "form-control" disabled>
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
            <div class="col-lg-2">
                
            </div>
        </div>
    </div>
    <script>
        $("#formulario_ejercicio_1").submit(function (e) { 
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: "<?php echo route('Tarea1.numeroMayor')?>",
                data: $("form").serialize(),
                success: function(response){
                    var valores =  eval(response);
                    $("#resultado").val(valores[0]);
                }
            });
        });
        
    </script>
</body>
</html>