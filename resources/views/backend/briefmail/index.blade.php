@extends('backend.master')

@section('page_title', 'Brief Mail')

@section('custom_style')
<!-- Plugins css start-->
<link rel="stylesheet" type="text/css" href="{{asset('public/backend')}}/css/jsgrid.css">
<!-- Plugins css start-->
<link rel="stylesheet" type="text/css" href="{{asset('public/backend')}}/css/datatables.css">
<style>
    .toggle_btn{
        font-size: 20px;
        cursor: pointer;
    }
    .cursor_pointer{
        cursor: pointer;
    }
    .tr_hover_effect:hover td{
        color: #00743e !important;
    }

</style>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        @include('backend.consultation.inboxlayout')
        <div class="col-sm-12 col-md-9">
            <div class="card">
                <div class="card-header pb-0">
                    <h5>Brief Mail</h5>
                    <span>All Brief Mail Information</span>
                </div>

                <div class="card-body">
                    {{-- <div class="row my-3">
                        <div class="col-sm-12 col-md-8">
                            <button class="btn btn-sm btn-primary">Upcoming</button>
                            <button class="btn btn-sm btn-secondary">Pending</button>
                            <button class="btn btn-sm btn-warning">Past</button>
                        </div>
                        <div class="col-sm-12 col-md-4 text-end">
                            <button class="btn btn-sm btn-secondary">Export</button>
                        </div>
                    </div> --}}

                    <div class="table-responsive">
                        <table class="table table-hover" id="dataTableStyle">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Company</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col" class="text-center">Status</th>
                                    <th scope="col" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody id="table_data">
                                @foreach ($data as $key=>$item)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td><a href="{{route('briefmail.show', $item->id)}}">{{$item->firstname}} {{$item->lname}}</a></td>
                                    <td><a href="{{route('briefmail.show', $item->id)}}">{{$item->email}}</a></td>
                                    <td>{{$item->company}}</td>
                                    <td>{{$item->phone}}</td>
                                    <td class="text-center">
                                        <select class="form-select status_input" name="" id="" data-itemname="{{$item->id}}">
                                            <option value="0" {{($item->status == 0?'selected':'')}}>New</option>
                                            <option value="1" {{($item->status == 1?'selected':'')}}>Read</option>
                                        </select>
                                    </td>
                                    <td class="text-center">
                                        <a class="btn btn-sm btn-primary px-2 py-1" href="{{route('briefmail.show', $item->id)}}"><i class="fa fa-book"></i> Details</a>
                                        <button class="btn btn-sm btn-danger px-2 py-1" onclick="object_delete('{{$item->id}}')"><i class="fa fa-trash"></i> Delete</button>
                                    </td>
                                </tr>
                                </a>
                                @endforeach
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

    function gotopage(link)
    {
        window.location = link;
    }


    $('#dataTableStyle').DataTable();
    function object_delete(id)
    {
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
                var url = '{{ route("briefmail.destory", ":id") }}';
                url = url.replace(':id', id);
                // window.open(url, '_blank');
                window.location.href = url;
            }
        })
    }


    $('.status_input').on('change', function(){

        $.ajax({
            url:`{{route('briefmail.update')}}`,
            method:'POST',
            data:{
                'id':$(this).data("itemname"),
                'value':$(this).val(),
            },
            success:function(data){
                notyf.success("Action Successful!");
            },
            error:function(request, status, error){
                notyf.error("Action Unsuccessful!");
            }
        });

        alert(id);

    });


</script>
@endsection
