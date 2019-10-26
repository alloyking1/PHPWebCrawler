<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Video Player</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->

        <!-- jquery -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

        <!-- custome css -->
        <link rel="stylesheet" href="asset/css/custom.css">
    </head>
   
    <body>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="header">
                        <h1>Enter a website to crawl</h1>
                        <p>This PHP web crawler will craw for images and links. All images will be saved to the image folder withen the app</p>

                        <form method="POST" action="" name="videoForm">
                            <div class="form-group">
                                <input type="text" name="url" class="form-controll">
                            </div>
                            <button type="submit" name="FormBtn" class="btn btn-primary">start</button>
                        </form>
                       
                    </div>      
                </div>
            </div>
            <br>
        </div>
    </body>

    <?php
        include("class.php"); 
        if(isset($_POST['FormBtn'])){

            $url = $_POST['url'];
            $init = new Crawler;
            $init->index($url);

            return false;
        }
    ?>
</html>