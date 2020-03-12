<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="css/styles1.css">
    <title>Php qwiz project</title>
</head>
<body >
<center>
<div id="page-wrap text-align-center w-50% pt-4">
        <h1 class="display-4 mt-5 cssanimation typing"><strong>African Towns Quiz - Test Your Knowledge </strong></h1>
<?php 

$Questions = array(
    1 => array(
'Question'      => 'What African capital is located next to the Table Mountain?',
    'Answers'   => array(
            'A' => 'Kinshasa',
            'B' => 'Tripoli',
            'C' => ' Capetown'
        ),
        'CorrectAnswer' => 'A'
    ),
    2 => array(
        'Question' => 'What African capital was named after U.S. President Monroe?',
        'Answers' => array(
            'A' => 'Moronvia',
            'B' => 'kampala',
            'C' => 'Kinshasa'
        ),
        'CorrectAnswer' => 'C'
    ),
    3 => array(
        'Question' => 'Which two African capital cities are located on opposite sides of the Congo River?',
        'Answers' => array(
            'A' => 'Brazzaville and Kinshasa',
            'B' => 'Kinshasa and Libreville',
            'C' => 'Brazzaville and Libreville'
        ),
        'CorrectAnswer' => 'A'
    ),
    4 => array(
        'Question' => 'Which one of the following African capital cities, current or former, is NOT located on the coast?',
        'Answers' => array(
            'A' => 'Antananarivo',
            'B' => 'Mogadishu',
            'C' => 'Dar es Salaam'
        ),
        'CorrectAnswer' => 'C'
    ),
    5 => array(
        'Question' => 'Which African city was formerly known as Fort Lamy?',
        'Answers' => array(
            'A' => 'Tripoli',
            'B' => 'Bamako',
            'C' => 'Ndjamena'
        ),
        'CorrectAnswer' => 'A'
    ),
    6 => array(
        'Question' =>'Brazzaville is the capital city of the Congo. What is the second largest city in the country?',
        'Answers' => array(
            'A' => 'Dodoma',
            'B' => 'Libreville',
            'C' => 'Pointe-Noire'
        ),
        'CorrectAnswer' => 'C'
    ),
    7 => array(
        'Question' => 'Yammoussoukro is the capital city of Cote d Ivoire but it is not the largest in the country. What is the largest city in Cote d Ivoire?',
        'Answers' => array(
            'A' => 'Cote d Ivoire',
            'B' => 'Congo Kinshasa',
            'C' => 'Angola',
        ),
        'CorrectAnswer' => 'A'
    ),
    8 => array(
        'Question' => 'If you are driving from Accra Ghana to Porto Novo (Benin), what capital city do you have to drive through?',
        'Answers' => array(
            'A' => ' Namibia',
            'B' => 'Nairobi',
            'C' => 'Nigeria',
        ),
        'CorrectAnswer' => 'C'
    ),
    9 => array(
        'Question' => 'Which capital city is located within 10 kilometres of the shore of Lake Victoria?',
        'Answers' => array(
            'A' => 'Lolingwe',
            'B' => 'Maputo',
            'C' => 'Arare'
        ),
        'CorrectAnswer' => 'A'
    ),
    10 => array(
        'Question' => 'Which one of the following cities is NOT in an island?',
        'Answers' => array(
            'A' => 'Praia',
            'B' => 'Mbabane',
            'C' => 'Moroni',
        ),
        'CorrectAnswer' => 'C'
    ),
    11 => array(
        'Question' => 'Which African city has the busiest airport in the continent? ',
        'Answers' => array(
            'A' => 'Johannesburg',
            'B' => 'Rabat',
            'C' => 'Cairo'
        ),
        'CorrectAnswer' => 'A'
    ),
    12 => array(
        'Question' => 'In what city is the Chinese-built headquarters of the African Union?',
        'Answers' => array(
            'A' => 'Capetown',
            'B' => 'Kampala',
            'C' => 'Johannesburg'
        ),
        'CorrectAnswer' => 'C'
    ),
    13 => array(
        'Question' => 'Ouagadougou is the capital city of what country?',
        'Answers' => array(
            'A' => 'Cote d Ivoire',
            'B' => 'Namibia',
            'C' => 'Burkina Faso'
        ),
        'CorrectAnswer' => 'A'
    ),
    14 => array(
        'Question' => 'The name of this city means the new flower. What African city are we talking about?',
        'Answers' => array(
            'A' => 'Addis Ababa',
            'B' => 'Kampala',
            'C' => 'Nairobi'
        ),
        'CorrectAnswer' => 'C'
    ),
    15 => array(
        'Question' => 'Which one of the following cities has Spanish as the official language?',
        'Answers' => array(
            'A' => ' Brazzaville',
            'B' => 'Ceuta',
            'C' => 'Djibouti'
        ),
        'CorrectAnswer' => 'A'
    ),
    16 => array(
        'Question' => 'In which African city can you enter the Red Castle Museum through an entrance in Martyrs Square?',
        'Answers' => array(
            'A' => 'Rabat',
            'B' => 'Alger',
            'C' => 'Tripoli'
        ),
        'CorrectAnswer' => 'C'
    ),
    17 => array(
        'Question' => 'The official capital of Malawi is Lilongwe.',
        'Answers' => array(
               'A'=> 'True',
               'B'=> 'False',
        ),
        'CorrectAnswer' => 'A'
    ),
    18 => array(
        'Question' => 'This city became the capital city of what was formerly known as South West Africa on 23rd March 1990. What city are we talking about?',
        'Answers'=> array(
            'A'  => 'Luanda',
            'B'  => 'Duala',
            'C'  => 'Bulawayio'
        ),
        'CorrectAnswer' => 'C'
    ),
    19 => array(
        'Question' => ' 19. Only one capital city in Africa has the exact same name as the country it is in. Which one are we talking 
        about? Example: Mexico and Mexico City',
        'Answers' => array(
            'A' => 'Algerie',
            'B' => 'Tunisia',
            'C' => 'Mozambic'
        ),
        'CorrectAnswer' => 'A'
    ),
    20 => array(
        'Question' => ' 20. What is Rwanda s town name',
        'Answers' => array(
            'A' => 'kampala',
            'B' => 'Maputo',
            'C' => 'kigali'
        ),
        'CorrectAnswer' => 'C'
    )
    );

if (isset($_POST['answers'])){
    $Answers = $_POST['answers']; 

    $correctAnswers = 0;

    foreach ($Questions as $QuestionNo => $Value){
        
        echo $Value['Question'].'<br />';

        if ($Answers[$QuestionNo] != $Value['CorrectAnswer']){
            echo '<span style="color: red;">'.$Value['Answers'][$Answers[$QuestionNo]].'</span>'; 
        } else {
            echo '<span style="color: green;">'.$Value['Answers'][$Answers[$QuestionNo]].'</span>';
            $correctAnswers++;
        }
        echo '<br /><hr>';
    }
     if(  $correctAnswers < 10)
     {
         echo " <h1> Your final result : $correctAnswers </h1>";
         echo " <h1> PLEASE TRY AGAIN TO IMPROVE YOUR SCORE</h1>";
     }
     else if( $correctAnswers <=15)
     {
         echo " <h1> Your final result : $correctAnswers </h1>";
         echo " <h1> YOUR SCORE IS AVERAGE</h1>";
     }
     else
     {
         echo " <h1> Your final result : $correctAnswers </h1>";
         echo " <h1> CONGRATULATION !! </h1>";
     }
    
} else {
?>
    <form action="index3.php" method="post" id="quiz">
    <?php foreach ($Questions as $QuestionNo => $Value){ ?>
    <li>
       <center> 
        <img class="img-quiz mb-5" src="images/qwiz3.jpg" class="img-thumbnail" alt="">
        

        <h3><?php echo $Value['Question']; ?></h3>
        <?php 
            foreach ($Value['Answers'] as $Letter => $Answer){ 
            $Label = 'question-'.$QuestionNo.'-answers-'.$Letter;
        ?>
        <div>
           <input type="radio" name="answers[<?php echo $QuestionNo; ?>]" id="<?php echo $Label; ?>" value="<?php echo $Letter; ?>" required/>
            <label for="<?php echo $Label; ?>"><?php echo $Letter; ?>) <?php echo $Answer; ?> </label>
        </div>
        <?php } 
        ?>
        
          </li>
    <?php } ?>
    <center> <br><br>

    <input type="submit" class="katlego" value="Submit Quiz" />
    </form>
    <div class="container-fluid info p-3">
        <div class="row">
          <div class="col d-flex justify-content-between align-itms-baseline flex-wrap">
           
            
             <footer class="primary-color text-center w-50% mx-auto">Coded by <a href=https://facebook.com/tresormazinga>Tresor Mazinga</a>
            
          </div>
        </div>
      </div>
<?php 
}
?>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>


