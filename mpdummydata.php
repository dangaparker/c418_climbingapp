<?php
//Dummy Data based off Mountain Project. Yes, they're from Boulder, CO.
$output = $output = [
    'success'=> true,
    'routes'=> [
        [
            "id" => 105748657,
            "name" => "The Yellow Spur",
            "type"=> "Trad",
            "rating"=> "5.9+",
            "stars"=> 4.8,
            "starVotes"=> 844,
            "pitches"=> 6,
            "location"=> [
                "Colorado",
                "Boulder",
                "Eldorado Canyon SP",
                "Redgarden Wall",
                "Redgarden - Tower One"
            ],
            "url"=> "https://www.mountainproject.com/route/105748657/the-yellow-spur",
            "imgSqSmall"=> "https=>//cdn-files.apstatic.com/climb/1202925_sqsmall_1494040765.jpg",
            "imgSmall"=> "https://cdn-files.apstatic.com/climb/1202925_small_1494040765.jpg",
            "imgSmallMed"=> "https://cdn-files.apstatic.com/climb/1202925_smallMed_1494040765.jpg",
            "imgMedium"=> "https://cdn-files.apstatic.com/climb/1202925_medium_1494040765.jpg",
            "longitude"=> -105.2875,
            "latitude"=> 39.9318
        ],
        [
            "id"=> 105750106,
            "name"=> "Rewritten",
            "type"=> "Trad",
            "rating"=> "5.7",
            "stars"=> 4.7,
            "starVotes"=> 1029,
            "pitches"=> 6,
            "location"=> [
                "Colorado",
                "Boulder",
                "Eldorado Canyon SP",
                "Redgarden Wall",
                "Redgarden - Lumpe to the top"
            ],
            "url"=> "https://www.mountainproject.com/route/105750106/rewritten",
            "imgSqSmall"=> "https://cdn-files.apstatic.com/climb/107138402_sqsmall_1494168815.jpg",
            "imgSmall"=> "https://cdn-files.apstatic.com/climb/107138402_small_1494168815.jpg",
            "imgSmallMed"=> "https://cdn-files.apstatic.com/climb/107138402_smallMed_1494168815.jpg",
            "imgMedium"=> "https://cdn-files.apstatic.com/climb/107138402_medium_1494168815.jpg",
            "longitude"=> -105.2867,
            "latitude"=> 39.9323
        ],
        [
            "id"=> 105761157,
            "name"=> "The Luminosity",
            "type"=> "Sport",
            "rating"=> "5.9",
            "stars"=> 4,
            "starVotes"=> 166,
            "pitches"=> 1,
            "location"=> [
                "Colorado",
                "Boulder",
                "Boulder Canyon",
                "Solaris"
            ],
            "url"=> "https://www.mountainproject.com/route/105761157/the-luminosity",
            "imgSqSmall"=> "https://cdn-files.apstatic.com/climb/105848158_sqsmall_1494053479.jpg",
            "imgSmall"=> "https://cdn-files.apstatic.com/climb/105848158_small_1494053479.jpg",
            "imgSmallMed"=> "https://cdn-files.apstatic.com/climb/105848158_smallMed_1494053479.jpg",
            "imgMedium"=> "https://cdn-files.apstatic.com/climb/105848158_medium_1494053479.jpg",
            "longitude"=> -105.412,
            "latitude"=> 40.0002
        ]
    ]
];
$json_output = json_encode( $output );
print ($json_output);

?>