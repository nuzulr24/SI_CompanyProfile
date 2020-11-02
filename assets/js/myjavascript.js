//tombol-delete
$('.tombol-hapus').on('click', function(e) {
  e.preventDefault()
  const href  = $(this).attr('href');

  Swal.fire({
    title: 'Apakah kamu yakin?',
    text: "Kamu tidak akan bisa mengembalikannya!",
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Hapus produk!'
    }).then((result) => {
      if (result.value) {
        document.location.href = href;
      }
    })
});

$(document).ready(function() {
  
     $("#seemore").click(function() {
       $("#seemore").text("See less...");
     })
  
   });