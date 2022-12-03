@php
    function convTime($time){
        return \Carbon\Carbon::createFromFormat('G:i:s', $time)->format('G:i');
    }
    $day = array('senin', 'selasa', 'rabu', 'kamis', 'jumat');

@endphp

<!--Jadwal kuliah content-->
<div class="collapse show" id="collapseJadwal">
    <div class="jk-content row scrolling-wrapper mx-2 mx-sm-4">
        <div class="d-flex flex-row flex-nowrap pb-3 pt-3 bg-accent-1">
            @foreach($jadwals as $key => $matkul)
                <div class="col-3 p-0 mr-3">
                    @foreach($matkul as $mk)
                        <span class="badge hari mb-2 d-none">{{$day[$mk->day -1 ]}}</span>
                        <a href="#detail-matkul-{{$mk->slug}}" data-bs-toggle="modal">
                            {{--https://github.com/code-fx/Pure-CSS3-Animated-Border--}}
                            <div class="card mb-3 ui-box topBottom-leftRightCorner p-1">
                                <div class="card-body ui-border-element">
                                    <p class="card-title fw-semibold">{{ $mk->name }}</p>
                                    <div class="d-flex flex-row mb-2 info-badge ">
                                        <span class="badge">
                                            {{ convTime($mk->waktu_mulai) }} -
                                            {{ convTime($mk->waktu_selesai) }}
                                        </span>
                                        <span class="badge ms-2 ">{{ $mk->ruang }}</span>
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
</div>