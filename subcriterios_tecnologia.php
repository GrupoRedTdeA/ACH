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
        <h2>Evaluation of Criteria for <span class='var'>Strategic Selection</span></h2>
        <h3>Pairwise Comparison <span class='var'>Technological SubCriteria</span></h3>
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
            <th>Technological SubCriteria</th>
        </tr>
        <tr><td class='ca' >46</td><td><span >
                <input class='onclk1' type='radio' name='A45' value='0' checked/></span><label> Technological innovation</label></td><td><span>
                <input class='onclk1' type='radio' name='A45' value='1'></span><label>Technological infrastructure</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense45' 
                value='1' checked><label>1</label></span></td><td class='ca' style='min-width:250px;font-size:smaller;' ><span ><input type='radio' class='onclk1' name='Intense45' 
                value='2'><label>2</label></span><span ><input type='radio' class='onclk1' name='Intense45' 
                value='3'><label>3</label></span><span ><input type='radio' class='onclk1' name='Intense45'
                value='4'><label>4</label></span><span ><input type='radio' class='onclk1' name='Intense45' 
                value='5'><label>5</label></span><span ><input type='radio' class='onclk1' name='Intense45' 
                value='6'><label>6</label></span><span ><input type='radio' class='onclk1' name='Intense45' 
                value='7'><label>7</label></span><span ><input type='radio' class='onclk1' name='Intense45' 
                value='8'><label>8</label></span><span ><input type='radio' class='onclk1' name='Intense45' 
                value='9'><label>9</label></span></td></tr>
        <tr><td class='ca'  >47</td><td><span >
                <input class='onclk1' type='radio' name='A46' value='0' checked/></span><label> Technological innovation</label></td><td><span  >
                <input class='onclk1' type='radio' name='A46' value='1'></span><label>Research and development</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense46' 
                value='1' checked><label>1</label></span></td><td class='ca' style='min-width:250px;font-size:smaller;' ><span ><input type='radio' class='onclk1' name='Intense46' 
                value='2'><label>2</label></span><span ><input type='radio' class='onclk1' name='Intense46' 
                value='3'><label>3</label></span><span ><input type='radio' class='onclk1' name='Intense46' 
                value='4'><label>4</label></span><span ><input type='radio' class='onclk1' name='Intense46' 
                value='5'><label>5</label></span><span ><input type='radio' class='onclk1' name='Intense46' 
                value='6'><label>6</label></span><span ><input type='radio' class='onclk1' name='Intense46' 
                value='7'><label>7</label></span><span ><input type='radio' class='onclk1' name='Intense46' 
                value='8'><label>8</label></span><span ><input type='radio' class='onclk1' name='Intense46' 
                value='9'><label>9</label></span></td></tr>
        <tr><td class='ca'  >48</td><td><span >
                <input class='onclk1' type='radio' name='A47' value='0' checked/></span><label> Technological innovation</label></td><td><span  >
                <input class='onclk1' type='radio' name='A47' value='1'></span><label>Adaptation to new technologies</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense47' 
                value='1' checked><label>1</label></span></td><td class='ca' style='min-width:250px;font-size:smaller;' ><span ><input type='radio' class='onclk1' name='Intense47' 
                value='2'><label>2</label></span><span ><input type='radio' class='onclk1' name='Intense47' 
                value='3'><label>3</label></span><span ><input type='radio' class='onclk1' name='Intense47' 
                value='4'><label>4</label></span><span ><input type='radio' class='onclk1' name='Intense47' 
                value='5'><label>5</label></span><span ><input type='radio' class='onclk1' name='Intense47' 
                value='6'><label>6</label></span><span ><input type='radio' class='onclk1' name='Intense47' 
                value='7'><label>7</label></span><span ><input type='radio' class='onclk1' name='Intense47' 
                value='8'><label>8</label></span><span ><input type='radio' class='onclk1' name='Intense47' 
                value='9'><label>9</label></span></td></tr>
        <tr><td class='ca'  >49</td><td><span >
                <input class='onclk1' type='radio' name='A48' value='0' checked/></span><label> Technological innovation</label></td><td><span  >
                <input class='onclk1' type='radio' name='A48' value='1'></span><label>Digitization and automation</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense48' 
                value='1' checked><label>1</label></span></td><td class='ca' style='min-width:250px;font-size:smaller;' ><span ><input type='radio' class='onclk1' name='Intense48' 
                value='2'><label>2</label></span><span ><input type='radio' class='onclk1' name='Intense48' 
                value='3'><label>3</label></span><span ><input type='radio' class='onclk1' name='Intense48' 
                value='4'><label>4</label></span><span ><input type='radio' class='onclk1' name='Intense48' 
                value='5'><label>5</label></span><span ><input type='radio' class='onclk1' name='Intense48' 
                value='6'><label>6</label></span><span ><input type='radio' class='onclk1' name='Intense48' 
                value='7'><label>7</label></span><span ><input type='radio' class='onclk1' name='Intense48' 
                value='8'><label>8</label></span><span ><input type='radio' class='onclk1' name='Intense48' 
                value='9'><label>9</label></span></td></tr>
        <tr><td class='ca'  >50</td><td><span >
                <input class='onclk1' type='radio' name='A49' value='0' checked/></span><label> Technological innovation</label></td><td><span  >
                <input class='onclk1' type='radio' name='A49' value='1'></span><label>Data protection and cybersecurity</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense49' 
                value='1' checked><label>1</label></span></td><td class='ca' style='min-width:250px;font-size:smaller;' ><span ><input type='radio' class='onclk1' name='Intense49' 
                value='2'><label>2</label></span><span ><input type='radio' class='onclk1' name='Intense49' 
                value='3'><label>3</label></span><span ><input type='radio' class='onclk1' name='Intense49' 
                value='4'><label>4</label></span><span ><input type='radio' class='onclk1' name='Intense49' 
                value='5'><label>5</label></span><span ><input type='radio' class='onclk1' name='Intense49' 
                value='6'><label>6</label></span><span ><input type='radio' class='onclk1' name='Intense49' 
                value='7'><label>7</label></span><span ><input type='radio' class='onclk1' name='Intense49' 
                value='8'><label>8</label></span><span ><input type='radio' class='onclk1' name='Intense49' 
                value='9'><label>9</label></span></td></tr>
        <tr><td colspan='5'></td></tr>
        <tr><td class='ca'  >51</td><td><span >
                <input class='onclk1' type='radio' name='A50' value='0' checked/></span><label> Technological infrastructure</label></td><td><span  >
                <input class='onclk1' type='radio' name='A50' value='1'></span><label>Research and development</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense50' 
                value='1' checked><label>1</label></span></td><td class='ca' style='min-width:250px;font-size:smaller;' ><span ><input type='radio' class='onclk1' name='Intense50' 
                value='2'><label>2</label></span><span ><input type='radio' class='onclk1' name='Intense50' 
                value='3'><label>3</label></span><span ><input type='radio' class='onclk1' name='Intense50' 
                value='4'><label>4</label></span><span ><input type='radio' class='onclk1' name='Intense50' 
                value='5'><label>5</label></span><span ><input type='radio' class='onclk1' name='Intense50' 
                value='6'><label>6</label></span><span ><input type='radio' class='onclk1' name='Intense50' 
                value='7'><label>7</label></span><span ><input type='radio' class='onclk1' name='Intense50' 
                value='8'><label>8</label></span><span ><input type='radio' class='onclk1' name='Intense50' 
                value='9'><label>9</label></span></td></tr>
        <tr><td class='ca'  >52</td><td><span >
                <input class='onclk1' type='radio' name='A51' value='0' checked/></span><label> Technological infrastructure</label></td><td><span  >
                <input class='onclk1' type='radio' name='A51' value='1'></span><label>Adaptation to new technologies</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense51' 
                value='1' checked><label>1</label></span></td><td class='ca' style='min-width:250px;font-size:smaller;' ><span ><input type='radio' class='onclk1' name='Intense51' 
                value='2'><label>2</label></span><span ><input type='radio' class='onclk1' name='Intense51' 
                value='3'><label>3</label></span><span ><input type='radio' class='onclk1' name='Intense51' 
                value='4'><label>4</label></span><span ><input type='radio' class='onclk1' name='Intense51' 
                value='5'><label>5</label></span><span ><input type='radio' class='onclk1' name='Intense51' 
                value='6'><label>6</label></span><span ><input type='radio' class='onclk1' name='Intense51' 
                value='7'><label>7</label></span><span ><input type='radio' class='onclk1' name='Intense51' 
                value='8'><label>8</label></span><span ><input type='radio' class='onclk1' name='Intense51' 
                value='9'><label>9</label></span></td></tr>
        <tr><td class='ca'  >53</td><td><span >
                <input class='onclk1' type='radio' name='A52' value='0' checked/></span><label> Technological infrastructure</label></td><td><span  >
                <input class='onclk1' type='radio' name='A52' value='1'></span><label>Digitization and automation</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense52' 
                value='1' checked><label>1</label></span></td><td class='ca' style='min-width:250px;font-size:smaller;' ><span ><input type='radio' class='onclk1' name='Intense52' 
                value='2'><label>2</label></span><span ><input type='radio' class='onclk1' name='Intense52' 
                value='3'><label>3</label></span><span ><input type='radio' class='onclk1' name='Intense52' 
                value='4'><label>4</label></span><span ><input type='radio' class='onclk1' name='Intense52'
                value='5'><label>5</label></span><span ><input type='radio' class='onclk1' name='Intense52' 
                value='6'><label>6</label></span><span ><input type='radio' class='onclk1' name='Intense52' 
                value='7'><label>7</label></span><span ><input type='radio' class='onclk1' name='Intense52' 
                value='8'><label>8</label></span><span ><input type='radio' class='onclk1' name='Intense52' 
                value='9'><label>9</label></span></td></tr>
        <tr><td class='ca'  >54</td><td><span >
                <input class='onclk1' type='radio' name='A53' value='0' checked/></span><label> Technological infrastructure</label></td><td><span  >
                <input class='onclk1' type='radio' name='A53' value='1'></span><label>Data protection and cybersecurity</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense53' 
                value='1' checked><label>1</label></span></td><td class='ca' style='min-width:250px;font-size:smaller;' ><span ><input type='radio' class='onclk1' name='Intense53'
                value='2'><label>2</label></span><span ><input type='radio' class='onclk1' name='Intense53' 
                value='3'><label>3</label></span><span ><input type='radio' class='onclk1' name='Intense53' 
                value='4'><label>4</label></span><span ><input type='radio' class='onclk1' name='Intense53' 
                value='5'><label>5</label></span><span ><input type='radio' class='onclk1' name='Intense53' 
                value='6'><label>6</label></span><span ><input type='radio' class='onclk1' name='Intense53' 
                value='7'><label>7</label></span><span ><input type='radio' class='onclk1' name='Intense53' 
                value='8'><label>8</label></span><span ><input type='radio' class='onclk1' name='Intense53' 
                value='9'><label>9</label></span></td></tr>
        <tr><td colspan='5'></td></tr>
        <tr><td class='ca'  >55</td><td><span >
                <input class='onclk1' type='radio' name='A54' value='0' checked/></span><label> Research and development</label></td><td><span  >
                <input class='onclk1' type='radio' name='A54' value='1'></span><label>Adaptation to new technologies</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense54' 
                value='1' checked><label>1</label></span></td><td class='ca' style='min-width:250px;font-size:smaller;' ><span ><input type='radio' class='onclk1' name='Intense54' 
                value='2'><label>2</label></span><span ><input type='radio' class='onclk1' name='Intense54' 
                value='3'><label>3</label></span><span ><input type='radio' class='onclk1' name='Intense54' 
                value='4'><label>4</label></span><span ><input type='radio' class='onclk1' name='Intense54' 
                value='5'><label>5</label></span><span ><input type='radio' class='onclk1' name='Intense54' 
                value='6'><label>6</label></span><span ><input type='radio' class='onclk1' name='Intense54' 
                value='7'><label>7</label></span><span ><input type='radio' class='onclk1' name='Intense54' 
                value='8'><label>8</label></span><span ><input type='radio' class='onclk1' name='Intense54' 
                value='9'><label>9</label></span></td></tr>
        <tr><td class='ca'  >56</td><td><span >
                <input class='onclk1' type='radio' name='A55' value='0' checked/></span><label> Research and development</label></td><td><span  >
                <input class='onclk1' type='radio' name='A55' value='1'></span><label>Digitization and automation</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense55' 
                value='1' checked><label>1</label></span></td><td class='ca' style='min-width:250px;font-size:smaller;' ><span ><input type='radio' class='onclk1' name='Intense55' 
                value='2'><label>2</label></span><span ><input type='radio' class='onclk1' name='Intense55' 
                value='3'><label>3</label></span><span ><input type='radio' class='onclk1' name='Intense55' 
                value='4'><label>4</label></span><span ><input type='radio' class='onclk1' name='Intense55' 
                value='5'><label>5</label></span><span ><input type='radio' class='onclk1' name='Intense55' 
                value='6'><label>6</label></span><span ><input type='radio' class='onclk1' name='Intense55' 
                value='7'><label>7</label></span><span ><input type='radio' class='onclk1' name='Intense55' 
                value='8'><label>8</label></span><span ><input type='radio' class='onclk1' name='Intense55' 
                value='9'><label>9</label></span></td></tr>
        <tr><td class='ca'  >57</td><td><span >
                <input class='onclk1' type='radio' name='A56' value='0' checked/></span><label> Research and development</label></td><td><span  >
                <input class='onclk1' type='radio' name='A56' value='1'></span><label>Data protection and cybersecurity</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense56' 
                value='1' checked><label>1</label></span></td><td class='ca' style='min-width:250px;font-size:smaller;' ><span ><input type='radio' class='onclk1' name='Intense56' 
                value='2'><label>2</label></span><span ><input type='radio' class='onclk1' name='Intense56' 
                value='3'><label>3</label></span><span ><input type='radio' class='onclk1' name='Intense56' 
                value='4'><label>4</label></span><span ><input type='radio' class='onclk1' name='Intense56' 
                value='5'><label>5</label></span><span ><input type='radio' class='onclk1' name='Intense56' 
                value='6'><label>6</label></span><span ><input type='radio' class='onclk1' name='Intense56' 
                value='7'><label>7</label></span><span ><input type='radio' class='onclk1' name='Intense56' 
                value='8'><label>8</label></span><span ><input type='radio' class='onclk1' name='Intense56' 
                value='9'><label>9</label></span></td></tr>
        <tr><td colspan='5'></td></tr>
        <tr><td class='ca'  >58</td><td><span >
                <input class='onclk1' type='radio' name='A57' value='0' checked/></span><label> Adaptation to new technologies</label></td><td><span  >
                <input class='onclk1' type='radio' name='A57' value='1'></span><label>Digitization and automation</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense57'
                value='1' checked><label>1</label></span></td><td class='ca' style='min-width:250px;font-size:smaller;' ><span ><input type='radio' class='onclk1' name='Intense57' 
                value='2'><label>2</label></span><span ><input type='radio' class='onclk1' name='Intense57' 
                value='3'><label>3</label></span><span ><input type='radio' class='onclk1' name='Intense57' 
                value='4'><label>4</label></span><span ><input type='radio' class='onclk1' name='Intense57' 
                value='5'><label>5</label></span><span ><input type='radio' class='onclk1' name='Intense57' 
                value='6'><label>6</label></span><span ><input type='radio' class='onclk1' name='Intense57' 
                value='7'><label>7</label></span><span ><input type='radio' class='onclk1' name='Intense57' 
                value='8'><label>8</label></span><span ><input type='radio' class='onclk1' name='Intense57' 
                value='9'><label>9</label></span></td></tr>
        <tr><td class='ca'  >59</td><td><span >
                <input class='onclk1' type='radio' name='A58' value='0' checked/></span><label> Adaptation to new technologies</label></td><td><span  >
                <input class='onclk1' type='radio' name='A58' value='1'></span><label>Data protection and cybersecurity</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense59' 
                value='1' checked><label>1</label></span></td><td class='ca' style='min-width:250px;font-size:smaller;' ><span ><input type='radio' class='onclk1' name='Intense59' 
                value='2'><label>2</label></span><span ><input type='radio' class='onclk1' name='Intense59'
                value='3'><label>3</label></span><span ><input type='radio' class='onclk1' name='Intense59' 
                value='4'><label>4</label></span><span ><input type='radio' class='onclk1' name='Intense59' 
                value='5'><label>5</label></span><span ><input type='radio' class='onclk1' name='Intense59' 
                value='6'><label>6</label></span><span ><input type='radio' class='onclk1' name='Intense59' 
                value='7'><label>7</label></span><span ><input type='radio' class='onclk1' name='Intense59' 
                value='8'><label>8</label></span><span ><input type='radio' class='onclk1' name='Intense59' 
                value='9'><label>9</label></span></td></tr>
        <tr><td colspan='5'></td></tr>
        <tr><td class='ca'  >60</td><td><span >
                <input class='onclk1' type='radio' name='A59' value='0' checked/></span><label> Digitization and automation</label></td><td><span  >
                <input class='onclk1' type='radio' name='A59' value='1'></span><label>Data protection and cybersecurity</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense60' 
                value='1' checked><label>1</label></span></td><td class='ca' style='min-width:250px;font-size:smaller;' ><span ><input type='radio' class='onclk1' name='Intense60'
                value='2'><label>2</label></span><span ><input type='radio' class='onclk1' name='Intense60' 
                value='3'><label>3</label></span><span ><input type='radio' class='onclk1' name='Intense60' 
                value='4'><label>4</label></span><span ><input type='radio' class='onclk1' name='Intense60' 
                value='5'><label>5</label></span><span ><input type='radio' class='onclk1' name='Intense60' 
                value='6'><label>6</label></span><span ><input type='radio' class='onclk1' name='Intense60' 
                value='7'><label>7</label></span><span ><input type='radio' class='onclk1' name='Intense60' 
                value='8'><label>8</label></span><span ><input type='radio' class='onclk1' name='Intense60' 
                value='9'><label>9</label></span></td></tr>
        <tr><td colspan='5'></td></tr>

        <tr><td class='sm' colspan='5'> <span class='msg'>Please record your answers</span></td></tr><tr><td colspan='2' class='la'><input  type='submit' value='Submit' name='pc_submit' /></td><td colspan='2'><td class='ca'></td></tr>
        <tr><td colspan='2' class='la'> <a href="subcriterios_ambiente.php">Continue</a> </td><td colspan='2'><td class='ca'></td></tr>
        
        </tbody>
        </table></div>
        </form><p></p><div style="display: inline; font-size: small;">

    </body>

    <?php

        if(isset($_POST['pc_submit'])){

            $Inn_Tec_Inf_tec = $_POST ['A45'];
            $imp_Inn_Tec_Inf_tec = $_POST ['Intense45'];
            $Inn_Tec_Inv_des = $_POST ['A46'];
            $imp_Inn_Tec_Inv_des = $_POST ['Intense46'];
            $Inn_Tec_Adp_nue_tec = $_POST ['A47'];
            $imp_Inn_Tec_Adp_nue_tec = $_POST ['Intense47'];
            $Inn_Tec_Dig_aut = $_POST ['A48'];
            $imp_Inn_Tec_Dig_aut = $_POST ['Intense48'];
            $Inn_Tec_Pro_dat_cib = $_POST ['A49'];
            $imp_Inn_Tec_Pro_dat_cib = $_POST ['Intense49'];
            $Inf_tec_Inv_des = $_POST ['A50'];
            $imp_Inf_tec_Inv_des = $_POST ['Intense50'];
            $Inf_tec_Adp_nue_tec = $_POST ['A51'];
            $imp_Inf_tec_Adp_nue_tec = $_POST ['Intense51'];
            $Inf_tec_Dig_aut = $_POST ['A52'];
            $imp_Inf_tec_Dig_aut = $_POST['Intense52'];
            $Inf_tec_Pro_dat_cib = $_POST ['A53'];
            $imp_Inf_tec_Pro_dat_cib = $_POST['Intense53'];
            $Inv_des_Adp_nue_tec = $_POST ['A54'];
            $imp_Inv_des_Adp_nue_tec = $_POST['Intense54'];
            $Inv_des_Dig_aut = $_POST ['A55'];
            $imp_Inv_des_Dig_aut = $_POST['Intense55'];
            $Inv_des_Pro_dat_cib = $_POST ['A56'];
            $imp_Inv_des_Pro_dat_cib = $_POST['Intense56'];
            $Adp_nue_tec_Dig_aut = $_POST ['A57'];
            $imp_Adp_nue_tec_Dig_aut = $_POST['Intense57'];
            $Adp_nue_tec_Pro_dat_cib = $_POST ['A58'];
            $imp_Adp_nue_tec_Pro_dat_cib = $_POST['Intense58'];
            $Dig_aut_Pro_dat_cib = $_POST ['A59'];
            $imp_Dig_aut_Pro_dat_cib = $_POST['Intense59'];

            $insertardatos = "INSERT INTO subcriterios_tecnologicos VALUES('$Inn_Tec_Inf_tec', '$imp_Inn_Tec_Inf_tec', '$Inn_Tec_Inv_des', '$imp_Inn_Tec_Inv_des', '$Inn_Tec_Adp_nue_tec', '$imp_Inn_Tec_Adp_nue_tec', '$Inn_Tec_Dig_aut', '$imp_Inn_Tec_Dig_aut', '$Inn_Tec_Pro_dat_cib', '$imp_Inn_Tec_Pro_dat_cib', '$Inf_tec_Inv_des', '$imp_Inf_tec_Inv_des', '$Inf_tec_Adp_nue_tec', '$imp_Inf_tec_Adp_nue_tec', '$Inf_tec_Dig_aut', '$imp_Inf_tec_Dig_aut', '$Inf_tec_Pro_dat_cib', '$imp_Inf_tec_Pro_dat_cib', '$Inv_des_Adp_nue_tec', '$imp_Inv_des_Adp_nue_tec', '$Inv_des_Dig_aut', '$imp_Inv_des_Dig_aut', '$Inv_des_Pro_dat_cib', '$imp_Inv_des_Pro_dat_cib', '$Adp_nue_tec_Dig_aut', '$imp_Adp_nue_tec_Dig_aut', '$Adp_nue_tec_Pro_dat_cib', '$imp_Adp_nue_tec_Pro_dat_cib', '$Dig_aut_Pro_dat_cib', '$imp_Dig_aut_Pro_dat_cib', '')";
            
            $ejecutarinsertar = mysqli_query($enlace, $insertardatos);
        }

    ?>
