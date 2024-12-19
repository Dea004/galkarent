@extends('layouts.admin-main')

@section('page-admin')

<link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
<!-- Custom styles for this template-->
<link href="../admin.css/sb-admin-2.min.css" rel="stylesheet">
{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}

<div class="container-fluid"> 

    <h1 class="h3 mb-4 text-gray-800">Data Rented</h1>
        <!-- <h3 class="h3 mb-4 text-gray-800 "><span><?php ?></span></h3> -->
        <div class="row">
            <div class="col-12">
                <form action="/admin/motor">
                    <div class="input-group mb-3 mt-3">
                        <input type="text" class="form-control" placeholder="Search.." name="search"
                            value="{{ request('search') }}">
                        <div class="input-group-append">
                            <button class="btn btn-outline-primary" type="submit">Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <table class="table table-hover">
            <thead class="bg-dark text-light text-center">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Tenant</th>
                    <th scope="col">Number Phone</th>
                    <th scope="col">Name Motorcycle</th>
                    <th scope="col">Delivery Date</th>
                    <th scope="col">Return Date</th>
                    <th scope="col">Rent at</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody class="text-center">
                <?php $i = 1; ?>
                @foreach ($loan as $l)
                    <tr>
                        <th scope="row"><?php echo $i; ?></th>
                        <td>{{ $l->user->name }}</td>
                        <td>{{ $l->user->telpon }}</td>
                        <td>{{ $l->motor->name }}</td>
                        <td>{{ $l->delivery_date }}</td>
                        <td>{{ $l->return_date }}</td>
                        <td>{{ $l->created_at }}</td>
                        <td class="col-2">
                            {{-- <a href="" class=" btn btn-primary btn-sm"><i class="fas fa-pencil-alt"></i></a> --}}
                            {{-- <a href="" class=" btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a> |  --}}
                            <form action="/admin/motors/rented/" method="POST" class="d-inline">
                                @method('delete')
                                @csrf
                                <input type="hidden" value="{{ $l->id }}" name="id">
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are You Sure Wanna Delete This One ?')" >
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </form>
                            <a href="" class=" btn btn-secondary btn-sm" title="view detail" data-toggle="modal" data-target="#view{{ $l->id }}"><i class="fas fa-eye"></i></a>

                            <!-- Modal view-->
                            <div class="modal fade" id="view{{ $l->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Detail Data</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                {{-- <div class="col-lg-4 d-flex align-items-center">
                                                    @if($l->motor->transmition == "Autometic")
                                                        <img src="../../storage/{{ $l->motor->image }}" class="card-img-top" alt="...">
                                                    @else
                                                        <img src="../../storage/{{ $l->motor->image }}" class="card-img-top" alt="...">
                                                    @endif
                                                </div> --}}
                                                <div class="col-lg-4 d-flex align-items-center">
                                                    <a href="#overlay_tr">
                                                        <img src="{{ asset('storage/' . $l->bukti_tr) }}" class="card-img-top" alt="...">
                                                    </a>
                                                </div>
                                                <div class="col-lg-8 text-left">
                                                    <h5 class="font-weight-bold">Tenant : {{ $l->user->name }}</h5>
                                                    <span class="badge bg-primary text-white mb-4">Rent at : {{ $l->created_at }}</span>
                                                    <h5 class="font-weight-bold">Motorcycle Name : {{ $l->motor->name }}</h5>
                                                    <span class="badge bg-primary text-white">{{ $l->motor->year }}</span>
                                                    <h6 class="font-weight-bold mt-4">Details</h6>
                                                        <div class="group1 d-flex">
                                                            <div class="one">
                                                                <p>Delivery Date : <span style="color: #A5A2F6;">{{ $l->delivery_date }}</span> </p>
                                                                <p>Return Date : <span style="color: #A5A2F6;">{{ $l->return_date }}</span> </p>
                                                            </div>
                                                            <div class="two ml-5">
                                                                <p>Delivery Time : <span style="color: #A5A2F6;"> {{ $l->delivery_time }}</span> </p>
                                                                <p>Return Time : <span style="color: #A5A2F6;">{{ $l->return_time }}</span> </p>
                                                            </div>
                                                        </div>
                                                        <div class="group2 mt-2 d-flex">
                                                            <div class="one2">
                                                                <p>Delivery Bike : <span style="color: #A5A2F6;">{{ $l->delivery_bike }}</span> </p>
                                                                <p>Return Bike : <span style="color: #A5A2F6;">{{ $l->return_bike }}</span> </p> 
                                                            </div>
                                                        </div>
                                                        <hr>
                                                    <div class="price-input d-flex align-items-center">
                                                        <p>Price :</p> 
                                                        <div class="input-group ml-2 mb-3 mr-sm-2" style="width: 180px">
                                                            <div class="input-group-prepend">
                                                            <div class="input-group-text">Rp</div>
                                                            </div>
                                                            <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="{{ $l->total_price }}/Day" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            {{-- end modal --}}
                           
                            </div>
                        </td>
                    </tr>
                <?php $i++ ?>
                @endforeach
            </tbody>
        </table>
        {{ $loan->links() }}


</div>

@endsection

{{-- <style>
    .overlay {
        position: fixed;
        top: 0;
        left: 0;
        background-color: rgba(0 , 0 , 0 , .8);
        z-index: 100;
        text-align: center;
        padding: 130px 0;
        width: 0;
        height: 0;
    }

    /* .overlay img {
        width: 30%;
        margin: auto 0;
    } */

    .overlay:target{
        bottom: 0;
        right: 0;
        width: auto;
        height: auto;
    } --}}
</style>
