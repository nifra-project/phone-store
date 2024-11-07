<?php
$kategori = [
    "Samsung" => [
        ["gambar" => "https://via.placeholder.com/220x220", "nama" => "Samsung Galaxy S23", "deskripsi" => "128GB, 50MP Kamera", "harga" => "Rp 8.000.000"],
        ["gambar" => "https://via.placeholder.com/220x220", "nama" => "Samsung Galaxy A54", "deskripsi" => "128GB, 48MP Kamera", "harga" => "Rp 4.000.000"],
        ["gambar" => "https://via.placeholder.com/220x220", "nama" => "Samsung Galaxy Note 20", "deskripsi" => "256GB, 64MP Kamera", "harga" => "Rp 9.500.000"],
        ["gambar" => "https://via.placeholder.com/220x220", "nama" => "Samsung Galaxy Z Flip", "deskripsi" => "128GB, 12MP Kamera", "harga" => "Rp 12.000.000"],
        ["gambar" => "https://via.placeholder.com/220x220", "nama" => "Samsung Galaxy S21", "deskripsi" => "256GB, 108MP Kamera", "harga" => "Rp 10.000.000"]
    ],
    "iPhone" => [
        ["gambar" => "https://via.placeholder.com/220x220", "nama" => "iPhone 14 Pro", "deskripsi" => "128GB, 48MP Kamera", "harga" => "Rp 15.000.000"],
        ["gambar" => "https://via.placeholder.com/220x220", "nama" => "iPhone 13", "deskripsi" => "128GB, 12MP Kamera", "harga" => "Rp 10.000.000"],
        ["gambar" => "https://via.placeholder.com/220x220", "nama" => "iPhone 12 Mini", "deskripsi" => "64GB, 12MP Kamera", "harga" => "Rp 8.000.000"],
        ["gambar" => "https://via.placeholder.com/220x220", "nama" => "iPhone SE 2020", "deskripsi" => "64GB, 12MP Kamera", "harga" => "Rp 5.000.000"],
        ["gambar" => "https://via.placeholder.com/220x220", "nama" => "iPhone 11", "deskripsi" => "64GB, 12MP Kamera", "harga" => "Rp 7.000.000"]
    ],
    "Xiaomi" => [
        ["gambar" => "https://via.placeholder.com/220x220", "nama" => "Xiaomi Redmi Note 12", "deskripsi" => "128GB, 50MP Kamera", "harga" => "Rp 3.000.000"],
        ["gambar" => "https://via.placeholder.com/220x220", "nama" => "Xiaomi Mi 11", "deskripsi" => "256GB, 108MP Kamera", "harga" => "Rp 7.500.000"],
        ["gambar" => "https://via.placeholder.com/220x220", "nama" => "Xiaomi Poco X3", "deskripsi" => "128GB, 64MP Kamera", "harga" => "Rp 3.500.000"],
        ["gambar" => "https://via.placeholder.com/220x220", "nama" => "Xiaomi Redmi 9C", "deskripsi" => "64GB, 13MP Kamera", "harga" => "Rp 1.500.000"],
        ["gambar" => "https://via.placeholder.com/220x220", "nama" => "Xiaomi Mi Note 10", "deskripsi" => "256GB, 108MP Kamera", "harga" => "Rp 6.000.000"]
    ],
    "Oppo" => [
        ["gambar" => "https://via.placeholder.com/220x220", "nama" => "Oppo Reno 8", "deskripsi" => "128GB, 64MP Kamera", "harga" => "Rp 5.000.000"],
        ["gambar" => "https://via.placeholder.com/220x220", "nama" => "Oppo A92", "deskripsi" => "128GB, 48MP Kamera", "harga" => "Rp 3.000.000"],
        ["gambar" => "https://via.placeholder.com/220x220", "nama" => "Oppo F11 Pro", "deskripsi" => "128GB, 48MP Kamera", "harga" => "Rp 4.000.000"],
        ["gambar" => "https://via.placeholder.com/220x220", "nama" => "Oppo Find X3", "deskripsi" => "256GB, 50MP Kamera", "harga" => "Rp 10.000.000"],
        ["gambar" => "https://via.placeholder.com/220x220", "nama" => "Oppo A74", "deskripsi" => "128GB, 48MP Kamera", "harga" => "Rp 2.800.000"]
    ],
    "Vivo" => [
        ["gambar" => "https://via.placeholder.com/220x220", "nama" => "Vivo V25", "deskripsi" => "128GB, 50MP Kamera", "harga" => "Rp 4.500.000"],
        ["gambar" => "https://via.placeholder.com/220x220", "nama" => "Vivo Y20", "deskripsi" => "64GB, 13MP Kamera", "harga" => "Rp 1.800.000"],
        ["gambar" => "https://via.placeholder.com/220x220", "nama" => "Vivo X50", "deskripsi" => "128GB, 48MP Kamera", "harga" => "Rp 5.500.000"],
        ["gambar" => "https://via.placeholder.com/220x220", "nama" => "Vivo Y53s", "deskripsi" => "128GB, 64MP Kamera", "harga" => "Rp 3.000.000"],
        ["gambar" => "https://via.placeholder.com/220x220", "nama" => "Vivo V21", "deskripsi" => "256GB, 44MP Kamera", "harga" => "Rp 4.000.000"]
    ]
];

foreach ($kategori as $brand => $produk) {
    echo "<h3>$brand</h3><div class='produk-container'>";
    foreach ($produk as $item) {
        echo "
            <div class='produk'>
                <img src='{$item['gambar']}' alt='{$item['nama']}'>
                <h4>{$item['nama']}</h4>
                <p>{$item['deskripsi']}</p>
                <p class='harga'>{$item['harga']}</p>
                <button>Beli Sekarang</button>
            </div>
        ";
    }
    echo "</div>";
}
?>
