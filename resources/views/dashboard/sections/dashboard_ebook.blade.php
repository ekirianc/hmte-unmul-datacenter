{{---------------------------------
              Ebook Section
---------------------------------}}
<div class="ebook mb-5">
    <!--judul-->
    <div class="header ebook-header d-sm-flex p-3 px-4">
        <button type="button" class="btn bg-transparent mr-3"
                data-bs-toggle="collapse" data-bs-target="#collapseEbook" aria-expanded="false">
            <i class="bi bi-caret-down-fill"></i>
        </button>
        <h3 class="mb-0 mr-3 fw-semibold text-dark-grey">Ebook</h3>
        <div class="input-group ms-auto">
            <input type="text" class="form-control" placeholder="Cari Ebook"
                   aria-describedby="basic-addon2">
            <button class="btn" type="button" id="button-addon2">Search</button>
        </div>
    </div> <!--judul-->

    <!--ebook content-->
    <div class="collapse show" id="collapseEbook">
        <div class="content-ebook dashboard p-3 px-4 ">
            @include('dashboard.content.content_ebook')
        </div>
    </div>

</div><!--ebook section-->