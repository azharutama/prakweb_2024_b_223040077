$(function () {
  $(".tombolTambahData").on("click", function () {
    $("#formModalLabel").html("Tambah data mehasiswa");
    $(".modal-footer button[type=submit]").html("Tambah Data");
  });
  $(".tampilModalUbah").on("click", function () {
    $("#formModalLabel").html("Ubah data mehasiswa");
    $(".modal-footer button[type=submit]").html("Ubah Data");
    $(".modal-body form").attr(
      "action",
      "http://localhost/prakweb/MVC/public/mahasiswa/ubah"
    );

    const id = $(this).data("id");
    $.ajax({
      url: "http://localhost/prakweb/MVC/public/mahasiswa/getUbah",
      data: { id: id },
      method: "post",
      dataType: "json",

      success: function (data) {
        $("#nama").val(data.nama);
        $("#nrp").val(data.nrp);
        $("#email").val(data.email);
        $("#jurusan").val(data.jurusan);
        $("#id").val(data.id);
      },
    });
  });
});
