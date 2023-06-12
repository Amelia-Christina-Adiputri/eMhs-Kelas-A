<div>
    <table class="table table-hover">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Judul</th>
            <th scope="col">Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tsk as $idx=>$t)
                <tr>
                    <th scope="row">{{$tsk->firstItem() + $idx}}</th>
                    <td>{{$t->nama}}</td>
                    <td>{{$t->judul_task}}</td>
                    <td>{{$t->deskripsi_task}}</td>
                    <td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <span class="float-right">{{$tsk->links()}}</span>
</div>
