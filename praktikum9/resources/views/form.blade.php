<style>

    button{
        margin-top:10px;
        width: 100%;
        padding: 10px 12px;
        border-radius: 4px;
        border: 1px solid #ccc;
        background-color: blueviolet;
        color: white;
    }

    table{
        border: 1px solid #ccc;
        background-color: #f2f2f2;
        margin: 0 auto;
        margin-top: 20px;
        padding:20px;
        border-radius: 20px;
    }
</style>

<div class="card">
    <form action="/proses", method="POST">
        @csrf
        <table cellSpacing='5'>
            <tr><td colspan='3'><h1>Form Pendaftaran Pacar Amel</h1></td></tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>:</td>
                <td>
                    <input type="radio" name="gender" value="Perempuan">Perempuan
                    <input type="radio" name="gender" value="Laki-laki">Laki-laki
                </td>
            </tr>
            <tr>
                <td>Umur</td>
                <td>:</td>
                <td>
                    <input type="number" name="umur">
                </td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td>
                    <select name="agama">
                        <option value="Islam"selected>Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Katholik">Katholik</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Buddha">Buddha</option>
                        <option value="Kong Hu Cu">Kong Hu Cu</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Ketertarikan</td>
                <td>:</td>
                <td>
                    <input type="checkbox" name="ketertarikan[]" value="Game">Game<br>
                    <input type="checkbox" name="ketertarikan[]" value="Olahraga">Olahraga<br>
                    <input type="checkbox" name="ketertarikan[]" value="Kuliner">Kuliner<br>
                    <input type="checkbox" name="ketertarikan[]" value="Buku">Buku<br>
                    <input type="checkbox" name="ketertarikan[]" value="Film">Film<br>
                    <input type="checkbox" name="ketertarikan[]" value="Traveling">Traveling<br>
                </td>
            </tr>
            <tr>
                <td colspan='3'><button type="submit">Kirim</button></td>
            </tr>
        </table>
    </form>
</div>