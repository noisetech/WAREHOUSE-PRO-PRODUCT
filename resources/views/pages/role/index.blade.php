@extends('layouts.be')

@section('title', 'Role')
@section('content')
    <style>
        .dt-paging {
            margin-top: 20px !important;
        }

        div.dataTables_wrapper div.dataTables_length select {
            width: 60px !important;
            display: inline-block !important;
        }

        .breadcrumb-item+.breadcrumb-item:before {
            content: "/" !important;
        }
    </style>



    <div class="container-fluid py-4">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Permission</li>
            </ol>
        </nav>


        <div class="card shadow">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <span>Role</span>

                    <a href="javascript:void(0)" class="btn btn-sm btn-primary" id="btnTambah">
                        <i class="fas fa-sm fa-plus text-white text-sm opacity-10 px-1"></i>
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-borderless" style="width: 100%" id="example">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Role</th>
                                <th>Permission</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>


        <footer class="footer pt-3  ">
            {{-- <div class="container-fluid">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-6 mb-lg-0 mb-4">
                        <div class="copyright text-center text-sm text-muted text-lg-start">
                            ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script>2024,
                            made with <i class="fa fa-heart"></i> by
                            <a href="https://www.creative-tim.com/" class="font-weight-bold" target="_blank">Creative
                                Tim</a>
                            for a better web.
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/" class="nav-link text-muted" target="_blank">Creative
                                    Tim</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted"
                                    target="_blank">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/blog" class="nav-link text-muted"
                                    target="_blank">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted"
                                    target="_blank">License</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div> --}}
        </footer>
    </div>


    <div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog  modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Role</h5>

                </div>
                <div class="modal-body">
                    <form action="#" id="form-store" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="">Name:</label>
                            <input type="text" name="name" class="form-control" placeholder="Typing name">
                            <span id="name_error" class="text-danger error-text my-2 text-sm"></span>
                        </div>


                        <div class="form-group">
                            <label for="">Permission:</label>
                            <select name="permission[]" id="permission" class="form-control"></select>
                            <span id="permission_error" class="text-danger error-text my-2 text-sm"></span>
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" id="tutupModalTambah">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>

                </form>
            </div>
        </div>
    </div>


    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Role</h5>

                </div>
                <div class="modal-body">
                    <form action="#" id="form-update" method="POST">
                        @csrf

                        <input type="hidden" name="id" class="form-control" id="id_edit">

                        <div class="form-group">
                            <label for="">Name:</label>
                            <input type="text" name="name" class="form-control" placeholder="Typing name"
                                id="name_edit">
                            <span id="name_error_edit" class="text-danger error-text my-2 text-sm"></span>
                        </div>



                        <div class="form-group">
                            <label for="">Permission:</label>
                            <select name="permission[]" id="permission_edit" class="form-control"></select>
                            <span id="permission_error_edit" class="text-danger error-text my-2 text-sm"></span>
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" id="tutupModalTambah">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>

                </form>
            </div>
        </div>
    </div>
@endsection

@push('style')
    <style>
        .select2-container {
            width: 100% !important;
        }
    </style>
@endpush

@push('script')
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        new DataTable('#example', {
            processing: true,
            searching: false,
            serverSide: true,
            fixedHeader: true,
            responsive: true,
            autoWidth: false,
            pageLength: 10,
            lengthMenu: [
                [10, 20, 25, -1],
                [10, 20, 25, "50"]
            ],

            order: [],
            ajax: {
                url: "{{ route('role.data') }}",
                type: "get",
            },
            columns: [{
                    data: 'DT_RowIndex',
                    'orderable': false,
                    'searchable': false
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'permission',
                    name: 'permission'
                },
                {
                    data: 'action',
                    name: 'action'
                },
            ],
            pagingType: "full_numbers",
            lengthMenu: [5, 10, 25, 50],
            language: {
                paginate: {
                    first: '<i class="fas fa-angle-double-left"></i>',
                    last: '<i class="fas fa-angle-double-right"></i>',
                    next: '<i class="fas fa-angle-right"></i>',
                    previous: '<i class="fas fa-angle-left"></i>'
                }
            }
        });
    </script>

    <script>
        var $jquery = jQuery.noConflict();

        $jquery(document).on('click', '#btnTambah', function(e) {
            $jquery('#tambahModal').modal('show');
        });

        $jquery('#tambahModal').on('hidden.bs.modal', function(event) {
            $jquery('#name_error').text('');
            $jquery('#permission_error').text('');
            $jquery('input.is-invalid').removeClass('is-invalid');
            $jquery('#form-store')[0].reset();
            $jquery("#permission").val('').trigger('change')
            $jquery('#tambahModal').modal('hide');
        })


        $jquery(document).on('click', '#tutupModalTambah', function(e) {
            $jquery('#name').text('');
            $jquery('input.is-invalid').removeClass('is-invalid');
            $jquery('#form-store')[0].reset();
            $jquery('#tambahModal').modal('hide');
        });


        $jquery(document).ready(function() {
            $jquery('#permission').select2({
                dropdownParent: $jquery("#tambahModal"),
                multiple: true,
                placeholder: '--Pilih Permission--',
                allowClear: true,
                ajax: {
                    url: "{{ route('role.listPermission') }}",
                    dataType: 'json',
                    delay: 500,
                    processResults: function(data) {
                        return {
                            results: $jquery.map(data, function(item) {
                                return {
                                    text: item.text,
                                    id: item.id
                                }
                            })
                        };
                    }
                }
            });




        });

        $jquery(document).ready(function(e) {
            $jquery('#form-store').on('submit', function(e) {
                e.preventDefault();

                let formData = $jquery(this).serialize();

                $jquery.ajax({
                    url: '{{ route('role.store') }}',
                    method: 'POST',
                    data: formData,
                    success: function(response) {
                        if (response.status === 'success') {
                            Swal.fire({
                                title: response.title,
                                text: response.message,
                                icon: response.status,
                            });
                            $jquery('#tambahModal').modal('hide');
                            $jquery('#form-store')[0].reset();
                            $jquery('#name').text('');
                            $jquery('#example').DataTable().ajax.reload();
                        }
                    },
                    error: function(xhr) {
                        if (xhr.status === 422) {
                            let errors = xhr.responseJSON.errors;
                            $jquery.each(errors, function(key, value) {
                                $jquery('input[name="' + key + '"]').addClass(
                                    'is-invalid');
                                $jquery('#' + key + '_error').text(value);
                            });
                        }
                    }
                });
            });

            $jquery('#form-update').on('submit', function(e) {
                e.preventDefault();

                let formData = $jquery(this).serialize();

                $jquery.ajax({
                    url: '{{ route('role.update') }}',
                    method: 'POST',
                    data: formData,
                    success: function(response) {
                        if (response.status === 'success') {
                            Swal.fire({
                                title: 'Berhasil',
                                text: "Data disimpan",
                                icon: 'success',
                            });
                            $jquery('#editModal').modal('hide');
                            $jquery('#form-update')[0].reset();
                            $jquery("#permission").val('').trigger('change')
                            $jquery('#example').DataTable().ajax.reload();
                        }
                    },
                    error: function(xhr) {
                        if (xhr.status === 422) {
                            let errors = xhr.responseJSON.errors;
                            $jquery.each(errors, function(key, value) {
                                $jquery('input[name="' + key + '"]').addClass(
                                    'is-invalid');
                                $jquery('#' + key + '_error').text(value);
                            });
                        }
                    }
                });
            });
        });


        $jquery(document).on('click', '#edit', function(e) {
            e.preventDefault();

            $jquery('#permission_edit').empty();

            let id = $jquery(this).attr('data-id');

            $jquery('#id_edit').val(id);

            $jquery('#editModal').modal('show');

            $jquery.ajax({
                type: "GET",
                url: "{{ route('role.getDataById') }}",
                data: {
                    id: id,
                    _token: "{{ csrf_token() }}"
                },
                success: function(response) {
                    $jquery('#name_edit').val(response.name);
                },
            });



            $jquery(document).ready(function() {

                $jquery('#permission_edit').select2({
                    dropdownParent: $jquery("#editModal"),
                    multiple: true,
                    placeholder: '--Pilih Permission--',
                    allowClear: true,
                    ajax: {
                        url: "{{ route('role.listPermission') }}",
                        dataType: 'json',
                        delay: 500,
                        processResults: function(data) {
                            return {
                                results: $jquery.map(data, function(item) {
                                    return {
                                        text: item.text,
                                        id: item.id
                                    }
                                })
                            };
                        }
                    }
                });

                $jquery.ajax({
                    type: 'GET',
                    url: "{{ route('role.listPermissionByRole') }}",
                    data: {
                        id: id,
                        _token: '{{ csrf_token() }}'
                    }
                }).then(function(data) {
                    for (let i = 0; i < data.length; i++) {

                        var newOption = new Option(data[i].name, data[i].id, true, true);
                        $jquery('#permission_edit').append(newOption).trigger('change');
                    }
                });

            });



        });

        $jquery(document).on('click', '#hapus', function(e) {
            e.preventDefault();
            let id = $jquery(this).attr('data-id');
            Swal.fire({
                title: 'Hapus data?',
                text: "Data akan terhapus!",
                icon: 'warning',
                confirmButton: true,
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.value) {
                    $jquery.ajax({
                        type: "POST",
                        url: "{{ route('role.destroy') }}",
                        data: {
                            id: id,
                            _token: "{{ csrf_token() }}"
                        },
                        success: function(respose) {
                            if (respose.status == 'success') {
                                Swal.fire({
                                    icon: respose.status,
                                    text: respose.message,
                                    title: respose.title,
                                    showConfirmButton: false,
                                    timer: 2000
                                });

                                $jquery('#example').DataTable().ajax.reload();
                            }
                        },
                    })
                }
            });
        });
    </script>
@endpush
