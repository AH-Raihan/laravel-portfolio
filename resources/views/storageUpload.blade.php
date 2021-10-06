@extends('layout.app')
@section('content')

    <div class="container">
        <div class="row d-flex justify-content-center mx-auto my-5">
            <div class="col-md-6">
                <div class="card text-center">
                    <div class="card-header">
                        <h6>Laravel File Upload</h6></div>
                    <div class="card-body p-3">
                        <input class="form-control my-5" type="file" id="fileId">
                        <button onclick="onUpload()" id="uploadBtnId" class="btn btn-primary btn-block">Upload</button>
                        <h3 id="uploadPercentage"></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <div class="container">
        <div class="fileList row">
            <div class="col-md-10">
                <table class="table">
                    <thead>
                    <tr>
                        <td>id</td>
                        <td>Download</td>
                        <td>Delete</td>
                    </tr>
                    </thead>
                    <tbody class="tableData">

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="{{asset('js/axios.min.js')}}"></script>
    <script type="text/javascript">
        function onUpload() {
            let myfile = document.getElementById('fileId').files[0];
            let name = myfile.name;
            let size = myfile.size;
            let format = name.split('.').pop();

            let FileData = new FormData();
            FileData.append('FileKey', myfile);
            let config = {
                headers: {'content-type': 'multipart/form-data'},
                onUploadProgress: function (progressEvent) {
                    let uploadPercentage = Math.round((progressEvent.loaded * 100) / progressEvent.total);
                    let uploaded = (progressEvent.loaded) / (1024 * 1024);
                    let total = (progressEvent.total) / (1024 * 1024);
                    let due = total - uploaded;
                    $('#uploadPercentage').html(uploadPercentage + "%<br> uploaded: " + uploaded.toFixed(2) + "MB <br>Due:" + due.toFixed(2) + "<br> Total: " + total.toFixed(2));
                }
            }

            let url = '/fileUp';

            axios.post(url, FileData, config)
                .then(function (response) {
                    if (response.status === 200) {
                        $('#uploadPercentage').html('Upload Success');

                        setTimeout(function () {
                            $('#uploadPercentage').html(' ');
                        }, 2000);
                    }
                })
                .catch(function (error) {
                    $('#uploadPercentage').html('Upload Fail');

                    setTimeout(function () {
                        $('#uploadPercentage').html(' ');
                    }, 2000);
                })


        }

        // ############################################################
        getFileList();

        function getFileList() {
            axios.get('/FileList').then(function (response) {
                var JSONDATA = response.data;

                $.each(JSONDATA, function (i) {
                    $('<tr>').html(`
                            <td> ${JSONDATA[i].id} </td>
                            <td>
                                <a href='/download/${JSONDATA[i].path} ' class='btn btn-primary'>Download</a>
                            </td>
                             <td> <a href='/delete/${JSONDATA[i].path} ' class='btn btn-primary'>Delete</a>`
                    ).appendTo('.tableData');
                })
            })
                .catch(function (error) {

                })

        }


    </script>












@endsection
