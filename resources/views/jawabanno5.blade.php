{{-- 5B --}}
{{-- 1. Mengapa $request perlu di-injeksi sebagai parameter dalam method updateProfile? --}}
{{-- Menurut saya karena untuk mendapatkan request yang dikirimkan oleh user sehingga bisa menerima data data yang dikirimnya jika tidak menggunakan request maka data akan tidak dapat diakses --}}
{{-- 2. Apakah ada fitur keamanan yang perlu ditambahkan ke dalam method updateProfile? --}}
{{-- Sepertinya perlu ada validasi input untuk memastikan bahwa form yang diisi sesuai dengan yang diminta jadi dapat menghindari
injection contohnya biasa pentest melakukan injection pada form form yang tidak ada validasi input misalkan ia menjalan perintah
Database SQL pada form dan jalan atau menghapus maka akan berbahaya, mungkin saja tanpa penggunaan validasi hanya dengan penggunaan
sqlmap -url/form akan keluar semua sheet atau hal apa aja yang dapat di inject. --}}