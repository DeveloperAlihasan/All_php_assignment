<?php
//Qusttions Array 10
$questionSets = [
    [
        'question' => 'What is loream ipsum 1?',
        'options_ans' => [
            'ans1 ', 'ans2', 'ans3', 'ans4'
        ]
    ],

    [
        'question' => 'What is loream ipsum 2?',
        'options_ans' => [
            'ans1', 'ans2', 'ans3', 'ans4'
        ]
    ],

    [
        'question' => 'What is loream ipsum 3?',
        'options_ans' => [
            'ans1', 'ans2', 'ans3', 'ans4'
        ]
    ],
    [
        'question' => 'What is loream ipsum 4?',
        'options_ans' => [
            'ans1', 'ans2', 'ans3', 'ans4'
        ]
    ],
    [
        'question' => 'What is loream ipsum 5?',
        'options_ans' => [
            'ans1', 'ans2', 'ans3', 'ans4'
        ]
    ],
    [
        'question' => 'What is loream ipsum 6?',
        'options_ans' => [
            'ans1', 'ans2', 'ans3', 'ans4'
        ]
    ],
    [
        'question' => 'What is loream ipsum 7?',
        'options_ans' => [
            'ans1', 'ans2', 'ans3', 'ans4'
        ]
    ],
    [
        'question' => 'What is loream ipsum 8?',
        'options_ans' => [
            'ans1', 'ans2', 'ans3', 'ans4'
        ]
    ],
    [
        'question' => 'What is loream ipsum 9?',
        'options_ans' => [
            'ans1', 'ans2', 'ans3', 'ans4'
        ]
    ],
    [
        'question' => 'What is loream ipsum 10?',
        'options_ans' => [
            'ans1', 'ans2', 'ans3', 'ans4'
        ]
    ],
];

//Shuffle Qustions array 
shuffle($questionSets);

?>


<!doctype html>
<html lang="en">
  <head>
    <title>Aassignet 7: Qustions List Show Randomly</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
    
    <div class="container">
        <div class="row">
            <div class="col-lg-8 ">
              <div class="card">
                  <div class="card-header">
                      <h2>Qustions</h2>
                  </div>
                  <div class="card-body">
                    <div class="qustion-area">
                    <?php 
                    //Fiest Foreach
                    foreach ($questionSets as $key => $questionSet) {
                    ?>
                        <div class="qustion">
                            <h3> <span>Q<?= $key + 1 ; ?>. </span> <?= $questionSet['question']; ?> </h3>                   
                            <?php 

                            //Secend Foreach Show ans list 
                            foreach( $questionSet['options_ans'] as $ans_list ){ 
                            ?>
                            <div class="form-check">
                                <label class="form-check-label"> <input class="form-check-input" type="radio" name="ans_list" value="<?php echo $ans_list; ?>" > <?php echo $ans_list; ?> </label><br>
                            </div>

                            <?php } ?>
                            
                            
                        </div>
                    <?php
                    }
                    ?>
                    </div>
                  </div>
              </div>
            </div>
        </div>
    </div>


  </body>
</html>