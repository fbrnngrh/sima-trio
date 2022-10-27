<div class="wrapper wrapper-content m-t-xl wrapper wrapper-content animated fadeInRight">


    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="col-lg-12" id="data_input">
                    <div class="col-lg-11">
                        <h3><i class="fa fa-info-circle"></i> List Data Office</h3>
            </div>
                <div class="panel-body">
                    <form id="FormLap" action="<?php echo base_url() ?>laporan_auditor/cetakpart" method="post">
                        <div class="row">
                            <div class="col-sm-9">
                                <div class="col-sm-5 form-group">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Cabang</label>
                                        <div class="col-sm-9"><select name="id_cabang" class="form-control" id="OptCabang" required></select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-5 form-group">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">List Audit</label>
                                        <div class="col-sm-9">
                                            <select name="idjadwal_audit" class="form-control" id="OptJadwalAudit" required></select>
                                        </div>
                                    </div>
                                </div>
                                <span id="change" class="hidden">
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Auditor</label>
                                            <div class="col-sm-9"><input type="text" id="auditor" class="form-control" name="auditor" required></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Tempat</label>
                                            <div class="col-sm-9"><input type="text" id="tempat" class="form-control" name="tempat" required></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-danger btn-block" id="type" name="type" value="pdf">OK</button>
                                        </div>
                                    </div>
                                    <div class="col-sm-5 ">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Counter</label>
                                            <div class="col-sm-9"><input type="text" id="counter" class="form-control" name="counter" required></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Kepala Cabang</label>
                                            <div class="col-sm-9"><input type="text" id="kacab" class="form-control" name="kacab" required></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <a class="btn btn-warning btn-block" id="cancel">Cancel</a>
                                        </div>
                                    </div>
                                </span>
                            </div>
                            <div class="col-sm-3">
                                <a id="preview" class="btn btn-primary">Preview</a>
                                <a id="open" class="btn btn-danger xshow"><i class="fa fa-fw fa-file-pdf-o"></i> Download Pdf</a>

                            </div>
                    </div>

                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover dataTables-example">
                                                        <tbody id="lap_inv">
                            <thead>
                                <tr>
                                    <th class="text-center" width="3%">NO</th>
                                    <th class="text-center" width="8%">AKSI</th>
                                    <th class="text-center">ID INVENTORY OFFICE</th>
                                    <th class="text-center">JENIS INVENTORY</th>
                                    <th class="text-center">SUB INVENTORY</th>
                                    <th class="text-center">NILAI AWAL</th>
                                    <th class="text-center">TANGGAL BARANG DITERIMA</th>
                                    <th class="text-center">VENDOR</th>
                                    <th class="text-center">PEMBAYARAN</th>
                                    <th class="text-center">LOKASI</th>
                                    <th class="text-center">PENGGUNA</th>
                                    <th class="text-center">KETERANGAN</th>

                                </tr>
                            </thead>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th class="text-center">NO</th>
                                    <th class="text-center">AKSI</th>
                                    <th class="text-center">ID INVENTORY OFFICE</th>
                                    <th class="text-center">JENIS INVENTORY</th>
                                    <th class="text-center">SUB INVENTORY</th>
                                    <th class="text-center">NILAI AWAL</th>
                                    <th class="text-center">TANGGAL BARANG DITERIMA</th>
                                    <th class="text-center">VENDOR</th>
                                    <th class="text-center">PEMBAYARAN</th>
                                    <th class="text-center">LOKASI</th>
                                    <th class="text-center">PENGGUNA</th>
                                    <th class="text-center">KETERANGAN</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div id="pagination" class="text-right"></div>
                </div>
            </div>
        </div>
    </div>

</div>