<?php

function getItemById($id)
{
    $items = [
        1 => [
            'id' => 1,
            'name' => 'Dodol Rasa Durian',
            'description' => 'Deskripsi item pertama...',
            'price' => 60000,
        ],
        2 => [
            'id' => 2,
            'name' => 'Dodol Rasa Coklat',
            'description' => 'Deskripsi item kedua...',
            'price' => 40000,
        ],
        3 => [
            'id' => 3,
            'name' => 'Dodol Rasa Strawberry',
            'description' => 'Deskripsi item ketiga...',
            'price' => 50000,
        ],
    ];

    if (array_key_exists($id, $items)) {
        $item = $items[$id];
        
        echo "ID: " . $item['id'] . "<br>";
        echo "Nama: " . $item['name'] . "<br>";
        echo "Deskripsi: " . $item['description'] . "<br>";
        echo "Harga:Rp. " . $item['price'] . "<br>";
    } else {
        echo "Item dengan ID $id tidak ditemukan.";
    }
}
?>
