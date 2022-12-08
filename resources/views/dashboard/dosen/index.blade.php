@extends('dashboard.layouts.main')

@section('page')
    <div class="px-3">
        <h1>Daftar Dosen</h1>
        <div class="row">
            @foreach($dosens as $dosen)
                <div class="col-6 mb-4">
                    <div class="card overflow-hidden">
                        <div class="d-flex ">
                            <img src="/images//icon/default-pict.png" alt="" width="120px" height="120px">
                            <div class="px-4 d-flex flex-column align-self-center">
                                <a href="/dosen/{{$dosen->name}}" class="fw-semibold m-0">{{$dosen->name}}</a>
                                <p class="m-0">{{$dosen->NIP}}</p>
                                <p class="m-0">{{$dosen->bidang}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
    </div>
@endsection
