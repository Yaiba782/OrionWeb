<html>
<head>
    <title>Osiris</title>
    <meta charset="UTF-8">
    <?php echo '<link href="'.dirname('__FILE__').'/css/bootstrap.min.css" rel="stylesheet">'; ?>
    <?php echo '<link href="'.dirname('__FILE__').'/css/style.css" rel="stylesheet">'; ?>
</head>
<body class="col-lg-10 col-lg-offset-1">

    <div class="col-lg-6">
        <h1 class="col-lg-offset-1">Osiris</h1>
        Bienvenue sur l'interface de commande d'Osiris.
        Vous pourrez commander Osiris de manière simple et instinctive à partir de ces boutons.
    </div>
    <div class="col-lg-8 ">
        <table class="table table-striped table-bordered table-hover">
            <tr>
                <th>
                    #
                </th>
                <th>
                    Salle
                </th>
                <th>
                    Statut
                </th>
            </tr>
            <tr>
                <td class="id_td">
                    1
                </td>
                <td>
                    Entrée
                </td>
                <td>
                    <div class="switch bg-danger">
                        <?php echo 'Eteint';?>
                    </div>
                </td>
            </tr><tr>
                <td class="id_td">
                    2
                </td>
                <td>
                    Salon
                </td>
                <td>
                    <div class="switch bg-danger">
                        <?php echo 'Eteint';?>
                    </div>
                </td>
            </tr><tr>
                <td class="id_td">
                    3
                </td>
                <td>
                    Chambre
                </td>
                <td>
                    <div class="switch bg-danger">
                        <?php echo 'Eteint';?>
                    </div>
                </td>
            </tr>
        </table>
    </div>

    <?php echo '<script src="'.dirname('__FILE__').'/js/jquery-2.1.4.min.js"></script>';?>
    <?php echo '<script src="'.dirname('__FILE__').'/js/bootstrap.min.js"></script>';?>
    <script language="JavaScript">
        $('.switch').on('click', function(){
            var id = parseInt($(this).parent().parent().find('.id_td').html());
            $.ajax({
                url: './process/switch.php',
                method: 'POST',
                data : {id : id}
            });
            if ($(this).hasClass('bg-danger')){
                $(this).addClass('bg-success');
                $(this).removeClass('bg-danger');
                $(this).html('');
                $(this).html('Allumé');
            }else{
                $(this).addClass('bg-danger');
                $(this).removeClass('bg-success');
                $(this).html('');
                $(this).html('Eteint');
            }
            });
    </script>
</body>
</html>