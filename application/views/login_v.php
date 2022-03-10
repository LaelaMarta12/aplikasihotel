<hr>
<section class="page-section portfolio" id="portfolio">
<div class="container">
    <form action="<?= base_url('auth/proses_login')?>" method="POST">
       <div class="form-group">
           <label for="my-input">Masukkan Username Anda</label>
           <input id="my-input" class="form-control"  placeholder="Silahkan masukkan username anda" type="text" name="username">
       </div>
       <br>
       <div class="form-group">
           <label for="my-input">Masukkan Password Anda</label>
           <input id="my-input" class="form-control" placeholder="Silahkan masukkan password anda"  type="password" name="password">
       </div>
       <br>
       <center><button type="submit" class="btn btn-success">MASUK</button></center>
       <br>
       <center><a href="<?= base_url('home')?>" class="btn btn-success">KEMBALI</a></center>
    </form>
</div>
<section class="page-section portfolio" id="portfolio">

