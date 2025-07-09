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
                    location.reload(); // Refresh halaman setelah update
                });
            } else {
                Swal.fire("Error!", "Gagal memperbarui nomor plat.", "error");
            }
        })
        .catch(() => {
            Swal.fire("Error!", "Terjadi kesalahan saat memperbarui data.", "error");
        });
}
