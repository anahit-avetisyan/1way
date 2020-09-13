@extends("admin.front")
@section("content")

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Projects</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Projects</li>
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
                                    <a href="{{route("logo.create")}}">
                                        <button  class="btn waves-effect waves-light btn-rounded btn-danger" style="text-align: center;border-radius: 15px;outline: none;background-color: #00ad5f;border-color:#00ad5f ">Avelacnel</button>
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
                            <th style="width: 15%">
                                FbIcon
                            </th>
                            <th style="width: 15%">
                                FbLink
                            </th>
                            <th style="width: 20%">
                                InstagramLink
                            </th>
                            <th style="width: 20%">
                                InstagramIcon
                            </th>
                            <th>#</th>
                        </tr>
                        </thead>
                        <tbody>
                        @isset($footer)
                            @foreach($footer as $footers)
                        <tr>
                            <td style="width: 15%">{{$footers->id}}</td>
                            <td style="width: 15%">{{$footers->fbIcon}}</td>
                            <td style="width: 15%">{{mb_substr($footers->fbLink, 0, 10)}}</td>
                            <td style="width: 15%">{{$footers->instagramIcon}}</td>
                            <td>{{mb_substr($footers->instagramLink, 0, 10)}}</td>
                            <td>
                                <form action="{{route('footer.destroy',$footers->id)}}" method="post" style="color: black">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn waves-effect waves-light btn-rounded btn-danger" style="text-align: center;border-radius: 15px;outline: none">Ջնջել</button>
                                </form>
                            </td>
                        </tr>
                            @endforeach
                        @endisset
                        </tbody>
                    </table>
                </div>
              <div class="card-body p-1">
                        <table class="table table-striped projects">
                            <thead>
                            <tr>
                                <th style="width: 1%">#</th>
                        <th style="width: 15%">
                            ViberIcon
                        </th>
                        <th style="width: 15%">
                        ViberLink
                    </th>
                    <th style="width: 15%">
                        WhatAppLink
                    </th>
                    <th style="width: 15%">
                        WhatsAppIcon
                    </th>
                    <th style="width: 15%">
                        Copyright
                    </th>
                    <th style="width: 15%">
                        LinkName
                    </th>
                    <th style="width: 15%">
                        Link
                    </th>
                                <th>#</th>
                            </tr>

                            </thead>
                            <tbody>
                            @isset($footer)
                                @foreach($footer as $footers)
                            <tr>
                                <td style="width: 15%">{{$footers->id}}</td>
                                <td style="width: 15%">{{$footers->ViberIcon}}</td>
                                <td style="width: 15%">{{mb_substr($footers->ViberLink, 0, 10)}}</td>
                                <td style="width: 15%">{{$footers->WhatsAppIcon}}</td>
                                <td style="width: 15%">{{mb_substr($footers->WhatsAppLink, 0, 10)}}</td>
                                <td style="width: 15%">{{mb_substr($footers->copyright, 0, 10)}}</td>
                                <td style="width: 15%">{{$footers->linkName}}</td>
                                <td style="width: 15%">{{mb_substr($footers->link, 0, 10)}}</td>
                                <td>
                                    <form action="{{route('footer.destroy',$footers->id)}}" method="post" style="color: black">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn waves-effect waves-light btn-rounded btn-danger" style="text-align: center;border-radius: 15px;outline: none">Ջնջել</button>
                                    </form>
                                </td>
                                @endforeach
                                @endisset
                            </tr>
                            </tbody>
                        </table>
              </div>
                <div class="card-body p-2">
                    <table class="table table-striped projects">
                        <thead>
                        <tr>
                            <th style="width: 1%">
                                #
                            </th>
                            <th style="width: 15%">
                                ContactNameAM
                            </th>
                            <th style="width: 15%">
                                ContactNameRU
                            </th>
                            <th style="width: 20%">
                                ContactNameEN
                            </th>
                            <th style="width: 20%">
                                FooterTextAM
                            </th>
                            <th style="width: 20%">
                                FooterTextRU
                            </th>
                            <th style="width: 20%">
                                FooterTextEN
                            </th>
                            <th>#</th>
                        </tr>
                        </thead>
                        <tbody>
                        @isset($footer)
                            @foreach($footer as $footers)
                                <tr>
                                    <td style="width: 15%">{{$footers->id}}</td>
                                    <td>{{mb_substr($footers->footerTextAM, 0, 10)}}</td>
                                    <td>{{mb_substr($footers->footerTextRU, 0, 10)}}</td>
                                    <td>{{mb_substr($footers->footerTextEN, 0, 10)}}</td>
                                    <td>{{mb_substr($footers->contactNameAM, 0, 10)}}</td>
                                    <td>{{mb_substr($footers->contactNameRU, 0, 10)}}</td>
                                    <td>{{mb_substr($footers->contactNameEN, 0, 10)}}</td>
                                    <td>
                                        <form action="{{route('footer.destroy',$footers->id)}}" method="post" style="color: black">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn waves-effect waves-light btn-rounded btn-danger" style="text-align: center;border-radius: 15px;outline: none">Ջնջել</button>
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
@endsection
