@extends("admin.front")
@section("content")
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Գլխավոր</a></li>
                            <li class="breadcrumb-item active">Գնահատականներ</li>
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
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                            <th style="width: 1%">
                                #
                            </th>
                            <th style="width: 15%">
                                Անվանում/AM
                            </th>
                            <th style="width: 15%">
                                Անվանում/RU
                            </th>
                            <th>
                                Անվանում/EN
                            </th>
                            
                            <th style="width: 20%">
                                Միջին գնահատական
                            </th>

                        </tr>
                        </thead>
                        <tbody>
                        @isset($productRatings)
                            @foreach($productRatings as $key =>$category)
                        <tr>
                            <td>
                                {{$key}}
                            </td>
                            <td>
                                {{$category['product']['titleAM']}}

                            </td>
                            <td>
                                {{$category['product']['titleRU']}}
                            </td>
                            <td>
                                {{$category['product']['titleEN']}}
                            </td>

                            <td>
                                {{$category['avg']}}
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
@endsection
