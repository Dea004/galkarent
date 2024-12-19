@extends('layouts.admin-main')

@section('page-admin')
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- Custom styles for this template-->
    <link href="../admin.css/sb-admin-2.min.css" rel="stylesheet">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}

    <div class="container-fluid">

        <!-- Page Heading -->

        @if (session('status'))
            <div class="alert alert-success alert-dismissible fade show animate__animated animate__fadeInRightBig"
                role="alert">
                <strong>{{ session('status') }}</strong> check on the <a href="/admin/motor"> vehicles data page</a>
            </div>
        @endif

        <div class="card shadow mb-4">
            <a href="#collapseCard" class="d-block card-header py-3" data-toggle="collapse" role="button"
                data-expands="true">
                <h6 class="m-0 font-weight-bold primary-text"> ADD Motor - Vehicles</h6>
            </a>


            <div class="collapse show" id="collapseCard">
                <div class="card-body ">

                    <form class="pt-2" method="POST" action="/admin/motor" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-4">
                                <label for="exampleFormControlFile1">Input Image</label>
                                <div class="form-group pt-2">
                                    <img src="../../img/brand/motor.png" class="img-preview img-fluid mb-3 col-sm-5 ">
                                    <input name="image" type="file" class="form-control-file" id="imageId"
                                        onchange="previewImage()">
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <label for="inputAddress" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="inputAddress"
                                            placeholder="Name Of Vehicle..." name="name">
                                    </div>

                                    <div class="col-lg-4">
                                        <label for="inputAddress2" class="form-label">Merk</label>
                                        <input type="text" class="form-control" id="inputAddress2"
                                            placeholder="Merk Of Vehicle..." name="merk">
                                    </div>

                                    <div class="col-lg-4">
                                        <label for="inputEmail4" class="form-label">Year</label>
                                        <input type="text" class="form-control" id="inputEmail4" name="year">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label for="inputEmail4" class="form-label">Engine</label>
                                        <input type="text" class="form-control" id="inputEmail4" name="engine">
                                    </div>

                                    <div class="col-lg-6">
                                        <label class="mr-sm-2" for="text3">Transmition</label>
                                        <select class="custom-select mr-sm-2" id="text3" name="transmition">
                                            <option selected>Autometic</option>
                                            <option>Manual</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label for="inputPassword4" class="form-label">Fuel</label>
                                        <input type="text" class="form-control" id="inputPassword4" name="fuel">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="inputCity" class="form-label">Helm</label>
                                        <input type="text" class="form-control" id="inputCity" name="helm">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label for="inputCity" class="form-label">Coat</label>
                                        <input type="text" class="form-control" id="inputCity" name="coat">
                                    </div>

                                    <div class="col-lg-6">
                                        <label for="inputCity" class="form-label">Stok</label>
                                        <input type="number" class="form-control" id="inputCity" name="stok">
                                    </div>
                                </div>
                                <div class="input-group mt-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Rp</span>
                                    </div>
                                    <input type="text" class="form-control" id="inputAddress"
                                        placeholder="Price of Loan/Rent..." name="price">
                                </div>
                                <div class="pt-3">
                                    <button type="submit" class="btn btn-primary btn-sm">SUBMIT</button>
                                </div>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>

    <script>
        function previewImage() {
            const image = document.querySelector('#imageId');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection