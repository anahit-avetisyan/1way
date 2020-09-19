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
        <form action="{{ route('subcategory.update',$subcategorys->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method ('PUT')
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
                                    <label for="inputName">Անվանում/AM</label>
                                    <input name="titleAM" value="{{$subcategorys->titleAM}}" type="text" id="inputName" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Անվանում/RU</label>
                                    <input name="titleRU" value="{{$subcategorys->titleRU}}" type="text" id="inputName" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Անվանում/EN</label>
                                    <input name="titleEN" value="{{$subcategorys->titleEN}}" type="text" id="inputName" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="category_list"  style="color: black">Ընտրել Կատեգորիան</label>
                                    <select name="category_id"    class="form-control category-selected" id="category_list">
                                        <option selected disabled>Ընտրել Կատեգորիան</option>
                                        @isset($category)
                                            @foreach($category as $categorys)
                                                <option value="{{$categorys->id}}">{{$categorys->titleAM}}</option>
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
                    <div class="col-12 button-contollet-bottom">
                        <a href="{{ URL::previous() }}" class="btn btn-secondary btn-first-back">Վերադառնալ</a>
                        <input type="submit" value="Պահպանել (save)" class="btn btn-success float-right">
                    </div>
                </div>
            </section>
        </form>
        <!-- /.content -->
    </div>

    <script>
        var val="<?php echo $subcategorys->category_id; ?>";
        console.log(val)
        $(".category-selected").val(val)
    </script>
@endsection
