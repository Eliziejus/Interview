<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survey</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="view/style.css">
</head>
<body>
  <header class="navbar navbar-expand-lg navbar-light bg-secondary d-flex flex-row-reverse" style="height:60px">
 <div>
 <a  href="../logout.php" class="btn btn-secondary">Logout</a>
       

</div>
<div>
        <?php
          echo $_SESSION['email'];
        ?>
</div>
    
 
        
</header>

<div class= "m-5">
        
    </div>



<section class="container">
    <div class="collumn col-md-12">
      <div class="col-md-12 border border-light">
        <h4 class="font-weight-bold text-center mt-3">6. I can recognize another person's feelings</h4>
        <hr>
        <div class="form-check mb-4">
          <input class="form-check-input" name="group6" type="radio" id="radio-179" value="option1">
          <label class="form-check-label" for="radio-179">Very good</label>
        </div>

        <div class="form-check mb-4">
          <input class="form-check-input" name="group6" type="radio" id="radio-279" value="option2">
          <label class="form-check-label" for="radio-279">Good</label>
        </div>

        <div class="form-check mb-4">
          <input class="form-check-input" name="group6" type="radio" id="radio-379" value="option3">
          <label class="form-check-label" for="radio-379">Mediocre</label>
        </div>
        <div class="form-check mb-4">
          <input class="form-check-input" name="group6" type="radio" id="radio-479" value="option4">
          <label class="form-check-label" for="radio-479">Bad</label>
        </div>
        <div class="form-check mb-4">
          <input class="form-check-input" name="group6" type="radio" id="radio-579" value="option5">
          <label class="form-check-label" for="radio-579">Very bad</label>
        </div>
        <!-- Radio -->

        <hr>
        
   </div> 
</div> 
</section> 

<div class= "m-5">
        
    </div>


    <section class="container ">
      <div class="col-md-12 border border-light">
        <h4 class="font-weight-bold text-center mt-3">7. I can sit still and relax</h4>
        <hr>


        <div class="form-check mb-4">
          <input class="form-check-input" name="group7" type="radio" id="radio-1" value="option1">
          <label class="form-check-label" for="radio-1">Always</label>
        </div>

        <div class="form-check mb-4">
          <input class="form-check-input" name="group7" type="radio" id="radio-2" value="option2">
          <label class="form-check-label" for="radio-2">Often</label>
        </div>

        <div class="form-check mb-4">
          <input class="form-check-input" name="group7" type="radio" id="radio-3" value="option3">
          <label class="form-check-label" for="radio-3">I dont know</label>
        </div>
        <div class="form-check mb-4">
          <input class="form-check-input" name="group7" type="radio" id="radio-4" value="option4">
          <label class="form-check-label" for="radio-4">Rarely</label>
        </div>
        <div class="form-check mb-4">
          <input class="form-check-input" name="group7" type="radio" id="radio-5" value="option5">
          <label class="form-check-label" for="radio-5">Never</label>
        </div>
    


        <hr>
       
   </section> 
<div class= "m-5">
        
    </div>


       <section class="container ">
      <div class="col-md-12 border border-light">
        <h4 class="font-weight-bold text-center mt-3">8. I am suddenly overwhelmed by great anxiety and fear</h4>
        <hr>
        <div class="form-check mb-4">
          <input class="form-check-input" name="group8" type="radio" id="radio-11" value="option1">
          <label class="form-check-label" for="radio-11">Very often</label>
        </div>

        <div class="form-check mb-4">
          <input class="form-check-input" name="group8" type="radio" id="radio-21" value="option2">
          <label class="form-check-label" for="radio-21">Often enough</label>
        </div>

        <div class="form-check mb-4">
          <input class="form-check-input" name="group8" type="radio" id="radio-31" value="option3">
          <label class="form-check-label" for="radio-31">Rarely</label>
        </div>
        <div class="form-check mb-4">
          <input class="form-check-input" name="group8" type="radio" id="radio-41" value="option4">
          <label class="form-check-label" for="radio-41">Never</label>
        </div>
        <div class="form-check mb-4">
          <input class="form-check-input" name="group8" type="radio" id="radio-51" value="option5">
          <label class="form-check-label" for="radio-51">I dont know</label>
        </div>


        <hr>
     
   </section> 
<div class= "m-5">
        
    </div>


    <section class="container ">
      <div class="col-md-12 border border-light">
        <h4 class="font-weight-bold text-center mt-3">9. How I feel tense and anxious</h4>
        <hr>
        <div class="form-check mb-4">
          <input class="form-check-input" name="group9" type="radio" id="radio-12" value="option1">
          <label class="form-check-label" for="radio-12">Constantly/almost all the time</label>
        </div>

        <div class="form-check mb-4">
          <input class="form-check-input" name="group9" type="radio" id="radio-22" value="option2">
          <label class="form-check-label" for="radio-22">Most of the time</label>
        </div>
        <div class="form-check mb-4">
          <input class="form-check-input" name="group9" type="radio" id="radio-32" value="option3">
          <label class="form-check-label" for="radio-32">Rarely</label>
        </div>
        <div class="form-check mb-4">
          <input class="form-check-input" name="group9" type="radio" id="radio-42" value="option4">
          <label class="form-check-label" for="radio-42">I hardly feel it</label>
        </div>
        <div class="form-check mb-4">
          <input class="form-check-input" name="group9" type="radio" id="radio-52" value="option5">
          <label class="form-check-label" for="radio-52">I dont know</label>
        </div>


        <hr>
        

   </section> 

<div class= "m-5">
        
    </div>



   <section class="container ">
      <div class="col-md-12 border border-light">
        <h4 class="font-weight-bold text-center mt-3">10. I can share my feelings with others</h4>
        <hr>
        <div class="form-check mb-4">
          <input class="form-check-input" name="group10" type="radio" id="radio-13" value="option1">
          <label class="form-check-label" for="radio-13">I totally disagree</label>
        </div>

        <div class="form-check mb-4">
          <input class="form-check-input" name="group10" type="radio" id="radio-23" value="option2">
          <label class="form-check-label" for="radio-23">I do not agree</label>
        </div>

        <div class="form-check mb-4">
          <input class="form-check-input" name="group10" type="radio" id="radio-33" value="option3">
          <label class="form-check-label" for="radio-33">I dont know</label>
        </div>
        <div class="form-check mb-4">
          <input class="form-check-input" name="group10" type="radio" id="radio-43" value="option4">
          <label class="form-check-label" for="radio-43">I agree</label>
        </div>
        <div class="form-check mb-4">
          <input class="form-check-input" name="group10" type="radio" id="radio-53" value="option5">
          <label class="form-check-label" for="radio-53">Totally agree</label>
        </div>


        <hr>
       

   </section> 

<div class= "m-5">
        
    </div>





<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>