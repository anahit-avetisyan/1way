@extends("admin.app")
@section("add")
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Կատեգորիա</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Կատեգորիա</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <form action="{{ route('category.store') }}" method="post" enctype="multipart/form-data">
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
                                <label for="inputName">Անվանում</label>
                                <input name="titleAM" type="text" id="inputName" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputName">Անվանում</label>
                                <input name="titleRU" type="text" id="inputName" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputName">Անվանում</label>
                                <input name="titleEN" type="text" id="inputName" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputProjectLeader">Նկար</label>
                                <input name="posters[]" type="file" class="form-control filestyle" data-buttonName="btn-primary"
                                       id="product-posters" multiple >
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 button-contollet-bottom">
                        <a href="{{ URL::previous() }}" class="btn btn-secondary btn-first-back">Վերադառնալ</a>
                        <input type="submit" value="Պահպանել (save)" class="btn btn-success float-right">
                    </div>
                </div>
            </section>
        </form>
        <!-- /.content -->
    </div>
@endsection
