<?php include 'config.php'?>
<?php
    
    
/*

if day is passed via GET, show $day's coffee

if it's today, shows $today's coffee

place a link to show today's coffee (if on another day)

*/
    
if(isset($_GET['day']))
{//if day is passed via GET, show $day's coffee
    $today = $_GET['day'];
}else{//if it's today, shows $today's coffee
    $today = date('l');
}

//$today = date('l');

//echo $today;
//die;

switch($today){
        
    case 'Sunday':
        $topic = 'How do you relax?';
        $pic = 'img/relax.jpg';
        $altPic = 'Relaxing in the pool';
    break;
        
    case 'Monday':
        $topic = 'Getting over a case of the Mondays';
        $pic = 'img/monday.jpg';
        $altPic = 'Monday pic';
    break;
        
    case 'Tuesday':
        $topic = 'Getting back into the swing of things';
        $pic = 'img/swing.jpg';
        $altPic = 'golf swing';
    break;
        
    case 'Wednesday':
        $topic = 'HUMP DAY!';
        $pic = 'img/wednesday.jpg';
        $altPic = 'Camel hump';
    break;
        
    case 'Thursday':
        $topic = 'Ending the week and Thirsty Thursday!';
        $pic = 'img/thursday.png';
        $altPic = 'Adult beverages';
    break;
        
    case 'Friday':
        $topic = 'TGIF!';
        $pic = 'img/tgif.jpg';
        $altPic = 'TGIF Pic';
    break;
        
    case 'Saturday':
        $topic = 'DIY or Weekend Adventures?';
        $pic = 'img/saturday.jpg';
        $altPic = 'DIY and adventure split pic';
    break;
        
}
    
?>
<?php include 'header.php'?>

<p><?=$today?>'s discussuon topic is <?=$topic?>!</p>

<img src="<?=$pic?>" alt="<?=$altPic?>">

<p>Click below to find out what awesome topic we have for each day of the week!</p>
<p><a href="daily.php?day=Sunday">Sunday</a></p>
<p><a href="daily.php?day=Monday">Monday</a></p>
<p><a href="daily.php?day=Tuesday">Tuesday</a></p>
<p><a href="daily.php?day=Wednesday">Wednesday</a></p>
<p><a href="daily.php?day=Thursday">Thursday</a></p>
<p><a href="daily.php?day=Friday">Friday</a></p>
<p><a href="daily.php?day=Saturday">Saturday</a></p>

<?php include 'footer.php'?>