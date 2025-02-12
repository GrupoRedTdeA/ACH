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
        <h3>Pairwise Comparison <span class='var'>Social SubCriteria</span></h3>
        <span class='msg'>15 paired comparisons. </span>
        <p>Do the pairwise comparison of all SubCriteria. When complete, please click <i>Submit</i> to upload the priority data.<br>
        <p style='font-size:small'>ACH Scale: 1- Equally important, 3- Weakly important, 5- More important, 7- Strongly more important, 9- Absolutely more important (2,4,6,8 intermediate values).</p>
        <p><span class='hl'>Regarding the<i><span class='var'>Social subCriteria</span></i>, which Sub-Criteria is more important and how much more important on a scale of 1 to 9?</span></p>
        
        <form action="#" name="form" method="post">
        <table id='Sub'><thead>
        <tr class='header'>
            <th colspan='3' style='text-align:center;'>Which Criterion do you prefer A - <span class='var'>or</span> - B?</th>
            <th>Same</th>
            <th style='text-align:center;'>¿How much more?</th></tr></thead>
        <tbody>
        <tr>
            <th>Social SubCriteria</th>
        </tr>
        <tr><td class='ca' >31</td><td><span >
                <input class='onclk1' type='radio' name='A30' value='0' checked/></span><label> Demographics and demographic trends</label></td><td><span>
                <input class='onclk1' type='radio' name='A30' value='1'></span><label>Culture and consumer behavior</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense30'
                value='1' checked><label>1</label></span></td><td class='ca' style='min-width:250px;font-size:smaller;' ><span ><input type='radio' class='onclk1' name='Intense30'
                value='2'><label>2</label></span><span ><input type='radio' class='onclk1' name='Intense30' 
                value='3'><label>3</label></span><span ><input type='radio' class='onclk1' name='Intense30' 
                value='4'><label>4</label></span><span ><input type='radio' class='onclk1' name='Intense30' 
                value='5'><label>5</label></span><span ><input type='radio' class='onclk1' name='Intense30' 
                value='6'><label>6</label></span><span ><input type='radio' class='onclk1' name='Intense30' 
                value='7'><label>7</label></span><span ><input type='radio' class='onclk1' name='Intense30' 
                value='8'><label>8</label></span><span ><input type='radio' class='onclk1' name='Intense30' 
                value='9'><label>9</label></span></td></tr>
        <tr><td class='ca'  >32</td><td><span >
                <input class='onclk1' type='radio' name='A31' value='0' checked/></span><label> Demographics and demographic trends</label></td><td><span  >
                <input class='onclk1' type='radio' name='A31' value='1'></span><label>Educational level</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense31' 
                value='1' checked><label>1</label></span></td><td class='ca' style='min-width:250px;font-size:smaller;' ><span ><input type='radio' class='onclk1' name='Intense31' 
                value='2'><label>2</label></span><span ><input type='radio' class='onclk1' name='Intense31' 
                value='3'><label>3</label></span><span ><input type='radio' class='onclk1' name='Intense31' 
                value='4'><label>4</label></span><span ><input type='radio' class='onclk1' name='Intense31' 
                value='5'><label>5</label></span><span ><input type='radio' class='onclk1' name='Intense31' 
                value='6'><label>6</label></span><span ><input type='radio' class='onclk1' name='Intense31' 
                value='7'><label>7</label></span><span ><input type='radio' class='onclk1' name='Intense31' 
                value='8'><label>8</label></span><span ><input type='radio' class='onclk1' name='Intense31' 
                value='9'><label>9</label></span></td></tr>
        <tr><td class='ca'  >33</td><td><span >
                <input class='onclk1' type='radio' name='A32' value='0' checked/></span><label> Demographics and demographic trends</label></td><td><span  >
                <input class='onclk1' type='radio' name='A32' value='1'></span><label>Attitudes towards social responsibility</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense32'
                value='1' checked><label>1</label></span></td><td class='ca' style='min-width:250px;font-size:smaller;' ><span ><input type='radio' class='onclk1' name='Intense32' 
                value='2'><label>2</label></span><span ><input type='radio' class='onclk1' name='Intense32' 
                value='3'><label>3</label></span><span ><input type='radio' class='onclk1' name='Intense32' 
                value='4'><label>4</label></span><span ><input type='radio' class='onclk1' name='Intense32' 
                value='5'><label>5</label></span><span ><input type='radio' class='onclk1' name='Intense32' 
                value='6'><label>6</label></span><span ><input type='radio' class='onclk1' name='Intense32' 
                value='7'><label>7</label></span><span ><input type='radio' class='onclk1' name='Intense32' 
                value='8'><label>8</label></span><span ><input type='radio' class='onclk1' name='Intense32' 
                value='9'><label>9</label></span></td></tr>
        <tr><td class='ca'  >34</td><td><span >
                <input class='onclk1' type='radio' name='A33' value='0' checked/></span><label> Demographics and demographic trends</label></td><td><span  >
                <input class='onclk1' type='radio' name='A33' value='1'></span><label>Social mobility</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense33' 
                value='1' checked><label>1</label></span></td><td class='ca' style='min-width:250px;font-size:smaller;' ><span ><input type='radio' class='onclk1' name='Intense33' 
                value='2'><label>2</label></span><span ><input type='radio' class='onclk1' name='Intense33' 
                value='3'><label>3</label></span><span ><input type='radio' class='onclk1' name='Intense33' 
                value='4'><label>4</label></span><span ><input type='radio' class='onclk1' name='Intense33' 
                value='5'><label>5</label></span><span ><input type='radio' class='onclk1' name='Intense33' 
                value='6'><label>6</label></span><span ><input type='radio' class='onclk1' name='Intense33' 
                value='7'><label>7</label></span><span ><input type='radio' class='onclk1' name='Intense33' 
                value='8'><label>8</label></span><span ><input type='radio' class='onclk1' name='Intense33' 
                value='9'><label>9</label></span></td></tr>
        <tr><td class='ca'  >35</td><td><span >
                <input class='onclk1' type='radio' name='A34' value='0' checked/></span><label> Demographics and demographic trends</label></td><td><span  >
                <input class='onclk1' type='radio' name='A34' value='1'></span><label>Health and wellness trends</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense34' 
                value='1' checked><label>1</label></span></td><td class='ca' style='min-width:250px;font-size:smaller;' ><span ><input type='radio' class='onclk1' name='Intense34' 
                value='2'><label>2</label></span><span ><input type='radio' class='onclk1' name='Intense34' 
                value='3'><label>3</label></span><span ><input type='radio' class='onclk1' name='Intense34' 
                value='4'><label>4</label></span><span ><input type='radio' class='onclk1' name='Intense34' 
                value='5'><label>5</label></span><span ><input type='radio' class='onclk1' name='Intense34' 
                value='6'><label>6</label></span><span ><input type='radio' class='onclk1' name='Intense34' 
                value='7'><label>7</label></span><span ><input type='radio' class='onclk1' name='Intense34' 
                value='8'><label>8</label></span><span ><input type='radio' class='onclk1' name='Intense34' 
                value='9'><label>9</label></span></td></tr>
        <tr><td colspan='5'></td></tr>
        <tr><td class='ca'  >36</td><td><span >
                <input class='onclk1' type='radio' name='A35' value='0' checked/></span><label> Culture and consumer behavior</label></td><td><span  >
                <input class='onclk1' type='radio' name='A35' value='1'></span><label>Educational level</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense35' 
                value='1' checked><label>1</label></span></td><td class='ca' style='min-width:250px;font-size:smaller;' ><span ><input type='radio' class='onclk1' name='Intense35' 
                value='2'><label>2</label></span><span ><input type='radio' class='onclk1' name='Intense35' 
                value='3'><label>3</label></span><span ><input type='radio' class='onclk1' name='Intense35' 
                value='4'><label>4</label></span><span ><input type='radio' class='onclk1' name='Intense35' 
                value='5'><label>5</label></span><span ><input type='radio' class='onclk1' name='Intense35' 
                value='6'><label>6</label></span><span ><input type='radio' class='onclk1' name='Intense35' 
                value='7'><label>7</label></span><span ><input type='radio' class='onclk1' name='Intense35' 
                value='8'><label>8</label></span><span ><input type='radio' class='onclk1' name='Intense35' 
                value='9'><label>9</label></span></td></tr>
        <tr><td class='ca'  >37</td><td><span >
                <input class='onclk1' type='radio' name='A36' value='0' checked/></span><label> Culture and consumer behavior</label></td><td><span  >
                <input class='onclk1' type='radio' name='A36' value='1'></span><label>Attitudes towards social responsibility</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense36' 
                value='1' checked><label>1</label></span></td><td class='ca' style='min-width:250px;font-size:smaller;' ><span ><input type='radio' class='onclk1' name='Intense36' 
                value='2'><label>2</label></span><span ><input type='radio' class='onclk1' name='Intense36' 
                value='3'><label>3</label></span><span ><input type='radio' class='onclk1' name='Intense36' 
                value='4'><label>4</label></span><span ><input type='radio' class='onclk1' name='Intense36' 
                value='5'><label>5</label></span><span ><input type='radio' class='onclk1' name='Intense36' 
                value='6'><label>6</label></span><span ><input type='radio' class='onclk1' name='Intense36' 
                value='7'><label>7</label></span><span ><input type='radio' class='onclk1' name='Intense36' 
                value='8'><label>8</label></span><span ><input type='radio' class='onclk1' name='Intense36' 
                value='9'><label>9</label></span></td></tr>
        <tr><td class='ca'  >38</td><td><span >
                <input class='onclk1' type='radio' name='A37' value='0' checked/></span><label> Culture and consumer behavior</label></td><td><span  >
                <input class='onclk1' type='radio' name='A37' value='1'></span><label>Social mobility</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense37' 
                value='1' checked><label>1</label></span></td><td class='ca' style='min-width:250px;font-size:smaller;' ><span ><input type='radio' class='onclk1' name='Intense37' 
                value='2'><label>2</label></span><span ><input type='radio' class='onclk1' name='Intense37' 
                value='3'><label>3</label></span><span ><input type='radio' class='onclk1' name='Intense37' 
                value='4'><label>4</label></span><span ><input type='radio' class='onclk1' name='Intense37' 
                value='5'><label>5</label></span><span ><input type='radio' class='onclk1' name='Intense37' 
                value='6'><label>6</label></span><span ><input type='radio' class='onclk1' name='Intense37' 
                value='7'><label>7</label></span><span ><input type='radio' class='onclk1' name='Intense37' 
                value='8'><label>8</label></span><span ><input type='radio' class='onclk1' name='Intense37' 
                value='9'><label>9</label></span></td></tr>
        <tr><td class='ca'  >39</td><td><span >
                <input class='onclk1' type='radio' name='A38' value='0' checked/></span><label> Culture and consumer behavior</label></td><td><span  >
                <input class='onclk1' type='radio' name='A38' value='1'></span><label>Health and wellness trends</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense38' 
                value='1' checked><label>1</label></span></td><td class='ca' style='min-width:250px;font-size:smaller;' ><span ><input type='radio' class='onclk1' name='Intense38' 
                value='2'><label>2</label></span><span ><input type='radio' class='onclk1' name='Intense38'
                value='3'><label>3</label></span><span ><input type='radio' class='onclk1' name='Intense38' 
                value='4'><label>4</label></span><span ><input type='radio' class='onclk1' name='Intense38' 
                value='5'><label>5</label></span><span ><input type='radio' class='onclk1' name='Intense38' 
                value='6'><label>6</label></span><span ><input type='radio' class='onclk1' name='Intense38' 
                value='7'><label>7</label></span><span ><input type='radio' class='onclk1' name='Intense38' 
                value='8'><label>8</label></span><span ><input type='radio' class='onclk1' name='Intense38' 
                value='9'><label>9</label></span></td></tr>
        <tr><td colspan='5'></td></tr>
        <tr><td class='ca'  >40</td><td><span >
                <input class='onclk1' type='radio' name='A39' value='0' checked/></span><label> Educational level</label></td><td><span  >
                <input class='onclk1' type='radio' name='A39' value='1'></span><label>Attitudes towards social responsibility</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense39' 
                value='1' checked><label>1</label></span></td><td class='ca' style='min-width:250px;font-size:smaller;' ><span ><input type='radio' class='onclk1' name='Intense39' 
                value='2'><label>2</label></span><span ><input type='radio' class='onclk1' name='Intense39' 
                value='3'><label>3</label></span><span ><input type='radio' class='onclk1' name='Intense39' 
                value='4'><label>4</label></span><span ><input type='radio' class='onclk1' name='Intense39' 
                value='5'><label>5</label></span><span ><input type='radio' class='onclk1' name='Intense39' 
                value='6'><label>6</label></span><span ><input type='radio' class='onclk1' name='Intense39' 
                value='7'><label>7</label></span><span ><input type='radio' class='onclk1' name='Intense39' 
                value='8'><label>8</label></span><span ><input type='radio' class='onclk1' name='Intense39' 
                value='9'><label>9</label></span></td></tr>
        <tr><td class='ca'  >41</td><td><span >
                <input class='onclk1' type='radio' name='A40' value='0' checked/></span><label> Educational level</label></td><td><span  >
                <input class='onclk1' type='radio' name='A40' value='1'></span><label>Social mobility</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense40' 
                value='1' checked><label>1</label></span></td><td class='ca' style='min-width:250px;font-size:smaller;' ><span ><input type='radio' class='onclk1' name='Intense40' 
                value='2'><label>2</label></span><span ><input type='radio' class='onclk1' name='Intense40' 
                value='3'><label>3</label></span><span ><input type='radio' class='onclk1' name='Intense40' 
                value='4'><label>4</label></span><span ><input type='radio' class='onclk1' name='Intense40' 
                value='5'><label>5</label></span><span ><input type='radio' class='onclk1' name='Intense40' 
                value='6'><label>6</label></span><span ><input type='radio' class='onclk1' name='Intense40' 
                value='7'><label>7</label></span><span ><input type='radio' class='onclk1' name='Intense40' 
                value='8'><label>8</label></span><span ><input type='radio' class='onclk1' name='Intense40' 
                value='9'><label>9</label></span></td></tr>
        <tr><td class='ca'  >42</td><td><span >
                <input class='onclk1' type='radio' name='A41' value='0' checked/></span><label> Educational level</label></td><td><span  >
                <input class='onclk1' type='radio' name='A41' value='1'></span><label>Health and wellness trends</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense41' 
                value='1' checked><label>1</label></span></td><td class='ca' style='min-width:250px;font-size:smaller;' ><span ><input type='radio' class='onclk1' name='Intense41' 
                value='2'><label>2</label></span><span ><input type='radio' class='onclk1' name='Intense41' 
                value='3'><label>3</label></span><span ><input type='radio' class='onclk1' name='Intense41' 
                value='4'><label>4</label></span><span ><input type='radio' class='onclk1' name='Intense41' 
                value='5'><label>5</label></span><span ><input type='radio' class='onclk1' name='Intense41' 
                value='6'><label>6</label></span><span ><input type='radio' class='onclk1' name='Intense41' 
                value='7'><label>7</label></span><span ><input type='radio' class='onclk1' name='Intense41' 
                value='8'><label>8</label></span><span ><input type='radio' class='onclk1' name='Intense41' 
                value='9'><label>9</label></span></td></tr>
        <tr><td colspan='5'></td></tr>
        <tr><td class='ca'  >43</td><td><span >
                <input class='onclk1' type='radio' name='A42' value='0' checked/></span><label> Attitudes towards social responsibility</label></td><td><span  >
                <input class='onclk1' type='radio' name='A42' value='1'></span><label>Social mobility</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense42' 
                value='1' checked><label>1</label></span></td><td class='ca' style='min-width:250px;font-size:smaller;' ><span ><input type='radio' class='onclk1' name='Intense42' 
                value='2'><label>2</label></span><span ><input type='radio' class='onclk1' name='Intense42' 
                value='3'><label>3</label></span><span ><input type='radio' class='onclk1' name='Intense42' 
                value='4'><label>4</label></span><span ><input type='radio' class='onclk1' name='Intense42' 
                value='5'><label>5</label></span><span ><input type='radio' class='onclk1' name='Intense42' 
                value='6'><label>6</label></span><span ><input type='radio' class='onclk1' name='Intense42' 
                value='7'><label>7</label></span><span ><input type='radio' class='onclk1' name='Intense42' 
                value='8'><label>8</label></span><span ><input type='radio' class='onclk1' name='Intense42' 
                value='9'><label>9</label></span></td></tr>
        <tr><td class='ca'  >44</td><td><span >
                <input class='onclk1' type='radio' name='A43' value='0' checked/></span><label> Attitudes towards social responsibility</label></td><td><span  >
                <input class='onclk1' type='radio' name='A43' value='1'></span><label>Health and wellness trends</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense43' 
                value='1' checked><label>1</label></span></td><td class='ca' style='min-width:250px;font-size:smaller;' ><span ><input type='radio' class='onclk1' name='Intense43' 
                value='2'><label>2</label></span><span ><input type='radio' class='onclk1' name='Intense43' 
                value='3'><label>3</label></span><span ><input type='radio' class='onclk1' name='Intense43' 
                value='4'><label>4</label></span><span ><input type='radio' class='onclk1' name='Intense43' 
                value='5'><label>5</label></span><span ><input type='radio' class='onclk1' name='Intense43' 
                value='6'><label>6</label></span><span ><input type='radio' class='onclk1' name='Intense43' 
                value='7'><label>7</label></span><span ><input type='radio' class='onclk1' name='Intense43' 
                value='8'><label>8</label></span><span ><input type='radio' class='onclk1' name='Intense43' 
                value='9'><label>9</label></span></td></tr>
        <tr><td colspan='5'></td></tr>
        <tr><td class='ca'  >45</td><td><span >
                <input class='onclk1' type='radio' name='A44' value='0' checked/></span><label> Social mobility</label></td><td><span  >
                <input class='onclk1' type='radio' name='A44' value='1'></span><label>Health and wellness trends</label></td><td class='ac' style='font-size:smaller;'><span ><input type='radio' class='onclk1' name='Intense44' 
                value='1' checked><label>1</label></span></td><td class='ca' style='min-width:250px;font-size:smaller;' ><span ><input type='radio' class='onclk1' name='Intense44' 
                value='2'><label>2</label></span><span ><input type='radio' class='onclk1' name='Intense44' 
                value='3'><label>3</label></span><span ><input type='radio' class='onclk1' name='Intense44' 
                value='4'><label>4</label></span><span ><input type='radio' class='onclk1' name='Intense44' 
                value='5'><label>5</label></span><span ><input type='radio' class='onclk1' name='Intense44' 
                value='6'><label>6</label></span><span ><input type='radio' class='onclk1' name='Intense44' 
                value='7'><label>7</label></span><span ><input type='radio' class='onclk1' name='Intense44' 
                value='8'><label>8</label></span><span ><input type='radio' class='onclk1' name='Intense44' 
                value='9'><label>9</label></span></td></tr>
        <tr><td colspan='5'></td></tr>

        <tr><td class='sm' colspan='5'> <span class='msg'>Please record your answers</span></td></tr><tr><td colspan='2' class='la'><input  type='submit' value='Submit' name='pc_submit' /></td><td colspan='2'><td class='ca'></td></tr>
        <tr><td colspan='2' class='la'> <a href="subcriterios_tecnologia.php">Continue</a> </td><td colspan='2'><td class='ca'></td></tr>
        
        </tbody>
        </table></div>
        </form><p></p><div style="display: inline; font-size: small;">

    </body>

    <?php

        if(isset($_POST['pc_submit'])){
            $Dem_ten_dem_Cul_com_con = $_POST ['A30'];
            $imp_Dem_ten_dem_Cul_com_con = $_POST ['Intense30'];
            $Dem_ten_dem_Niv_edu = $_POST ['A31'];
            $imp_Dem_ten_dem_Niv_edu = $_POST ['Intense31'];
            $Dem_ten_dem_Act_res_soc = $_POST ['A32'];
            $imp_Dem_ten_dem_Act_res_soc = $_POST ['Intense32'];
            $Dem_ten_dem_Mov_soc = $_POST ['A33'];
            $imp_Dem_ten_dem_Mov_soc = $_POST ['Intense33'];
            $Dem_ten_dem_Ten_sal_bie = $_POST ['A34'];
            $imp_Dem_ten_dem_Ten_sal_bie = $_POST ['Intense34'];
            $Cul_com_con_Niv_edu = $_POST ['A35'];
            $imp_Cul_com_con_Niv_edu = $_POST ['Intense35'];
            $Cul_com_con_Act_res_soc = $_POST ['A36'];
            $imp_Cul_com_con_Act_res_soc = $_POST ['Intense36'];
            $Cul_com_con_Mov_soc = $_POST ['A37'];
            $imp_Cul_com_con_Mov_soc = $_POST['Intense37'];
            $Cul_com_con_Ten_sal_bie = $_POST ['A38'];
            $imp_Cul_com_con_Ten_sal_bie = $_POST['Intense38'];
            $Niv_edu_Act_res_soc = $_POST ['A39'];
            $imp_Niv_edu_Act_res_soc = $_POST['Intense39'];
            $Niv_edu_Mov_soc = $_POST ['A40'];
            $imp_Niv_edu_Mov_soc = $_POST['Intense40'];
            $Niv_edu_Ten_sal_bie = $_POST ['A41'];
            $imp_Niv_edu_Ten_sal_bie = $_POST['Intense41'];
            $Act_res_soc_Mov_soc = $_POST ['A42'];
            $imp_Act_res_soc_Mov_soc = $_POST['Intense42'];
            $Act_res_soc_Ten_sal_bie = $_POST ['A43'];
            $imp_Act_res_soc_Ten_sal_bie = $_POST['Intense43'];
            $Mov_soc_Ten_sal_bie = $_POST ['A44'];
            $imp_Mov_soc_Ten_sal_bie = $_POST['Intense44'];

            $insertardatos = "INSERT INTO subcriterios_sociales VALUES('$Dem_ten_dem_Cul_com_con', '$imp_Dem_ten_dem_Cul_com_con', ', '$Dem_ten_dem_Niv_edu', '$imp_Dem_ten_dem_Niv_edu', '$Dem_ten_dem_Act_res_soc', '$imp_Dem_ten_dem_Act_res_soc', '$Dem_ten_dem_Mov_soc', '$imp_Dem_ten_dem_Mov_soc', '$Dem_ten_dem_Ten_sal_bie', '$imp_Dem_ten_dem_Ten_sal_bie', '$Cul_com_con_Niv_edu', '$imp_Cul_com_con_Niv_edu', '$Cul_com_con_Act_res_soc', '$imp_Cul_com_con_Act_res_soc', '$Cul_com_con_Mov_soc', '$imp_Cul_com_con_Mov_soc', '$Cul_com_con_Ten_sal_bie', '$imp_Cul_com_con_Ten_sal_bie', '$Niv_edu_Act_res_soc', '$imp_Niv_edu_Act_res_soc', '$Niv_edu_Mov_soc', '$imp_Niv_edu_Mov_soc', '$Niv_edu_Ten_sal_bie', '$imp_Niv_edu_Ten_sal_bie', '$Act_res_soc_Mov_soc', '$imp_Act_res_soc_Mov_soc', '$Act_res_soc_Ten_sal_bie', '$imp_Act_res_soc_Ten_sal_bie', '$Mov_soc_Ten_sal_bie', '$imp_Mov_soc_Ten_sal_bie', '')";
           
            $ejecutarinsertar = mysqli_query($enlace, $insertardatos);
        }

        ?>
