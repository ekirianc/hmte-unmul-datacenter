@extends('layouts.main')

@section('page')
    {{--$title dan $matkul ngambil dari kontroler/route--}}
    <h1>{{ $title }}</h1>
    @foreach($semesters as $s)
        <h2>Semester {{ $s->semester }}</h2>
        <div class="p-3 bg-white rounded">
            <table class="table table-hover table-bordered table-responsive">
                <thead>
                <tr>
                    <th scope="col">no</th>
                    <th>Nama Mata Kuliah</th>
                    <th>Dosen 1</th>
                    <th>Dosen 2</th>
                </tr>
                </thead>
                <tbody>
                @foreach($s->matkul as $matkul)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{ $matkul->name }}</td>
                        @foreach($matkul->dosen as $dosen)
                            <td>{{ $dosen->name }}</td>
                        @endforeach

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    @endforeach



@endsection