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
    <table cellSpacing='5'>
        <tr><td colspan='3'><h1>Hasil Pendaftaran Pacar Amel</h1></td></tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td>{{$nama}}</td>
        </tr>
        <tr>
            <td>Gender</td>
            <td>:</td>
            <td>{{$gender}}</td>
        </tr>
        <tr>
            <td>Umur</td>
            <td>:</td>
            <td>{{$umur}}</td>
        </tr>
        <tr>
            <td>Agama</td>
            <td>:</td>
            <td>{{$agama}}</td>
        </tr>
        <tr>
            <td>Ketertarikan</td>
            <td>:</td>
            <td>
                @foreach ($ketertarikan as $k)
                <li>{{$k}}</li>
                @endforeach 
            </td>
        </tr>
    </table>
</div>