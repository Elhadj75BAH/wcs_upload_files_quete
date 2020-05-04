
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>voici mes affiche</title>
</head>
<body >

<h1 class="text-center "> les affiches du moment ! </h1>

<div>
    <?php 
         $dir = 'uploads/*.{jpg,gif,png}';
         $files = glob($dir,GLOB_BRACE);
          echo
           "<div class='container'> .
            <div class='row'>";
            foreach($files as $image)
            { ?>
            <div class="col-3 d-flex justify-content-around">
                <div class="card margeCard" style="width: 25rem;">
                    <img src="<?php echo $image; ?>" class="card-img-top" alt="..." width="200px" height="300px">
                    <div class="card-body" >
                        <p class="card-text text-center" ><?php $imageName = str_replace('uploads/','',$image);
                            echo $imageName.'<br />'; ?></p>
                    </div>
                    <a href="Delete.php?name=<?php echo $imageName ?>" name="" class="btn btn-primary">Delete</a>
                </div>
            </div>
            <?php } ?>

        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>