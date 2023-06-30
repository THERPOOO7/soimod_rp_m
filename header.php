<!DOCTYPE html>
<html lang="en">

<head>
    <title>Soimod</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css?v=0.1">
    <link rel="stylesheet" href="css/media.css?v=0.1">

    <style>
       
    </style>
  
</head>

<body>
<header>

        <?php 
            $url= explode('/',  $_SERVER['REQUEST_URI']); 
            // print_r($url);
        ?>
        <nav class="navbar navbar-expand-lg navbar-light ">
            <div>
            <a class="navbar-brand" href="index.php"><img src="Images/Logo1.png" alt="Logo"></a>
        </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item  <?php echo ($url[3] == 'index.php') ? 'active_class' : ''; ?>">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item <?php echo ($url[3] == 'About-us.php') ? 'active_class' : ''; ?>">
                        <a class="nav-link" href="About-us.php">About Us</a>
                    </li>
                    <li class="nav-item <?php echo ($url[3] == 'process_page.php') ? 'active_class' : ''; ?>">
                        <a class="nav-link" href="process_page.php">Proccess</a>
                    </li>
                    <li class="nav-item <?php echo ($url[3] == 'Career-page.php') ? 'active_class' : ''; ?>">
                        <a class="nav-link" href="Career-page.php">Career</a>
                    </li>
                    <li class="nav-item <?php echo ($url[3] == 'Contact.php') ? 'active_class' : ''; ?>">
                        <a class="nav-link" href="Contact.php">Contact us</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>