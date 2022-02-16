    <div class="profil">
      <h4>My Profile</h4>
      <p>Manage your account by filling in profile data.</p>
      <hr />
      <img src="../img/q.jpeg" class="rounded-circle mx-auto mb-2 d-block" alt="..." />
      <div class="d-grid gap-2 col-2 mx-auto mb-4">
        <a type="button" class="btn btn-outline-secondary pilih">Choose Image</a>
      </div>
      <div class="row mb-2 justify-content-center">
        <label for="nama" class="col-2 col-form-label text-end">Nama</label>
        <div class="col-7">
          <input type="text" class="form-control" id="nama" />
        </div>
      </div>
      <div class="row mb-2 justify-content-center">
        <label for="email" class="col-2 col-form-label text-end">Email</label>
        <div class="col-7">
          <input type="email" class="form-control" id="email" />
        </div>
      </div>
      <div class="row mb-2 justify-content-center">
        <label for="telp" class="col-2 col-form-label text-end">Nomor</label>
        <div class="col-7">
          <input type="tel" class="form-control" id="telp" />
        </div>
      </div>
      <div class="gender row mb-2 justify-content-center">
        <label class="col-2 col-form-label text-end">Gender</label>
        <div class="col-7">
          <div class="form-check form-check-inline mt-2 ms-2">
            <input class="form-check-input" type="radio" name="gender" id="male" value="male" />
            <label class="form-check-label" for="male">Male</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="female" value="female" />
            <label class="form-check-label" for="female">Female</label>
          </div>
        </div>
      </div>
      <div class="row mb-4 justify-content-center">
        <label for="Date" class="col-2 col-form-label text-end">Date of Birth</label>
        <div class="col-7">
          <select class="form-select form-select hari form-check-inline" aria-label=".form-select-sm example">
            <option value="1">1</option>
            <option value="31">31</option>
          </select>
          <select class="form-select form-select bulan form-check-inline" aria-label=".form-select-sm example">
            <option value="januari">Januari</option>
            <option value="februari">Februari</option>
            <option value="Maret">Maret</option>
            <option value="April">April</option>
            <option value="Mei">Mei</option>
            <option value="Juni">Juni</option>
            <option value="juli">juli</option>
            <option value="Agustus">Agustus</option>
            <option value="September">September</option>
            <option value="Oktober">Oktober</option>
            <option value="November">November</option>
            <option value="Desember">Desember</option>
          </select>
          <select class="form-select form-select tahun form-check-inline" aria-label=".form-select-sm example">
            <option value="1945">1945</option>
            <option value="2022">2022</option>
          </select>
        </div>
      </div>
      <div class="d-grid gap-2 col-4 mx-auto mb-4 px-5">
        <button type="button" class="btn btn-secondary masukkan">Save</button>
      </div>
    </div>
