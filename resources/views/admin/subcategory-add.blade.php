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
        <form action="{{ route('subcategory.store') }}" method="post" enctype="multipart/form-data">
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
                                    <input name="titleAM" type="text" id="inputName" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Անվանումը</label>
                                    <input name="titleRU" type="text" id="inputName" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Անվանումը</label>
                                    <input name="titleEN" type="text" id="inputName" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="category_list" style="color: black">Ընտրել Կատեգորիան</label>
                                    <select name="category_id" class="form-control" id="category_list">
                                        <option selected disabled>Ընտրել Կատեգորիան</option>
                                        @isset($categories)
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}">{{$category->titleAM}}</option>
                                            @endforeach
                                        @endisset
                                    </select>
                                </div>

                                {{--                 <div class="form-group">--}}
                                {{--                 <label for="inputProjectLeader">Նկարը</label>--}}
                                {{--                 <input type="file" id="inputProjectLeader" class="form-control">--}}
                                {{--                 </div>--}}
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <a href="#" class="btn btn-secondary">Cancel</a>
                        <input type="submit" value="Create new Porject" class="btn btn-success float-right">
                    </div>
                </div>
            </section>
        </form>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection
