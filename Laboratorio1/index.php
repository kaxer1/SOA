<?php
    $data = json_decode(file_get_contents('https://api.mercadolibre.com/users/226385053/#json'), true);
    $data2 = json_decode(file_get_contents('https://jsonplaceholder.typicode.com/posts/1/comments/'), true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laboratorio1</title>
    <link rel="stylesheet" href="/bootswatch/bootstrap.min.css">
    <link rel="stylesheet" href="/bootswatch/bootstrap.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page"> <strong>Usuario: </strong><?php echo $data['nickname']; ?></li>
        </ol>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col">
                <ul class="list-group">
                    <li class="list-group-item"><strong> Country Id: </strong><?php echo $data['country_id']; ?></li>
                    <li class="list-group-item"><strong>Site Id: </strong><?php echo $data['site_id']; ?></li>
                    <li class="list-group-item"><strong>Points: </strong><?php echo $data['points'];?> </li>
                    <li class="list-group-item"><strong>Permanlink: </strong><?php echo $data['permalink']; ?></li>
                    <li class="list-group-item"><strong>period: </strong><?php echo $data['seller_reputation']['transactions']['period']; ?></li>
                </ul>
            </div>
            <div class="col">
                <?php foreach ($data2 as $i) {?>
                    <div class="list-group mt-4">
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1"><?php echo "Comentario no.".$i['id'];?></h5>
                                <small><?php echo "<b>Usuario</b>".$i['name'];?></small>
                            </div>
                            <p class="mb-1"><?php echo $i['body'];?></p>
                            <small><?php echo $i['email'];?></small>
                        </a>
                    </div>
                <?php }?>
            </div>
        </div>
    </div>
    

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>