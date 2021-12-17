# Projek UAS Pemrograman - Reminyak.id

- Anayah Hanifah Elsyaf
- Alzidan Zulfan Amiraz
- Kevin Christopher

Tampilan website sebagai berikut
- Merupakan tampilan yang akan dilihat oleh user saat pertama kali mengakses website
![image](https://user-images.githubusercontent.com/71371234/146493652-4f348964-049b-4f20-a6c5-f7a77c9d3c60.png)

Tampilan login dan register

![image](https://user-images.githubusercontent.com/71371234/146493765-42b37b9b-f3b1-49e3-8855-1583db84368e.png)
![image](https://user-images.githubusercontent.com/71371234/146493784-3eba797e-be8b-49cc-95c4-cfc1ba19b499.png)

Tampilan yang muncul ketika login sebagai admin
Tampilan berbeda dengan fitur yang berbeda pula

![image](https://user-images.githubusercontent.com/71371234/146493828-90e99475-f303-4e20-9569-810c1cca881d.png)

Tampilan yang muncul ketika login sebagai user

![image](https://user-images.githubusercontent.com/71371234/146493882-485a7370-e120-43b4-9e6e-45de3361af88.png)

Tabel yang digunakan dalam database menyesuaikan kebutuhan dari website setelah dilakukan analisis sistem

![image](https://user-images.githubusercontent.com/71371234/146493947-9391ae23-3469-4625-8ba3-00ef69907d1d.png)

Sedikit penjelasan mengenai code program

- Untuk menambah tiap tampilan website, code ditambahkan pada bagian view
- Untuk menambahkan migration database, code ditambahkan dengan php spark migration yang sebelumnya telah menambahkan file migrationnya di bagian database
- Untuk melakukan pindah halaman dan kontrol lainnya, code ditambahkan di bagian controller
- Untuk mengambil, menambah, menghapus dan segala manipulasi data yang berkaitan dengan database, code ditambahkan pada bagian model
- Penginisialisasian base url dilakukan pada file .evt
- Lalu menambahkan rute dibagian Routes.php
