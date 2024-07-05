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
    <div class="form-container">
        <h2>Tambah Data Ruang</h2>
        <form>
            <div class="form-group">
                <label for="nama-gedung">Nama Gedung*</label>
                <select id="nama-gedung" required>
                    <option value="">Pilih Gedung</option>
                    <option value="gedung1">Gedung 1</option>
                    <option value="gedung2">Gedung 2</option>
                    <option value="gedung3">Gedung 3</option>
                </select>
            </div>
            <div class="form-group">
                <label for="nama-lantai">Nama Lantai*</label>
                <select id="nama-lantai" required>
                    <option value="">Pilih Lantai</option>
                    <option value="lantai1">Lantai 1</option>
                    <option value="lantai2">Lantai 2</option>
                    <option value="Lantai3">Lantai 3</option>
                </select>
            </div>
            <div class="form-group">
                <label for="kode-ruang">Kode Ruang*</label>
                <input type="text" id="kode-ruang" required>
            </div>
            <div class="form-group">
                <label for="nama-ruang">Nama Ruang*</label>
                <input type="text" id="nama-ruang" required>
            </div>
            <div class="form-group">
                <label for="kapasitas">Kapasitas (Lajur)*</label>
                <input type="text" id="kapasitas" required>
            </div>
            <div class="form-group">
                <label for="keterangan">Keterangan</label>
                <textarea id="keterangan" rows="4"></textarea>
            </div>
            <div class="form-actions">
                <button type="button" class="cancel">Tutup</button>
                <button type="submit" class="save">Simpan</button>
            </div>
        </form>
    </div>
</body>
</html>