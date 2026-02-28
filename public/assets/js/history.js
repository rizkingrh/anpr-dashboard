// Sweetalert notif for history page
function confirmDelete(id) {
    Swal.fire({
        title: "Apakah Anda yakin?",
        text: "Data yang dihapus tidak dapat dikembalikan!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#d33",
        cancelButtonColor: "#3085d6",
        confirmButtonText: "Ya, hapus!",
        cancelButtonText: "Batal",
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById("delete-form-" + id).submit();
        }
    });
}

function editHistory(id, oldVehicleType, oldNumberPlate) {
    Swal.fire({
        title: "Edit Data",
        html:
            '<div class="mb-3 text-start">' +
            '<label class="form-label fw-bold">Vehicle Type</label>' +
            '<input id="swal-vehicle-type" class="swal2-input w-100 m-0" value="' + oldVehicleType + '">' +
            '</div>' +
            '<div class="mb-3 text-start">' +
            '<label class="form-label fw-bold">Number Plate</label>' +
            '<input id="swal-number-plate" class="swal2-input w-100 m-0" value="' + oldNumberPlate + '">' +
            '</div>',
        showCancelButton: true,
        confirmButtonText: "Simpan",
        cancelButtonText: "Batal",
        confirmButtonColor: "#008000",
        cancelButtonColor: "#3085d6",
        icon: "info",
        allowOutsideClick: true,
        allowEscapeKey: true,
        draggable: true,
        focusConfirm: false,
        preConfirm: () => {
            const vehicleType = document.getElementById("swal-vehicle-type").value;
            const numberPlate = document.getElementById("swal-number-plate").value;
            if (!vehicleType) {
                Swal.showValidationMessage("Vehicle type tidak boleh kosong!");
                return false;
            }
            if (!numberPlate) {
                Swal.showValidationMessage("Number plate tidak boleh kosong!");
                return false;
            }
            return { vehicle_type: vehicleType, number_plate: numberPlate };
        },
    }).then((result) => {
        if (result.isConfirmed) {
            updateHistory(id, result.value.vehicle_type, result.value.number_plate);
        }
    });
}

function updateHistory(id, vehicleType, numberPlate) {
    fetch(`/history/${id}`, {
        method: "PUT",
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": document
                .querySelector('meta[name="csrf-token"]')
                .getAttribute("content"),
        },
        body: JSON.stringify({
            vehicle_type: vehicleType,
            number_plate: numberPlate,
        }),
    })
        .then((response) => response.json())
        .then((data) => {
            if (data.success) {
                Swal.fire({
                    title: "Berhasil!",
                    text: "Data berhasil diperbarui.",
                    icon: "success",
                    timer: 3000,
                    showConfirmButton: true,
                }).then(() => {
                    $('#data-table-default').DataTable().ajax.reload();
                });
            } else {
                Swal.fire("Error!", "Gagal memperbarui data.", "error");
            }
        })
        .catch(() => {
            Swal.fire("Error!", "Terjadi kesalahan saat memperbarui data.", "error");
        });
}

// Initialize DataTable with server-side processing
$(document).ready(function () {
    $('#data-table-default').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: '/history-datatables',
            type: 'GET',
            error: function (xhr, error, thrown) {
                console.error('DataTables error:', error, thrown);
                Swal.fire('Error!', 'Gagal memuat data. Silakan refresh halaman.', 'error');
            }
        },
        columns: [
            { data: 0, name: 'id', orderable: false, searchable: false },
            { data: 1, name: 'vehicle_type' },
            { data: 2, name: 'vehicle_image', orderable: false, searchable: false },
            { data: 3, name: 'number_plate' },
            { data: 4, name: 'plate_image', orderable: false, searchable: false },
            { data: 5, name: 'tenant' },
            { data: 6, name: 'created_at' },
            { data: 7, name: 'actions', orderable: false, searchable: false }
        ],
        order: [[6, 'desc']], // Order by created_at column (index 6) in descending order
        pageLength: 25,
        responsive: true,
        language: {
            processing: "Process...",
            search: "Search:",
            lengthMenu: "Show _MENU_ entries",
            info: "Showing _START_ to _END_ to _TOTAL_ entries",
            infoEmpty: "Showing 0 to 0 to 0 entries",
            infoFiltered: "(filter to _MAX_ total entries)",
            loadingRecords: "Loading...",
            zeroRecords: "No data found",
            emptyTable: "No data available in the table",
            paginate: {
                first: "First",
                previous: "Previous",
                next: "Next",
                last: "Last"
            }
        }
    });
});
