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
        <h3>Pairwise Comparison <span class='var'>Legal SubCriteria</span></h3>
        <span class='msg'>15 paired comparisons. </span>
        <p>Do the pairwise comparison of all SubCriteria. When complete, please click <i>Submit</i> to upload  the priority data.<br>
        <p style='font-size:small'>ACH Scale: 1- Equally important, 3- Weakly important, 5- More important, 7- Strongly more important, 9- Absolutely more important (2,4,6,8 intermediate values).</p>
        <p><span class='hl'>Regarding the <i><span class='var'>Legal SubCriteria</span></i> ¿Which Subcriterion is more important and how much more important on a scale of 1 to 9?</span></p>
        
        <form action="#" name="form" method="post">
        <table id='Sub'><thead>
        <tr class='header'>
            <th colspan='3' style='text-align:center;'>¿Which Criterion do you prefer A - <span class='var'>o</span> - B?</th>
            <th>Same</th>
            <th style='text-align:center;'>¿How much more?</th></tr></thead>
        <tbody>

        <tr>
            <th>Legal SubCriteria</th>
        </tr>
        <tr><td class='ca' >76</td><td><span >
                <input class='onclk1' type='radio' name='A75' value='0' checked/></span><label> Labor legislation</label></td><td><span>
                <input class='onclk1' type='radio' name='A75' value='1'></span><label>Intellectual property and copyright</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense76' 
                value='1' checked><label>1</label></span></td><td class='ca' style='min-width:250px;font-size:smaller;' ><span ><input type='radio' class='onclk1' name='Intense76' 
                value='2'><label>2</label></span><span ><input type='radio' class='onclk1' name='Intense76' 
                value='3'><label>3</label></span><span ><input type='radio' class='onclk1' name='Intense76' 
                value='4'><label>4</label></span><span ><input type='radio' class='onclk1' name='Intense76' 
                value='5'><label>5</label></span><span ><input type='radio' class='onclk1' name='Intense76' 
                value='6'><label>6</label></span><span ><input type='radio' class='onclk1' name='Intense76' 
                value='7'><label>7</label></span><span ><input type='radio' class='onclk1' name='Intense76' 
                value='8'><label>8</label></span><span ><input type='radio' class='onclk1' name='Intense76' 
                value='9'><label>9</label></span></td></tr>
        <tr><td class='ca'  >77</td><td><span >
                <input class='onclk1' type='radio' name='A76' value='0' checked/></span><label> Labor legislation</label></td><td><span  >
                <input class='onclk1' type='radio' name='A76' value='1'></span><label>Health and safety standards</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense77' 
                value='1' checked><label>1</label></span></td><td class='ca' style='min-width:250px;font-size:smaller;' ><span ><input type='radio' class='onclk1' name='Intense77' 
                value='2'><label>2</label></span><span ><input type='radio' class='onclk1' name='Intense77' 
                value='3'><label>3</label></span><span ><input type='radio' class='onclk1' name='Intense77' 
                value='4'><label>4</label></span><span ><input type='radio' class='onclk1' name='Intense77' 
                value='5'><label>5</label></span><span ><input type='radio' class='onclk1' name='Intense77' 
                value='6'><label>6</label></span><span ><input type='radio' class='onclk1' name='Intense77' 
                value='7'><label>7</label></span><span ><input type='radio' class='onclk1' name='Intense77' 
                value='8'><label>8</label></span><span ><input type='radio' class='onclk1' name='Intense77' 
                value='9'><label>9</label></span></td></tr>
        <tr><td class='ca'  >78</td><td><span >
                <input class='onclk1' type='radio' name='A77' value='0' checked/></span><label> Labor legislation</label></td><td><span  >
                <input class='onclk1' type='radio' name='A77' value='1'></span><label>Competition law and competition defense</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense78' 
                value='1' checked><label>1</label></span></td><td class='ca' style='min-width:250px;font-size:smaller;' ><span ><input type='radio' class='onclk1' name='Intense78' 
                value='2'><label>2</label></span><span ><input type='radio' class='onclk1' name='Intense78' 
                value='3'><label>3</label></span><span ><input type='radio' class='onclk1' name='Intense78' 
                value='4'><label>4</label></span><span ><input type='radio' class='onclk1' name='Intense78' 
                value='5'><label>5</label></span><span ><input type='radio' class='onclk1' name='Intense78' 
                value='6'><label>6</label></span><span ><input type='radio' class='onclk1' name='Intense78' 
                value='7'><label>7</label></span><span ><input type='radio' class='onclk1' name='Intense78' 
                value='8'><label>8</label></span><span ><input type='radio' class='onclk1' name='Intense78' 
                value='9'><label>9</label></span></td></tr>
        <tr><td class='ca'  >79</td><td><span >
                <input class='onclk1' type='radio' name='A78' value='0' checked/></span><label> Labor legislation</label></td><td><span  >
                <input class='onclk1' type='radio' name='A78' value='1'></span><label>Consumer protection regulation</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense79' 
                value='1' checked><label>1</label></span></td><td class='ca' style='min-width:250px;font-size:smaller;' ><span ><input type='radio' class='onclk1' name='Intense79' 
                value='2'><label>2</label></span><span ><input type='radio' class='onLabor legislationclk1' name='Intense79' 
                value='3'><label>3</label></span><span ><input type='radio' class='onclk1' name='Intense79' 
                value='4'><label>4</label></span><span ><input type='radio' class='onclk1' name='Intense79' 
                value='5'><label>5</label></span><span ><input type='radio' class='onclk1' name='Intense79' 
                value='6'><label>6</label></span><span ><input type='radio' class='onclk1' name='Intense79' 
                value='7'><label>7</label></span><span ><input type='radio' class='onclk1' name='Intense79' 
                value='8'><label>8</label></span><span ><input type='radio' class='onclk1' name='Intense79' 
                value='9'><label>9</label></span></td></tr>
        <tr><td class='ca'  >80</td><td><span >
                <input class='onclk1' type='radio' name='A79' value='0' checked/></span><label> Labor legislation</label></td><td><span  >
                <input class='onclk1' type='radio' name='A79' value='1'></span><label>E-commerce regulations</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense80' 
                value='1' checked><label>1</label></span></td><td class='ca' style='min-width:250px;font-size:smaller;' ><span ><input type='radio' class='onclk1' name='Intense80' 
                value='2'><label>2</label></span><span ><input type='radio' class='onclk1' name='Intense80' 
                value='3'><label>3</label></span><span ><input type='radio' class='onclk1' name='Intense80' 
                value='4'><label>4</label></span><span ><input type='radio' class='onclk1' name='Intense80' 
                value='5'><label>5</label></span><span ><input type='radio' class='onclk1' name='Intense80' 
                value='6'><label>6</label></span><span ><input type='radio' class='onclk1' name='Intense80' 
                value='7'><label>7</label></span><span ><input type='radio' class='onclk1' name='Intense80' 
                value='8'><label>8</label></span><span ><input type='radio' class='onclk1' name='Intense80' 
                value='9'><label>9</label></span></td></tr>
        <tr><td colspan='5'></td></tr>
        <tr><td class='ca'  >81</td><td><span >
                <input class='onclk1' type='radio' name='A80' value='0' checked/></span><label> Intellectual property and copyright</label></td><td><span  >
                <input class='onclk1' type='radio' name='A80' value='1'></span><label>Health and safety standards</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense81' 
                value='1' checked><label>1</label></span></td><td class='ca' style='min-width:250px;font-size:smaller;' ><span ><input type='radio' class='onclk1' name='Intense81' 
                value='2'><label>2</label></span><span ><input type='radio' class='onclk1' name='Intense81' 
                value='3'><label>3</label></span><span ><input type='radio' class='onclk1' name='Intense81' 
                value='4'><label>4</label></span><span ><input type='radio' class='onclk1' name='Intense81' 
                value='5'><label>5</label></span><span ><input type='radio' class='onclk1' name='Intense81' 
                value='6'><label>6</label></span><span ><input type='radio' class='onclk1' name='Intense81' 
                value='7'><label>7</label></span><span ><input type='radio' class='onclk1' name='Intense81' 
                value='8'><label>8</label></span><span ><input type='radio' class='onclk1' name='Intense81' 
                value='9'><label>9</label></span></td></tr>
        <tr><td class='ca'  >82</td><td><span >
                <input class='onclk1' type='radio' name='A81' value='0' checked/></span><label> Intellectual property and copyright</label></td><td><span  >
                <input class='onclk1' type='radio' name='A81' value='1'></span><label>Competition law and competition defense</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense82' 
                value='1' checked><label>1</label></span></td><td class='ca' style='min-width:250px;font-size:smaller;' ><span ><input type='radio' class='onclk1' name='Intense82' 
                value='2'><label>2</label></span><span ><input type='radio' class='onclk1' name='Intense82' 
                value='3'><label>3</label></span><span ><input type='radio' class='onclk1' name='Intense82' 
                value='4'><label>4</label></span><span ><input type='radio' class='onclk1' name='Intense82' 
                value='5'><label>5</label></span><span ><input type='radio' class='onclk1' name='Intense82' 
                value='6'><label>6</label></span><span ><input type='radio' class='onclk1' name='Intense82' 
                value='7'><label>7</label></span><span ><input type='radio' class='onclk1' name='Intense82' 
                value='8'><label>8</label></span><span ><input type='radio' class='onclk1' name='Intense82' 
                value='9'><label>9</label></span></td></tr>
        <tr><td class='ca'  >83</td><td><span >
                <input class='onclk1' type='radio' name='A82' value='0' checked/></span><label> Intellectual property and copyright</label></td><td><span  >
                <input class='onclk1' type='radio' name='A82' value='1'></span><label>Consumer protection regulation</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense83' 
                value='1' checked><label>1</label></span></td><td class='ca' style='min-width:250px;font-size:smaller;' ><span ><input type='radio' class='onclk1' name='Intense83' 
                value='2'><label>2</label></span><span ><input type='radio' class='onclk1' name='Intense83' 
                value='3'><label>3</label></span><span ><input type='radio' class='onclk1' name='Intense83' 
                value='4'><label>4</label></span><span ><input type='radio' class='onclk1' name='Intense83' 
                value='5'><label>5</label></span><span ><input type='radio' class='onclk1' name='Intense83' 
                value='6'><label>6</label></span><span ><input type='radio' class='onclk1' name='Intense83' 
                value='7'><label>7</label></span><span ><input type='radio' class='onclk1' name='Intense83' 
                value='8'><label>8</label></span><span ><input type='radio' class='onclk1' name='Intense83' 
                value='9'><label>9</label></span></td></tr>
        <tr><td class='ca'  >84</td><td><span >
                <input class='onclk1' type='radio' name='A83' value='0' checked/></span><label> Intellectual property and copyright</label></td><td><span  >
                <input class='onclk1' type='radio' name='A83' value='1'></span><label>E-commerce regulations</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense84' 
                value='1' checked><label>1</label></span></td><td class='ca' style='min-width:250px;font-size:smaller;' ><span ><input type='radio' class='onclk1' name='Intense84' 
                value='2'><label>2</label></span><span ><input type='radio' class='onclk1' name='Intense84' 
                value='3'><label>3</label></span><span ><input type='radio' class='onclk1' name='Intense84' 
                value='4'><label>4</label></span><span ><input type='radio' class='onclk1' name='Intense84' 
                value='5'><label>5</label></span><span ><input type='radio' class='onclk1' name='Intense84' 
                value='6'><label>6</label></span><span ><input type='radio' class='onclk1' name='Intense84' 
                value='7'><label>7</label></span><span ><input type='radio' class='onclk1' name='Intense84' 
                value='8'><label>8</label></span><span ><input type='radio' class='onclk1' name='Intense84' 
                value='9'><label>9</label></span></td></tr>
        <tr><td colspan='5'></td></tr>
        <tr><td class='ca'  >85</td><td><span >
                <input class='onclk1' type='radio' name='A84' value='0' checked/></span><label> Health and safety standards</label></td><td><span  >
                <input class='onclk1' type='radio' name='A84' value='1'></span><label>Competition law and competition defense</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense85' 
                value='1' checked><label>1</label></span></td><td class='ca' style='min-width:250px;font-size:smaller;' ><span ><input type='radio' class='onclk1' name='Intense85' 
                value='2'><label>2</label></span><span ><input type='radio' class='onclk1' name='Intense85' 
                value='3'><label>3</label></span><span ><input type='radio' class='onclk1' name='Intense85' 
                value='4'><label>4</label></span><span ><input type='radio' class='onclk1' name='Intense85' 
                value='5'><label>5</label></span><span ><input type='radio' class='onclk1' name='Intense85' 
                value='6'><label>6</label></span><span ><input type='radio' class='onclk1' name='Intense85' 
                value='7'><label>7</label></span><span ><input type='radio' class='onclk1' name='Intense85' 
                value='8'><label>8</label></span><span ><input type='radio' class='onclk1' name='Intense85' 
                value='9'><label>9</label></span></td></tr>
        <tr><td class='ca'  >86</td><td><span >
                <input class='onclk1' type='radio' name='A85' value='0' checked/></span><label> Health and safety standards</label></td><td><span  >
                <input class='onclk1' type='radio' name='A85' value='1'></span><label>Consumer protection regulation</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense86' 
                value='1' checked><label>1</label></span></td><td class='ca' style='min-width:250px;font-size:smaller;' ><span ><input type='radio' class='onclk1' name='Intense86' 
                value='2'><label>2</label></span><span ><input type='radio' class='onclk1' name='Intense86' 
                value='3'><label>3</label></span><span ><input type='radio' class='onclk1' name='Intense86' 
                value='4'><label>4</label></span><span ><input type='radio' class='onclk1' name='Intense86' 
                value='5'><label>5</label></span><span ><input type='radio' class='onclk1' name='Intense86' 
                value='6'><label>6</label></span><span ><input type='radio' class='onclk1' name='Intense86' 
                value='7'><label>7</label></span><span ><input type='radio' class='onclk1' name='Intense86' 
                value='8'><label>8</label></span><span ><input type='radio' class='onclk1' name='Intense86' 
                value='9'><label>9</label></span></td></tr>
        <tr><td class='ca'  >87</td><td><span >
                <input class='onclk1' type='radio' name='A86' value='0' checked/></span><label> Health and safety standards</label></td><td><span  >
                <input class='onclk1' type='radio' name='A86' value='1'></span><label>E-commerce regulations</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense87' 
                value='1' checked><label>1</label></span></td><td class='ca' style='min-width:250px;font-size:smaller;' ><span ><input type='radio' class='onclk1' name='Intense87' 
                value='2'><label>2</label></span><span ><input type='radio' class='onclk1' name='Intense87' 
                value='3'><label>3</label></span><span ><input type='radio' class='onclk1' name='Intense87' 
                value='4'><label>4</label></span><span ><input type='radio' class='onclk1' name='Intense87' 
                value='5'><label>5</label></span><span ><input type='radio' class='onclk1' name='Intense87' 
                value='6'><label>6</label></span><span ><input type='radio' class='onclk1' name='Intense87' 
                value='7'><label>7</label></span><span ><input type='radio' class='onclk1' name='Intense87' 
                value='8'><label>8</label></span><span ><input type='radio' class='onclk1' name='Intense87' 
                value='9'><label>9</label></span></td></tr>
        <tr><td colspan='5'></td></tr>
        <tr><td class='ca'  >88</td><td><span >
                <input class='onclk1' type='radio' name='A87' value='0' checked/></span><label> Competition law and competition defense</label></td><td><span  >
                <input class='onclk1' type='radio' name='A87' value='1'></span><label>Consumer protection regulation</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense88' 
                value='1' checked><label>1</label></span></td><td class='ca' style='min-width:250px;font-size:smaller;' ><span ><input type='radio' class='onclk1' name='Intense88' 
                value='2'><label>2</label></span><span ><input type='radio' class='onclk1' name='Intense88' 
                value='3'><label>3</label></span><span ><input type='radio' class='onclk1' name='Intense88' 
                value='4'><label>4</label></span><span ><input type='radio' class='onclk1' name='Intense88' 
                value='5'><label>5</label></span><span ><input type='radio' class='onclk1' name='Intense88' 
                value='6'><label>6</label></span><span ><input type='radio' class='onclk1' name='Intense88' 
                value='7'><label>7</label></span><span ><input type='radio' class='onclk1' name='Intense88' 
                value='8'><label>8</label></span><span ><input type='radio' class='onclk1' name='Intense88' 
                value='9'><label>9</label></span></td></tr>
        <tr><td class='ca'  >89</td><td><span >
                <input class='onclk1' type='radio' name='A88' value='0' checked/></span><label> Competition law and competition defense</label></td><td><span  >
                <input class='onclk1' type='radio' name='A88' value='1'></span><label>E-commerce regulations</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense89' 
                value='1' checked><label>1</label></span></td><td class='ca' style='min-width:250px;font-size:smaller;' ><span ><input type='radio' class='onclk1' name='Intense89' 
                value='2'><label>2</label></span><span ><input type='radio' class='onclk1' name='Intense89' 
                value='3'><label>3</label></span><span ><input type='radio' class='onclk1' name='Intense89' 
                value='4'><label>4</label></span><span ><input type='radio' class='onclk1' name='Intense89' 
                value='5'><label>5</label></span><span ><input type='radio' class='onclk1' name='Intense89' 
                value='6'><label>6</label></span><span ><input type='radio' class='onclk1' name='Intense89' 
                value='7'><label>7</label></span><span ><input type='radio' class='onclk1' name='Intense89' 
                value='8'><label>8</label></span><span ><input type='radio' class='onclk1' name='Intense89' 
                value='9'><label>9</label></span></td></tr>
        <tr><td colspan='5'></td></tr>
        <tr><td class='ca'  >90</td><td><span >
                <input class='onclk1' type='radio' name='A89' value='0' checked/></span><label> Consumer protection regulations</label></td><td><span  >
                <input class='onclk1' type='radio' name='A89' value='1'></span><label>E-commerce regulations</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense90' 
                value='1' checked><label>1</label></span></td><td class='ca' style='min-width:250px;font-size:smaller;' ><span ><input type='radio' class='onclk1' name='Intense90' 
                value='2'><label>2</label></span><span ><input type='radio' class='onclk1' name='Intense90' 
                value='3'><label>3</label></span><span ><input type='radio' class='onclk1' name='Intense90' 
                value='4'><label>4</label></span><span ><input type='radio' class='onclk1' name='Intense90' 
                value='5'><label>5</label></span><span ><input type='radio' class='onclk1' name='Intense90' 
                value='6'><label>6</label></span><span ><input type='radio' class='onclk1' name='Intense90' 
                value='7'><label>7</label></span><span ><input type='radio' class='onclk1' name='Intense90' 
                value='8'><label>8</label></span><span ><input type='radio' class='onclk1' name='Intense90' 
                value='9'><label>9</label></span></td></tr>
        <tr><td colspan='5'></td></tr>

        <tr><td class='sm' colspan='5'> <span class='msg'>Por favor, registre sus respuesta</span></td></tr><tr><td colspan='2' class='la'><input  type='submit' value='Submit' name='pc_submit' /></td><td colspan='2'><td class='ca'></td></tr>
        <tr><td colspan='2' class='la'> <a href="estrategias.php">Continue</a> </td><td colspan='2'><td class='ca'></td></tr>
        </tbody>
        </table></div>
        </form><p></p><div style="display: inline; font-size: small;">

    </body>

    <?php

        if(isset($_POST['pc_submit'])){
            $Leg_lab_Pro_int_der_aut = $_POST ['A75'];
            $imp_Leg_lab_Pro_int_der_aut = $_POST ['Intense75'];
            $Leg_lab_Nor_sal_seg = $_POST ['A76'];
            $imp_Leg_lab_Nor_sal_seg = $_POST ['Intense76'];
            $Leg_lab_Der_com_def_com = $_POST ['A77'];
            $imp_Leg_lab_Der_com_def_com = $_POST ['Intense77'];
            $Leg_lab_Reg_pro_con = $_POST ['A78'];
            $imp_Leg_lab_Reg_pro_con = $_POST ['Intense78'];
            $Leg_lab_Reg_com_ele = $_POST ['A79'];
            $imp_Leg_lab_Reg_com_ele = $_POST ['Intense79'];
            $Pro_int_der_aut_Nor_sal_seg = $_POST ['A80'];
            $imp_Pro_int_der_aut_Nor_sal_seg = $_POST ['Intense80'];
            $Pro_int_der_aut_Der_com_def_com = $_POST ['A81'];
            $imp_Pro_int_der_aut_Der_com_def_com = $_POST ['Intense81'];
            $Pro_int_der_aut_Reg_pro_con = $_POST ['A82'];
            $imp_Pro_int_der_aut_Reg_pro_con = $_POST['Intense82'];
            $Pro_int_der_aut_Reg_com_ele = $_POST['A83'];
            $imp_Pro_int_der_aut_Reg_com_ele = $_POST['Intense83'];
            $Nor_sal_seg_Der_com_def_com = $_POST ['A84'];
            $imp_Nor_sal_seg_Der_com_def_com = $_POST['Intense84'];
            $Nor_sal_seg_Reg_pro_con = $_POST ['A85'];
            $imp_Nor_sal_seg_Reg_pro_con = $_POST['Intense85'];
            $Nor_sal_seg_Reg_com_ele = $_POST ['A86'];
            $imp_Nor_sal_seg_Reg_com_ele = $_POST['Intense86'];
            $Der_com_def_com_Reg_pro_con = $_POST ['A87'];
            $imp_Der_com_def_com_Reg_pro_con = $_POST['Intense87'];
            $Der_com_def_com_Reg_com_ele = $_POST ['A88'];
            $imp_Der_com_def_com_Reg_com_ele = $_POST['Intense88'];
            $Reg_pro_con_Reg_com_ele = $_POST ['A89'];
            $imp_Reg_pro_con_Reg_com_ele = $_POST['Intense89'];

            $insertardatos = "INSERT INTO subcriterios_legal VALUES('$Leg_lab_Pro_int_der_aut', '$imp_Leg_lab_Pro_int_der_aut', '$Leg_lab_Nor_sal_seg', '$imp_Leg_lab_Nor_sal_seg', '$Leg_lab_Der_com_def_com', '$imp_Leg_lab_Der_com_def_com', '$Leg_lab_Reg_pro_con', '$imp_Leg_lab_Reg_pro_con', '$Leg_lab_Reg_com_ele', '$imp_Leg_lab_Reg_com_ele', '$Pro_int_der_aut_Nor_sal_seg', '$imp_Pro_int_der_aut_Nor_sal_seg', '$Pro_int_der_aut_Der_com_def_com', '$imp_Pro_int_der_aut_Der_com_def_com', '$Pro_int_der_aut_Reg_pro_con', '$imp_Pro_int_der_aut_Reg_pro_con', '$Pro_int_der_aut_Reg_com_ele', '$imp_Pro_int_der_aut_Reg_com_ele', '$Nor_sal_seg_Der_com_def_com'A84'$imp_Nor_sal_seg_Der_com_def_com', '$Nor_sal_seg_Reg_pro_con', '$imp_Nor_sal_seg_Reg_pro_con', '$Nor_sal_seg_Reg_com_ele', '$imp_Nor_sal_seg_Reg_com_ele', '$Der_com_def_com_Reg_pro_con', '$imp_Der_com_def_com_Reg_pro_con', '$Der_com_def_com_Reg_com_ele', '$imp_Der_com_def_com_Reg_com_ele', '$Reg_pro_con_Reg_com_ele', '$imp_Reg_pro_con_Reg_com_ele', '')";
            $ejecutarinsertar = mysqli_query($enlace, $insertardatos);

        }

    ?>