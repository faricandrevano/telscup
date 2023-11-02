<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>TelsCup - Mobile Legends</title>
    <link rel="shortcut icon" href="./TelsCup_Logo.svg" type="image/svg+xml">
    <link rel="stylesheet" href="style.css" />
    <style>
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
body {
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  padding: 20px;
  background-image: url('assets/images/BG_1.png');
  background-size: cover;
  background-repeat: no-repeat;
  gap: 10px;
}
.formss {
  color: #ffffff;
  position: relative;
  max-width: 700px;
  width: 100%;
  background: rgba(219, 158, 255, 0.329);
  backdrop-filter: blur(5px);
  padding: 25px;
  border-radius: 8px;
  box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
}
.formss header {
  font-size: 1.5rem;
  color: #ffffff;
  font-weight: 500;
  text-align: center;
}
.formss .form {
  margin-top: 30px; 
}
.form .input-box {
  width: 100%;
  margin-top: 20px;
}
.input-box label {
  color: #ffffff;
}
.form :where(.input-box input, .select-box) {
  position: relative;
  height: 50px;
  width: 100%;
  outline: none;
  font-size: 1rem;
  color: #707070;
  margin-top: 8px;
  border: 1px solid #ddd;
  border-radius: 6px;
  padding: 0 15px;
}
.input-box input:focus {
  box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);
}
.form .column {
  display: flex;
  column-gap: 15px;
}
.form .gender-box {
  margin-top: 20px;
}
.gender-box h3 {
  color: #333;
  font-size: 1rem;
  font-weight: 400;
  margin-bottom: 8px;
}
.form :where(.gender-option, .gender) {
  display: flex;
  align-items: center;
  column-gap: 50px;
  flex-wrap: wrap;
}
.form .gender {
  column-gap: 5px;
}
.gender input {
  accent-color: rgb(130, 106, 251);
}
.form :where(.gender input, .gender label) {
  cursor: pointer;
}
.gender label {
  color: #707070;
}
.address :where(input, .select-box) {
  margin-top: 15px;
}
.select-box select {
  height: 100%;
  width: 100%;
  outline: none;
  border: none;
  color: #707070;
  font-size: 1rem;
}
.form button {
  height: 55px;
  width: 100%;
  color: #fff;
  font-size: 1rem;
  font-weight: 400;
  margin-top: 30px;
  border: none;
  cursor: pointer;
  transition: all 0.2s ease;
  background: rgb(130, 106, 251);
}
.form button:hover {
  background: rgb(88, 56, 250);
}
.titleform{
    text-decoration: underline;
}
/*Responsive*/
@media screen and (max-width: 500px) {
  .form .column {
    flex-wrap: wrap;
  }
  .form :where(.gender-option, .gender) {
    row-gap: 15px;
  }
}
    </style>
  </head>
  <body>

    <section class="formss">
      <header>Registration Lomba</header>
      <form action="submit">
      <div class="form">

        <div class="input-box">
          <label>Nama Sekolah</label>
          <input type="text" placeholder="Nama Sekolah" required />
        </div>

    </div>

    </section>
    <!-- ---------------------------- -->
    <section class="formss">
        <h3 class="titleform">Kapten</h3>
        <div class="form">
        
            <div class="input-box">
                <label>Nama Lengkap</label>
                <input type="text" placeholder="Nama Lengkap" required />
              </div>

              <div class="input-box">
                <label>No. Telp</label>
                <input type="text" placeholder="Nomor Handphone" required />
              </div>

              <div class="input-box">
                <label>ID Player</label>
                <input type="text" placeholder="ID Player" required />
              </div>

              <div class="input-box">
                <label>Username</label>
                <input type="text" placeholder="Username" required />
              </div>

              <div class="input-box">
                <label>Foto Pemain</label>
                <input type="file" placeholder="Foto Pemain" required />
              </div>

      </div>
    </section>
    <!-- ---------------------------- -->
    <section class="formss">
        <h3 class="titleform">Pemain 2</h3>
        <div class="form">

              <div class="input-box">
                <label>ID Player</label>
                <input type="text" placeholder="ID Player" required />
              </div>

              <div class="input-box">
                <label>Username</label>
                <input type="text" placeholder="Username" required />
              </div>

              <div class="input-box">
                <label>Foto Pemain</label>
                <input type="file" placeholder="Foto Pemain" required />
              </div>

      </div>
    </section>
    <!-- ---------------------------- -->
    <section class="formss">
        <h3 class="titleform">Pemain 3</h3>
        <div class="form">

              <div class="input-box">
                <label>ID Player</label>
                <input type="text" placeholder="ID Player" required />
              </div>

              <div class="input-box">
                <label>Username</label>
                <input type="text" placeholder="Username" required />
              </div>

              <div class="input-box">
                <label>Foto Pemain</label>
                <input type="file" placeholder="Foto Pemain" required />
              </div>

      </div>
    </section>
    <!-- ---------------------------- -->
    <section class="formss">
        <h3 class="titleform">Pemain 4</h3>
        <div class="form">

              <div class="input-box">
                <label>ID Player</label>
                <input type="text" placeholder="ID Player" required />
              </div>

              <div class="input-box">
                <label>Username</label>
                <input type="text" placeholder="Username" required />
              </div>

              <div class="input-box">
                <label>Foto Pemain</label>
                <input type="file" placeholder="Foto Pemain" required />
              </div>

      </div>
    </section>
    <!-- ---------------------------- -->
    <section class="formss">
      <h3 class="titleform">Pemain 5</h3>
      <div class="form">

            <div class="input-box">
              <label>ID Player</label>
              <input type="text" placeholder="ID Player" required />
            </div>

            <div class="input-box">
              <label>Username</label>
              <input type="text" placeholder="Username" required />
            </div>

            <div class="input-box">
              <label>Foto Pemain</label>
              <input type="file" placeholder="Foto Pemain" required />
            </div>

    </div>
  </section>
  <!-- ---------------------------- -->
  <section class="formss">
    <h3 class="titleform">Pemain Cadangan</h3>
    <div class="form">

          <div class="input-box">
            <label>ID Player</label>
            <input type="text" placeholder="ID Player" required />
          </div>

          <div class="input-box">
            <label>Username</label>
            <input type="text" placeholder="Username" required />
          </div>

          <div class="input-box">
            <label>Foto Pemain</label>
            <input type="file" placeholder="Foto Pemain" required />
          </div>

  </div>
</section>
<!-- ---------------------------- -->
<section class="formss">
  <div class="form">
    <label>*Jika Anda Sudah Yakin, Silahkan Lanjutkan</labe>
    <button>Daftar</button>
</div>
</form>
</section>
<!-- ---------------------------- -->
    <!-- <button>Submit</button> -->
  </body>
</html>