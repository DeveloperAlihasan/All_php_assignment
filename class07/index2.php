<!doctype html>
<html lang="en">
  <head>
    <title>Aassignet 7: Team Section</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

  </head>
  <body>
<?php

$team01 = [
    
        'img'   => 'https://www.lfwf.io/uploads/studentProfile/thumb/1647530587.png',
        'name'  => 'ALI HASAN', 
        'skill' => 'PHP & Laravel Developer'
];
 
$team02 = [
    
        'img'   => 'https://www.lfwf.io/uploads/studentProfile/thumb/1610562955.png',
        'name'  => 'Nurul Islam', 
        'skill' => 'PHP & Laravel Developer'
];
 
$team03 = [
    
        'img'   => 'https://www.lfwf.io/uploads/studentProfile/thumb/1647319242.png',
        'name'  => 'ABK', 
        'skill' => 'PHP & Laravel Developer'
];
 
$team04 = [
    
        'img'   => 'https://www.lfwf.io/uploads/studentProfile/thumb/1648112509.png',
        'name'  => 'Sohanur Rohman', 
        'skill' => 'PHP & Laravel Developer'
];
 

    $all_team =[
        [
    
            'img'   => 'https://www.lfwf.io/uploads/studentProfile/thumb/1647530587.png',
            'name'  => 'Nurul Islam', 
            'skill' => 'PHP & Laravel Developer'
        ],

        [
    
            'img'   => 'https://www.lfwf.io/uploads/studentProfile/thumb/1610562955.png',
            'name'  => 'ALI HASAN', 
            'skill' => 'PHP & Laravel Developer'
        ],

        [
    
            'img'   => 'https://www.lfwf.io/uploads/studentProfile/thumb/1647319242.png',
            'name'  => 'ABK', 
            'skill' => 'PHP & Laravel Developer'
        ],

        [
    
            'img'   => 'https://www.lfwf.io/uploads/studentProfile/thumb/1648112509.png',
            'name'  => 'Sohanur Rohman', 
            'skill' => 'PHP & Laravel Developer'
        ],
     
    ];

?>


    <div class="container">
        <div class="team-header text-center w-75 m-auto">
            <h2>Our Team </h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis aliquam laborum reprehenderit reiciendis, architecto voluptatem consequuntur, distinctio corrupti modi eos corporis quod soluta numquam! Dolorum voluptas inventore repellendus saepe quo! </p>
        </div>
        <div class="row">
        <?php
        foreach ( $all_team as $key =>  $all_team) {
            
        ?>
            <div class="col-lg-3">
                <div class="team">
                    <div class="team-body text-center">
                        <img src="<?=  $all_team['img']; ?>" alt="">
                        <h4><?=  $all_team['name']; ?></h4>
                        <h6> <?=  $all_team['skill']; ?> </h6>
                        <div class="team-icon">
                            <i class="fab fa-facebook-f"></i>
                            <i class="fab fa-twitter"></i>
                            <i class="fab fa-instagram"></i>
                        </div>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>