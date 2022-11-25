<!-- Modal -->
<div class="modal fade" id="detail-matkul-{{$matkul->slug}}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Detail</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                {{--$matkul ngambil dari kontroler [MatkulController] --}}
                <h4>{{ $matkul->name }}</h4>
                <h5>SKS: {{ $matkul->sks }}</h5>
                <h5>Semester: <a href="/kurikulum?semester={{ $matkul->semester->semester }}">{{ $matkul->semester->semester }}</a></h5>

                @foreach($matkul->dosen as $i => $dosen)
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
                <div class="mt-3">
                    <span>Lihat: </span>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-primary">Materi</button>
                        <button type="button" class="btn btn-primary">Ebook</button>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary p-2" data-bs-dismiss="modal" style="height: 40px">Close</button>
            </div>
        </div>
    </div>
</div>