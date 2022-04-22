<?php

$questions = [
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
shuffle($questions);

?>


<!doctype html>
<html lang="en">
  <head>
    <title>class07</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
    
  <h2> Class07 Question 01</h2>
    <hr class="mb-3">
    <div class="container  my-1">

        
        <div class="row">

            <?php 


   foreach ($questions as $key => $question) {
       

?>

            <div class="col-12 mb-3 ">
                <form action="form_data.php" method="get">
                    <div class="question  pt-2 pb-2">
                      
                        <!-- question -->
                      
                        <div name="question" id="question" class="py-2 h5">
                            <b>Q.<?php echo ++$key. ") " . $question['question'] ?></b></div>
                        <div class=" pl-md-3 pt-sm-0 pt-3" id="options">
                          
                            <!-- option 1 -->
                          
                            <label class="options"><?php echo $question['options_ans'][0] ?> <input type="radio"
                                    name="ans">
                                <span class="checkmark"></span> </label>
                          
                            <!-- option 2 -->
                          
                            <label class="options"><?php echo $question['options_ans'][1] ?> <input type="radio"
                                    name="ans">
                                <span class="checkmark"></span> </label>
                          
                            <!-- option 3 -->
                          
                            <label class="options"><?php echo $question['options_ans'][2]  ?> <input type="radio"
                                    name="ans">
                                <span class="checkmark"></span> </label>
                          
                            <!-- option 4 -->
                          
                            <label class="options"><?php echo $question['options_ans'][3] ?> <input type="radio"
                                    name="ans"> <span class="checkmark"></span>
                            </label>

                        </div>
                    </div>
                </form>


            </div>


            <?php     }?>

        </div>

    </div>

  </body>
</html>
