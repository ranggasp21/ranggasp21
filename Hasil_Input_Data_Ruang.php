<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Ruang</title>
    <style>
        .form-container {
            max-width: 500px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: red;
        }
        .form-group select,
        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
        .form-group input[type="text"],
        .form-group textarea {
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .form-group select {
            height: 40px;
        }
        .form-actions {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
        }
        .form-actions button {
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .form-actions button.save {
            background-color: blue;
            color: white;
        }
        .form-actions button.cancel {
            background-color: gray;
            color: white;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Tambah Data Ruang</h2>
    <div class="form-group">
        <label for="namaGedung">Nama Gedung</label>
        <select id="namaGedung">
            <option value="">Pilih Gedung</option>
            <option value="Gedung 1">Gedung 1</option>
            <option value="Gedung 2">Gedung 2</option>
            <option value="Gedung 3">Gedung 3</option>
        </select>
    </div>

    <div class="form-group">
        <label for="namaLantai">Nama Lantai</label>
        <select id="namaLantai">
            <option value="">Pilih Lantai</option>
            <option value="Lantai 1">Lantai 1</option>
            <option value="Lantai 2">Lantai 2</option>
            <option value="Lantai 3">Lantai 3</option>
        </select>
    </div>

    <div class="form-group">
        <label for="kodeRuang">Nama Ruang <span class="required">*</span></label>
        <input type="text" id="kode-ruang" required>
    </div>

    <div class="form-group">
        <label for="namaRuang">Kode Rak <span class="required">*</span></label>
        <input type="text" id="namaRuang" required>
    </div>

    <div class="form-group">
        <label for="kapasitas">Kapasitas (Lajur) <span class="required">*</span></label>
        <input type="text" id="kapasitas" required>
    </div>

    <div class="form-group">
        <label for="keterangan">Keterangan</label>
        <textarea id="keterangan"></textarea>
    </div>

    <div class="buttons">
        <button onclick="tutup()">Tutup</button>
        <button onclick="simpan()">Simpan</button>
    </div>
</div>

<div id="output" class="output">
    <h2>Data Rak yang Disimpan</h2>
    <p><strong>Nama Gedung:</strong> <span id="outputNamaGedung"></span></p>
    <p><strong>Nama Lantai:</strong> <span id="outputNamaLantai"></span></p>
    <p><strong>Kode Ruang:</strong> <span id="outputKodeRuang"></span></p>
    <p><strong>Nama Ruang:</strong> <span id="outputNamaRuang"></span></p>
    <p><strong>Kapasitas (Lajur):</strong> <span id="outputKapasitas(Lajur)"></span></p>
    <p><strong>Keterangan:</strong> <span id="outputKeterangan"></span></p> 
</div>

<script>
    function tutup() {
        alert('Form closed');
        // Here you can add code to actually close the form if needed
    }

    function simpan() {
        let data = {
            namaGedung: document.getElementById('namaGedung').value,
            namaLantai: document.getElementById('namaLantai').value,
            kodeRuang: document.getElementById('kodeRuang').value,
            namaRuang: document.getElementById('namaRuang').value,
            kapasitas: document.getElementById('kapasitas').value,
            keterangan: document.getElementById('keterangan').value
        };

        document.getElementById('outputNamaGedung').textContent = data.namaGedung;
        document.getElementById('outputNamaLantai').textContent = data.namaLantai;
        document.getElementById('outputKodeRuang').textContent = data.kodeRuang;
        document.getElementById('outputNamaRuang').textContent = data.namaRuang;
        document.getElementById('outputKapasitas(lajur)').textContent = data.kapasitas;
        document.getElementById('outputKeterangan').textContent = data.keterangan;

        document.getElementById('output').style.display = 'block'; // Menampilkan output setelah data disimpan

        console.log('Data saved:', data);
        alert('Data has been saved');
    }
</script>

</body>
</html>