
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="../js/jquery-3.6.0.js"></script>
    <title>Document</title>
</head>
<body>
   
    
    <h1>TESTANDO</h1>
        <label for=""> Escolha seu dia</label>
        <br>
        <input type="date" id="dia">
        <br>

        <script>
            $('#dia').change(function(e){ 
                var option = '<option>Selecione a hora</option>'; 
                var min = ['07:00','08:00','09:00','10:00','11:00','12:00','14:00','15:00','16:00','17:00'];         
                var dia = $('#dia').val();
                           
		$.getJSON('teste.php?dia='+dia, function (dados){
		        if (dados.length > 0){    
                    $.each(dados, function(i, obj){
                        $.each(min, function(j, hrs){
                            if(hrs == obj.hora){
                                min.splice(j, 1);
                            }

                        })
                    }) 
                                 
                }            
                $.each(min, function(j, hrs){
                    option += '<option>'+hrs+'</option>';
                  
                 })
                 $('#horas').html(option).show();
                 
           });       
                          
        })
        
        </script>
    <br>
    <label>Horarios</label>
    <br>
    <select name="" id="horas">
    <option>Selecione a hora</option>
     

    </select>

       
</body>
</html>

