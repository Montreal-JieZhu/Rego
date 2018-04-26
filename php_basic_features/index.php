<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Basic PHP features</title>
        <style>
                    .goodBalance{
                        color:#000;
                background-color:#0f0;                       
}
.badBalance{
    color:#332;
                background-color:#f0f; 
}
        </style>
    </head>
    <body>
        <?php
        #Perl style comments
        //C style comments
        /*multi-line
         * comments
         */
        ?>
        <?php
        /**
         * API documentation has twoo standards, this is not a php
         * sysntax distinction, but it is a convention
         */
        ?>
        <a href="<?php phpinfo();?>">PHPINFO</a>
        <?php
        echo "hello world from PHP";
        print '</br>';
        print 'hello world from print';
        echo '</br>';
        ?>
        <?='hello world'?>
        <?php
        echo 'hello world!';
        //declare variable: $variabl_name
        $greeting = 'hello world from variable';
        print '</br>';
        echo $greeting;
        ?>
        <div>
            Balance;
            <?php
            //declare and initialize bank balance variable
            $bankBalance=-1;
            if($bankBalance>0):?>
            <p class="goodBalance">The bank balance is:<?php echo $bankBalance?> </p>
            <?php else:?>
            <p class="badBalance"> The bank bad balance is:<?php echo $bankBalance?></p>
            <?php endif;?>
        </div>
        <?php
        //boolean scalar type
        $a = (boolean)TRUE;
        $b = (bool)TRUE;
        $c = TRUE;
        echo var_dump($a===$c);        
        ?>
        <?php 
        $aString= '123'; //$aString is a string
        $aNumber = (int)$aString;//$aNumber is an integer
        $aBool =(bool)$aNumber;//aBool is now Boolean and it is true
        
        echo $aString;
        print('</br>');
        print $aString;
        print('</br>');
        echo $aNumber;
        print('</br>');
        echo $aBool;
        ?>
        <?php 
        include 'Lab_03_01.php';
        ?>
        
    </body>
</html>
