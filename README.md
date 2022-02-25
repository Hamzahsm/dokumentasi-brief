# dokumentasi-brief

<h2> Sistem Brief di bagi jadi 4, yaitu :  </h2>
<ul>
  <li>sistem login dan dashboard brief buat user</li>
  <li>sistem login dan dashboard buat tim sales</li>
  <li>sistem login dan dashboard buat super-admin</li>
  <li>sistem login dan dashboard buat reseller</li>
</ul>

<h2>Pre-requirements</h2>
<ul>
  <li><a href="https://developer.mozilla.org/en-US/docs/Web/HTML?retiredLocale=id" target="_blank">HTML5</a></li>
  <li><a href="https://developer.mozilla.org/id/docs/Web/CSS" target="_blank">CSS3</a></li>
  <li><a href="https://www.javascript.com/" target="_blank">Javascript</a></li>
  <li><a href="https://www.php.net/" target="_blank">PHP</a></li>
  <li><a href="https://getbootstrap.com/" target="_blank">Bootsrap</a></li>
  <li><a href="https://www.tutorialrepublic.com/php-tutorial/php-mysql-crud-application.php#:~:text=What%20is%20CRUD,delete%20operations%20in%20previous%20chapters." target="_blank">CRUD (Create, Read, Update, Delete) With PHP</a></li>
  <li><a href="https://www.php.net/manual/en/reserved.variables.session.php" target="_blank">Session ($_SESSION) with PHP</a></li>
</ul>

<h2>Sistem Login</h2>
<p>sistem login dan register di buat melalui bahasa <a href="https://www.php.net/" target="_blank">PHP</a>, cara membuatnya ada di folder di atas, anda dapat membuatnya di <a href="https://www.apachefriends.org/download.html" target="_blank">localhost (XAMPP)</a> sendiri dengan membuat database baru dan struktur yang sama</p>
<p>secara umum, script sistem login yang digunakan oleh user, sales, super-admin, reseller adalah sama. hanya saja ditangani di tabel database yang berbeda. Kemudian jika berhasil login, maka akan di arahkan ke dashboard masing-masing</p>
<p>nama file yang ada di sini sama dengan di root, jadi anda hanya tinggal menghubungkan kembali database dan table yang sesuai</p>

<h2>Dashboard</h2>
<p>pada halaman dashboard, anda hanya perlu melakukan konfigurasi pada table database yang ingin ditampilkan pada setiap rule (sales, super-admin, reseller)</p>
<p>pada rule user, tidak perlu menmapilkan database apapun, karena userlah yang menginput database nya sendiri (smm, ads, web, custom order dll).
  
<h2>Folder Untuk Gambar</h2>
<p>Setiap user yang melakukan upload berupa gambar akan di simpan di dalam sebuah folder yang otomatis akan membuat folder didalamnya dengan nama user tersebut</p>
<p>contoh beberapa folder yang menampung inputan user</p>
<ul>
  <li>lampiran-foto-produk</li>
  <li>lampiran-logo</li>
  <li>lampiran-testimoni</li>
  <li>lampiran-lainnya</li>
</ul>
<p>Setiap form di handle oleh folder yang berbeda, hal ini untuk mempermudah saat dilakukan query</p>
<p>untuk mengetahui perbedaanya, anda hanya perlu melihat nama folder yang ada di root</p>
<ul>
  <li>untuk brief smm -> nama foldernya tidak ada inisial apa-apa(contohnya seperti di atas)</li>
  <li>untuk brief ads -> nama foldernya ada inisal -ads</li>
  <li>untuk brief web -> nama foldernya ada inisial -web</li>
  <li>untuk custom-oder -> nama foldernya ada inisial -custom-order</li>
</ul>
  
<h2>CRUD BRIEF</h2>
<p style="font-weight: bold;">Create</p>
<p>setiap form brief di handle oleh table database yang berbeda</p>
<p>pengiriman data ke databse tidak menggunakan <a href="https://www.w3schools.com/sql/sql_join_inner.asp" target="_blank">inner join SQL</a></p>
<p>jadi, jika ada penambahan input pada form, anda harus melakukan update juga terhadap table database yang terkait</p>

<p style="font-weight: bold;">Read</p>
<p>yang perlu diperhatikan adalah, beberapa rules tidak bisa mengakses atau melihat database<p>
  <ul>
    <li>user -> tidak bisa melihat database</li>
    <li>sales -> hanya bisa melihat data order brief</li>
    <li>super-admin -> bisa melihat, mengedit, delete semua database </li>
    <li>reseller -> hanya bisa melihat data order brief berdasarkan kode referralnya</li>
  </ul>
<p> Jadi, setiap dashboard berisi informasi yang berbeda</p>
<p> jika anda ingin merubah informasi tersebut, anda hanya perlu merubah query nya saja</p>

<p style="font-weight: bold;">Update</p>
<p>Update pada form brief hanya dapat dilakukan oleh super-admin</p>
<p>script yang digunakan sama, hanya saja inputan yang di masukkan berbeda</p>

<p style="font-weight: bold;"Delete</p>
<p>delete terhadap form, data register klien, data tim sales, data reseller hanya dapat dilakukan oleh super-admin</p>
