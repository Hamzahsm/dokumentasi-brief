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
  
