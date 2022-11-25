@extends('layouts.main')

@section('page')
    <h1>{{$title}}</h1>
    <p>NIP: {{$nip}}</p>
    <p>bidang: {{$bidang}}</p>

    <div class="p-3 bg-white rounded">
        <h2>mata kuliah yang diampu (di teknik elektro)</h2>
        <table class="table table-hover table-bordered table-responsive">
            <thead>
            <tr>
                <th scope="col">no</th>
                <th>Nama Mata Kuliah</th>
            </tr>
            </thead>
            <tbody>
            @foreach($matkul as $mk)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{ $mk->name }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection