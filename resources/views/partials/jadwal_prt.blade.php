<?php
function convTime($time)
{
    return \Carbon\Carbon::createFromFormat('G:i:s', $time)->format('G:i');
}
?>


{{--@dd($title)--}}
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
                {{auth()->user()->semester->semester}}
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
            @foreach($day as $d)
                {{--$matkul diambil dari route/controler, return table content--}}
                <div class="col-3 p-0">
                    <span class="badge bg-dark hari mb-2">{{ $d->day }}</span>
                    @foreach($semesters as $s)
                        @foreach($s->matkul as $matkul)
                            {{--@dd($matkul)--}}
                            @if(($matkul->day->id === $d->id))
                                <a href="#detail-matkul-{{$matkul->slug}}" data-bs-toggle="modal">
                                {{--<a href="/matkul/{{ $matkul->slug }}">--}}
                                    <div class="card mb-2 matkul-box">
                                        <div class="card-body">
                                            <p class="card-title fw-semibold">{{ $matkul->name }}</p>
                                            <div class="d-flex flex-row mb-2 info-badge ">
                                                <span class="badge bg-accent-1 ">
                                                    {{ convTime($matkul->waktu_mulai) }} -
                                                    {{ convTime($matkul->waktu_selesai) }}
                                                </span>
                                                <span class="badge bg-accent-2 ms-2 ">{{ $matkul->ruang }}</span>
                                            </div>
                                            <div class="d-flex flex-column dosen-matkul">
                                                @foreach($matkul->dosen as $i => $dosen)
                                                    @if($i>1)
                                                        @break
                                                    @else
                                                        <div><span class="ic-kuliah"></span> {{ $dosen->name }}</div>
                                                    @endif
                                                @endforeach
                                            </div>
                                            {{--<span>{{$mk->created_at->diffForHumans()}}</span>--}}
                                        </div>
                                    </div>
                                </a>

                                {{-- modal --}}
                                @include('partials.modal_matkul_detail')

                           {{-- @else
                                @include('partials.empty_card')
                                @php
                                    $show = $hide;
                                    $hide = 0;
                                    $initial++;
                                @endphp
                                @if(($show===1) or ($hide === 0 and $show === 0 and $initial === 2))
                                    @include('partials.empty_card')
                                @endif--}}
                            @endif
                            {{--<p class="m-0"> hide = {{$hide}}, show {{$show}}, init {{$initial}}</p>--}}
                        @endforeach
                    @endforeach
                </div> <!--col-3-->
            @endforeach {{--Day--}}


        </div> <!--d-flex-->
    </div> <!--jk-content-->
</div> <!--jadwal kuliah section-->



