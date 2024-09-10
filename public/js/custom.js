$(document).ready(function () {
    function updateTotals() {
        var nilai = parseInt($("#qty").val(), 10);
        var harga = parseInt($("#harga").val(), 10);
        var subtotal = nilai * harga;
        $("#total").val(subtotal);
    }

    // Initialize values
    updateTotals();
    $('#minus').prop("disabled", $("#qty").val() <= 0);

    $('#plus').click(function () {
        var nilai = parseInt($("#qty").val(), 10);
        var harga = parseInt($("#harga").val(), 10);

        // Increment quantity
        nilai += 1;
        $("#qty").val(nilai);

        // Update totals
        updateTotals();

        // Enable/Disable buttons
        $('#minus').prop('disabled', nilai <= 0);
        console.log(nilai);
    });

    $('#minus').click(function () {
        var nilai = parseInt($("#qty").val(), 10);
        var harga = parseInt($("#harga").val(), 10);

        // Decrement quantity
        nilai -= 1;
        $("#qty").val(nilai);

        // Update totals
        updateTotals();

        // Enable/Disable buttons
        $('#minus').prop('disabled', nilai <= 0);
        console.log(nilai);
    });
});
