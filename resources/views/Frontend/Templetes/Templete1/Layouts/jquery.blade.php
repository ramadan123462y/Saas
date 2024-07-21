<script>
    $(document).ready(function() {
        $(".increase").click(function() {
            var row_q = $(this).closest(".qtySelector");
            var val_q = row_q.children(".qtyValue").val();
            var id = row_q.children(".id").val();

            var row = $(this).closest(".tr");
            // console.log(row.find(".total").text("dgj"));

            var url = "{{ url('cart/increase_item') }}/" + id + "/" + val_q;

            $.ajax({
                url: url,
                type: "GET",
                dataType: "json",
                success: function(response) {
                    // Handle the successful response here
                    row.find(".total").text(response);
                    flasher.success("Data has been saved successfully!");
                },
                error: function(xhr, status, error) {
                    // Handle errors here
                    console.error(xhr.responseText);
                },
            });
        });
    });
</script>

<script>
    var minVal = 1,
        maxVal = 20; // Set Max and Min values
    // Increase product quantity on cart page
    $(".increaseQty").on('click', function() {
        var $parentElm = $(this).parents(".qtySelector");
        $(this).addClass("clicked");
        setTimeout(function() {
            $(".clicked").removeClass("clicked");
        }, 100);
        var value = $parentElm.find(".qtyValue").val();
        if (value < maxVal) {
            value++;
        }
        $parentElm.find(".qtyValue").val(value);
    });
    // Decrease product quantity on cart page
    $(".decreaseQty").on('click', function() {
        var $parentElm = $(this).parents(".qtySelector");
        $(this).addClass("clicked");
        setTimeout(function() {
            $(".clicked").removeClass("clicked");
        }, 100);
        var value = $parentElm.find(".qtyValue").val();
        if (value > 1) {
            value--;
        }
        $parentElm.find(".qtyValue").val(value);
    });
</script>
