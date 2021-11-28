<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="div1 ">
        <h1 class="text-center text-primary mt-3">Temperature Conversion</h1>
    <div class="div2"> 
        <div class="div3">
            <img src="images/sun3.png" alt="">
        </div>
        <div class="div4 text-center bg-secondary">
            <form action="" method="POST">
            <div class="input-group mb-3 ">
                <input type="text" class="form-control  " placeholder="Enter Number" 
                aria-label="Recipient's username" aria-describedby="basic-addon2" name="number">
                <span class="input-group-text" id="basic-addon2">
                        <select name="operation" class="bg-primary">
                             <option>Select</option>
                             <option value="cel">Celcius</option>
                             <option value="fah">Fahrenheit</option>
                             <option value="kel">Kelvin</option>
                             <option value="Rom">Romer</option>
                             
                         </select>
                </span>
           </div>

            <input class="btn btn-primary mt-3" type="submit" value="Celcius" name="submit1">
            <input class="btn btn-primary mt-3" type="submit" value="Fahrenheit" name="submit2">
            <input class="btn btn-primary mt-3" type="submit" value="Kelvin" name="submit3">
            <input class="btn btn-primary mt-3" type="submit" value="Romer" name="submit4">
            </form>
            <div>
                <p class="mt-5">
                <?php

                       // Celcius
                        if(isset($_REQUEST['submit1'])){
                          $num = $_REQUEST['number'];
                          $temp = $_REQUEST['operation'];
                           if($temp == "cel"){
                               $result = $num ;
                               echo "The converted value in celcius is: " . $result . "C";
                           }elseif($temp == "fah"){
                               $result = ($num - 32)*5/9;
                               echo "The converted value in celcius is: " . $result . "C";
                           }elseif($temp == "kel"){
                            $result = ($num - 273.15);
                            echo "The converted value in celcius is: " . $result . "C";
                        }elseif($temp == "Rom"){
                            $result = $num*5/4;
                            echo "The converted value in celcius is: " . $result . "C";
                        }else{
                            echo "Please select number!";
                        }
                        }
                        // Fahrenheit

                        if(isset($_REQUEST['submit2'])){
                            $num = $_REQUEST['number'];
                            $temp = $_REQUEST['operation'];
                             if($temp == "cel"){
                                 $result = 9*($num)/5 + 32;
                                 echo "The converted value in fahrenheit is: " . $result . "F";
                             }elseif($temp == "fah"){
                                 $result = $num ;
                                 echo "The converted value in fahrenheit is: " . $result . "F";
                             }elseif($temp == "kel"){
                              $result = 9*($num- 273.15)/5 + 32;
                              echo "The converted value in fahrenheit is: " . $result . "F";
                          }elseif($temp == "Rom"){
                              $result = 9*($num)/4 + 32;
                              echo "The converted value in fahrenheit is: " . $result . "F";
                          }else{
                              echo "Please select number!";
                          }
                          }
                         // Kelvin
                          
                        if(isset($_REQUEST['submit3'])){
                            $num = $_REQUEST['number'];
                            $temp = $_REQUEST['operation'];
                             if($temp == "cel"){
                                 $result = $num + 273.15;
                                 echo "The converted value in kelvin is: " . $result . "K";
                             }elseif($temp == "fah"){
                                 $result = ($num - 32) * 5/9 + 273.15;
                                 echo "The converted value in kelvin is: " . $result . "K";
                             }elseif($temp == "kel"){
                              $result = $num;
                              echo "The converted value in kelvin is: " . $result . "K";
                          }elseif($temp == "Rom"){
                              $result = 5*($num)/4 +273.15;
                              echo "The converted value in kelvint is: " . $result . "K";
                          }else{
                              echo "Please select number!";
                          }
                          }
                           
                          // Romer
                          
                          if(isset($_REQUEST['submit4'])){
                            $num = $_REQUEST['number'];
                            $temp = $_REQUEST['operation'];
                             if($temp == "cel"){
                                 $result = 4*($num)/5;
                                 echo "The converted value in Romer is: " . $result . "R";
                             }elseif($temp == "fah"){
                                 $result = 4*($num - 32)/9;
                                 echo "The converted value in Romer is: " . $result . "R";
                             }elseif($temp == "kel"){
                              $result = 4*($num - 273)/5;
                              echo "The converted value in Romer is: " . $result . "R";
                          }elseif($temp == "Rom"){
                              $result = $num;
                              echo "The converted value in Romert is: " . $result . "R";
                          }else{
                              echo "Please select number!";
                          }
                          }
                    ?>
                </p>
            </div>
        </div>
    </div>
    </div>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/popper.js"></script>
</body>
</html>