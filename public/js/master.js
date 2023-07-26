

function hapuspenelitian(id) {
    axios
    .delete("/api/hapus-penelitian", {
        data: {
            unix: "penelitian",
            id: id,
        }
    })
    .then((res) => {
        swal(
            {
                title: "Success!",
                text: "Penelitian telah dihapus!",
                type: "success",
            },
            function () {
                window.location = "/mandiri/penelitian";
            }
        );
    })
    .catch((e) => {
        console.log(e);
    });
}

