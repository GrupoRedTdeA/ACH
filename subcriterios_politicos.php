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
            line-height: 1.4;
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
        <h3>Pairwise Comparison <span class='var'>Political subCriteria</span></h3>
        <span class='msg'>15 paired comparisons. </span>
        <p>Do the pairwise comparison of all SubCriteria. When complete, please click <i>Submit</i> to upload the priority data.<br>
        <p style='font-size:small'>ACH scale: 1- Equally important, 3- Weakly important, 5- More important, 7- Strongly more important, 9- Absolutely more important (2,4,6,8 intermediate values).</p>
        <p><span class='hl'>Regarding the <i><span class='var'>SubCriteria</span></i> ¿Which Subcriterion is more important and how much more important on a scale of 1 to 9?</span></p>
        
        <form action="#" name="form" method="post">
        <table id='Sub'><thead>
        <tr class='header'>
            <th colspan='3' style='text-align:center;'>¿Which Criterion do you prefer A - <span class='var'>or</span> - B?</th>
            <th>Same</th>
            <th style='text-align:center;'>¿How much more?</th></tr></thead>
        <tbody>
        <tr>
            <th>Political SubCriteria</th>
        </tr>
        <tr><td class='ca' >1</td><td><span >
                <input class='onclk1' type='radio' name='A0' value='0' checked/></span><label> Political stability</label></td><td><span>
                <input class='onclk1' type='radio' name='A0' value='1'></span><label>Government regulations</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense0' 
                value='1' checked><label>1</label></span></td><td class='ca' style='min-width:250px;font-size:smaller;' ><span ><input type='radio' class='onclk1' name='Intense0' 
                value='2'><label>2</label></span><span ><input type='radio' class='onclk1' name='Intense0' 
                value='3'><label>3</label></span><span ><input type='radio' class='onclk1' name='Intense0' 
                value='4'><label>4</label></span><span ><input type='radio' class='onclk1' name='Intense0' 
                value='5'><label>5</label></span><span ><input type='radio' class='onclk1' name='Intense0' 
                value='6'><label>6</label></span><span ><input type='radio' class='onclk1' name='Intense0' 
                value='7'><label>7</label></span><span ><input type='radio' class='onclk1' name='Intense0' 
                value='8'><label>8</label></span><span ><input type='radio' class='onclk1' name='Intense0' 
                value='9'><label>9</label></span></td></tr>
        <tr><td class='ca'  >2</td><td><span >
                <input class='onclk1' type='radio' name='A1' value='0' checked/></span><label> Political stability</label></td><td><span  >
                <input class='onclk1' type='radio' name='A1' value='1'></span><label>Fiscal and tax policy</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense1' 
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
                <input class='onclk1' type='radio' name='A2' value='0' checked/></span><label> Political stability</label></td><td><span  >
                <input class='onclk1' type='radio' name='A2' value='1'></span><label>Commercial and industrial policies</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense2' 
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
                <input class='onclk1' type='radio' name='A3' value='0' checked/></span><label> Political stability</label></td><td><span  >
                <input class='onclk1' type='radio' name='A3' value='1'></span><label>International relations</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense3' 
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
                <input class='onclk1' type='radio' name='A4' value='0' checked/></span><label> Political stability</label></td><td><span  >
                <input class='onclk1' type='radio' name='A4' value='1'></span><label>Influence of parties and pressure groups</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense4' 
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
                <input class='onclk1' type='radio' name='A5' value='0' checked/></span><label> Government regulations</label></td><td><span  >
                <input class='onclk1' type='radio' name='A5' value='1'></span><label>Fiscal and tax policy</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense5' 
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
                <input class='onclk1' type='radio' name='A6' value='0' checked/></span><label> Government regulations</label></td><td><span  >
                <input class='onclk1' type='radio' name='A6' value='1'></span><label>Commercial and industrial policies</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense6' 
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
                <input class='onclk1' type='radio' name='A7' value='0' checked/></span><label> Government regulations</label></td><td><span  >
                <input class='onclk1' type='radio' name='A7' value='1'></span><label>International relations</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense7' 
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
                <input class='onclk1' type='radio' name='A8' value='0' checked/></span><label> Government regulations</label></td><td><span  >
                <input class='onclk1' type='radio' name='A8' value='1'></span><label>Influence of parties and pressure groups</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense8' 
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
                <input class='onclk1' type='radio' name='A9' value='0' checked/></span><label> Fiscal and tax policy</label></td><td><span  >
                <input class='onclk1' type='radio' name='A9' value='1'></span><label>Commercial and industrial policies</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense9' 
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
                <input class='onclk1' type='radio' name='A10' value='0' checked/></span><label> Fiscal and tax policy</label></td><td><span  >
                <input class='onclk1' type='radio' name='A10' value='1'></span><label>International relations</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense10' 
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
                <input class='onclk1' type='radio' name='A11' value='0' checked/></span><label> Fiscal and tax policy</label></td><td><span  >
                <input class='onclk1' type='radio' name='A11' value='1'></span><label>Influence of parties and pressure groups</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense11' 
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
                <input class='onclk1' type='radio' name='A12' value='0' checked/></span><label> Commercial and industrial policies</label></td><td><span  >
                <input class='onclk1' type='radio' name='A12' value='1'></span><label>International relations</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense12' 
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
                <input class='onclk1' type='radio' name='A13' value='0' checked/></span><label> Commercial and industrial policies</label></td><td><span  >
                <input class='onclk1' type='radio' name='A13' value='1'></span><label>Influence of parties and pressure groups</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense13' 
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
                <input class='onclk1' type='radio' name='A14' value='0' checked/></span><label> International relations</label></td><td><span  >
                <input class='onclk1' type='radio' name='A14' value='1'></span><label>Influence of parties and pressure groups</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense14' 
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
        <tr><td colspan='2' class='la'> <a href="subcriterios_economicos.php">Continue</a> </td><td colspan='2'><td class='ca'></td></tr>
    
        </tbody>
        </table></div>
        </form><p></p><div style="display: inline; font-size: small;">

    </body>

    <?php

        if(isset($_POST['pc_submit'])){
            $Est_Pol_Reg_gub = $_POST ['A0'];
            $imp_Est_Pol_Reg_gub = $_POST ['Intense0'];
            $Est_Pol_Pol_fis_tri = $_POST ['A1'];
            $imp_Est_Pol_Pol_fis_tri = $_POST ['Intense1'];
            $Est_Pol_Pol_com_ind = $_POST ['A2'];
            $imp_Est_Pol_Pol_com_ind = $_POST ['Intense2'];
            $Est_Pol_Rel_int = $_POST ['A3'];
            $imp_Est_Pol_Rel_int = $_POST ['Intense3'];
            $Est_Pol_inf_par_gru_pre = $_POST ['A4'];
            $imp_Est_Pol_inf_par_gru_pre = $_POST ['Intense4'];
            $Reg_gub_Pol_fis_tri = $_POST ['A5'];
            $imp_Reg_gub_Pol_fis_tri = $_POST ['Intense5'];
            $Reg_gub_Pol_com_ind = $_POST ['A6'];
            $imp_Reg_gub_Pol_com_ind = $_POST ['Intense6'];
            $Reg_gub_Rel_int = $_POST ['A7'];
            $imp_Reg_gub_Rel_int = $_POST['Intense7'];
            $Reg_gub_inf_par_gru_pre = $_POST ['A8'];
            $imp_Reg_gub_inf_par_gru_pre = $_POST['Intense8'];
            $Pol_fis_tri_Pol_com_ind = $_POST ['A9'];
            $imp_Pol_fis_tri_Pol_com_ind = $_POST['Intense9'];
            $Pol_fis_tri_Rel_int = $_POST ['A10'];
            $imp_Pol_fis_tri_Rel_int = $_POST['Intense10'];
            $Pol_fis_tri_inf_par_gru_pre = $_POST ['A11'];
            $imp_Pol_fis_tri_inf_par_gru_pre = $_POST['Intense11'];
            $Pol_com_ind_Rel_int = $_POST ['A12'];
            $imp_Pol_com_ind_Rel_int = $_POST['Intense12'];
            $Pol_com_ind_inf_par_gru_pre = $_POST ['A13'];
            $imp_Pol_com_ind_inf_par_gru_pre = $_POST['Intense13'];
            $Rel_int_inf_par_gru_pre = $_POST ['A14'];
            $imp_Rel_int_inf_par_gru_pre = $_POST['Intense14'];

        $insertardatos = "INSERT INTO subcriterios_politicos VALUES('$Est_Pol_Reg_gub', '$imp_Est_Pol_Reg_gub', '$Est_Pol_Pol_fis_tri', '$imp_Est_Pol_Pol_fis_tri', '$Est_Pol_Pol_com_ind', '$imp_Est_Pol_Pol_com_ind', '$Est_Pol_Rel_int', '$imp_Est_Pol_Rel_int', '$Est_Pol_inf_par_gru_pre', '$imp_Est_Pol_inf_par_gru_pre', '$Reg_gub_Pol_fis_tri', '$imp_Reg_gub_Pol_fis_tri', '$Reg_gub_Pol_com_ind', '$imp_Reg_gub_Pol_com_ind', '$Reg_gub_Rel_int', '$imp_Reg_gub_Rel_int', '$Reg_gub_inf_par_gru_pre', '$imp_Reg_gub_inf_par_gru_pre', '$Pol_fis_tri_Pol_com_ind', '$imp_Pol_fis_tri_Pol_com_ind', '$Pol_fis_tri_Rel_int', '$imp_Pol_fis_tri_Rel_int', '$Pol_fis_tri_inf_par_gru_pre', '$imp_Pol_fis_tri_inf_par_gru_pre', '$Pol_com_ind_Rel_int', '$imp_Pol_com_ind_Rel_int', '$Pol_com_ind_inf_par_gru_pre', '$imp_Pol_com_ind_inf_par_gru_pre', '$Rel_int_inf_par_gru_pre', '$imp_Rel_int_inf_par_gru_pre', '')";
        
        $ejecutarinsertar = mysqli_query($enlace, $insertardatos);

        }
    ?>