$(document).ready(function() {

    $('.delete_product_btn').click(function(e){
        e.preventDefault();
        var productID = $(this).val();

        alert(productID);
        swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover",
            icon: "warning",
            buttons: true,
            dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              $.ajax({
                method: "POST",
                url: "code.php",
                data: {
                  'productID':productID,
                  'delete_product_btn': true
                },
                success: function(response){
                  console.log(response);
                  if(response == 200){
                    swal("Success!", "Product delete successfully!", "success");
                    $("#products_table").load(location.href + " #products_table");
                  }else if(response == 500){
                    swal("Error!", "Something went wrong!", "error");

                  }

                }

              });
            } 
          });
    });

    $('.delete_category_btn').click(function(e){
      e.preventDefault();
      var categoryID = $(this).val();

      // alert(categoryID);
      swal({
          title: "Are you sure?",
          text: "Once deleted, you will not be able to recover",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            $.ajax({
              method: "POST",
              url: "code.php",
              data: {
                'categoryID':categoryID,
                'delete_category_btn': true
              },
              success: function(response){
                console.log(response);
                if(response == 200){
                  swal("Success!", "Product delete successfully!", "success");
                  $("#category_table").load(location.href + " #category_table");
                }else if(response == 500){
                  swal("Error!", "Something went wrong!", "error");

                }

              }

            });
          } 
        });
  });
});

