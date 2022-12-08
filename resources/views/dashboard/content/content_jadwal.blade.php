@php
    function convTime($time){
        return \Carbon\Carbon::createFromFormat('G:i:s', $time)->format('G:i');
    }
    $day = array('senin', 'selasa', 'rabu', 'kamis', 'jumat');

@endphp

<!--Jadwal kuliah content-->
    <div class="jk-content row scrolling-wrapper mx-2 mx-sm-4">
        <div class="d-flex flex-row flex-nowrap pb-3 pt-3">
            @foreach($jadwals as $key => $matkul)
                <div class="col-3 p-0 mr-3">
                    @foreach($matkul as $mk)
                        <span class="badge hari mb-2 d-none">{{$day[$mk->day -1 ]}}</span>
                        {{--https://github.com/code-fx/Pure-CSS3-Animated-Border--}}
                        <div class="card mb-3 ui-box topBottom-leftRightCorner p-1 position-relative ">
                            <button class="card-opt-button btn btn-sm d-none text-dark-grey position-absolute top-0 end-0 m-2 dropdown"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-three-dots-vertical"></i>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/kurikulum/{{$mk->slug}}/edit"><i class="fa-regular fa-pen-to-square mr-1"></i> edit</a></li>
                                <li><a class="dropdown-item" href="#"><i class="fa-regular fa-file-powerpoint mr-1"></i> materi</a></li>
                                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-book mr-1"></i> ebook</a></li>
                                <li><a class="dropdown-item" href="/kurikulum/{{$mk->slug}}"><i class="fa-solid fa-info mr-1"></i> detail</a></li>
                            </ul>
                            <div class="card-body ui-border-element">
                                <a href="#detail-matkul-{{$mk->slug}}" data-bs-toggle="modal">
                                    <p class="card-title fw-semibold">{{ $mk->name }}</p>
                                    <div class="d-flex flex-row mb-2 info-badge ">
                                        <span class="badge bg-grey-2">
                                            {{ convTime($mk->waktu_mulai) }} -
                                            {{ convTime($mk->waktu_selesai) }}
                                        </span>
                                        <span class="badge bg-grey-2 ms-2 ">{{ $mk->ruang }}</span>
                                    </div>
                                    <div class="d-flex flex-column dosen-matkul position-relative">
                                        @foreach($mk->dosen as $i => $dosen)
                                            @if($i>1)
                                                @break
                                            @else
                                                <div class="dosen-matkul-content"><span class="ic-kuliah"></span> {{ $dosen->name }}</div>
                                            @endif
                                        @endforeach
                                    </div>
                                </a>
                            </div>
                        </div>
                        {{-- modal --}}
                        @include('dashboard.partials.modal_matkul_detail')
                    @endforeach
                </div> <!--col-3-->
            @endforeach {{--Day--}}
    </div> <!--jk-content-->
</div>