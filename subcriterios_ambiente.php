<?php

    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $basededatos = "ach";

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
        <h2>Evaluation of criteria for <span class='var'>Strategic selection</span></h2>
        <h3>Pairwise Comparison <span class='var'>Environmental SubCriteria</span></h3>
        <span class='msg'>15 paired comparisons. </span>
        <p>Do the pairwise comparison of all SubCriteria. When complete, please click <i>Submit</i> to upload the priority data.<br>
        <p style='font-size:small'>ACH scale: 1- Equally important, 3- Weakly important, 5- More important, 7- Strongly more important, 9- Absolutely more important (2,4,6,8 intermediate values).</p>
        <p><span class='hl'>Regarding the <i><span class='var'>SubCriteria</span></i>, ¿Which Subcriterion is more important and how much more important on a scale of 1 to 9?</span></p>
        
        <form action="#" name="form" method="post">
        <table id='Sub'><thead>
        <tr class='header'>
            <th colspan='3' style='text-align:center;'>¿Which Criterion do you prefer A - <span class='var'>or</span> - B?</th>
            <th>Same</th>
            <th style='text-align:center;'>¿How much more?</th></tr></thead>
        <tbody>

        <tr>
            <th>Environmental Subcriteria</th>
        </tr>
        <tr><td class='ca' >61</td><td><span >
                <input class='onclk1' type='radio' name='A60' value='0' checked/></span><label> Environmental standards</label></td><td><span>
                <input class='onclk1' type='radio' name='A60' value='1'></span><label>Sustainability and climate change</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense61' 
                value='1' checked><label>1</label></span></td><td class='ca' style='min-width:250px;font-size:smaller;' ><span ><input type='radio' class='onclk1' name='Intense61' 
                value='2'><label>2</label></span><span ><input type='radio' class='onclk1' name='Intense61' 
                value='3'><label>3</label></span><span ><input type='radio' class='onclk1' name='Intense61' 
                value='4'><label>4</label></span><span ><input type='radio' class='onclk1' name='Intense61' 
                value='5'><label>5</label></span><span ><input type='radio' class='onclk1' name='Intense61' 
                value='6'><label>6</label></span><span ><input type='radio' class='onclk1' name='Intense61' 
                value='7'><label>7</label></span><span ><input type='radio' class='onclk1' name='Intense61'
                value='8'><label>8</label></span><span ><input type='radio' class='onclk1' name='Intense61' 
                value='9'><label>9</label></span></td></tr>
        <tr><td class='ca'  >62</td><td><span >
                <input class='onclk1' type='radio' name='A61' value='0' checked/></span><label> Environmental standards</label></td><td><span  >
                <input class='onclk1' type='radio' name='A61' value='1'></span><label>Availability of natural resources</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense62' 
                value='1' checked><label>1</label></span></td><td class='ca' style='min-width:250px;font-size:smaller;' ><span ><input type='radio' class='onclk1' name='Intense62'
                value='2'><label>2</label></span><span ><input type='radio' class='onclk1' name='Intense62'
                value='3'><label>3</label></span><span ><input type='radio' class='onclk1' name='Intense62' 
                value='4'><label>4</label></span><span ><input type='radio' class='onclk1' name='Intense62' 
                value='5'><label>5</label></span><span ><input type='radio' class='onclk1' name='Intense62' 
                value='6'><label>6</label></span><span ><input type='radio' class='onclk1' name='Intense62' 
                value='7'><label>7</label></span><span ><input type='radio' class='onclk1' name='Intense62' 
                value='8'><label>8</label></span><span ><input type='radio' class='onclk1' name='Intense62' 
                value='9'><label>9</label></span></td></tr>
        <tr><td class='ca'  >63</td><td><span >
                <input class='onclk1' type='radio' name='A62' value='0' checked/></span><label> Environmental standards</label></td><td><span  >
                <input class='onclk1' type='radio' name='A62' value='1'></span><label>Waste and recycling management</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense63'
                value='1' checked><label>1</label></span></td><td class='ca' style='min-width:250px;font-size:smaller;' ><span ><input type='radio' class='onclk1' name='Intense63' 
                value='2'><label>2</label></span><span ><input type='radio' class='onclk1' name='Intense63' 
                value='3'><label>3</label></span><span ><input type='radio' class='onclk1' name='Intense63' 
                value='4'><label>4</label></span><span ><input type='radio' class='onclk1' name='Intense63' 
                value='5'><label>5</label></span><span ><input type='radio' class='onclk1' name='Intense63' 
                value='6'><label>6</label></span><span ><input type='radio' class='onclk1' name='Intense63' 
                value='7'><label>7</label></span><span ><input type='radio' class='onclk1' name='Intense63' 
                value='8'><label>8</label></span><span ><input type='radio' class='onclk1' name='Intense63' 
                value='9'><label>9</label></span></td></tr>
        <tr><td class='ca'  >64</td><td><span >
                <input class='onclk1' type='radio' name='A63' value='0' checked/></span><label> Environmental standards</label></td><td><span  >
                <input class='onclk1' type='radio' name='A63' value='1'></span><label>Energy performance</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense64' 
                value='1' checked><label>1</label></span></td><td class='ca' style='min-width:250px;font-size:smaller;' ><span ><input type='radio' class='onclk1' name='Intense64' 
                value='2'><label>2</label></span><span ><input type='radio' class='onclk1' name='Intense64' 
                value='3'><label>3</label></span><span ><input type='radio' class='onclk1' name='Intense64' 
                value='4'><label>4</label></span><span ><input type='radio' class='onclk1' name='Intense64' 
                value='5'><label>5</label></span><span ><input type='radio' class='onclk1' name='Intense64' 
                value='6'><label>6</label></span><span ><input type='radio' class='onclk1' name='Intense64' 
                value='7'><label>7</label></span><span ><input type='radio' class='onclk1' name='Intense64' 
                value='8'><label>8</label></span><span ><input type='radio' class='onclk1' name='Intense64' 
                value='9'><label>9</label></span></td></tr>
        <tr><td class='ca'  >65</td><td><span >
                <input class='onclk1' type='radio' name='A64' value='0' checked/></span><label> Environmental standards</label></td><td><span  >
                <input class='onclk1' type='radio' name='A64' value='1'></span><label>Corporate social responsibility in environmental issues</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense65' 
                value='1' checked><label>1</label></span></td><td class='ca' style='min-width:250px;font-size:smaller;' ><span ><input type='radio' class='onclk1' name='Intense65' 
                value='2'><label>2</label></span><span ><input type='radio' class='onclk1' name='Intense65' 
                value='3'><label>3</label></span><span ><input type='radio' class='onclk1' name='Intense65' 
                value='4'><label>4</label></span><span ><input type='radio' class='onclk1' name='Intense65' 
                value='5'><label>5</label></span><span ><input type='radio' class='onclk1' name='Intense65' 
                value='6'><label>6</label></span><span ><input type='radio' class='onclk1' name='Intense65' 
                value='7'><label>7</label></span><span ><input type='radio' class='onclk1' name='Intense65' 
                value='8'><label>8</label></span><span ><input type='radio' class='onclk1' name='Intense65' 
                value='9'><label>9</label></span></td></tr>
        <tr><td colspan='5'></td></tr>
        <tr><td class='ca'  >66</td><td><span >
                <input class='onclk1' type='radio' name='A65' value='0' checked/></span><label> Sustainability and climate change</label></td><td><span  >
                <input class='onclk1' type='radio' name='A65' value='1'></span><label>Availability of natural resources</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense66'
                value='1' checked><label>1</label></span></td><td class='ca' style='min-width:250px;font-size:smaller;' ><span ><input type='radio' class='onclk1' name='Intense66' 
                value='2'><label>2</label></span><span ><input type='radio' class='onclk1' name='Intense66' 
                value='3'><label>3</label></span><span ><input type='radio' class='onclk1' name='Intense66' 
                value='4'><label>4</label></span><span ><input type='radio' class='onclk1' name='Intense66' 
                value='5'><label>5</label></span><span ><input type='radio' class='onclk1' name='Intense66' 
                value='6'><label>6</label></span><span ><input type='radio' class='onclk1' name='Intense66' 
                value='7'><label>7</label></span><span ><input type='radio' class='onclk1' name='Intense66' 
                value='8'><label>8</label></span><span ><input type='radio' class='onclk1' name='Intense66' 
                value='9'><label>9</label></span></td></tr>
        <tr><td class='ca'  >67</td><td><span >
                <input class='onclk1' type='radio' name='A66' value='0' checked/></span><label> Sustainability and climate change</label></td><td><span  >
                <input class='onclk1' type='radio' name='A66' value='1'></span><label>Waste and recycling management</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense67' 
                value='1' checked><label>1</label></span></td><td class='ca' style='min-width:250px;font-size:smaller;' ><span ><input type='radio' class='onclk1' name='Intense67' 
                value='2'><label>2</label></span><span ><input type='radio' class='onclk1' name='Intense67' 
                value='3'><label>3</label></span><span ><input type='radio' class='onclk1' name='Intense67' 
                value='4'><label>4</label></span><span ><input type='radio' class='onclk1' name='Intense67' 
                value='5'><label>5</label></span><span ><input type='radio' class='onclk1' name='Intense67' 
                value='6'><label>6</label></span><span ><input type='radio' class='onclk1' name='Intense67' 
                value='7'><label>7</label></span><span ><input type='radio' class='onclk1' name='Intense67' 
                value='8'><label>8</label></span><span ><input type='radio' class='onclk1' name='Intense67' 
                value='9'><label>9</label></span></td></tr>
        <tr><td class='ca'  >68</td><td><span >
                <input class='onclk1' type='radio' name='A67' value='0' checked/></span><label> Sustainability and climate change</label></td><td><span  >
                <input class='onclk1' type='radio' name='A67' value='1'></span><label>Energy performance</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense68' 
                value='1' checked><label>1</label></span></td><td class='ca' style='min-width:250px;font-size:smaller;' ><span ><input type='radio' class='onclk1' name='Intense68'
                value='2'><label>2</label></span><span ><input type='radio' class='onclk1' name='Intense68' 
                value='3'><label>3</label></span><span ><input type='radio' class='onclk1' name='Intense68' 
                value='4'><label>4</label></span><span ><input type='radio' class='onclk1' name='Intense68' 
                value='5'><label>5</label></span><span ><input type='radio' class='onclk1' name='Intense68' 
                value='6'><label>6</label></span><span ><input type='radio' class='onclk1' name='Intense68' 
                value='7'><label>7</label></span><span ><input type='radio' class='onclk1' name='Intense68' 
                value='8'><label>8</label></span><span ><input type='radio' class='onclk1' name='Intense68' 
                value='9'><label>9</label></span></td></tr>
        <tr><td class='ca'  >69</td><td><span >
                <input class='onclk1' type='radio' name='A68' value='0' checked/></span><label> Sustainability and climate change</label></td><td><span  >
                <input class='onclk1' type='radio' name='A68' value='1'></span><label>Corporate social responsibility in environmental issues</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense69' 
                value='1' checked><label>1</label></span></td><td class='ca' style='min-width:250px;font-size:smaller;' ><span ><input type='radio' class='onclk1' name='Intense69' 
                value='2'><label>2</label></span><span ><input type='radio' class='onclk1' name='Intense69' 
                value='3'><label>3</label></span><span ><input type='radio' class='onclk1' name='Intense69' 
                value='4'><label>4</label></span><span ><input type='radio' class='onclk1' name='Intense69' 
                value='5'><label>5</label></span><span ><input type='radio' class='onclk1' name='Intense69' 
                value='6'><label>6</label></span><span ><input type='radio' class='onclk1' name='Intense69' 
                value='7'><label>7</label></span><span ><input type='radio' class='onclk1' name='Intense69' 
                value='8'><label>8</label></span><span ><input type='radio' class='onclk1' name='Intense69' 
                value='9'><label>9</label></span></td></tr>
        <tr><td colspan='5'></td></tr>
        <tr><td class='ca'  >70</td><td><span >
                <input class='onclk1' type='radio' name='A69' value='0' checked/></span><label> Availability of natural resources</label></td><td><span  >
                <input class='onclk1' type='radio' name='A69' value='1'></span><label>Waste and recycling management</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense70'
                value='1' checked><label>1</label></span></td><td class='ca' style='min-width:250px;font-size:smaller;' ><span ><input type='radio' class='onclk1' name='Intense70'
                value='2'><label>2</label></span><span ><input type='radio' class='onclk1' name='Intense70'
                value='3'><label>3</label></span><span ><input type='radio' class='onclk1' name='Intense70'
                value='4'><label>4</label></span><span ><input type='radio' class='onclk1' name='Intense70'
                value='5'><label>5</label></span><span ><input type='radio' class='onclk1' name='Intense70'
                value='6'><label>6</label></span><span ><input type='radio' class='onclk1' name='Intense70'
                value='7'><label>7</label></span><span ><input type='radio' class='onclk1' name='Intense70'
                value='8'><label>8</label></span><span ><input type='radio' class='onclk1' name='Intense70'
                value='9'><label>9</label></span></td></tr>
        <tr><td class='ca'  >71</td><td><span >
                <input class='onclk1' type='radio' name='A70' value='0' checked/></span><label> Availability of natural resources</label></td><td><span  >
                <input class='onclk1' type='radio' name='A70' value='1'></span><label>Energy performance</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense71' 
                value='1' checked><label>1</label></span></td><td class='ca' style='min-width:250px;font-size:smaller;' ><span ><input type='radio' class='onclk1' name='Intense71' 
                value='2'><label>2</label></span><span ><input type='radio' class='onclk1' name='Intense71' 
                value='3'><label>3</label></span><span ><input type='radio' class='onclk1' name='Intense71' 
                value='4'><label>4</label></span><span ><input type='radio' class='onclk1' name='Intense71' 
                value='5'><label>5</label></span><span ><input type='radio' class='onclk1' name='Intense71' 
                value='6'><label>6</label></span><span ><input type='radio' class='onclk1' name='Intense71' 
                value='7'><label>7</label></span><span ><input type='radio' class='onclk1' name='Intense71' 
                value='8'><label>8</label></span><span ><input type='radio' class='onclk1' name='Intense71' 
                value='9'><label>9</label></span></td></tr>
        <tr><td class='ca'  >72</td><td><span >
                <input class='onclk1' type='radio' name='A71' value='0' checked/></span><label> Availability of natural resources</label></td><td><span  >
                <input class='onclk1' type='radio' name='A71' value='1'></span><label>Corporate social responsibility in environmental issues</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense72'
                value='1' checked><label>1</label></span></td><td class='ca' style='min-width:250px;font-size:smaller;' ><span ><input type='radio' class='onclk1' name='Intense72' 
                value='2'><label>2</label></span><span ><input type='radio' class='onclk1' name='Intense72' 
                value='3'><label>3</label></span><span ><input type='radio' class='onclk1' name='Intense72' 
                value='4'><label>4</label></span><span ><input type='radio' class='onclk1' name='Intense72' 
                value='5'><label>5</label></span><span ><input type='radio' class='onclk1' name='Intense72' 
                value='6'><label>6</label></span><span ><input type='radio' class='onclk1' name='Intense72' 
                value='7'><label>7</label></span><span ><input type='radio' class='onclk1' name='Intense72' 
                value='8'><label>8</label></span><span ><input type='radio' class='onclk1' name='Intense72' 
                value='9'><label>9</label></span></td></tr>
        <tr><td colspan='5'></td></tr>
        <tr><td class='ca'  >73</td><td><span >
                <input class='onclk1' type='radio' name='A72' value='0' checked/></span><label> Waste and recycling management</label></td><td><span  >
                <input class='onclk1' type='radio' name='A72' value='1'></span><label>Energy performance</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense73'
                value='1' checked><label>1</label></span></td><td class='ca' style='min-width:250px;font-size:smaller;' ><span ><input type='radio' class='onclk1' name='Intense73' 
                value='2'><label>2</label></span><span ><input type='radio' class='onclk1' name='Intense73' 
                value='3'><label>3</label></span><span ><input type='radio' class='onclk1' name='Intense73' 
                value='4'><label>4</label></span><span ><input type='radio' class='onclk1' name='Intense73' 
                value='5'><label>5</label></span><span ><input type='radio' class='onclk1' name='Intense73' 
                value='6'><label>6</label></span><span ><input type='radio' class='onclk1' name='Intense73' 
                value='7'><label>7</label></span><span ><input type='radio' class='onclk1' name='Intense73' 
                value='8'><label>8</label></span><span ><input type='radio' class='onclk1' name='Intense73' 
                value='9'><label>9</label></span></td></tr>
        <tr><td class='ca'  >74</td><td><span >
                <input class='onclk1' type='radio' name='A73' value='0' checked/></span><label> Waste and recycling management</label></td><td><span  >
                <input class='onclk1' type='radio' name='A73' value='1'></span><label>Corporate social responsibility in environmental issues</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense74' 
                value='1' checked><label>1</label></span></td><td class='ca' style='min-width:250px;font-size:smaller;' ><span ><input type='radio' class='onclk1' name='Intense74' 
                value='2'><label>2</label></span><span ><input type='radio' class='onclk1' name='Intense74' 
                value='3'><label>3</label></span><span ><input type='radio' class='onclk1' name='Intense74' 
                value='4'><label>4</label></span><span ><input type='radio' class='onclk1' name='Intense74' 
                value='5'><label>5</label></span><span ><input type='radio' class='onclk1' name='Intense74' 
                value='6'><label>6</label></span><span ><input type='radio' class='onclk1' name='Intense74' 
                value='7'><label>7</label></span><span ><input type='radio' class='onclk1' name='Intense74' 
                value='8'><label>8</label></span><span ><input type='radio' class='onclk1' name='Intense74' 
                value='9'><label>9</label></span></td></tr>
        <tr><td colspan='5'></td></tr>
        <tr><td class='ca'  >75</td><td><span >
                <input class='onclk1' type='radio' name='A74' value='0' checked/></span><label> Energy performance</label></td><td><span  >
                <input class='onclk1' type='radio' name='A74' value='1'></span><label>Corporate social responsibility in environmental issues</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense75' 
                value='1' checked><label>1</label></span></td><td class='ca' style='min-width:250px;font-size:smaller;' ><span ><input type='radio' class='onclk1' name='Intense75' 
                value='2'><label>2</label></span><span ><input type='radio' class='onclk1' name='Intense75' 
                value='3'><label>3</label></span><span ><input type='radio' class='onclk1' name='Intense75' 
                value='4'><label>4</label></span><span ><input type='radio' class='onclk1' name='Intense75' 
                value='5'><label>5</label></span><span ><input type='radio' class='onclk1' name='Intense75' 
                value='6'><label>6</label></span><span ><input type='radio' class='onclk1' name='Intense75' 
                value='7'><label>7</label></span><span ><input type='radio' class='onclk1' name='Intense75' 
                value='8'><label>8</label></span><span ><input type='radio' class='onclk1' name='Intense75' 
                value='9'><label>9</label></span></td></tr>
        <tr><td colspan='5'></td></tr>

        <tr><td class='sm' colspan='5'> <span class='msg'>Please record your answers</span></td></tr><tr><td colspan='2' class='la'><input  type='submit' value='Submit' name='pc_submit' /></td><td colspan='2'><td class='ca'></td></tr>
        <tr><td colspan='2' class='la'> <a href="subcriterios_legales.php">Continue</a> </td><td colspan='2'><td class='ca'></td></tr>

        </tbody>
        </table></div>
        </form><p></p><div style="display: inline; font-size: small;">

    </body>

    <?php

        if(isset($_POST['pc_submit'])){
            $Nor_med_Sos_cam_cli = $_POST ['A60'];
            $imp_Nor_med_Sos_cam_cli = $_POST ['Intense60'];
            $Nor_med_Dis_rec_nat = $_POST ['A61'];
            $imp_Nor_med_Dis_rec_nat = $_POST ['Intense61'];
            $Nor_med_Ges_res_rec = $_POST ['A62'];
            $imp_Nor_med_Ges_res_rec = $_POST ['Intense62'];
            $Nor_med_Ren_ene = $_POST ['A63'];
            $imp_Nor_med_Ren_ene = $_POST ['Intense63'];
            $Nor_med_Res_soc_emp_amb = $_POST ['A64'];
            $imp_Nor_med_Res_soc_emp_amb = $_POST ['Intense64'];
            $Sos_cam_cli_Dis_rec_nat = $_POST ['A65'];
            $imp_Sos_cam_cli_Dis_rec_nat = $_POST ['Intense65'];
            $Sos_cam_cli_Ges_res_rec = $_POST ['A66'];
            $imp_Sos_cam_cli_Ges_res_rec = $_POST ['Intense66'];
            $Sos_cam_cli_Ren_Ene = $_POST ['A67'];
            $imp_Sos_cam_cli_Ren_Ene = $_POST['Intense67'];
            $Sos_cam_cli_Res_soc_emp_amb = $_POST ['A68'];
            $imp_Sos_cam_cli_Res_soc_emp_amb = $_POST['Intense68'];
            $Dis_rec_nat_Ges_res_rec = $_POST ['A69'];
            $imp_Dis_rec_nat_Ges_res_rec = $_POST['Intense69'];
            $Dis_rec_nat_Ren_ene = $_POST ['A70'];
            $imp_Dis_rec_nat_Ren_ene = $_POST['Intense70'];
            $Dis_rec_nat_Res_soc_emp_amb = $_POST ['A71'];
            $imp_Dis_rec_nat_Res_soc_emp_amb = $_POST['Intense71'];
            $Ges_res_rec_Ren_ene = $_POST ['A72'];
            $imp_Ges_res_rec_Ren_ene = $_POST['Intense72'];
            $Ges_res_rec_Res_soc_emp_amb = $_POST ['A73'];
            $imp_Ges_res_rec_Res_soc_emp_amb = $_POST['Intense73'];
            $Ren_ene_Res_soc_emp_amb = $_POST ['A74'];
            $imp_Ren_ene_Res_soc_emp_amb = $_POST['Intense74'];

            $insertardatos = "INSERT INTO subcriterios_ambiental VALUES('$Nor_med_Sos_cam_cli', '$imp_Nor_med_Sos_cam_cli', '$Nor_med_Dis_rec_nat', '$imp_Nor_med_Dis_rec_nat', '$Nor_med_Ges_res_rec', '$imp_Nor_med_Ges_res_rec', '$Nor_med_Ren_ene', '$imp_Nor_med_Ren_ene', '$Nor_med_Res_soc_emp_amb', '$imp_Nor_med_Res_soc_emp_amb', '$Sos_cam_cli_Dis_rec_nat', '$imp_Sos_cam_cli_Dis_rec_nat', '$Sos_cam_cli_Ges_res_rec', '$imp_Sos_cam_cli_Ges_res_rec', '$Sos_cam_cli_Ren_Ene', '$imp_Sos_cam_cli_Ren_Ene', '$Sos_cam_cli_Res_soc_emp_amb', '$imp_Sos_cam_cli_Res_soc_emp_amb', '$Dis_rec_nat_Ges_res_rec', '$imp_Dis_rec_nat_Ges_res_rec', '$Dis_rec_nat_Ren_ene', '$imp_Dis_rec_nat_Ren_ene', '$Dis_rec_nat_Res_soc_emp_amb', '$imp_Dis_rec_nat_Res_soc_emp_amb', '$Ges_res_rec_Ren_ene', '$imp_Ges_res_rec_Ren_ene', '$Ges_res_rec_Res_soc_emp_amb', '$imp_Ges_res_rec_Res_soc_emp_amb', '$Ren_ene_Res_soc_emp_amb', '$imp_Ren_ene_Res_soc_emp_amb', '')";

            $ejecutarinsertar = mysqli_query($enlace, $insertardatos);
        }

    ?>
