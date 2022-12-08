@extends('dashboard.layouts.main')
{{--@dd($matkuls)--}}
@section('page')
    {{--$title dan $matkul ngambil dari kontroler/route--}}
    <div class="hstack gap-3">
        <h1>{{ $title }}</h1>
        <a href="/kurikulum/create" class="btn btn-sm btn-secondary"> + add</a>
    </div>
    @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{session('success')}}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if(empty(request('semester')))
        @foreach($matkuls as $key => $matkul)
            <h2>Semester {{ $key }}</h2>
            <div class="p-3 bg-white rounded table-responsive">
                <table class="table table-hover table-bordered">
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
                            <td><a href="/kurikulum/{{ $mk->slug }}">{{ $mk->name }}</a></td>
                            @foreach($mk->dosen as $dosen)
                                <td>{{ $dosen->name }}</td>
                            @endforeach

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        @endforeach
    @else
        <h2>Semester {{ request('semester') }}</h2>
        <div class="p-3 bg-white rounded table-responsive">
            <table class="table table-hover table-bordered">
                <thead>
                <tr>
                    <th scope="col">no</th>
                    <th>Nama Mata Kuliah</th>
                    <th>Dosen 1</th>
                    <th>Dosen 2</th>
                </tr>
                </thead>
                <tbody>
                @foreach($matkuls as $key => $matkul)
                    <tr>
                        <th scope="row">{{$key+1}}</th>
                        <td><a href="/kurikulum/{{ $matkul->slug }}">{{ $matkul->name }}</a></td>
                        @foreach($matkul->dosen as $dosen)
                            <td>{{ $dosen->name }}</td>
                        @endforeach
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    @endif
@endsection