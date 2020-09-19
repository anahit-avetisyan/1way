@extends("admin.app")
@section("add")

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Ավելացնել Կոնտակտ</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Կոնտակտ</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <form action="{{ route('contact.store') }}" method="post" enctype="multipart/form-data">
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
                                    <label for="inputProjectLeader" >Հեռախոս</label>
                                    <input name="phone" type="tel" value="+374" class="form-control filestyle" data-buttonName="btn-primary"
                                           id="product-posters" multiple >
                                </div>
                                <div class="form-group">
                                    <label for="inputProjectLeader" >Հասցե</label>
                                    <input name="address" type="text" class="form-control filestyle" data-buttonName="btn-primary"
                                           id="product-posters" multiple >
                                </div><div class="form-group">
                                    <label for="inputProjectLeader" >Քաղաք</label>
                                    <input name="city" type="text" class="form-control filestyle" data-buttonName="btn-primary"
                                           id="product-posters" multiple >
                                </div>
                                <div class="form-group">
                                    <label for="inputProjectLeader" >Էլ․հասցե (email)</label>
                                    <input name="email" type="email" class="form-control filestyle" data-buttonName="btn-primary"
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
            </form>
        </section>
        <!-- /.content -->
    </div>
@endsection
