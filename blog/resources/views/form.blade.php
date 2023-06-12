<style>
    .card{
        height: 30%;
        width: 20%;
        border: 1px solid #ccc;
        background-color: #f2f2f2;
        margin: 0 auto;
        margin-top: 20px;
        padding:20px;
        border-radius: 20px;
    }

    input{
        width: 100%;
        padding: 10px 12px;
        border-radius: 4px;
        border: 1px solid #ccc;
    }

    button{
        margin-top:10px;
        width: 100%;
        padding: 10px 12px;
        border-radius: 4px;
        border: 1px solid #ccc;
        background-color: blueviolet;
        color: white;
    }

</style>

<div class="card">
    <form action="/proses", method="POST">
        @csrf
        <label>Teks: </label>
        <label><input type="text" name="teks"></label>
        <label><button type="submit">Kirim</button></label>
    </form>
</div>