@extends('layouts.main')

@section('page')
    {{--$matkul ngambil dari kontroler [MatkulController] --}}
    <h1>{{ $title }}</h1>
    <h4>SKS: {{ $sks }}</h4>
    <h4>Semester: <a href="/kurikulum?semester={{ $semester }}">{{ $semester }}</a></h4>

    @foreach($dosens as $i => $dosen)
        @php
            $word = array('pertama', 'kedua');
        @endphp
        @if($i>1)
            @break
        @else
            <p class="m-0">Dosen {{ $word[$loop->iteration-1] }}:
                <a href="/dosen/{{ $dosen->name }}">{{ $dosen->name }}</a>
            </p>
        @endif

    @endforeach

@endsection