<?php
$menu = [
    [
        "nama" => "Beranda",
    ],
    [
        "nama" => "Berita",
        "subMenu" => [
            [
                "nama" => "Wisata",
                "subMenu" => [
                    [
                        "nama" => "Pantai",
                    ],
                    [
                        "nama" => "Gunung",
                    ],
                ]
            ],
            [
                "nama" => "Kuliner",
            ],
            [
                "nama" => "Hiburan",
            ],
        ]
    ],
    [
        "nama" => "Tentang",
    ],
    [
        "nama" => "Kontak",
    ],
];

function tampilkanMenuBertingkat(array $menu) {
    echo "<ul>";
    foreach ($menu as $key => $item) {
        echo "<li>{$item['nama']}";
        // jika ada submenu, tampilkan lagi secara rekursif
        if (isset($item['subMenu'])) {
            tampilkanMenuBertingkat($item['subMenu']);
        }
        echo "</li>";
    }
    echo "</ul>";
}

tampilkanMenuBertingkat($menu);
echo "<br><br>";

// fungsi rekursif (s0al 12)
function tampilkanMenuBertingkatRekursif(array $menu) {
    echo "<ul>";
    foreach ($menu as $item) {
        echo "<li>{$item['nama']}";
        
        // jika ada subMenu, panggil dirinya sendiri
        if (isset($item['subMenu'])) {
            tampilkanMenuBertingkatRekursif($item['subMenu']);
        }
        
        echo "</li>";
    }
    echo "</ul>";
}

// memanggil fungsi untuk menampilkan menu
tampilkanMenuBertingkatRekursif($menu);

?>