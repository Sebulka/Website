<?php echo $data['title']; ?>
<div class="container">
    <div class="homeLeft">
        <h3 class="introContact"><?php echo $data['intro']; ?></h3>
        <div>
           <img class="map" src="<?php echo URL; ?>public/graphics/map.jpg">
        </div>
    </div>  
    <div class="homeRight">
        <h2>Opnning times:</h2>
        <h3>Mon-Fri 08:00 - 13:00, 14:00 - 17:00</h3>
        <h3>Sat 09:30 - 15:00</h3><br>
        <div style="float:left">
            <h3>Street name</h3>
            <h3>Town name</h3>
            <h3>Post code</h3>
        </div>
    </div>
</div>