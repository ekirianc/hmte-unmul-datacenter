@extends('dashboard.layouts.main')

@section('page')
    <div class="d-flex align-items-center justify-content-center flex-column">
        <div class="card col-12 col-md-6">
            <div class="card-header">
                <h3 class="text-center">Tambah Mata Kuliah</h3>
            </div>
            <div class="card-body ">
                <form method="post" action="/kurikulum" >
                    @csrf
                    {{--Nama Matkul--}}
                    <div class="mb-3 form-floating">
                        <input name="name" type="text" class="form-control"
                               id="floatinMatkul" placeholder="matkul" required autofocus>
                        <label for="floatinMatkul">Nama Matkul</label>
                    </div>
                    {{--Slug--}}
                    <div class="mb-3">
                        <input type="text" placeholder="slug" class="form-control" name="slug" id="slug" readonly>
                    </div>

                    <div class="row py-3 ">
                        {{--SKS--}}
                        <div class="col-6">
                            <span class="mr-3">SKS </span>
                            {{--2--}}
                            <input type="radio" class="btn-check" name="sks" id="sks2" value="2" autocomplete="off" checked>
                            <label class="btn btn-outline-primary" for="sks2">2</label>
                            {{--3--}}
                            <input type="radio" class="btn-check" name="sks" id="sks3" value="3" autocomplete="off">
                            <label class="btn btn-outline-primary" for="sks3">3</label>
                        </div>
                        {{--Semester--}}
                        <div class="col-6 ">
                            <div class="input-group">
                                <span class="input-group-text" id="inputGroup-sizing-default">Semester</span>
                                <select class="form-select " name="semester">
                                    <option selected value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="3">4</option>
                                    <option value="3">5</option>
                                    <option value="3">6</option>
                                    <option value="3">7</option>
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
                                <input type="text" class="form-control" id="ruang" name="ruang" required>
                            </div>
                        </div>
                        <div class="col-6">
                            {{--Hari--}}
                            <div class="input-group ">
                                <span class="input-group-text">Hari</span>
                                <select class="form-select" name="day">
                                    <option selected value="1">Senin</option>
                                    <option value="2">Selasa</option>
                                    <option value="3">Rabu</option>
                                    <option value="4">Kamis</option>
                                    <option value="5">Jumat</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            {{--Start time--}}
                            <div class="input-group ">
                                <span class="input-group-text">Mulai</span>
                                <select class="form-select" name="waktu_mulai">
                                    <option selected value="073000">07:30</option>
                                    <option value="080000">08:00</option>
                                    <option value="092000">09:20</option>
                                    <option value="111000">11:10</option>
                                    <option value="135000">13:50</option>
                                    <option value="144000">14:40</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            {{--End time--}}
                            <div class="input-group ">
                                <span class="input-group-text">Selesai</span>
                                <select class="form-select" name="waktu_selesai">
                                    <option selected value="091000">09:10</option>
                                    <option value="110000">11:00</option>
                                    <option value="135000">13:50</option>
                                    <option value="122000">12:20</option>
                                    <option value="153000">15:30</option>
                                    <option value="161000">16:10</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Tambahkan</button>
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