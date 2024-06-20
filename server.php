<?php
$dischi = [
    [
        "copertina" => "src/img/dark-side-of-the-moon.jpg",
        "titolo_album" => "The Dark Side of the Moon",
        "artista" => "Pink Floyd",
        "genere_musicale" => "Progressive Rock",
        "anno_uscita" => 1973
    ],
    [
        "copertina" => "src/img/master-of-puppets.jpg",
        "titolo_album" => "Master of Puppets",
        "artista" => "Metallica",
        "genere_musicale" => "Thrash Metal",
        "anno_uscita" => 1986
    ],
    [
        "copertina" => "src/img/back-in-black.jpg",
        "titolo_album" => "Back in Black",
        "artista" => "AC/DC",
        "genere_musicale" => "Hard Rock",
        "anno_uscita" => 1980
    ],
    [
        "copertina" => "src/img/paranoid.jpg",
        "titolo_album" => "Paranoid",
        "artista" => "Black Sabbath",
        "genere_musicale" => "Heavy Metal",
        "anno_uscita" => 1970
    ],
    [
        "copertina" => "src/img/led-zeppelin-iv.jpg",
        "titolo_album" => "Led Zeppelin IV",
        "artista" => "Led Zeppelin",
        "genere_musicale" => "Rock",
        "anno_uscita" => 1971
    ],
    [
        "copertina" => "src/img/a-night-at-opera.jpg",
        "titolo_album" => "A Night at the Opera",
        "artista" => "Queen",
        "genere_musicale" => "Rock",
        "anno_uscita" => 1975
    ],
    [
        "copertina" => "src/img/nevermind.jpg",
        "titolo_album" => "Nevermind",
        "artista" => "Nirvana",
        "genere_musicale" => "Grunge",
        "anno_uscita" => 1991
    ],
    [
        "copertina" => "src/img/appetite-for-destruction.jpg",
        "titolo_album" => "Appetite for Destruction",
        "artista" => "Guns N' Roses",
        "genere_musicale" => "Hard Rock",
        "anno_uscita" => 1987
    ],
    [
        "copertina" => "src/img/the-number-of-the-beast.jpg",
        "titolo_album" => "The Number of the Beast",
        "artista" => "Iron Maiden",
        "genere_musicale" => "Heavy Metal",
        "anno_uscita" => 1982
    ],
    [
        "copertina" => "src/img/hotel-california.jpg",
        "titolo_album" => "Hotel California",
        "artista" => "Eagles",
        "genere_musicale" => "Rock",
        "anno_uscita" => 1976
    ],
    [
        "copertina" => "src/img/highway-to-hell.jpg",
        "titolo_album" => "Highway to Hell",
        "artista" => "AC/DC",
        "genere_musicale" => "Hard Rock",
        "anno_uscita" => 1979
    ],
    [
        "copertina" => "src/img/rust-in-peace.jpg",
        "titolo_album" => "Rust in Peace",
        "artista" => "Megadeth",
        "genere_musicale" => "Thrash Metal",
        "anno_uscita" => 1990
    ],
    [
        "copertina" => "src/img/ace-of-spades.jpg",
        "titolo_album" => "Ace of Spades",
        "artista" => "Motörhead",
        "genere_musicale" => "Heavy Metal",
        "anno_uscita" => 1980
    ],
    [
        "copertina" => "src/img/black-album.jpg",
        "titolo_album" => "Black Album",
        "artista" => "Metallica",
        "genere_musicale" => "Heavy Metal",
        "anno_uscita" => 1991
    ],
    [
        "copertina" => "src/img/toxicity.jpg",
        "titolo_album" => "Toxicity",
        "artista" => "System of a Down",
        "genere_musicale" => "Nu Metal",
        "anno_uscita" => 2001
    ],
    [
        "copertina" => "src/img/reign-in-blood.jpg",
        "titolo_album" => "Reign in Blood",
        "artista" => "Slayer",
        "genere_musicale" => "Thrash Metal",
        "anno_uscita" => 1986
    ],
    [
        "copertina" => "src/img/hysteria.jpg",
        "titolo_album" => "Hysteria",
        "artista" => "Def Leppard",
        "genere_musicale" => "Hard Rock",
        "anno_uscita" => 1987
    ],
    [
        "copertina" => "src/img/british-steel.jpg",
        "titolo_album" => "British Steel",
        "artista" => "Judas Priest",
        "genere_musicale" => "Heavy Metal",
        "anno_uscita" => 1980
    ],
    [
        "copertina" => "src/img/blizzard-of-ozz.jpg",
        "titolo_album" => "Blizzard of Ozz",
        "artista" => "Ozzy Osbourne",
        "genere_musicale" => "Heavy Metal",
        "anno_uscita" => 1980
    ],
    [
        "copertina" => "src/img/ten.jpg",
        "titolo_album" => "Ten",
        "artista" => "Pearl Jam",
        "genere_musicale" => "Grunge",
        "anno_uscita" => 1991
    ]
];

header('Content-Type: application/json');
echo json_encode($dischi);
?>