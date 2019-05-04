<?php echo $data['title']; ?>
<p class="intro"><?php echo $data['intro']; ?></p>
<div class="galeries">
    <div class="galeriesLeft">
       <?php
        $fileNo=(count(scandir('C:\xampp\htdocs\GitHub\Website_Hair_dresser\HairDresser\public\graphics\galeries')) - 2);
        $filesNames = scandir('C:\xampp\htdocs\GitHub\Website_Hair_dresser\HairDresser\public\graphics\galeries');
        for($x=0; $x<$fileNo; $x++){
       
        echo '<div class="galeriesPicture"><img src="'.URL.'/public/graphics/galeries/'.$filesNames[$x+2].'"></div>';
        }
        
        ?>
    </div>
    <div class="galeriesRight">
        <h2>Opnning times:</h2>
        <h3>Mon-Fri 08:00 - 13:00, 14:00 - 17:00</h3>
        <h3>Sat 09:30 - 15:00</h3>
        <div style="float:left">
            <h3>Street name</h3>
            <h3>Town name</h3>
            <h3>Post code</h3>
        </div>
    </div>
</div>