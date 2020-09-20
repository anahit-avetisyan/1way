@extends("admin.app")
@section("add")
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Project Add</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Project Add</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <form  action="{{ route('brand.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">General</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                        <i class="fas fa-minus"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="inputName">Անվանումը</label>
                                    <input name="title" type="text" id="inputName" class="form-control titleAM">
                                    <span class="AMerror" style="color: red"></span>
                                </div>
                                <div class="form-group">
                                    <label for="inputProjectLeader">Նկարը</label>
                                    <input name="posters[]" type="file" class="form-control filestyle" data-buttonName="btn-primary"
                                           id="product-posters" multiple>
                                </div>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <div class="form-group">
                                    <label for="inputStatus">User</label>
                                    <select name="user_id" class="form-control" id="user_id">
                                        <option selected disabled>USER</option>
                                        @isset($user)
                                            @foreach($user as $users)
                                                <option value="{{$users->id}}">{{$users->email}}</option>
                                            @endforeach
                                        @endisset
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
    <div class="row">
        <div class="col-12 button-contollet-bottom">
            <a href="{{ URL::previous() }}" class="btn btn-secondary btn-first-back">Վերադառնալ</a>
            <button   value="Պահպանել (save)" class="btn btn-success float-right">Ավելացնել</button>
        </div>
    </div>
    </section>
    </form>
    <!-- /.content -->
</div>

<!-- /.content-wrapper -->
    @endsection
