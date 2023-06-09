@extends('backend.master')
@section('page_title', 'City')
@section('custom_style')
<!-- Plugins css start-->
<link rel="stylesheet" type="text/css" href="{{asset('public/backend')}}/css/jsgrid.css">
<!-- Plugins css start-->
<link rel="stylesheet" type="text/css" href="{{asset('public/backend')}}/css/datatables.css">
@endsection

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-md-3">
            <div class="card">
                <div class="card-header pb-0">
                    <h5>City</h5>
                    <span>Add City</span>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('backend.city.store')}}" class="dataStore">
                        @csrf
                        <div class="my-3">
                            <select name="country_id" id="" class="form-select">
                                <option value="">-- Select a country</option>
                                @foreach ($country as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach

                            </select>
                        </div>

                        <div class="my-3">
                            <textarea class="form-control" name="name" placeholder="City Name"></textarea>
                            <small class="mt-2">* Use commas to separate multiple cities</small>
                        </div>
                        <button type="submit" class="btn btn-primary">Add City</button>
                    </form>
                </div>
            </div>

            {{-- <div class="card">
                <div class="card-header pb-0">
                    <h5>Upload</h5>
                    <span>Upload A CSV File</span>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('backend.csv.citycsvupload')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <input type="file" class="form-control" name="uploadfile" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Upload File</button>
                    </form>
                </div>
            </div> --}}
        </div>
        <div class="col-sm-12 col-md-9">
            <div class="card">
                <div class="card-header pb-0">
                    <h5>City List</h5>
                    <span>All City Information</span>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover" id="dataTableStyle">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Country</th>
                                    <th scope="col">State</th>
                                    <th scope="col" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody id="table_data">

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


{{-- Modal || Start --}}
<div class="modal fade" id="CategoryEditModal" tabindex="-1" role="dialog" aria-labelledby="CategoryEditModal"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Info</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{route('backend.country.update')}}" id="dataUpdate">
                    @csrf
                    <div class="my-3">
                        <input type="hidden" name="id" id="parentID">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Country Name" required="">
                    </div>
                    <div class="my-3 row">
                        <div class="col-6">
                            <input type="text" class="form-control" name="iso2" id="iso2" placeholder="ISO2" required="">
                        </div>
                        <div class="col-6">
                            <input type="text" class="form-control" name="iso3" id="iso3" placeholder="ISO3" required="">
                        </div>
                    </div>
                    <div class="my-3">
                        <input type="text" class="form-control" name="phonecode" id="phonecode" placeholder="Phone Code" required="">
                    </div>
                    <div class="my-3">
                        <input type="text" class="form-control" name="capital" id="capital" placeholder="Capital" required="">
                    </div>
                    <div class="my-3">
                        <input type="text" class="form-control" name="region" id="region" placeholder="Region" required="">
                    </div>
                    <button type="submit" class="btn btn-primary">Update info</button>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- Modal || End --}}
@endsection

@section('custom_script')
<!-- Plugins JS start-->
<script src="{{asset('public/backend')}}/js/jsgrid/jsgrid.min.js"></script>
<script src="{{asset('public/backend')}}/js/jsgrid/griddata.js"></script>
<script src="{{asset('public/backend')}}/js/jsgrid/jsgrid.js"></script>
<!-- Plugins JS start-->
<script src="{{asset('public/backend')}}/js/datatable/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('public/backend')}}/js/datatable/datatables/datatable.custom.js"></script>

<script>
    function cat_edit(id) {
        $.ajax({
            url: `{{route('backend.country.edit')}}`,
            method: 'post',
            data: {
                id: id
            },
            success: function (data) {
                $('#parentID').val(id);
                $('#name').val(data.info.name);
                $('#iso2').val(data.info.iso2);
                $('#iso3').val(data.info.iso3);
                $('#phonecode').val(data.info.phonecode);
                $('#capital').val(data.info.capital);
                $('#region').val(data.info.region);
                $('#CategoryEditModal').modal('show');
            }
        });
    }

</script>

<script>
    $('#dataTableStyle').DataTable({
        ajax: {
            url: `{{route('backend.city.autocity')}}`,
            dataSrc: ''
        },
        columns: [{
                data: null,
                render: function (data, type, full, meta) {
                    return meta.row + 1;
                }
            },
            {
                data: 'name',
                defaultContent: ''
            },
            {
                data: 'country_id',
                defaultContent: ''
            },
            {
                data: 'state_name',
                defaultContent: ''
            },
            {
                "data": null, // (data, type, row)
                className: "text-center",
                render: function (data) {
                    return `<button class="border-0 btn-sm btn-danger me-2" onclick="cat_distroy('` +
                        data.id + `')"><i class="fa fa-trash"></i></button>`;
                },
                defaultContent: ''
            },
        ]
    });


    $('.dataStore').on('submit', function (e) {
        e.preventDefault();
        // alert('Ho');
        var form = this;
        $.ajax({
            url: $(form).attr('action'),
            method: $(form).attr('method'),
            data: new FormData(form),
            dataType: 'json',
            processData: false,
            contentType: false,
            success: function (data) {
                $('#dataTableStyle').DataTable().ajax.reload();
                $('input').val('');
                $('select').val('');
                $('textarea').val('');
                notyf.success("Action Successful");
            },
            error: function (request, status, error) {
                notyf.error(request.responseJSON.message);
            }
        });
    });

    $('#dataUpdate').on('submit', function (e) {
        e.preventDefault();
        // alert('Ho');
        var form = this;
        $.ajax({
            url: $(form).attr('action'),
            method: $(form).attr('method'),
            data: new FormData(form),
            dataType: 'json',
            processData: false,
            contentType: false,
            success: function (data) {
                $('#dataTableStyle').DataTable().ajax.reload();
                $('input').val('');
                $('#CategoryEditModal').modal('hide');
                notyf.success("Update Successfully!");
            },
            error: function (request, status, error) {
                notyf.error(request.responseJSON.message);
            }
        });
    });

    function cat_distroy(id) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "POST",
                    url: `{{route('backend.city.destroy')}}`,
                    data: {
                        "id": id
                    },
                    success: function (data) {
                        $('#dataTableStyle').DataTable().ajax.reload();
                        Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        )
                    },
                    error: function (request, status, error) {
                        notyf.error('Data Delete Unsuccessfully!');
                    }
                });
            }
        })
    }

</script>

@endsection
