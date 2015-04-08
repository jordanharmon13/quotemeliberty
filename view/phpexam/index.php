<?php
    require('view.php');
    
    // $dbh = new PDO('mysql:host=localhost;dbname=jordanharmon.net_jordanz6_test', 'jordanharmon.net_jordanz6_test', '731731jBh91!');

    $action = filter_input(INPUT_POST, 'action');
    if ($action == NULL) {
        $action = filter_input(INPUT_GET, 'action');
        if($action == NULL) {
            $action = 'view';
        }
    }
    
    if ($action == 'Home' || $action == 'Europe' || $action == 'Africa' || $action == 'North America' || $action == 'Antarctica' || $action == 'Asia' || $action == 'South America' || $action == 'Oceania') {
        echo $navbar;
    }
    
    if ($action == 'Home') {
        $content = '<h1>The PHP Travel</h1><br>
        <p>Welcome to the PHP Travel site where you can find vast amounts of travel destinations and information about them.</p>';
        echo $content;
    } else if ($action == 'Europe') {
        $content = '<h1>Europe</h1><br>
        <p>Europe is a continent that comprises the westernmost peninsula of Eurasia. It is generally divided from Asia by the watershed divides of the Ural and Caucasus Mountains, the Ural River, the Caspian and Black Seas, and the waterways connecting the Black and Aegean Seas.</p>';
        echo $content;
    } else if ($action == 'Africa') {
        $content = '<h1>Africa</h1><br>
        <p>Africa is the world&#039s second-largest and second-most-populous continent. At about 30.2 million km2 (11.7 million sq mi) including adjacent islands, it covers six percent of the Earth&#039s total surface area and 20.4 percent of the total land area. With 1.1 billion people as of 2013, it accounts for about 15% of the world&#039s human population. The continent is surrounded by the Mediterranean Sea to the north, both the Suez Canal and the Red Sea along the Sinai Peninsula to the northeast, the Indian Ocean to the southeast, and the Atlantic Ocean to the west. The continent includes Madagascar and various archipelagos. It has 54 fully recognized sovereign states&#039, nine territories and two de facto independent states with limited or no recognition.</p>';
        echo $content;
    } else if ($action == 'North America') {
        $content = '<h1>North America</h1><br>
        <p>North America is a continent wholly within the Northern Hemisphere and almost wholly within the Western Hemisphere. It can also be considered a northern subcontinent of the Americas. It is bordered to the north by the Arctic Ocean, to the east by the Atlantic Ocean, to the west and south by the Pacific Ocean, and to the southeast by South America and the Caribbean Sea.</p>
            <p>North America covers an area of about 24,709,000 square kilometers (9,540,000 square miles), about 4.8% of the planet&#039s surface or about 16.5% of its land area. As of 2013, its population was estimated at nearly 565 million people across 23 independent states, representing about 7.5% of the human population. Most of the continent&#039s land area is dominated by Canada, the United States, Greenland, and Mexico, while smaller states exist in the Central American and Caribbean regions. North America is the third largest continent by area, following Asia and Africa, and the fourth by population after Asia, Africa, and Europe</p>';
        echo $content;
    } else if ($action == 'Antarctica') {
        $content = '<h1>Antarctica</h1><br>
        <p>Antarctica is Earth&#039s southernmost continent, containing the geographic South Pole. It is situated in the Antarctic region of the Southern Hemisphere, almost entirely south of the Antarctic Circle, and is surrounded by the Southern Ocean. At 14.0 million km2 (5.4 million sq mi), it is the fifth-largest continent in area after Asia, Africa, North America, and South America. For comparison, Antarctica is nearly twice the size of Australia. About 98% of Antarctica is covered by ice that averages 1.9 kilometres (1.2 mi) in thickness, which extends to all but the northernmost reaches of the Antarctic Peninsula.</p>';
        echo $content;
    } else if ($action == 'Asia') {
        $content = '<h1>Asia</h1><br>
        <p>Asia is the Earth&#039s largest and most populous continent, located primarily in the eastern and northern hemispheres. Though it covers only 8.7% of the Earth&#039s total surface area, it comprises 30% of earth&#039s land area, and has historically been home to the bulk of the planet&#039s human population (currently roughly 60%). Asia is notable for not only overall large size and population, but unusually dense and large settlements as well as vast barely populated regions within the continent of 4.4 billion people. Asia has exhibited economic dynamism (particularly East Asia) as well as robust population growth during the 20th century, but overall population growth has since fallen to world average levels.</p>';
        echo $content;
    } else if ($action == 'South America') {
        $content = '<h1>South America</h1><br>
        <p>South America is a continent located in the Western Hemisphere, mostly in the Southern Hemisphere, with a relatively small portion in the Northern Hemisphere. It can also be considered as a subcontinent of the Americas.</p>';
        echo $content;
    } else if ($action == 'Oceania') {
        $content = '<h1>Oceania</h1><br>
        <p>Oceania also known as Oceanica, is a region centred on the islands of the tropical Pacific Ocean. Opinions of what constitutes Oceania range from its three subregions of Melanesia, Micronesia, and Polynesia to, more broadly, the entire insular region between Asia and the Americas, including Australasia and the Malay Archipelago.</p>';
        echo $content;
    } else {
        header('Location: .?action=Home');
    }

?>

