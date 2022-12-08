@extends('dashboard.layouts.main')

@section('page')
    <div class="d-flex align-items-center justify-content-center flex-column">
        <div class="card col-12 col-md-6">
            <div class="card-header">
                <h3 class="text-center">Edit Mata Kuliah</h3>
            </div>
            <div class="card-body ">
                <form method="post" action="/kurikulum/{{$matkul->slug}}" >
                    @method('PUT')
                    @csrf
                    {{--Nama Matkul--}}
                    <div class="mb-3 form-floating">
                        <input name="name" type="text" class="form-control"
                               id="floatinMatkul" placeholder="matkul"
                               value="{{$matkul->name}}" required autofocus>
                        <label for="floatinMatkul">Nama Matkul</label>
                    </div>
                    {{--Slug--}}
                    <div class="mb-3">
                        <input value="{{$matkul->slug}}" type="text" placeholder="slug" class="form-control" name="slug" id="slug" readonly>
                    </div>

                    <div class="row py-3 ">
                        {{--SKS--}}
                        <div class="col-6">
                            <span class="mr-3">SKS </span>
                            {{--2--}}
                            <input type="radio" class="btn-check" name="sks" id="sks2" autocomplete="off"
                                    value="2" {{$matkul->sks == 2 ? 'checked' : ''}}>
                            <label class="btn btn-outline-primary" for="sks2">2</label>
                            {{--3--}}
                            <input type="radio" class="btn-check" name="sks" id="sks3" autocomplete="off"
                                   value="3" {{$matkul->sks == 3 ? 'checked' : ''}}>
                            <label class="btn btn-outline-primary" for="sks3">3</label>
                        </div>
                        {{--Semester--}}
                        <div class="col-6 ">
                            <div class="input-group">
                                <span class="input-group-text" id="inputGroup-sizing-default">Semester</span>
                                <select class="form-select " name="semester">
                                    <option value="1" {{$matkul->semester == 1 ? 'selected' : ''}}>1</option>
                                    <option value="2" {{$matkul->semester == 2 ? 'selected' : ''}}>2</option>
                                    <option value="3" {{$matkul->semester == 3 ? 'selected' : ''}}>3</option>
                                    <option value="4" {{$matkul->semester == 4 ? 'selected' : ''}}>4</option>
                                    <option value="5" {{$matkul->semester == 5 ? 'selected' : ''}}>5</option>
                                    <option value="6" {{$matkul->semester == 6 ? 'selected' : ''}}>6</option>
                                    <option value="7" {{$matkul->semester == 7 ? 'selected' : ''}}>7</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <h4>Jadwal</h4>

                    <div class="row mb-3">
                        <div class="mb-3 col-6">
                            {{--Ruang--}}
                            <div class="input-group ">
                                <span class="input-group-text">Ruang</span>
                                <input value="{{$matkul->ruang}}" type="text" class="form-control" id="ruang" name="ruang" required>
                            </div>
                        </div>
                        <div class="col-6">
                            {{--Hari--}}
                            <div class="input-group ">
                                <span class="input-group-text">Hari</span>
                                <select class="form-select" name="day">
                                    <option value="1" {{$matkul->day == 1 ? 'selected' : ''}}>Senin</option>
                                    <option value="2" {{$matkul->day == 2 ? 'selected' : ''}}>Selasa</option>
                                    <option value="3" {{$matkul->day == 3 ? 'selected' : ''}}>Rabu</option>
                                    <option value="4" {{$matkul->day == 4 ? 'selected' : ''}}>Kamis</option>
                                    <option value="5" {{$matkul->day == 5 ? 'selected' : ''}}>Jumat</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            {{--Start time--}}
                            <div class="input-group ">
                                <span class="input-group-text">Mulai</span>
                                <select class="form-select" name="waktu_mulai">
                                    <option value="073000" {{$matkul->waktu_mulai == "07:30:00" ? 'selected' : ''}}>07:30</option>
                                    <option value="080000" {{$matkul->waktu_mulai == "08:00:00" ? 'selected' : ''}}>08:00</option>
                                    <option value="092000" {{$matkul->waktu_mulai == "09:20:00" ? 'selected' : ''}}>09:20</option>
                                    <option value="111000" {{$matkul->waktu_mulai == "11:10:00" ? 'selected' : ''}}>11:10</option>
                                    <option value="135000" {{$matkul->waktu_mulai == "13:50:00" ? 'selected' : ''}}>13:50</option>
                                    <option value="144000" {{$matkul->waktu_mulai == "14:40:00" ? 'selected' : ''}}>14:40</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            {{--End time--}}
                            <div class="input-group ">
                                <span class="input-group-text">Selesai</span>
                                <select class="form-select" name="waktu_selesai">
                                    <option value="110000" {{$matkul->waktu_selesai == "11:00:00" ? 'selected' : ''}}>11:00</option>
                                    <option value="091000" {{$matkul->waktu_selesai == "09:10:00" ? 'selected' : ''}}>09:10</option>
                                    <option value="135000" {{$matkul->waktu_selesai == "13:50:00" ? 'selected' : ''}}>13:50</option>
                                    <option value="122000" {{$matkul->waktu_selesai == "12:20:00" ? 'selected' : ''}}>12:20</option>
                                    <option value="153000" {{$matkul->waktu_selesai == "15:30:00" ? 'selected' : ''}}>15:30</option>
                                    <option value="161000" {{$matkul->waktu_selesai == "16:10:00" ? 'selected' : ''}}>16:10</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end mt-5">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        const name = document.querySelector('#floatinMatkul');
        const slug = document.querySelector('#slug');

        name.addEventListener('change', function(){
           fetch('/kurikulum/checkSlug?name=' + name.value)
               .then( response => response.json())
               .then( data => slug.value = data.slug)
        });
    </script>
@endsection