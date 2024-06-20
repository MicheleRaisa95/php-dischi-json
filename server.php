<?php
$dischi = [
    [
        "copertina" => "link_to_cover_image1.jpg",
        "titolo_album" => "The Dark Side of the Moon",
        "artista" => "Pink Floyd",
        "genere_musicale" => "Progressive Rock",
        "anno_uscita" => 1973
    ],
    [
        "copertina" => "link_to_cover_image2.jpg",
        "titolo_album" => "Master of Puppets",
        "artista" => "Metallica",
        "genere_musicale" => "Thrash Metal",
        "anno_uscita" => 1986
    ],
    [
        "copertina" => "link_to_cover_image3.jpg",
        "titolo_album" => "Back in Black",
        "artista" => "AC/DC",
        "genere_musicale" => "Hard Rock",
        "anno_uscita" => 1980
    ],
    [
        "copertina" => "link_to_cover_image4.jpg",
        "titolo_album" => "Paranoid",
        "artista" => "Black Sabbath",
        "genere_musicale" => "Heavy Metal",
        "anno_uscita" => 1970
    ],
    [
        "copertina" => "link_to_cover_image5.jpg",
        "titolo_album" => "Led Zeppelin IV",
        "artista" => "Led Zeppelin",
        "genere_musicale" => "Rock",
        "anno_uscita" => 1971
    ],
    [
        "copertina" => "link_to_cover_image6.jpg",
        "titolo_album" => "A Night at the Opera",
        "artista" => "Queen",
        "genere_musicale" => "Rock",
        "anno_uscita" => 1975
    ],
    [
        "copertina" => "link_to_cover_image7.jpg",
        "titolo_album" => "Nevermind",
        "artista" => "Nirvana",
        "genere_musicale" => "Grunge",
        "anno_uscita" => 1991
    ],
    [
        "copertina" => "link_to_cover_image8.jpg",
        "titolo_album" => "Appetite for Destruction",
        "artista" => "Guns N' Roses",
        "genere_musicale" => "Hard Rock",
        "anno_uscita" => 1987
    ],
    [
        "copertina" => "link_to_cover_image9.jpg",
        "titolo_album" => "The Number of the Beast",
        "artista" => "Iron Maiden",
        "genere_musicale" => "Heavy Metal",
        "anno_uscita" => 1982
    ],
    [
        "copertina" => "link_to_cover_image10.jpg",
        "titolo_album" => "Hotel California",
        "artista" => "Eagles",
        "genere_musicale" => "Rock",
        "anno_uscita" => 1976
    ],
    [
        "copertina" => "link_to_cover_image11.jpg",
        "titolo_album" => "Highway to Hell",
        "artista" => "AC/DC",
        "genere_musicale" => "Hard Rock",
        "anno_uscita" => 1979
    ],
    [
        "copertina" => "link_to_cover_image12.jpg",
        "titolo_album" => "Rust in Peace",
        "artista" => "Megadeth",
        "genere_musicale" => "Thrash Metal",
        "anno_uscita" => 1990
    ],
    [
        "copertina" => "link_to_cover_image13.jpg",
        "titolo_album" => "Ace of Spades",
        "artista" => "Motörhead",
        "genere_musicale" => "Heavy Metal",
        "anno_uscita" => 1980
    ],
    [
        "copertina" => "link_to_cover_image14.jpg",
        "titolo_album" => "Black Album",
        "artista" => "Metallica",
        "genere_musicale" => "Heavy Metal",
        "anno_uscita" => 1991
    ],
    [
        "copertina" => "link_to_cover_image15.jpg",
        "titolo_album" => "Toxicity",
        "artista" => "System of a Down",
        "genere_musicale" => "Nu Metal",
        "anno_uscita" => 2001
    ],
    [
        "copertina" => "link_to_cover_image16.jpg",
        "titolo_album" => "Reign in Blood",
        "artista" => "Slayer",
        "genere_musicale" => "Thrash Metal",
        "anno_uscita" => 1986
    ],
    [
        "copertina" => "link_to_cover_image17.jpg",
        "titolo_album" => "Hysteria",
        "artista" => "Def Leppard",
        "genere_musicale" => "Hard Rock",
        "anno_uscita" => 1987
    ],
    [
        "copertina" => "link_to_cover_image18.jpg",
        "titolo_album" => "British Steel",
        "artista" => "Judas Priest",
        "genere_musicale" => "Heavy Metal",
        "anno_uscita" => 1980
    ],
    [
        "copertina" => "link_to_cover_image19.jpg",
        "titolo_album" => "Blizzard of Ozz",
        "artista" => "Ozzy Osbourne",
        "genere_musicale" => "Heavy Metal",
        "anno_uscita" => 1980
    ],
    [
        "copertina" => "link_to_cover_image20.jpg",
        "titolo_album" => "Ten",
        "artista" => "Pearl Jam",
        "genere_musicale" => "Grunge",
        "anno_uscita" => 1991
    ]
];

header('Content-Type: application/json');
echo json_encode($dischi);
?>