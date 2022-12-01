@extends('layouts.main')

@section('page')
    {{--$title dan $matkul ngambil dari kontroler/route--}}
    <h1>{{ $title }}</h1>
    @foreach($matkuls as $key => $matkul)
{{--        @dd($matkuls)--}}

        <h2>Semester {{ $key }}</h2>
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
                @foreach($matkul as $key => $mk)
                    <tr>
                        <th scope="row">{{$key+1}}</th>
                        <td>{{ $mk->name }}</td>
                        @foreach($mk->dosen as $dosen)
                            <td>{{ $dosen->name }}</td>
                        @endforeach

                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>

    @endforeach



@endsection