<div class="login-container">
    <form action="<?= BASEURL; ?>/login/ceklogin" method="post" class="login-form" id="login-pegawai">
        <h1>
            Login Pegawai
        </h1>
        <?php Flasher::flashLogin(); ?>
        <input type="text" name="id_pegawai" placeholder="ID"> <br>
        <input type="password" name="password" placeholder="Password">
        <div class="btn-container">
            <button type="submit" name="login">Login</button>
        </div>
    </form>
</div>