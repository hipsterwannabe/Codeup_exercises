<?php

// Get new instance of PDO object
$dbc = new PDO('mysql:host=127.0.0.1;dbname=codeup_pdo_test_db', 'greg', 'quiero');

// Tell PDO to throw exceptions on error
$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// // Create the query and assign to var
// $query = 'CREATE TABLE national_parks (
//     id INT UNSIGNED NOT NULL AUTO_INCREMENT,
//     name VARCHAR(200) NOT NULL,
//     location VARCHAR(100) NOT NULL,
//     date_established DATE NOT NULL,
//     area_in_acres DOUBLE(11,2) NOT NULL,
//     park_description VARCHAR(350) NOT NULL,
//     PRIMARY KEY (id)
// )';

// $dbc->exec($query);

$parks = [
	['name'=>'Arches', 'location'=>'Utah', 'date_established'=>	"1971-11-12", 'area_in_acres'=>76518.98, 'park_description'=> "This site features more than 2,000 natural sandstone arches, including the famous Delicate Arch. In a desert climate, millions of years of erosion have led to these structures, and the arid ground has life-sustaining soil crust and potholes, which serve as natural water-collecting basins. Other geologic formations are stone columns, spires, fins, and towers."],
	['name'=>'Badlands', 'location'=>'South Dakota', 'date_established'=>"1978-11-10", 'area_in_acres'=>242755.94, 'park_description'=>"The Badlands are a collection of buttes, pinnacles, spires, and grass prairies. It has the world's richest fossil beds from the Oligocene epoch, and the wildlife includes bison, bighorn sheep, black-footed ferrets, and swift foxes."],
	['name'=>'Canyonlands', 'location'=>'Utah', 'date_established'=>"1971-12-18", 'area_in_acres'=>337597.83, 'park_description'=>"This landscape was eroded into a maze of canyons, buttes, and mesas by the combined efforts of the Colorado River, Green River, and their tributaries, which divide the park into three districts. There are rock pinnacles and other naturally sculpted rock formations, as well as artifacts from Ancient Pueblo peoples."],
	['name'=>'Denali', 'location'=>'Alaska', 'date_established'=>"1917-02-26", 'area_in_acres'=>4740911.72, 'park_description'=>"Centered around Mount McKinley, the tallest mountain in North America, Denali is serviced by a single road leading to Wonder Lake. McKinley and other peaks of the Alaska Range are covered with long glaciers and boreal forest. Wildlife includes grizzly bears, Dall sheep, caribou, and gray wolves."],
	['name'=>'Everglades', 'location'=>'Florida', 'date_established'=>"1934-05-30", 'area_in_acres'=>1508537.90, 'park_description'=>"The Everglades are the largest subtropical wilderness in the United States. This mangrove ecosystem and marine estuary is home to 36 protected species, including the Florida panther, American crocodile, and West Indian manatee. Some areas have been drained and developed; restoration projects aim to restore the ecology."],
	['name'=>'Glacier', 'location'=>'Montana', 'date_established'=>"1910-05-11", 'area_in_acres'=>1013572.41, 'park_description'=>"The U.S. half of Waterton-Glacier International Peace Park, this park hosts 26 glaciers and 130 named lakes beneath a stunning canopy of Rocky Mountain peaks. There are historic hotels and a landmark road in this region of rapidly receding glaciers. The local mountains, formed by an overthrust, expose the world's best-preserved sedimentary fossils from the Proterozoic era."],
	['name'=>'Hot Springs', 'location'=>'Arkansas', 'date_established'=>"1921-03-04", 'area_in_acres'=>5549.75, 'park_description'=>"Hot Springs is the smallest and only National Park in an urban area and is based around natural hot springs that have been managed by the federal government since the 1830s. Being the oldest area in the National Park system, Hot Springs was established by act of congress as a federal reserve on April 20, 1832. Congress changed the reserve's designation to National Park on March 4, 1921. The springs provide opportunities for relaxation in an historic setting; Bathhouse Row preserves numerous examples of 19th-century architecture."],
	['name'=>'Isle Royale', 'location'=>'Michigan', 'date_established'=>"1931-03-03", 'area_in_acres'=>571790.11, 'park_description'=>"The largest island in Lake Superior is a place of isolation and wilderness. Along with its many shipwrecks, waterways, and hiking trails, the park also includes over 400 smaller islands within 4.5 miles (7.2 km) of its shores. There are only 20 mammal species on the entire island, though the relationship between its wolf and moose populations is especially unique."],
	['name'=>'Joshua Tree', 'location'=>'California', 'date_established'=>"1994-10-31", 'area_in_acres'=>789745.47, 'park_description'=>"Covering large areas of the Colorado and Mojave Deserts and the Little San Bernardino Mountains, this exotic desert landscape is populated by vast stands of the famous Joshua tree. Great changes in elevation reveal starkly contrasting environments including bleached sand dunes, dry lakes, rugged mountains, and maze-like clusters of monzogranite monoliths."],
	['name'=>'Kings Canyon', 'location'=>'California', 'date_established'=>"1940-03-04",'area_in_acres'=>461901.20, 'park_description'=>"Home to several Giant sequoia groves and the General Grant Tree, the world's second largest, this park also features part of the Kings River, sculptor of the dramatic granite canyon that is its namesake, and the San Joaquin River, as well as Boyden Cave."]
];

$stmt = $dbc->prepare('INSERT INTO national_parks (name, location, date_established, area_in_acres, park_description) VALUES (:name, :location, :date_established, :area_in_acres, :park_description)');

foreach ($parks as $park) {
	$stmt->bindValue(':name', $park['name'], PDO::PARAM_STR);
	$stmt->bindValue(':location', $park['location'], PDO::PARAM_STR);
	$stmt->bindValue(':date_established', $park['date_established'], PDO::PARAM_STR);
	$stmt->bindValue(':area_in_acres', $park['area_in_acres'], PDO::PARAM_STR);
	$stmt->bindValue(':park_description', $park['park_description'], PDO::PARAM_STR);

	
	$stmt->execute();

    echo "Inserted ID: " . $dbc->lastInsertId() . PHP_EOL;
}


?>