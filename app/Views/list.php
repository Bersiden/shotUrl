<!-- public\assest\plugin\qrcode.min.js -->


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.qrcode/1.0/jquery.qrcode.min.js" type="text/javascript">
</script>


<div class="container" style="padding-top: 60px;">

    <!-- Content here -->
    <div class="row">
        <div class="col-12">
            <div class="btn btn-lg btn-success float-right" data-toggle="modal" data-target="#addUrlModal">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus"
                    viewBox="0 0 16 16">
                    <path
                        d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                </svg>
            </div>
        </div>

    </div>
    <div class="row">
        <h1> Shot Url List</h1>
    </div>
    <div class="row ">
        <div class="justify-content-center w-100">
            <table id="table_id" class="table table-striped table-bordered" style="width:100%;margin:auto;">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Url Name</th>
                        <th>Url Real</th>
                        <th>View</th>
                        <th width="100px">Option</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
              foreach ($data as $key => $val) {
                  ?>
                    <tr>
                        <td><?= $val["id"];?></td>
                        <td><?= $val["shotUrl"];?></td>
                        <td><?= $val["urlName"];?></td>
                        <td><?= $val["view"];?></td>

                        <td>
                            <div class=" d-flex justify-content-center">
                                <div class="btn btn-sm btn-success btn-qrcode" data-url="<?= $val["shotUrl"];?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-upc-scan" viewBox="0 0 16 16">
                                        <path
                                            d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5zM3 4.5a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-7zm3 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7z" />
                                    </svg>
                                </div>
                                <!-- <div class="btn btn-sm btn-primary btn-edit" data-id="<?= $val["id"];?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-wrench" viewBox="0 0 16 16">
                                    <path
                                        d="M.102 2.223A3.004 3.004 0 0 0 3.78 5.897l6.341 6.252A3.003 3.003 0 0 0 13 16a3 3 0 1 0-.851-5.878L5.897 3.781A3.004 3.004 0 0 0 2.223.1l2.141 2.142L4 4l-1.757.364L.102 2.223zm13.37 9.019.528.026.287.445.445.287.026.529L15 13l-.242.471-.026.529-.445.287-.287.445-.529.026L13 15l-.471-.242-.529-.026-.287-.445-.445-.287-.026-.529L11 13l.242-.471.026-.529.445-.287.287-.445.529-.026L13 11l.471.242z" />
                                </svg>
                            </div> -->
                                <div class="btn btn-sm btn-danger btn-delete" data-id="<?= $val["id"];?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-trash" viewBox="0 0 16 16">
                                        <path
                                            d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                        <path fill-rule="evenodd"
                                            d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                    </svg>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <?php
              }
              ?>
                </tbody>
            </table>
        </div>

    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="qrcodeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Qrcode</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="row">
                    <div style="width:250px;margin:auto;">
                        <div id="qrcode"></div>
                    </div>
                </div>
                <div class="form-group row mt-4">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Shot Url</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="shotUrltxtS" placeholder="Url" readonly>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="addUrlModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Create Shot Url</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Url</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="Urltxt" placeholder="Url">
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary btn-create">Save changes</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="showAfterModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Qrcode</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div style="width:250px;margin:auto;">
                        <div id="qrcodeShow"></div>
                    </div>
                </div>
                <div class="form-group row mt-4">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Shot Url</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="shotUrltxt" placeholder="Url" readonly>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<script>
    $('#showAfterModal').on('hidden.bs.modal', function () {
        window.location.reload();
    })
    $(".btn-create").click(function () {
        const url = $("#Urltxt").val();
        $("#Urltxt").val("");
        let shotUrl = url;


        $.ajax({
            type: "post",
            url: "<?= base_url()?>/UrlSetting/addUrl",
            data: {
                "url": url
            },
            dataType: "json",
            success: function (res) {

                $('#qrcodeShow').empty();
                $('#qrcodeShow').qrcode({
                    width: 250,
                    height: 250,
                    text: res.shotUrl
                });
                $("#shotUrltxt").val(res.shotUrl);
                $("#addUrlModal").modal("hide");
                $("#showAfterModal").modal();
            }
        });

    });
    $(".btn-qrcode").click(function () {
        const url = $(this).data("url");
        $("#shotUrltxtS").val(url);
        $('#qrcode').empty();
        $('#qrcode').qrcode({
            width: 250,
            height: 250,
            text: url
        });
        $("#qrcodeModal").modal();
    });
    $(".btn-delete").click(function () {
        const id = $(this).data('id');
        $.ajax({
            type: "post",
            url: "<?= base_url()?>/UrlSetting/delete ",
            data: {
                id: id
            },
            dataType: "json",
            success: function (response) {
                window.location.reload();
            }
        });
    });
    $(".btn-edit").click(function () {
        const id = $(this).data('id');
        $.ajax({
            type: "get",
            url: "<?= base_url()?>/UrlSetting/getDetail/" + id,

            dataType: "json",
            success: function (response) {

            }
        });
    });
    $(document).ready(function () {


        $('#table_id').DataTable({
            "autoWidth": false
        });
    });
</script>