@php
    function convTime($time){
        return \Carbon\Carbon::createFromFormat('G:i:s', $time)->format('G:i');
    }
    $day = array('senin', 'selasa', 'rabu', 'kamis', 'jumat');

@endphp

<!--jadwal kuliah Section-->
<div class="jadwal-kuliah mb-5">
    <!--Header-->
    <div class="d-flex flex-wrap flex-column flex-sm-row header p-1">
        <div class="d-flex">
            <h3 class="mb-0 mr-3 fw-semibold title-color">Jadwal Kuliah</h3>
            <!-- edit button -->
            <button class="btn btn-edit ms-2 d-block d-sm-none" type="button"><span class="fa fa-edit"></span> Edit</button>
        </div>
        <!-- semester selector button -->
        <button class="btn dropdown dropdown-toggle dropdown-center ms-md-auto" type="button"
                data-bs-toggle="dropdown" aria-expanded="false">
            Semester
            @if(request('semester'))
                {{request('semester')}}
            @else
                {{auth()->user()->semester}}
            @endif
        </button>
        @include('partials.semester_list')
        <!-- edit button -->
        <button class="btn btn-edit ms-2 d-none d-sm-block" type="button"><span class="fa fa-edit"></span> Edit</button>
    </div> <!--header-->

    <!--Jadwal kuliah content-->
    <div class="jk-content scrolling-wrapper row">
        <div class="d-flex flex-row flex-nowrap pb-3">
           {{-- @if(count($matkul)===0)
                @include('partials.empty_card')
            @endif--}}
                {{--$matkul diambil dari route/controler, return table content--}}
            @foreach($jadwals as $key => $matkul)
                <div class="col-3 p-0">
                    @foreach($matkul as $mk)
                        <span class="badge bg-dark hari mb-2 d-none">{{$day[$mk->day -1 ]}}</span>
                        <a href="#detail-matkul-{{$mk->slug}}" data-bs-toggle="modal">
                            <div class="card mb-2 matkul-box">
                                <div class="card-body">
                                    <p class="card-title fw-semibold">{{ $mk->name }}</p>
                                    <div class="d-flex flex-row mb-2 info-badge ">
                                            <span class="badge bg-accent-1 ">
                                                {{ convTime($mk->waktu_mulai) }} -
                                                {{ convTime($mk->waktu_selesai) }}
                                            </span>
                                        <span class="badge bg-accent-2 ms-2 ">{{ $mk->ruang }}</span>
                                    </div>
                                    <div class="d-flex flex-column dosen-matkul">
                                        @foreach($mk->dosen as $i => $dosen)
                                            @if($i>1)
                                                @break
                                            @else
                                                <div><span class="ic-kuliah"></span> {{ $dosen->name }}</div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </a>
                        {{-- modal --}}
                        @include('partials.modal_matkul_detail')
                    @endforeach
                </div> <!--col-3-->
            @endforeach {{--Day--}}
        </div> <!--d-flex-->
    </div> <!--jk-content-->
</div> <!--jadwal kuliah section-->



