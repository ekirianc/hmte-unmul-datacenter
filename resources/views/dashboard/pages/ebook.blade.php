@extends('dashboard.layouts.main')

@section('page')
    <!--judul-->
    <div class="d-sm-flex p-3 px-4">
        <div class="input-group ms-auto">
            <input type="text" class="form-control" placeholder="Cari Ebook"
                   aria-describedby="basic-addon2">
            <button class="btn btn-primary" type="button" id="button-addon2">Search</button>
        </div>
    </div> <!--judul-->

    <!--ebook content-->
    <div class="collapse show" id="collapseEbook">
        <div class="content-ebook  p-3 px-4 ">
            @include('dashboard.content.content_ebook')
        </div> <!--Content ebook-->
    </div>

    </div><!--ebook section-->
@endsection
