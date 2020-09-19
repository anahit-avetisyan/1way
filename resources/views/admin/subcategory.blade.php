@extends("admin.front")
@section("content")

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Գլխավոր</a></li>
                            <li class="breadcrumb-item active">Ենթատեգորիա</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <a href="{{route("subcategory.create")}}">
                                        <button  class="btn waves-effect waves-light btn-rounded btn-danger" style="text-align: center;border-radius: 15px;outline: none;background-color: #00ad5f;border-color:#00ad5f ">Ավելացնել</button>
                                    </a></h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">

                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th style="width: 1%">
                                            #
                                        </th>
                                        <th style="width: 20%">
                                            Անվանումը Հայերեն
                                        </th>
                                        <th style="width: 30%">
                                            Անվանումը Руский
                                        </th>
                                        <th>
                                            Անվանումը  English
                                        </th>
                                        <th>
                                            Կատեգորիա
                                        </th>
                                        <th style="width: 20%">
                                            #
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @isset($subcategorys)

                                        @foreach($subcategorys as $category)

                                            <tr>
                                                <td>
                                                    {{$category->id}}
                                                </td>
                                                <td>
                                                        {{$category->titleAM}}

                                                </td>
                                                <td>
                                                        {{$category->titleRU}}

                                                </td>
                                                <td>
                                                        {{$category->titleEN}}

                                                </td>
                                                <td>
                                                     {{isset($category->category['titleAM']) ? $category->category['titleAM']: ''}}


                                                </td>

                                                <td class="action-field"   >
                                                    <form  class="delete-button-table"  action="{{route('subcategory.edit',$category ->id)}}" method="get" style="color: black;text-align: center">
                                                        <button class="btn btn-info btn-sm">
                                                            <i class="fas fa-pencil-alt">
                                                            </i>
                                                            Փոփոխել
                                                        </button>
                                                    </form>
                                                    <form action="{{route('subcategory.destroy',$category->id)}}} " method="post">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button class="btn btn-danger btn-sm" href="#">
                                                            <i class="fas fa-trash">
                                                            </i>
                                                            Ջնջել
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endisset
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection
