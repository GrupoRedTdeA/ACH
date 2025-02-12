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
        <h3>Pairwise Comparison <span class='var'>Economic SubCriteria</span></h3>
        <span class='msg'>15 paired comparisons. </span>
        <p>
        Do the pairwise comparison of all SubCriteria. When complete, please click <i>Submit</i> to upload the priority data.<br>
        <p style='font-size:small'>ACH Scale: 1- Equally important, 3- Weakly important, 5- More important, 7- Strongly more important, 9- Absolutely more important (2,4,6,8 intermediate values).</p>
        <p><span class='hl'>Regarding the <i><span class='var'>Economic SubCriteria</span></i> ¿Which Subcriterion is more important and how much more important on a scale of 1 to 9?</span></p>
        
        <form action="#" name="form" method="post">
        <table id='Sub'><thead>
        <tr class='header'>
            <th colspan='3' style='text-align:center;'>¿Which Criterion do you prefer A - <span class='var'>or</span> - B?</th>
            <th>Same</th>
            <th style='text-align:center;'>¿How much more?</th></tr></thead>
        <tbody>
        <tr>
            <th>Economic SubCriteria</th>
        </tr>
        <tr><td class='ca' >16</td><td><span >
                <input class='onclk1' type='radio' name='A15' value='0' checked/></span><label> Economic growth rate</label></td><td><span>
                <input class='onclk1' type='radio' name='A15' value='1'></span><label>Inflation and exchange rate</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense15' 
                value='1' checked><label>1</label></span></td><td class='ca' style='min-width:250px;font-size:smaller;' ><span ><input type='radio' class='onclk1' name='Intense15' 
                value='2'><label>2</label></span><span ><input type='radio' class='onclk1' name='Intense15' 
                value='3'><label>3</label></span><span ><input type='radio' class='onclk1' name='Intense15' 
                value='4'><label>4</label></span><span ><input type='radio' class='onclk1' name='Intense15' 
                value='5'><label>5</label></span><span ><input type='radio' class='onclk1' name='Intense15' 
                value='6'><label>6</label></span><span ><input type='radio' class='onclk1' name='Intense15' 
                value='7'><label>7</label></span><span ><input type='radio' class='onclk1' name='Intense15' 
                value='8'><label>8</label></span><span ><input type='radio' class='onclk1' name='Intense15' 
                value='9'><label>9</label></span></td></tr>
        <tr><td class='ca'  >17</td><td><span >
                <input class='onclk1' type='radio' name='A16' value='0' checked/></span><label> Economic growth rate</label></td><td><span  >
                <input class='onclk1' type='radio' name='A16' value='1'></span><label>Income level and purchasing power</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense16' 
                value='1' checked><label>1</label></span></td><td class='ca' style='min-width:250px;font-size:smaller;' ><span ><input type='radio' class='onclk1' name='Intense16' 
                value='2'><label>2</label></span><span ><input type='radio' class='onclk1' name='Intense16' 
                value='3'><label>3</label></span><span ><input type='radio' class='onclk1' name='Intense16' 
                value='4'><label>4</label></span><span ><input type='radio' class='onclk1' name='Intense16' 
                value='5'><label>5</label></span><span ><input type='radio' class='onclk1' name='Intense16' 
                value='6'><label>6</label></span><span ><input type='radio' class='onclk1' name='Intense16' 
                value='7'><label>7</label></span><span ><input type='radio' class='onclk1' name='Intense16' 
                value='8'><label>8</label></span><span ><input type='radio' class='onclk1' name='Intense16' 
                value='9'><label>9</label></span></td></tr>
        <tr><td class='ca'  >18</td><td><span >
                <input class='onclk1' type='radio' name='A17' value='0' checked/></span><label> Economic growth rate</label></td><td><span  >
                <input class='onclk1' type='radio' name='A17' value='1'></span><label>Unemployment and labor market conditions</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense17' 
                value='1' checked><label>1</label></span></td><td class='ca' style='min-width:250px;font-size:smaller;' ><span ><input type='radio' class='onclk1' name='Intense17' 
                value='2'><label>2</label></span><span ><input type='radio' class='onclk1' name='Intense17' 
                value='3'><label>3</label></span><span ><input type='radio' class='onclk1' name='Intense17' 
                value='4'><label>4</label></span><span ><input type='radio' class='onclk1' name='Intense17' 
                value='5'><label>5</label></span><span ><input type='radio' class='onclk1' name='Intense17' 
                value='6'><label>6</label></span><span ><input type='radio' class='onclk1' name='Intense17' 
                value='7'><label>7</label></span><span ><input type='radio' class='onclk1' name='Intense17' 
                value='8'><label>8</label></span><span ><input type='radio' class='onclk1' name='Intense17' 
                value='9'><label>9</label></span></td></tr>
        <tr><td class='ca'  >19</td><td><span >
                <input class='onclk1' type='radio' name='A18' value='0' checked/></span><label> Economic growth rate</label></td><td><span  >
                <input class='onclk1' type='radio' name='A18' value='1'></span><label>Access to finance and capital</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense18' 
                value='1' checked><label>1</label></span></td><td class='ca' style='min-width:250px;font-size:smaller;' ><span ><input type='radio' class='onclk1' name='Intense18' 
                value='2'><label>2</label></span><span ><input type='radio' class='onclk1' name='Intense18' 
                value='3'><label>3</label></span><span ><input type='radio' class='onclk1' name='Intense18' 
                value='4'><label>4</label></span><span ><input type='radio' class='onclk1' name='Intense18' 
                value='5'><label>5</label></span><span ><input type='radio' class='onclk1' name='Intense18' 
                value='6'><label>6</label></span><span ><input type='radio' class='onclk1' name='Intense18' 
                value='7'><label>7</label></span><span ><input type='radio' class='onclk1' name='Intense18' 
                value='8'><label>8</label></span><span ><input type='radio' class='onclk1' name='Intense18' 
                value='9'><label>9</label></span></td></tr>
        <tr><td class='ca'  >20</td><td><span >
                <input class='onclk1' type='radio' name='A19' value='0' checked/></span><label> Economic growth rate</label></td><td><span  >
                <input class='onclk1' type='radio' name='A19' value='1'></span><label>Foreign trade conditions and tariffs</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense19' 
                value='1' checked><label>1</label></span></td><td class='ca' style='min-width:250px;font-size:smaller;' ><span ><input type='radio' class='onclk1' name='Intense19'
                value='2'><label>2</label></span><span ><input type='radio' class='onclk1' name='Intense19' 
                value='3'><label>3</label></span><span ><input type='radio' class='onclk1' name='Intense19' 
                value='4'><label>4</label></span><span ><input type='radio' class='onclk1' name='Intense19' 
                value='5'><label>5</label></span><span ><input type='radio' class='onclk1' name='Intense19' 
                value='6'><label>6</label></span><span ><input type='radio' class='onclk1' name='Intense19' 
                value='7'><label>7</label></span><span ><input type='radio' class='onclk1' name='Intense19' 
                value='8'><label>8</label></span><span ><input type='radio' class='onclk1' name='Intense19' 
                value='9'><label>9</label></span></td></tr>
        <tr><td colspan='5'></td></tr>
        <tr><td class='ca'  >21</td><td><span >
                <input class='onclk1' type='radio' name='A20' value='0' checked/></span><label> Inflation and exchange rate</label></td><td><span  >
                <input class='onclk1' type='radio' name='A20' value='1'></span><label>Income level and purchasing power</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense20' 
                value='1' checked><label>1</label></span></td><td class='ca' style='min-width:250px;font-size:smaller;' ><span ><input type='radio' class='onclk1' name='Intense20'
                value='2'><label>2</label></span><span ><input type='radio' class='onclk1' name='Intense20' 
                value='3'><label>3</label></span><span ><input type='radio' class='onclk1' name='Intense20' 
                value='4'><label>4</label></span><span ><input type='radio' class='onclk1' name='Intense20' 
                value='5'><label>5</label></span><span ><input type='radio' class='onclk1' name='Intense20' 
                value='6'><label>6</label></span><span ><input type='radio' class='onclk1' name='Intense20' 
                value='7'><label>7</label></span><span ><input type='radio' class='onclk1' name='Intense20' 
                value='8'><label>8</label></span><span ><input type='radio' class='onclk1' name='Intense20' 
                value='9'><label>9</label></span></td></tr>
        <tr><td class='ca'  >22</td><td><span >
                <input class='onclk1' type='radio' name='A21' value='0' checked/></span><label> Inflation and exchange rate</label></td><td><span  >
                <input class='onclk1' type='radio' name='A21' value='1'></span><label>Unemployment and labor market conditions</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense21' 
                value='1' checked><label>1</label></span></td><td class='ca' style='min-width:250px;font-size:smaller;' ><span ><input type='radio' class='onclk1' name='Intense21'
                value='2'><label>2</label></span><span ><input type='radio' class='onclk1' name='Intense21' 
                value='3'><label>3</label></span><span ><input type='radio' class='onclk1' name='Intense21' 
                value='4'><label>4</label></span><span ><input type='radio' class='onclk1' name='Intense21' 
                value='5'><label>5</label></span><span ><input type='radio' class='onclk1' name='Intense21' 
                value='6'><label>6</label></span><span ><input type='radio' class='onclk1' name='Intense21' 
                value='7'><label>7</label></span><span ><input type='radio' class='onclk1' name='Intense21' 
                value='8'><label>8</label></span><span ><input type='radio' class='onclk1' name='Intense21' 
                value='9'><label>9</label></span></td></tr>
        <tr><td class='ca'  >23</td><td><span >
                <input class='onclk1' type='radio' name='A22' value='0' checked/></span><label> Inflation and exchange rate</label></td><td><span  >
                <input class='onclk1' type='radio' name='A22' value='1'></span><label>Access to finance and capital</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense22' 
                value='1' checked><label>1</label></span></td><td class='ca' style='min-width:250px;font-size:smaller;' ><span ><input type='radio' class='onclk1' name='Intense22'
                value='2'><label>2</label></span><span ><input type='radio' class='onclk1' name='Intense22'
                value='3'><label>3</label></span><span ><input type='radio' class='onclk1' name='Intense22' 
                value='4'><label>4</label></span><span ><input type='radio' class='onclk1' name='Intense22' 
                value='5'><label>5</label></span><span ><input type='radio' class='onclk1' name='Intense22' 
                value='6'><label>6</label></span><span ><input type='radio' class='onclk1' name='Intense22' 
                value='7'><label>7</label></span><span ><input type='radio' class='onclk1' name='Intense22' 
                value='8'><label>8</label></span><span ><input type='radio' class='onclk1' name='Intense22' 
                value='9'><label>9</label></span></td></tr>
        <tr><td class='ca'  >24</td><td><span >
                <input class='onclk1' type='radio' name='A23' value='0' checked/></span><label> Inflation and exchange rate</label></td><td><span  >
                <input class='onclk1' type='radio' name='A23' value='1'></span><label>Foreign trade conditions and tariffs</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense23'
                value='1' checked><label>1</label></span></td><td class='ca' style='min-width:250px;font-size:smaller;' ><span ><input type='radio' class='onclk1' name='Intense23'
                value='2'><label>2</label></span><span ><input type='radio' class='onclk1' name='Intense23'
                value='3'><label>3</label></span><span ><input type='radio' class='onclk1' name='Intense23'
                value='4'><label>4</label></span><span ><input type='radio' class='onclk1' name='Intense23'
                value='5'><label>5</label></span><span ><input type='radio' class='onclk1' name='Intense23'
                value='6'><label>6</label></span><span ><input type='radio' class='onclk1' name='Intense23'
                value='7'><label>7</label></span><span ><input type='radio' class='onclk1' name='Intense23'
                value='8'><label>8</label></span><span ><input type='radio' class='onclk1' name='Intense23'
                value='9'><label>9</label></span></td></tr>
        <tr><td colspan='5'></td></tr>
        <tr><td class='ca'  >25</td><td><span >
                <input class='onclk1' type='radio' name='A24' value='0' checked/></span><label> Income level and purchasing power</label></td><td><span  >
                <input class='onclk1' type='radio' name='A24' value='1'></span><label>Unemployment and labor market conditions</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense24' 
                value='1' checked><label>1</label></span></td><td class='ca' style='min-width:250px;font-size:smaller;' ><span ><input type='radio' class='onclk1' name='Intense24'
                value='2'><label>2</label></span><span ><input type='radio' class='onclk1' name='Intense24'
                value='3'><label>3</label></span><span ><input type='radio' class='onclk1' name='Intense24' 
                value='4'><label>4</label></span><span ><input type='radio' class='onclk1' name='Intense24' 
                value='5'><label>5</label></span><span ><input type='radio' class='onclk1' name='Intense24' 
                value='6'><label>6</label></span><span ><input type='radio' class='onclk1' name='Intense24' 
                value='7'><label>7</label></span><span ><input type='radio' class='onclk1' name='Intense24' 
                value='8'><label>8</label></span><span ><input type='radio' class='onclk1' name='Intense24' 
                value='9'><label>9</label></span></td></tr>
        <tr><td class='ca'  >26</td><td><span >
                <input class='onclk1' type='radio' name='A25' value='0' checked/></span><label> Income level and purchasing power</label></td><td><span  >
                <input class='onclk1' type='radio' name='A25' value='1'></span><label>Access to finance and capital</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense25'
                value='1' checked><label>1</label></span></td><td class='ca' style='min-width:250px;font-size:smaller;' ><span ><input type='radio' class='onclk1' name='Intense25'
                value='2'><label>2</label></span><span ><input type='radio' class='onclk1' name='Intense25'
                value='3'><label>3</label></span><span ><input type='radio' class='onclk1' name='Intense25' 
                value='4'><label>4</label></span><span ><input type='radio' class='onclk1' name='Intense25' 
                value='5'><label>5</label></span><span ><input type='radio' class='onclk1' name='Intense25' 
                value='6'><label>6</label></span><span ><input type='radio' class='onclk1' name='Intense25' 
                value='7'><label>7</label></span><span ><input type='radio' class='onclk1' name='Intense25' 
                value='8'><label>8</label></span><span ><input type='radio' class='onclk1' name='Intense25' 
                value='9'><label>9</label></span></td></tr>
        <tr><td class='ca'  >27</td><td><span >
                <input class='onclk1' type='radio' name='A26' value='0' checked/></span><label> Income level and purchasing power</label></td><td><span  >
                <input class='onclk1' type='radio' name='A26' value='1'></span><label>Foreign trade conditions and tariffs</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense26'
                value='1' checked><label>1</label></span></td><td class='ca' style='min-width:250px;font-size:smaller;' ><span ><input type='radio' class='onclk1' name='Intense26'
                value='2'><label>2</label></span><span ><input type='radio' class='onclk1' name='Intense26'
                value='3'><label>3</label></span><span ><input type='radio' class='onclk1' name='Intense26' 
                value='4'><label>4</label></span><span ><input type='radio' class='onclk1' name='Intense26' 
                value='5'><label>5</label></span><span ><input type='radio' class='onclk1' name='Intense26' 
                value='6'><label>6</label></span><span ><input type='radio' class='onclk1' name='Intense26' 
                value='7'><label>7</label></span><span ><input type='radio' class='onclk1' name='Intense26' 
                value='8'><label>8</label></span><span ><input type='radio' class='onclk1' name='Intense26' 
                value='9'><label>9</label></span></td></tr>
        <tr><td colspan='5'></td></tr>
        <tr><td class='ca'  >28</td><td><span >
                <input class='onclk1' type='radio' name='A27' value='0' checked/></span><label> Unemployment and labor market conditions</label></td><td><span  >
                <input class='onclk1' type='radio' name='A27' value='1'></span><label>Access to finance and capital</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense27'
                value='1' checked><label>1</label></span></td><td class='ca' style='min-width:250px;font-size:smaller;' ><span ><input type='radio' class='onclk1' name='Intense27'
                value='2'><label>2</label></span><span ><input type='radio' class='onclk1' name='Intense27'
                value='3'><label>3</label></span><span ><input type='radio' class='onclk1' name='Intense27' 
                value='4'><label>4</label></span><span ><input type='radio' class='onclk1' name='Intense27' 
                value='5'><label>5</label></span><span ><input type='radio' class='onclk1' name='Intense27' 
                value='6'><label>6</label></span><span ><input type='radio' class='onclk1' name='Intense27' 
                value='7'><label>7</label></span><span ><input type='radio' class='onclk1' name='Intense27' 
                value='8'><label>8</label></span><span ><input type='radio' class='onclk1' name='Intense27' 
                value='9'><label>9</label></span></td></tr>
        <tr><td class='ca'  >29</td><td><span >
                <input class='onclk1' type='radio' name='A28' value='0' checked/></span><label> Unemployment and labor market conditions</label></td><td><span  >
                <input class='onclk1' type='radio' name='A28' value='1'></span><label>Foreign trade conditions and tariffs</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense28'
                value='1' checked><label>1</label></span></td><td class='ca' style='min-width:250px;font-size:smaller;' ><span ><input type='radio' class='onclk1' name='Intense28'
                value='2'><label>2</label></span><span ><input type='radio' class='onclk1' name='Intense28'
                value='3'><label>3</label></span><span ><input type='radio' class='onclk1' name='Intense28' 
                value='4'><label>4</label></span><span ><input type='radio' class='onclk1' name='Intense28' 
                value='5'><label>5</label></span><span ><input type='radio' class='onclk1' name='Intense28' 
                value='6'><label>6</label></span><span ><input type='radio' class='onclk1' name='Intense28' 
                value='7'><label>7</label></span><span ><input type='radio' class='onclk1' name='Intense28' 
                value='8'><label>8</label></span><span ><input type='radio' class='onclk1' name='Intense28' 
                value='9'><label>9</label></span></td></tr>
        <tr><td colspan='5'></td></tr>
        <tr><td class='ca'  >30</td><td><span >
                <input class='onclk1' type='radio' name='A29' value='0' checked/></span><label> Access to finance and capital</label></td><td><span  >
                <input class='onclk1' type='radio' name='A29' value='1'></span><label>Foreign trade conditions and tariffs</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense29'
                value='1' checked><label>1</label></span></td><td class='ca' style='min-width:250px;font-size:smaller;' ><span ><input type='radio' class='onclk1' name='Intense29'
                value='2'><label>2</label></span><span ><input type='radio' class='onclk1' name='Intense29'
                value='3'><label>3</label></span><span ><input type='radio' class='onclk1' name='Intense29' 
                value='4'><label>4</label></span><span ><input type='radio' class='onclk1' name='Intense29' 
                value='5'><label>5</label></span><span ><input type='radio' class='onclk1' name='Intense29' 
                value='6'><label>6</label></span><span ><input type='radio' class='onclk1' name='Intense29' 
                value='7'><label>7</label></span><span ><input type='radio' class='onclk1' name='Intense29' 
                value='8'><label>8</label></span><span ><input type='radio' class='onclk1' name='Intense29' 
                value='9'><label>9</label></span></td></tr>
        <tr><td colspan='5'></td></tr>

        <tr><td class='sm' colspan='5'> <span class='msg'>Please record your answers</span></td></tr><tr><td colspan='2' class='la'><input  type='submit' value='Submit' name='pc_submit' /></td><td colspan='2'><td class='ca'></td></tr>
        <tr><td colspan='2' class='la'> <a href="subcriterios_sociales.php">Continue</a> </td><td colspan='2'><td class='ca'></td></tr>
        
        </tbody>
        </table></div>
        </form><p></p><div style="display: inline; font-size: small;">

    </body>

    <?php

        if(isset($_POST['pc_submit'])){
            $Tas_cre_eco_Eco_inf_tas_cam = $_POST ['A15'];
            $imp_Tas_cre_eco_Eco_inf_tas_cam = $_POST ['Intense15'];
            $Tas_cre_eco_Eco_Niv_ing_pod_adq = $_POST ['A16'];
            $imp_Tas_cre_eco_Eco_Niv_ing_pod_adq = $_POST ['Intense16'];
            $Tas_cre_eco_Eco_Des_con_mer_tra = $_POST ['A17'];
            $imp_Tas_cre_eco_Eco_Des_con_mer_tra = $_POST ['Intense17'];
            $Tas_cre_eco_Eco_Acc_fin_cap = $_POST ['A18'];
            $imp_Tas_cre_eco_Eco_Acc_fin_cap = $_POST ['Intense18'];
            $Tas_cre_eco_Eco_Con_ara_com_ext = $_POST ['A19'];
            $imp_Tas_cre_eco_Eco_Con_ara_com_ext = $_POST ['Intense19'];
            $inf_tas_cam_Niv_ing_pod_adq = $_POST ['A20'];
            $imp_inf_tas_cam_Niv_ing_pod_adq = $_POST ['Intense20'];
            $inf_tas_cam_Des_con_mer_tra = $_POST ['A21'];
            $imp_inf_tas_cam_Des_con_mer_tra = $_POST ['Intense21'];
            $inf_tas_cam_Acc_fin_cap = $_POST ['A22'];
            $imp_inf_tas_cam_Acc_fin_cap = $_POST['Intense22'];
            $inf_tas_cam_Con_ara_com_ext = $_POST ['A23'];
            $imp_inf_tas_cam_Con_ara_com_ext = $_POST['Intense23'];
            $Niv_ing_pod_adq_Des_con_mer_tra = $_POST ['A24'];
            $imp_Niv_ing_pod_adq_Des_con_mer_tra = $_POST['Intense24'];
            $Niv_ing_pod_adq_Acc_fin_cap = $_POST ['A25'];
            $imp_Niv_ing_pod_adq_Acc_fin_cap = $_POST['Intense25'];
            $Niv_ing_pod_adq_Con_ara_com_ext = $_POST ['A26'];
            $imp_Niv_ing_pod_adq_Con_ara_com_ext = $_POST['Intense26'];
            $Des_con_mer_tra_Acc_fin_cap = $_POST ['A27'];
            $imp_Des_con_mer_tra_Acc_fin_cap = $_POST['Intense27'];
            $Des_con_mer_tra_Con_ara_com_ext = $_POST ['A28'];
            $imp_Des_con_mer_tra_Con_ara_com_ext = $_POST['Intense28'];
            $Acc_fin_cap_Con_ara_com_ext = $_POST ['A29'];
            $imp_Acc_fin_cap_Con_ara_com_ext = $_POST['Intense29'];

            $insertardatos = "INSERT INTO subcriterios_economicos VALUES('$Tas_cre_eco_Eco_inf_tas_cam', '$imp_Tas_cre_eco_Eco_inf_tas_cam', '$Tas_cre_eco_Eco_Niv_ing_pod_adq','$imp_Tas_cre_eco_Eco_Niv_ing_pod_adq', '$Tas_cre_eco_Eco_Des_con_mer_tra' , '$imp_Tas_cre_eco_Eco_Des_con_mer_tra' , '$Tas_cre_eco_Eco_Acc_fin_cap', '$imp_Tas_cre_eco_Eco_Acc_fin_cap', '$Tas_cre_eco_Eco_Con_ara_com_ext', '$imp_Tas_cre_eco_Eco_Con_ara_com_ext', '$inf_tas_cam_Niv_ing_pod_adq', '$imp_inf_tas_cam_Niv_ing_pod_adq', '$inf_tas_cam_Des_con_mer_tra', '$imp_inf_tas_cam_Des_con_mer_tra', '$inf_tas_cam_Acc_fin_cap', '$imp_inf_tas_cam_Acc_fin_cap', '$inf_tas_cam_Con_ara_com_ext', '$imp_inf_tas_cam_Con_ara_com_ext', '$Niv_ing_pod_adq_Des_con_mer_tra', '$imp_Niv_ing_pod_adq_Des_con_mer_tra', '$Niv_ing_pod_adq_Acc_fin_cap', '$imp_Niv_ing_pod_adq_Acc_fin_cap', '$Niv_ing_pod_adq_Con_ara_com_ext', '$imp_Niv_ing_pod_adq_Con_ara_com_ext', '$Des_con_mer_tra_Acc_fin_cap', '$imp_Des_con_mer_tra_Acc_fin_cap', '$Des_con_mer_tra_Con_ara_com_ext', '$imp_Des_con_mer_tra_Con_ara_com_ext', '$Acc_fin_cap_Con_ara_com_ext', '$imp_Acc_fin_cap_Con_ara_com_ext,'')";
            $ejecutarinsertar = mysqli_query($enlace, $insertardatos);

        }

        ?>