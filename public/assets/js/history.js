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

function editNumberPlate(id, oldNumberPlate) {
    Swal.fire({
        title: "Edit Number Plate",
        input: "text",
        inputValue: oldNumberPlate,
        showCancelButton: true,
        confirmButtonText: "Simpan",
        cancelButtonText: "Batal",
        confirmButtonColor: "#008000",
        cancelButtonColor: "#3085d6",
        icon: "info",
        allowOutsideClick: true,
        allowEscapeKey: true,
        draggable: true,
        preConfirm: (newNumberPlate) => {
            if (!newNumberPlate) {
                Swal.showValidationMessage("Nomor plat tidak boleh kosong!");
            }
            return newNumberPlate;
        },
    }).then((result) => {
        if (result.isConfirmed) {
            updateNumberPlate(id, result.value);
        }
    });
}

function updateNumberPlate(id, newNumberPlate) {
    fetch(`/history/${id}`, {
        method: "PUT",
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": document
                .querySelector('meta[name="csrf-token"]')
                .getAttribute("content"),
        },
        body: JSON.stringify({
            numberplate: newNumberPlate,
        }),
    })
        .then((response) => response.json())
        .then((data) => {
            if (data.success) {
                Swal.fire({
                    title: "Berhasil!",
                    text: "Nomor plat berhasil diperbarui.",
                    icon: "success",
                    timer: 3000,
                    showConfirmButton: true,
                }).then(() => {
                    $('#data-table-default').DataTable().ajax.reload(); // Reload DataTable instead of page refresh
                });
            } else {
                Swal.fire("Error!", "Gagal memperbarui nomor plat.", "error");
            }
        })
        .catch(() => {
            Swal.fire("Error!", "Terjadi kesalahan saat memperbarui data.", "error");
        });
}

// Initialize DataTable with server-side processing
$(document).ready(function() {
    $('#data-table-default').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: '/history-datatables',
            type: 'GET',
            error: function(xhr, error, thrown) {
                console.error('DataTables error:', error, thrown);
                Swal.fire('Error!', 'Gagal memuat data. Silakan refresh halaman.', 'error');
            }
        },
        columns: [
            { data: 0, name: 'id', orderable: false, searchable: false },
            { data: 1, name: 'numberplate' },
            { data: 2, name: 'image', orderable: false, searchable: false },
            { data: 3, name: 'tenant' },
            { data: 4, name: 'created_at' },
            { data: 5, name: 'actions', orderable: false, searchable: false }
        ],
        order: [[4, 'desc']], // Order by created_at column (index 4) in descending order
        pageLength: 25,
        responsive: true,
        language: {
            processing: "Process...",
            search: "Search:",
            lengthMenu: "Show _MENU_ entries",
            info: "Showing _START_ to _END_ to _TOTAL_ entries",
            infoEmpty: "Showing 0 to 0 to 0 entries",
            infoFiltered: "(disaring to _MAX_ total entries)",
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
