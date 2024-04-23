<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pendaftaran Diri</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">

  </head>
  <body>
    <h1>USER</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <div id="awal">
        <div class="mb-3">
            <label for="formNama" class="col">Nama</label>
            <input type="text" class="form-control" id="formNama" placeholder="Masukan nama anda">
        </div>

        <div class="col-lg-6">
            <div class="form-group">
            <label class="col">Tanggal Lahir</label>
                <input type="date" id="tanggal" name="tanggal">
            </div>
        </div>
    <br>
        <div>
            <label class="col">Kewarganegaraan</label>
            <select class="form-select" aria-label="Pilih kewarganegaraan">  
                <option selected>Pilih kewarganegaraan</option>
                <option value="1">Indonesia (ID)</option>
                <option value="2">Malaysia (MY)</option>
                <option value="3">Singapore (SG)</option>
            </select>
        </div>
    </div>
    
    <br>
    <hr>
    <div id="awal">
        <div class="container text-center">
            <div class="rowjudul">
                <div class="col">
                    Keluarga
                </div>
                <div class="col">
                    <p><a href="#" class="link-info">+ Tambah Keluarga</a></p>
                </div>            
            </div>
            <div class="row">
                <div class="col">
                    Nama
                </div>
                <div class="col">
                    Tanggal Lahir
                </div> 
                <div class="col">
                    
                </div>           
            </div>
            
            <div class="rowisi">
                <div class="col">
                    <input type="text" class="form-control" id="formNama" placeholder="Masukan nama">
                </div>
                <div class="col">
                    <input type="date" id="tanggal" name="tanggal">
                </div>
                <div class="col">
                    <button type="button" class="btn btn-danger">Hapus</button>
                </div>            
            </div>
        </div>

    </div>
</body>
</html>