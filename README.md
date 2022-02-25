# dokumentasi-brief
<h1>Dokumentasi Brief</h1>

<h2> Sistemnya di bagi jadi 4 </h2>
<ul>
  <li>sistem login dan dashboard brief buat user</li>
  <li>sistem login dan dashboard buat tim sales</li>
  <li>sistem login dan dashboard buat super-admin</li>
  <li>sistem login dan dashboard buat reseller</li>
</ul>

--------------------------------------------------------

<h2>Sistem Login</h2>
<p>sistem login dan registe di buat melalui bahasa PHP, cara membuatnya ada di folder di atas, anda dapat membuatnya di localhost (XAMPP) sendiri dengan membuat database baru dan struktur yang sama</p>
<p>secara umum, script sistem login yang digunakan oleh user, sales, super-admin, reseller adalah sama. hanya saja ditangani di tabel database yang berbeda. Kemudian jika berhasil login, maka akan di arahkan ke dashboard masing-masing</p>
<p>nama file yang ada di sini sama dengan di root, jadi anda hanya tinggal menghubungkan kembali database dan table yang sesuai</p>

-------------------------------------------------------

<h2>Dashboard</h2>
<p>pada halaman dashboard, anda hanya perlu melakukan konfigurasi pada table database yang ingin ditampilkan pada setiap rule (sales, super-admin, reseller)</p>
<p>pada rule user, tidak perlu menmapilkan database apapun, karena userlah yang menginput database nya sendiri (smm, ads, web, custom order dll).
  
