@extends("admin.app")
@section("add")

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Ավելացնել EJ</h1>
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
        <section class="content">
            <form action="{{ route('indexText.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                {{----}}
                                {{----}}
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                        <i class="fas fa-minus"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="inputProjectLeader" >Բաժիների ՎերնագիրAM</label>
                                    <input name="textAM" type="text" class="form-control filestyle" data-buttonName="btn-primary"
                                           id="product-posters" multiple >
                                </div>
                                <div class="form-group">
                                    <label for="inputProjectLeader" >Բաժիների ՎերնագիրRU</label>
                                    <input name="textRU" type="text" class="form-control filestyle" data-buttonName="btn-primary"
                                           id="product-posters" multiple >
                                </div>
                                <div class="form-group">
                                    <label for="inputProjectLeader" >Բաժիների ՎերնագիրEN</label>
                                    <input name="textEN" type="text" class="form-control filestyle" data-buttonName="btn-primary"
                                           id="product-posters" multiple >
                                </div>
                                <div class="form-group">
                                    <label for="inputProjectLeader" >Բաժիների ՎերնագիրAM</label>
                                    <input name="text1AM" type="text" class="form-control filestyle" data-buttonName="btn-primary"
                                           id="product-posters" multiple >
                                </div>
                                <div class="form-group">
                                    <label for="inputProjectLeader" >Բաժիների ՎերնագիրRU</label>
                                    <input name="text2RU" type="text" class="form-control filestyle" data-buttonName="btn-primary"
                                           id="product-posters" multiple >
                                </div>
                                <div class="form-group">
                                    <label for="inputProjectLeader" >Բաժիների ՎերնագիրEN</label>
                                    <input name="text3EN" type="text" class="form-control filestyle" data-buttonName="btn-primary"
                                           id="product-posters" multiple >
                                </div>



                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        {{--                    <button>dsfdfsd</button>--}}
                        <input type="submit" value="Create new Porject" class="btn btn-success float-right">
                    </div>
                </div>
            </form>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
