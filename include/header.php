<?php

$links = array(
    'register' => array(
        'name' => 'Student Registration',
        'href' => './admin.php'
        
    ),
    'grade' => array(
        'name' => 'Students Grade',
        'href' => './'
    )

    
);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <?php echo !empty($assets['css']) ? implode("\r\n", $assets['css']) . "\r\n": ''; ?>
    <link rel="stylesheet" href="css/style.css">
    <title><?php echo $title; ?></title>
</head>

<body class="<?php echo $body_class; ?>">

    <header>
        <div class="hero d-flex align-items-center">
            <div class="container-fluid">
                <div class="row">
                    <div class="container">
                        <div class="col-sm-12">
                            <h1 class="title my-5 text-white"><?php echo $title; ?></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <nav class="navbar navbar-expand bg-light">

                <!-- Links -->
                <ul class="navbar-nav">
                    
                    <li class="nav-item">
                    <a class="nav-link" href="<?php echo $links['grade']['href'] ?>"><?php echo $links['grade']['name'] ?></a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $links['register']['href'] ?>"><?php echo $links['register']['name'] ?></a>
                    </li>
                </ul>

            </nav>
        </div>
    </div>
