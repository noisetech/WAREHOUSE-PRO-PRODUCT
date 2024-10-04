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
            url: "{{ route('jabatan.data') }}",
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
                data: 'dapertemen',
                name: 'dapertemen'
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
        $jquery('input.is-invalid').removeClass('is-invalid');
        $jquery('#dapertemen').val('').trigger('change');
        $jquery('#form-store')[0].reset();
        $jquery('#tambahModal').modal('hide');
    })


    $jquery(document).on('click', '#tutupModalTambah', function(e) {
        $jquery('#name').text('');
        $jquery('input.is-invalid').removeClass('is-invalid');
        $jquery('#form-store')[0].reset();
        $jquery('#tambahModal').modal('hide');
    });

    $jquery(document).ready(function(e) {
        $jquery('#form-store').on('submit', function(e) {
            e.preventDefault();

            let formData = $jquery(this).serialize();

            $jquery.ajax({
                url: '{{ route('jabatan.store') }}',
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
                url: '{{ route('permission.update') }}',
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
                        $jquery('#name_error').text('');
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

        let id = $jquery(this).attr('data-id');

        $jquery('#editModal').modal('show');

        $jquery.ajax({
            type: "GET",
            url: "{{ route('permission.getDataById') }}",
            data: {
                id: id,
                _token: "{{ csrf_token() }}"
            },
            success: function(response) {
                $jquery('#id').val(response.data.id);
                $jquery('#name_edit').val(response.data.name);
            },
        });
    });

    $jquery(document).ready(function() {

        $jquery('#dapertemen').select2({
            dropdownParent: $jquery("#tambahModal"),
            multiple: false,
            placeholder: '--Pilih Dapertemen--',
            allowClear: true,
            ajax: {
                url: "{{ route('jabatan.listDapertemen') }}",
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
                    url: "{{ route('permission.destroy') }}",
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
