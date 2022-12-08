<!-- Modal -->
<div class="modal fade" id="detail-matkul-{{$mk->slug}}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Detail</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex flex-column align-items-center p-3">
                {{--$matkul ngambil dari kontroler [MatkulController] --}}
                <a href="/kurikulum/{{$mk->slug}}" target="_blank" class="d-flex">
                    <h4 class="fw-semibold mr-1">{{ $mk->name }} </h4> <i class="bi bi-box-arrow-up-right text-dark-grey"></i>
                </a>
                <div class="mb-2">
                    <span class="badge bg-grey-2 fs-6">SKS: {{ $mk->sks }}</span>
                    <a href="/kurikulum?semester={{ $mk->semester }}" target="_blank">
                        <span class="badge bg-grey-2 fs-6">Semester: {{ $mk->semester }}  <i class="bi bi-box-arrow-up-right"></i></span>
                    </a> <br>
                </div>

                @foreach($mk->dosen as $i => $dosen)
                    @php
                        $word = array('pertama', 'kedua');
                    @endphp
                    @if($i>1)
                        @break
                    @else
                        <p class="m-0 ">Dosen {{ $word[$i] }}:
                            <a href="/dosen/{{ $dosen->name }}">{{ $dosen->name }}</a>
                        </p>

                    @endif
                @endforeach

                <div class="btn-group mt-5 btn-sm" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-outline-secondary text-dark-grey"><i class="fa-regular fa-file-powerpoint"></i> Materi</button>
                    <button type="button" class="btn btn-outline-secondary text-dark-grey"><i class="bi bi-book"></i> Ebook</button>
                </div>
            </div>
            <div class="modal-footer d-flex p-2 ">
                <span class="text-muted ml-3">semester genap 2021</span>
                <a href="/kurikulum/{{$mk->slug}}/edit" tabindex="0" type="button" class="btn btn-secondary p-2 ms-auto px-3" style="height: 40px">Edit</a>
                <button tabindex="0" type="button" class="btn btn-primary p-2 px-3" data-bs-dismiss="modal" style="height: 40px">Close</button>
            </div>
        </div>
    </div>
</div>