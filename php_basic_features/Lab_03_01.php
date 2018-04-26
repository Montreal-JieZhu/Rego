<?php
    $firstName='Andy';
    $lastName = 'Tarr';
    $myVar = 'Hi,my name is'.$firstName.' '.$lastName.'.';
    echo $myVar;
    echo '<br>';
?>

<?php
$myName = 'Andy';
echo strlen($myName);
echo '<br>';
?>

<?php
$myName = 'Andy & Amos';
echo htmlspecialchars($myName);
echo '<br>';
?>

<?php
$myVar = 'the book of days';
echo ucfirst($myVar);
echo '<br>';
?>

<?php
$myVar = 'THE BOOK OF daYs';
echo ucwords(strtolower($myVar));
echo '<br>';
?>

<?php
$employee[0]='Sally Meyers';
$employee[1] = 'George Smith';
$employee[2]='Peter Hengel';
print_r($employee);
echo '<br>';
?>

<?php
$employee2['name']='Sally Meyers';
$employee2['position'] = 'President';
$employee2['yearEmployed']='2017';
print_r($employee2);
echo '<br>';
?>

<?php
$employees=array(
    array('name'=>'Sally Meyers','position'=>'President','yearEmployed'=>2017),
    array('name'=>'George Smith','position'=>'Treasurer','yearEmployed'=>2016),
    array('name'=>'Peter Hengel','position'=>'Clerk','yearEmployed'=>1992),
    );
?>
<pre>
<?php 
print_r($employees);
echo '<br>';
?>
</pre>