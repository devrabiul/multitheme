@extends('backend.master')
@section('page_title', 'All Blog')

@section('custom_style')
<!-- Plugins css start-->
<link rel="stylesheet" type="text/css" href="{{asset('public/backend')}}/css/jsgrid.css">
<!-- Plugins css start-->
<link rel="stylesheet" type="text/css" href="{{asset('public/backend')}}/css/datatables.css">
<link rel="stylesheet" type="text/css" href="{{asset('public/backend')}}/css/lightbox.min.css">

@endsection

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="card">
                <div class="card-header pb-0">
                    <h5>Blogs List
                        <span class="float-end">
                            <a class="btn btn-primary" href="{{route('backend.blog.create')}}">
                                <i class="fa fa-plus"></i> Add Blog
                            </a>
                        </span>
                    </h5>
                    <span>All Blogs Information</span>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover" id="dataTableStyle">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Thumbnail</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Comment</th>
                                    <th scope="col">Author</th>
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
        var url = '{{ route("backend.blog.edit", ":id") }}';
        url = url.replace(':id', id);
        // window.open(url, '_blank');
        window.location.href = url;
    }

</script>

<script>
    $('#dataTableStyle').DataTable({
        ajax: {
            type: "POST",
            url: `{{route('autoblogs')}}`,
            dataSrc: ''
        },
        columns: [{
                data: null,
                render: function (data, type, full, meta) {
                    return meta.row + 1;
                }
            },
            {
                "data": function (data, type) {
                    return `<a href="{{url('/')}}/application/uploads/blog/` + data.thumbnail +
                        `" data-lightbox="roadtrip"><img class="img-thumbnail w-50" src="{{url('/')}}/application/uploads/blog/` +
                        data.thumbnail + `" itemprop="thumbnail" alt="Image"></a>`;
                }
            },
            {
                data: 'title'
            },
            {
                data: 'comment'
            },
            {
                data: 'author'
            },
            {
                "data": null, // (data, type, row)
                className: "text-center",
                render: function (data) {
                    return `<button class="border-0 btn-sm btn-info me-2 my-1" onclick="cat_edit('` +
                        data.id+ `')"><i class="fa fa-edit"></i></button>` +
                        `<button class="border-0 btn-sm btn-primary me-2 my-1" onclick="post_view('` + data
                        .id + `')"><i class="fa fa-eye"></i></button>` +
                        `<button class="border-0 btn-sm btn-danger me-2 my-1" onclick="cat_distroy('` +
                        data.id + `')"><i class="fa fa-trash"></i></button>`;
                },
            },
        ]
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
            },
            success: function (data) {
                $('#dataTableStyle').DataTable().ajax.reload();
                $('#CategoryEditModal').modal('hide');
            }
        });
    });

    function post_view(id) {
        var url = '{{ route("backend.blog.show", ":id") }}';
        url = url.replace(':id', id);
        window.open(url, '_blank')
    }

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
                let formUrlData = `{{route('backend.blog.destroy')}}`;
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
                        notyf.error('Service Delete Unsuccessfully!');
                    }
                });
            }
        })
    }

</script>

@endsection
