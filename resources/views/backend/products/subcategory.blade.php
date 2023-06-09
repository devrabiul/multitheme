@extends('backend.master')
@section('page_title', 'All Sub Category')
@section('custom_style')
<!-- Plugins css start-->
<link rel="stylesheet" type="text/css" href="{{asset('public/backend')}}/css/jsgrid.css">
<!-- Plugins css start-->
<link rel="stylesheet" type="text/css" href="{{asset('public/backend')}}/css/datatables.css">
<style>
    #cke_description {
        border: 1px solid #d3d3d3;
    }

    #cke_1_contents {
        height: 35vh;
    }

</style>
@endsection

@section('content')

<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-sm-6">
                <h3>Sub Categories</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{route('backend.categories.index')}}">Categories</a></li>
                    <li class="breadcrumb-item active">Sub Categories</li>
                </ol>
            </div>
            <div class="col-sm-6 d-flex justify-content-end">
                <a class="btn btn-primary" href="{{route('backend.subcategories.create')}}"> <i class="fa fa-plus"></i> Add Sub Category</a>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover" id="dataTableStyle">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Sub Category Name</th>
                                    <th scope="col">Slug</th>
                                    <th scope="col">Parent Category</th>
                                    <th scope="col" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody id="table_data">
                                <tr>
                                    <td colspan="5">
                                        <div class="d-flex justify-content-center">
                                            <div class="spinner-border" role="status">
                                                <span class="visually-hidden">Loading...</span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
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
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Category Edit</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form class="theme-form" method="post" action="javascript:void(0)">
                @csrf
                <div class="modal-body">

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <input class="form-control" id="SubCategoryID" type="hidden" name="SubCategoryID" required>
                            <label class="col-form-label pt-0" for="CategoryID">Category Name</label>
                            <select class="form-select" id="MCategoryID" name="MCategoryID" required>
                                <option value="">-- Select a category</option>
                                @foreach ($category as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="col-form-label pt-0" for="CategoryName">Sub Category Name</label>
                            <input class="form-control" id="CategoryNameEdit" type="text" name="name"
                                placeholder="Category Name" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label pt-0" for="short_info">Short Info</label>
                        <textarea class="form-control" id="short_info" name="short_info" placeholder="Short Info"
                            required></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label pt-0" for="description">Description</label>

                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" type="button" data-bs-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary" type="button" type="submit" id="CategoryUpdate"
                        data-bs-dismiss="modal">Category Update</button>
                </div>
            </form>
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
<script src="{{asset('public/backend')}}/js/editor/ckeditor/ckeditor.js"></script>
<script src="{{asset('public/backend')}}/js/editor/ckeditor/adapters/jquery.js"></script>
<script src="{{asset('public/backend')}}/js/editor/ckeditor/styles.js"></script>
{{-- <script src="{{asset('public/backend')}}/js/editor/ckeditor/ckeditor.custom.js"></script> --}}

<script type="text/javascript">
    CKEDITOR.replace('description');

</script>

<script>
    $('#add_sub_category').click(() => {

        $('#CategoryEditModal').modal('show');


    });

    function cat_edit(id) {
        var url = '{{ route("backend.subcategories.edit", ":id") }}';
        url = url.replace(':id', id);
        // window.open(url, '_blank');
        window.location.href = url;
    }

    // function cat_edit(subcategory_id) {

    //     let formUrlData = `{{route('backend.subcategories.single')}}`;
    //     $.ajax({
    //         type: "POST",
    //         url: `${formUrlData}`,
    //         data: {
    //             subcategory_id: subcategory_id
    //         },
    //         success: function (data) {
    //             // subCategory
    //             $('#SubCategoryID').val(data.subCategory.id);
    //             $(`#MCategoryID option`).each(function (i) {
    //                 if ($(this).val() == data.subCategory.category_id) {
    //                     $(`#MCategoryID option`).removeAttr('selected');
    //                     $(this).attr('selected', 'selected');
    //                 } else {
    //                     $(`#MCategoryID option`).removeAttr('selected');
    //                 }
    //             });
    //             $('#CategoryNameEdit').val(data.subCategory.name);
    //             $('#descriptionEdit').val(data.subCategory.description);
    //             $('#CategoryEditModal').modal('show');
    //         },
    //         error: function (request, status, error) {
    //             notyf.error(request.responseJSON.message);
    //         }
    //     });
    // }

</script>

<script>
    $('#dataTableStyle').DataTable({
        ajax: {
            url: `{{route('autosubcategories')}}`,
            dataSrc: ''
        },
        columns: [{
                data: null,
                render: function (data, type, full, meta) {
                    return meta.row + 1;
                },
                defaultContent: ''
            },
            {
                data: 'name',
                defaultContent: ''
            },
            {
                data: 'slug',
                defaultContent: ''
            },
            {
                data: 'category_name',
                defaultContent: ''
            },
            {
                "data": null, // (data, type, row)
                className: "text-center",
                render: function (data) {
                    return `<button class="border-0 btn-sm btn-info me-2" onclick="cat_edit('` + data
                        .id + `')"><i class="fa fa-edit"></i></button>` +
                        `<button class="border-0 btn-sm btn-danger me-2" onclick="cat_distroy('` +
                        data.id + `')"><i class="fa fa-trash"></i></button>`;
                },
            },
        ],
        error: function (request, status, error) {
            notyf.error('No data available in table');
        }
    });

    $('#ajaxForm').on('submit', function (e) {
        e.preventDefault();

            var form = this;
            $.ajax({
                url: $(form).attr('action'),
                method: $(form).attr('method'),
                data: new FormData(form),
                dataType: 'json',
                processData: false,
                contentType: false,
                success: function (data) {
                    $("#category_id").val("");
                    $('#CategoryName').val('');
                    $('#description').val('');
                    $('#dataTableStyle').DataTable().ajax.reload();
                    notyf.success("Sub Category Saved Successfully!");
                },
                error: function (request, status, error) {
                    notyf.error(request.responseJSON.message);
                }
            });
    });

    $('#CategoryUpdate').on('click', function () {
        let formUrlData = `{{route('backend.subcategories.update')}}`;
        $.ajax({
            type: "POST",
            url: `${formUrlData}`,
            data: {
                category_id: $('#MCategoryID').val(),
                id: $('#SubCategoryID').val(),
                name: $('#CategoryNameEdit').val(),
                description: $('#descriptionEdit').val(),
            },
            success: function (data) {
                $('#dataTableStyle').DataTable().ajax.reload();
                $('#CategoryEditModal').modal('hide');
            }
        });
    });

    function cat_distroy(id) {

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#24695c',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {

                let formUrlData = `{{route('backend.subcategories.destroy')}}`;
                $.ajax({
                    type: "POST",
                    url: `${formUrlData}`,
                    data: {
                        "id": id,
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
                        notyf.error('Category Delete Unsuccessfully!');
                    }
                });
            }
        })
    }

</script>

@endsection
