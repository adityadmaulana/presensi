@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h4 class="box-title">Users</h4>
                    <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target=".bd-example-modal-lg">
                            Tambahkan User
                    </button>
                </div>
                <div class="card-body--">
                    <div class="table-stats order-table ov-h">
                        <table class="table ">
                            <thead>
                                <tr>
                                    <th class="serial">#</th>
                                    <th>ID</th>
                                    <th>Nama</th>
                                    <th>E-mail</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                <tr>
                                    <td class="serial">{{ $loop->iteration }}</td>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div> <!-- /.table-stats -->
                </div>
            </div> <!-- /.card -->
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Project Baru</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                       <div class="col-lg-12">
                             <div class="card">
                                 <div class="card-body card-block">
                                     <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
                                         <div class="row form-group">
                                             <div class="col-12"><label for="text-input" class=" form-control-label">Nama Project</label></div>
                                             <div class="col-12"><input type="text" id="text-input" name="nama"     class="form-control"></div>
                                         </div>
                                         <div class="row form-group">
                                             <div class="col-12"><label for="text-input" class=" form-control-label">Bobot Project</label></div>
                                             <div class="col-12"><input type="number" value="0" min="1" max="100" name="nama" class="form-control"></div>
                                         </div>
                                         <div class="row form-group">
                                             <div class="col-12"><label for="text-input" class=" form-control-label">Nama Project</label></div>
                                             <div class="col-12"><input type="text" id="text-input" name="nama"     class="form-control"></div>
                                         </div>
                                         <div class="form-group row">
                                                <label for="example-date-input" class="col-2 col-form-label">Date</label>
                                                <div class="col-12">
                                                  <input class="form-control" type="date" value="YYYY-MM-DD" id="example-date-input">
                                                </div>
                                              </div>
                                     </form>
                                 </div>
                             </div>
                       </div>
                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-danger btn-sm">
                            <i class="fa fa-ban"></i> Reset
                    </button>
                    <button type="submit" class="btn btn-primary btn-sm">
                            <i class="fa fa-dot-circle-o"></i> Submit
                    </button>
                </div>
            </div>
    </div>
</div>
@endsection