<?php

    $servidor = "sql100.infinityfree.com";
    $usuario = "if0_37486748";
    $clave = "fkCjc5u7IzDoL";
    $basededatos = "if0_37486748_ach";

    $enlace = mysqli_connect($servidor, $usuario, $clave, $basededatos)

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Formulario ACH </title>
        <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0 auto;
            max-width: 800px;
            padding: 20px;
        }
        h1, h2, h3 {
            color: #333;
        }
        form {
            background-color: #f4f4f4;
            border-radius: 5px;
            padding: 20px;
        }
       
        button:hover {
            background-color: #45a049;
        }
    </style>
    </head>

    <body>
        <h1>PESTEL analysis and Porter strategies</h1>
        <h2>Evaluation of Criteria for <span class='var'>Strategic Selection</span></h2>
        <h3>Pairwise Comparison <span class='var'>Criteria</span></h3>
        <span class='msg'>15 Paired comparisons </span>
        <p>Do the pairwise comparison of all criteria. When complete, please click <i>Submit</i> to upload the priority data.<br>
        <p style='font-size:small'>ACH scale: 1- Equally important, 3- Weakly important, 5- More important, 7- Strongly more important, 9- Absolutely more important (2,4,6,8 intermediate values).</p>
        <p><span class='hl'>Regarding <i><span class='var'>Criteria</span></i>, which criterion is more important and how much more important on a scale of 1 to 9?</span></p>
        
        <form action="#" name="form" method="post">
        <table id='cTbl'><thead>
        <tr class='header'>
            <th colspan='3' style='text-align:center;'>¿Which Criterion do you prefer A - <span class='var'>or</span> - B?</th>
            <th>Same</th>
            <th style='text-align:center;'>¿How much more?</th></tr></thead>
        <tbody>
        <tr><td class='ca' >1</td><td><span >
                <input class='onclk1' type='radio' name='A0' value='0' checked/></span><label> Political</label></td><td><span>
                <input class='onclk1' type='radio' name='A0' value='1'></span><label>Economic</label></td><td class='ac' style='font-size:smaller;'><span >
                <input type='radio' class='onclk1' name='Intense0' value='1' checked><label>1</label></span></td><td class='ca' style='min-width:250px;font-size:smaller;' ><span ><input type='radio' class='onclk1' name='Intense0' 
                value='2'><label>2</label></span><span ><input type='radio' class='onclk1' name='Intense0' 
                value='3'><label>3</label></span><span ><input type='radio' class='onclk1' name='Intense0' 
                value='4'><label>4</label></span><span ><input type='radio' class='onclk1' name='Intense0' 
                value='5'><label>5</label></span><span ><input type='radio' class='onclk1' name='Intense0' 
                value='6'><label>6</label></span><span ><input type='radio' class='onclk1' name='Intense0' 
                value='7'><label>7</label></span><span ><input type='radio' class='onclk1' name='Intense0' 
                value='8'><label>8</label></span><span ><input type='radio' class='onclk1' name='Intense0' 
                value='9'><label>9</label></span></td></tr>
        <tr><td class='ca'  >2</td><td><span >
                <input class='onclk1' type='radio' name='A1' value='0' checked/></span><label> Political</label></td><td><span  >
                <input class='onclk1' type='radio' name='A1' value='1'></span><label>Social</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense1' 
                value='1' checked><label>1</label></span></td><td class='ca' style='min-width:250px;font-size:smaller;' ><span ><input type='radio' class='onclk1' name='Intense1' 
                value='2'><label>2</label></span><span ><input type='radio' class='onclk1' name='Intense1' 
                value='3'><label>3</label></span><span ><input type='radio' class='onclk1' name='Intense1' 
                value='4'><label>4</label></span><span ><input type='radio' class='onclk1' name='Intense1' 
                value='5'><label>5</label></span><span ><input type='radio' class='onclk1' name='Intense1' 
                value='6'><label>6</label></span><span ><input type='radio' class='onclk1' name='Intense1' 
                value='7'><label>7</label></span><span ><input type='radio' class='onclk1' name='Intense1' 
                value='8'><label>8</label></span><span ><input type='radio' class='onclk1' name='Intense1' 
                value='9'><label>9</label></span></td></tr>
        <tr><td class='ca'  >3</td><td><span >
                <input class='onclk1' type='radio' name='A2' value='0' checked/></span><label> Political</label></td><td><span  >
                <input class='onclk1' type='radio' name='A2' value='1'></span><label>Technology</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense2' 
                value='1' checked><label>1</label></span></td><td class='ca' style='min-width:250px;font-size:smaller;' ><span ><input type='radio' class='onclk1' name='Intense2' 
                value='2'><label>2</label></span><span ><input type='radio' class='onclk1' name='Intense2' 
                value='3'><label>3</label></span><span ><input type='radio' class='onclk1' name='Intense2' 
                value='4'><label>4</label></span><span ><input type='radio' class='onclk1' name='Intense2' 
                value='5'><label>5</label></span><span ><input type='radio' class='onclk1' name='Intense2' 
                value='6'><label>6</label></span><span ><input type='radio' class='onclk1' name='Intense2' 
                value='7'><label>7</label></span><span ><input type='radio' class='onclk1' name='Intense2' 
                value='8'><label>8</label></span><span ><input type='radio' class='onclk1' name='Intense2' 
                value='9'><label>9</label></span></td></tr>
        <tr><td class='ca'  >4</td><td><span >
                <input class='onclk1' type='radio' name='A3' value='0' checked/></span><label> Political</label></td><td><span  >
                <input class='onclk1' type='radio' name='A3' value='1'></span><label>Environment</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense3' 
                value='1' checked><label>1</label></span></td><td class='ca' style='min-width:250px;font-size:smaller;' ><span ><input type='radio' class='onclk1' name='Intense3' 
                value='2'><label>2</label></span><span ><input type='radio' class='onclk1' name='Intense3' 
                value='3'><label>3</label></span><span ><input type='radio' class='onclk1' name='Intense3' 
                value='4'><label>4</label></span><span ><input type='radio' class='onclk1' name='Intense3' 
                value='5'><label>5</label></span><span ><input type='radio' class='onclk1' name='Intense3' 
                value='6'><label>6</label></span><span ><input type='radio' class='onclk1' name='Intense3' 
                value='7'><label>7</label></span><span ><input type='radio' class='onclk1' name='Intense3' 
                value='8'><label>8</label></span><span ><input type='radio' class='onclk1' name='Intense3' 
                value='9'><label>9</label></span></td></tr>
        <tr><td class='ca'  >5</td><td><span >
                <input class='onclk1' type='radio' name='A4' value='0' checked/></span><label> Political</label></td><td><span  >
                <input class='onclk1' type='radio' name='A4' value='1'></span><label>Legal</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense4' 
                value='1' checked><label>1</label></span></td><td class='ca' style='min-width:250px;font-size:smaller;' ><span ><input type='radio' class='onclk1' name='Intense4' 
                value='2'><label>2</label></span><span ><input type='radio' class='onclk1' name='Intense4' 
                value='3'><label>3</label></span><span ><input type='radio' class='onclk1' name='Intense4' 
                value='4'><label>4</label></span><span ><input type='radio' class='onclk1' name='Intense4' 
                value='5'><label>5</label></span><span ><input type='radio' class='onclk1' name='Intense4' 
                value='6'><label>6</label></span><span ><input type='radio' class='onclk1' name='Intense4' 
                value='7'><label>7</label></span><span ><input type='radio' class='onclk1' name='Intense4' 
                value='8'><label>8</label></span><span ><input type='radio' class='onclk1' name='Intense4' 
                value='9'><label>9</label></span></td></tr>
        <tr><td colspan='5'></td></tr>
        <tr><td class='ca'  >6</td><td><span >
                <input class='onclk1' type='radio' name='A5' value='0' checked/></span><label> Economic</label></td><td><span  >
                <input class='onclk1' type='radio' name='A5' value='1'></span><label>Social</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense5' 
                value='1' checked><label>1</label></span></td><td class='ca' style='min-width:250px;font-size:smaller;' ><span ><input type='radio' class='onclk1' name='Intense5' 
                value='2'><label>2</label></span><span ><input type='radio' class='onclk1' name='Intense5' 
                value='3'><label>3</label></span><span ><input type='radio' class='onclk1' name='Intense5' 
                value='4'><label>4</label></span><span ><input type='radio' class='onclk1' name='Intense5' 
                value='5'><label>5</label></span><span ><input type='radio' class='onclk1' name='Intense5' 
                value='6'><label>6</label></span><span ><input type='radio' class='onclk1' name='Intense5' 
                value='7'><label>7</label></span><span ><input type='radio' class='onclk1' name='Intense5' 
                value='8'><label>8</label></span><span ><input type='radio' class='onclk1' name='Intense5' 
                value='9'><label>9</label></span></td></tr>
        <tr><td class='ca'  >7</td><td><span >
                <input class='onclk1' type='radio' name='A6' value='0' checked/></span><label> Economic</label></td><td><span  >
                <input class='onclk1' type='radio' name='A6' value='1'></span><label>Technology</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense6' 
                value='1' checked><label>1</label></span></td><td class='ca' style='min-width:250px;font-size:smaller;' ><span ><input type='radio' class='onclk1' name='Intense6' 
                value='2'><label>2</label></span><span ><input type='radio' class='onclk1' name='Intense6' 
                value='3'><label>3</label></span><span ><input type='radio' class='onclk1' name='Intense6' 
                value='4'><label>4</label></span><span ><input type='radio' class='onclk1' name='Intense6' 
                value='5'><label>5</label></span><span ><input type='radio' class='onclk1' name='Intense6' 
                value='6'><label>6</label></span><span ><input type='radio' class='onclk1' name='Intense6' 
                value='7'><label>7</label></span><span ><input type='radio' class='onclk1' name='Intense6' 
                value='8'><label>8</label></span><span ><input type='radio' class='onclk1' name='Intense6' 
                value='9'><label>9</label></span></td></tr>
        <tr><td class='ca'  >8</td><td><span >
                <input class='onclk1' type='radio' name='A7' value='0' checked/></span><label> Economic</label></td><td><span  >
                <input class='onclk1' type='radio' name='A7' value='1'></span><label>Environment</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense7' 
                value='1' checked><label>1</label></span></td><td class='ca' style='min-width:250px;font-size:smaller;' ><span ><input type='radio' class='onclk1' name='Intense7' 
                value='2'><label>2</label></span><span ><input type='radio' class='onclk1' name='Intense7' 
                value='3'><label>3</label></span><span ><input type='radio' class='onclk1' name='Intense7' 
                value='4'><label>4</label></span><span ><input type='radio' class='onclk1' name='Intense7' 
                value='5'><label>5</label></span><span ><input type='radio' class='onclk1' name='Intense7' 
                value='6'><label>6</label></span><span ><input type='radio' class='onclk1' name='Intense7' 
                value='7'><label>7</label></span><span ><input type='radio' class='onclk1' name='Intense7' 
                value='8'><label>8</label></span><span ><input type='radio' class='onclk1' name='Intense7' 
                value='9'><label>9</label></span></td></tr>
        <tr><td class='ca'  >9</td><td><span >
                <input class='onclk1' type='radio' name='A8' value='0' checked/></span><label> Economic</label></td><td><span  >
                <input class='onclk1' type='radio' name='A8' value='1'></span><label>Legal</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense8' 
                value='1' checked><label>1</label></span></td><td class='ca' style='min-width:250px;font-size:smaller;' ><span ><input type='radio' class='onclk1' name='Intense8' 
                value='2'><label>2</label></span><span ><input type='radio' class='onclk1' name='Intense8' 
                value='3'><label>3</label></span><span ><input type='radio' class='onclk1' name='Intense8' 
                value='4'><label>4</label></span><span ><input type='radio' class='onclk1' name='Intense8' 
                value='5'><label>5</label></span><span ><input type='radio' class='onclk1' name='Intense8' 
                value='6'><label>6</label></span><span ><input type='radio' class='onclk1' name='Intense8' 
                value='7'><label>7</label></span><span ><input type='radio' class='onclk1' name='Intense8' 
                value='8'><label>8</label></span><span ><input type='radio' class='onclk1' name='Intense8' 
                value='9'><label>9</label></span></td></tr>
        <tr><td colspan='5'></td></tr>
        <tr><td class='ca'  >10</td><td><span >
                <input class='onclk1' type='radio' name='A9' value='0' checked/></span><label> Social</label></td><td><span  >
                <input class='onclk1' type='radio' name='A9' value='1'></span><label>Technology</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense9' 
                value='1' checked><label>1</label></span></td><td class='ca' style='min-width:250px;font-size:smaller;' ><span ><input type='radio' class='onclk1' name='Intense9' 
                value='2'><label>2</label></span><span ><input type='radio' class='onclk1' name='Intense9' 
                value='3'><label>3</label></span><span ><input type='radio' class='onclk1' name='Intense9' 
                value='4'><label>4</label></span><span ><input type='radio' class='onclk1' name='Intense9' 
                value='5'><label>5</label></span><span ><input type='radio' class='onclk1' name='Intense9' 
                value='6'><label>6</label></span><span ><input type='radio' class='onclk1' name='Intense9' 
                value='7'><label>7</label></span><span ><input type='radio' class='onclk1' name='Intense9' 
                value='8'><label>8</label></span><span ><input type='radio' class='onclk1' name='Intense9' 
                value='9'><label>9</label></span></td></tr>
        <tr><td class='ca'  >11</td><td><span >
                <input class='onclk1' type='radio' name='A10' value='0' checked/></span><label> Social</label></td><td><span  >
                <input class='onclk1' type='radio' name='A10' value='1'></span><label>Environment</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense10' 
                value='1' checked><label>1</label></span></td><td class='ca' style='min-width:250px;font-size:smaller;' ><span ><input type='radio' class='onclk1' name='Intense10' 
                value='2'><label>2</label></span><span ><input type='radio' class='onclk1' name='Intense10' 
                value='3'><label>3</label></span><span ><input type='radio' class='onclk1' name='Intense10' 
                value='4'><label>4</label></span><span ><input type='radio' class='onclk1' name='Intense10' 
                value='5'><label>5</label></span><span ><input type='radio' class='onclk1' name='Intense10' 
                value='6'><label>6</label></span><span ><input type='radio' class='onclk1' name='Intense10' 
                value='7'><label>7</label></span><span ><input type='radio' class='onclk1' name='Intense10' 
                value='8'><label>8</label></span><span ><input type='radio' class='onclk1' name='Intense10' 
                value='9'><label>9</label></span></td></tr>
        <tr><td class='ca'  >12</td><td><span >
                <input class='onclk1' type='radio' name='A11' value='0' checked/></span><label> Social</label></td><td><span  >
                <input class='onclk1' type='radio' name='A11' value='1'></span><label>Legal</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense11' 
                value='1' checked><label>1</label></span></td><td class='ca' style='min-width:250px;font-size:smaller;' ><span ><input type='radio' class='onclk1' name='Intense11' 
                value='2'><label>2</label></span><span ><input type='radio' class='onclk1' name='Intense11' 
                value='3'><label>3</label></span><span ><input type='radio' class='onclk1' name='Intense11' 
                value='4'><label>4</label></span><span ><input type='radio' class='onclk1' name='Intense11' 
                value='5'><label>5</label></span><span ><input type='radio' class='onclk1' name='Intense11' 
                value='6'><label>6</label></span><span ><input type='radio' class='onclk1' name='Intense11' 
                value='7'><label>7</label></span><span ><input type='radio' class='onclk1' name='Intense11' 
                value='8'><label>8</label></span><span ><input type='radio' class='onclk1' name='Intense11' 
                value='9'><label>9</label></span></td></tr>
        <tr><td colspan='5'></td></tr>
        <tr><td class='ca'  >13</td><td><span >
                <input class='onclk1' type='radio' name='A12' value='0' checked/></span><label> Technology</label></td><td><span  >
                <input class='onclk1' type='radio' name='A12' value='1'></span><label>Environment</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense12' 
                value='1' checked><label>1</label></span></td><td class='ca' style='min-width:250px;font-size:smaller;' ><span ><input type='radio' class='onclk1' name='Intense12' 
                value='2'><label>2</label></span><span ><input type='radio' class='onclk1' name='Intense12' 
                value='3'><label>3</label></span><span ><input type='radio' class='onclk1' name='Intense12' 
                value='4'><label>4</label></span><span ><input type='radio' class='onclk1' name='Intense12' 
                value='5'><label>5</label></span><span ><input type='radio' class='onclk1' name='Intense12' 
                value='6'><label>6</label></span><span ><input type='radio' class='onclk1' name='Intense12' 
                value='7'><label>7</label></span><span ><input type='radio' class='onclk1' name='Intense12' 
                value='8'><label>8</label></span><span ><input type='radio' class='onclk1' name='Intense12' 
                value='9'><label>9</label></span></td></tr>
        <tr><td class='ca'  >14</td><td><span >
                <input class='onclk1' type='radio' name='A13' value='0' checked/></span><label> Technology</label></td><td><span  >
                <input class='onclk1' type='radio' name='A13' value='1'></span><label>Legal</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense13' 
                value='1' checked><label>1</label></span></td><td class='ca' style='min-width:250px;font-size:smaller;' ><span ><input type='radio' class='onclk1' name='Intense13' 
                value='2'><label>2</label></span><span ><input type='radio' class='onclk1' name='Intense13' 
                value='3'><label>3</label></span><span ><input type='radio' class='onclk1' name='Intense13' 
                value='4'><label>4</label></span><span ><input type='radio' class='onclk1' name='Intense13' 
                value='5'><label>5</label></span><span ><input type='radio' class='onclk1' name='Intense13' 
                value='6'><label>6</label></span><span ><input type='radio' class='onclk1' name='Intense13' 
                value='7'><label>7</label></span><span ><input type='radio' class='onclk1' name='Intense13' 
                value='8'><label>8</label></span><span ><input type='radio' class='onclk1' name='Intense13' 
                value='9'><label>9</label></span></td></tr>
        <tr><td colspan='5'></td></tr>
        <tr><td class='ca'  >15</td><td><span >
                <input class='onclk1' type='radio' name='A14' value='0' checked/></span><label> Environment</label></td><td><span  >
                <input class='onclk1' type='radio' name='A14' value='1'></span><label>Legal</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense14' 
                value='1' checked><label>1</label></span></td><td class='ca' style='min-width:250px;font-size:smaller;' ><span ><input type='radio' class='onclk1' name='Intense14' 
                value='2'><label>2</label></span><span ><input type='radio' class='onclk1' name='Intense14' 
                value='3'><label>3</label></span><span ><input type='radio' class='onclk1' name='Intense14' 
                value='4'><label>4</label></span><span ><input type='radio' class='onclk1' name='Intense14' 
                value='5'><label>5</label></span><span ><input type='radio' class='onclk1' name='Intense14' 
                value='6'><label>6</label></span><span ><input type='radio' class='onclk1' name='Intense14' 
                value='7'><label>7</label></span><span ><input type='radio' class='onclk1' name='Intense14' 
                value='8'><label>8</label></span><span ><input type='radio' class='onclk1' name='Intense14' 
                value='9'><label>9</label></span></td></tr>
        <tr><td colspan='5'></td></tr>
        <tr><td class='sm' colspan='5'> <span class='msg'>Please record your answers</span></td></tr><tr><td colspan='2' class='la'><input  type='submit' value='Submit' name='pc_submit' /></td><td colspan='2'><td class='ca'></td></tr>
        <tr><td colspan='2' class='la'> <a href="subcriterios_politicos.php">Continue</a> </td><td colspan='2'><td class='ca'></td></tr>
        </tbody>
        </table></div>
        </form><p></p><div style="display: inline; font-size: small;">

    </body>

</html>

    <?php

        if(isset($_POST['pc_submit'])){
            $Pol_Eco = $_POST ['A0'];
            $imp_Pol_Eco = $_POST ['Intense0'];
            $Pol_Soc = $_POST ['A1'];
            $imp_Pol_Soc = $_POST ['Intense1'];
            $Pol_Tec = $_POST ['A2'];
            $imp_Pol_Tec = $_POST ['Intense2'];
            $Pol_Amb = $_POST ['A3'];
            $imp_Pol_Amb = $_POST ['Intense3'];
            $Pol_Leg = $_POST ['A4'];
            $imp_Pol_Leg = $_POST ['Intense4'];
            $Eco_Soc = $_POST ['A5'];
            $imp_Eco_Soc = $_POST ['Intense5'];
            $Eco_Tec = $_POST ['A6'];
            $imp_Eco_Tec = $_POST ['Intense6'];
            $Eco_Amb = $_POST ['A7'];
            $imp_Eco_Amb = $_POST['Intense7'];
            $Eco_Leg = $_POST ['A8'];
            $imp_Eco_Leg = $_POST['Intense8'];
            $Soc_Tec = $_POST ['A9'];
            $imp_Soc_Tec = $_POST['Intense9'];
            $Soc_Amb = $_POST ['A10'];
            $imp_Soc_Amb = $_POST['Intense10'];
            $Soc_Leg = $_POST ['A11'];
            $imp_Soc_Leg = $_POST['Intense11'];
            $Tec_Amb = $_POST ['A12'];
            $imp_Tec_Amb = $_POST['Intense12'];
            $Tec_Leg = $_POST ['A13'];
            $imp_Tec_Leg = $_POST['Intense13'];
            $Amb_Leg = $_POST ['A14'];
            $imp_Amb_Leg = $_POST['Intense14'];

            $insertardatos = "INSERT INTO criterios VALUES('$Pol_Eco', '$imp_Pol_Eco', '$Pol_Soc', '$imp_Pol_Soc', '$Pol_Tec', '$imp_Pol_Tec', '$Pol_Amb', '$imp_Pol_Amb', '$Pol_Leg',  '$imp_Pol_Leg', '$Eco_Soc', '$imp_Eco_Soc', '$Eco_Tec', '$imp_Eco_Tec', '$Eco_Amb', '$imp_Eco_Amb', '$Eco_Leg', '$imp_Eco_Leg', '$Soc_Tec', '$imp_Soc_Tec', '$Soc_Amb', '$imp_Soc_Amb', '$Soc_Leg', '$imp_Soc_Leg', '$Tec_Amb', '$imp_Tec_Amb', '$Tec_Leg', '$imp_Tec_Leg', '$Amb_Leg', '$imp_Amb_Leg', '')";
            
            $ejecutarinsertar = mysqli_query($enlace, $insertardatos);
        }

    ?>