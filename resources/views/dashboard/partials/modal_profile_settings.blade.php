<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-fullscreen-sm-down" style="max-width: 650px">
        <div class="modal-content">
            <div class="modal-header">
                <span class="fa-sharp fa-solid fa-gear profile-setting-icon ps-3 mr-3"></span>
                <h1 class="modal-title fs-5 text-center" id="exampleModalLabel">Account Settings</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container-fluid" >
                    <div class="rounded rounded-4 bg-grey-2 overflow-hidden">
                        <div class="d-flex justify-content-center pt-4 d-block d-sm-none position-relative">
                            <img src="/images/edna.jpg" alt="profile picture"
                                 class="rounded-circle border border-secondary border-3 img-fluid"
                                 style="max-width: 200px">
                        </div>
                        <div class="col-12 profile-info-basic d-flex flex-row px-4 py-4">
                            <img src="/images/edna.jpg" alt="profile picture"
                                 class="mr-3 rounded-circle border border-secondary border-3 d-none d-sm-block"
                                 width="100px" height="100px" >
                            <div class="p-3">
                                <h4 class="profile-name fw-bold m-0"> {{ auth()->user()->name }} </h4>
                                <span class="profile-id"> {{ auth()->user()->nim }} </span>
                                @if(auth()->user()->is_admin === 1)
                                    <span class="badge bg-secondary ms-2">Admin</span>
                                @endif
                            </div>

                            <div class="ms-auto position-relative d-none d-sm-block" style="width: 140px">
                                <button type="button"
                                        class="btn btn-secondary position-absolute top-50 start-50 translate-middle"
                                        style="width: 140px">
                                    <i class="fa-solid fa-pen-to-square"></i> Edit Profil

                                </button>
                            </div>
                        </div>
                        <div class="profile-info-detail d-flex bg-grey-1 opacity-75">
                            <div class="px-4 py-2 col-6 border-top border-end border-light border-2">
                                <span class="text-muted">Email</span>
                                <p class="m-0 fw-bold">
                                    @if(auth()->user()->email === "" )
                                        <a href="#"><i class="fa-solid fa-plus"></i> Tambah</a>
                                    @else
                                        {{auth()->user()->email}}
                                    @endif
                                </p>
                            </div>
                            <div class="col-6 px-4 py-2 border-top border-light border-2">
                                <span class="text-muted">Kontak</span>
                                <p class="m-0 fw-bold">
                                    @if(auth()->user()->kontak === "" )
                                        <a href="#"><i class="fa-solid fa-plus"></i> Tambah</a>
                                    @else
                                        {{auth()->user()->kontak}}
                                    @endif
                                </p>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div id="app">
                        <div class="semester-default-select mt-4 px-4 py-3 "
                             :class="{ 'border':confirm, 'border-danger':confirm, 'rounded-4':confirm}">
                            <h5 class="mb-2 mr-3 fw-bold fs-6">Semester default</h5>
                            <div class="btn-group dropend">
                                <button class="btn btn-primary dropdown dropdown-toggle ms-auto mb-2" type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                    Semester @{{semester}}
                                </button>
                                <ul class="dropdown-menu" id="app">
                                    <li><a class="dropdown-item" href="#" @click="confirm = 1, hide = 0, semester = 1">Semester 1</a>
                                    <li><a class="dropdown-item" href="#" @click="confirm = 1, hide = 0, semester = 2">Semester 2</a>
                                    <li><a class="dropdown-item" href="#" @click="confirm = 1, hide = 0, semester = 3">Semester 3</a>
                                    <li><a class="dropdown-item" href="#" @click="confirm = 1, hide = 0, semester = 4">Semester 4</a>
                                    <li><a class="dropdown-item" href="#" @click="confirm = 1, hide = 0, semester = 5">Semester 5</a>
                                    <li><a class="dropdown-item" href="#" @click="confirm = 1, hide = 0, semester = 6">Semester 6</a>
                                    <li><a class="dropdown-item" href="#" @click="confirm = 1, hide = 0, semester = 7">Semester 7</a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#" @click="confirm = 1, hide = 0">Custom</a></li>
                                </ul>
                            </div>
                            {{--d-none--}}
                            <div class="pt-2 border-top d-flex  " :class="{ 'd-none': hide }">
                                <button @click="confirm = 0, hide = 1" type="button" class="btn btn-secondary ms-auto mr-3">Cancel</button>
                                <a :href="'?semester='+ semester" @click="confirm = 0, hide = 1" class="btn btn-primary">Save</a>
                            </div>
                        </div>
                    </div>

                    <div class="mt-1 px-4 mb-4 d-block d-sm-none">
                        <h5 class="mb-2 mr-3 fw-bold fs-6">Edit Profil</h5>
                        <button type="button" class="btn btn-primary">
                            <i class="fa-solid fa-pen-to-square"></i> Edit Profil
                        </button>
                    </div>

                    <div class="mt-1 px-4">
                        <h5 class="mb-2 mr-3 fw-bold fs-6">Ubah Password</h5>
                        <button type="button" class="btn btn-primary">Ubah</button>
                    </div>

                    <div class="mt-4 mb-5 px-4">
                        <h5 class="my-0 mr-3 fw-bold fs-6">Logout</h5>
                        <p class="m-0 text-muted mb-2">Logout dari HMTE Data Center</p>
                        <form action="/logout" method="post">
                            @csrf
                            <button type="submit" class="btn btn-danger">
                                <i class="fa-solid fa-arrow-right-from-bracket"></i> Logout
                            </button>
                        </form>

                    </div>


                </div>
            </div>
        </div>
    </div>
</div>