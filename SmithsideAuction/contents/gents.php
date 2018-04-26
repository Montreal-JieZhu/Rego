<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>Gentlemen | Smithside Auctions 2018</title>
<link href="css/main.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="container">
	<div class="sidebar">
		<div class="sidebar">
	<?php
include 'sidebar.php';
?>	
</div><!-- end sidebar -->
	</div><!-- end sidebar -->
	
	<div class="content">
		<?php
/**
 * gents.php
 * 
 * content for the gents page
 * 
 * @version 1.2 2018-04-16
 * @package Smithside Auction KD
 * @copyright (c) 2018, Jie Zhu
 * @license GNU General Public Source
 * @since release 1.0
 */
?>


<?php
    // get the lot information    
    $lots = array();
    //First Element's information
    $lots[0]['lot_number']=1;
    $lots[0]['image']='naval-19-173.jpg';
    $lots[0]['name']="Naval Officer's Formal Tailcoat, 1840s";
    $lots[0]['description'] = "Black wool broadcloth, double breast front, missing 3 of 18 raised round gold buttons w/ 
                crossed cannon barrels &amp; \"Ordnance Corps\" text, silver sequin &amp; tinsel embroidered emblem 
                on each square cut tail, quilted black silk lining, very good;";
    $lots[0]['price']=5700.00;    
    //Seconde Element's information
    $lots[1]['lot_number']=2;
    $lots[1]['image']='gents-striped-8-26.jpg';
    $lots[1]['name']="Striped Cotton Tailcoat, America, 1835-1845";
    $lots[1]['description'] = "Orange and white pin-striped twill cotton, double breasted, turn down collar, waist seam, 
                self-fabric buttons, inside single button pockets in each tail, (soiled, faded, cuff edges
                frayed) good.";
    $lots[1]['price']=20700.00;    
    //Third Element's information
    $lots[2]['lot_number']=3;
    $lots[2]['image']='gents-black-8-27.jpg';
    $lots[2]['name']="Black Broadcloth Tailcoat, 1830-1845";
    $lots[2]['description'] = "Fine thin wool broadcloth, double breasted, notched collar, horizontal front and side waist seam,
                slim long sleeves with notched cuffs, curved tails, black silk satin lining quilted in diamond pattern,
                padded and quilted chest, black silk covered buttons, (buttons worn) excellent.";
    $lots[2]['price']=3450.00;
    
    $lot_number1 = '1';
    $image1 = 'naval-19-173.jpg';
    $name1 = "Naval Officer's Formal Tailcoat, 1840s";
    $description1 = "Black wool broadcloth, double breast front, missing 3 of 18 raised round gold buttons w/ 
                crossed cannon barrels &amp; \"Ordnance Corps\" text, silver sequin &amp; tinsel embroidered emblem 
                on each square cut tail, quilted black silk lining, very good;";
    $price1 = 5700.00;
     
    $lot_number2 = '2';
    $image2 = 'gents-striped-8-26.jpg';
    $name2 = "Striped Cotton Tailcoat, America, 1835-1845";
    $description2 = "Orange and white pin-striped twill cotton, double breasted, turn down collar, waist seam, 
                self-fabric buttons, inside single button pockets in each tail, (soiled, faded, cuff edges
                frayed) good.";
    $price2 = 20700.00;
    
    $lot_number3 = '3';
    $image3 = 'gents-black-8-27.jpg';
    $name3 = "Black Broadcloth Tailcoat, 1830-1845";
    $description3 = "Fine thin wool broadcloth, double breasted, notched collar, horizontal front and side waist seam,
                slim long sleeves with notched cuffs, curved tails, black silk satin lining quilted in diamond pattern,
                padded and quilted chest, black silk covered buttons, (buttons worn) excellent.";
    $price3 = 3450.00;
    
    // counter variable for counting row
    $counter = 0;
?>

<h1>Product Category: Gents</h1>

<ul class="ulfancy">
<?php for($counter=0;$counter<3;$counter++):?>
    <li class="row<?php $counter % 2; ?>">					
        <div class="list-photo"><a href="images/<?php echo $lots[$counter]['image']; ?>">
                <img src="images/thumbnails/<?php echo $lots[$counter]['image']; ?>"  alt="" /></a>
        </div>			
        <div class="list-description">
            <h2><?php echo ucwords($lots[$counter]['name']); ?></h2>
            <p><?php echo htmlspecialchars($lots[$counter]['description']); ?> </p>
            <p><strong>Lot:</strong> #<?php echo $lots[$counter]['lot_number']; ?>
                <strong>Price:</strong> $<?php echo number_format($lots[$counter]['price'], 2); ?></p></p>            
        </div>			
        <div class="clearfloat"></div>
    </li>
<?php endfor;?>     
</ul>
	</div><!-- end content -->	
	

</div><!-- end container -->
</body>

</html>




