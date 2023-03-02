// let product = $("#code_inventory").on("click", function () {
//     console.log($("#product_id option:selected").text());
// });

// Room
$("#room_name").on("click", function () {
    $(this).val(
        $("#department_id option:selected").text() + $("#floor").val() + "/"
    );
});

// Inventory

// console.log($("#product_id"));
$("#code_inventory").on("click", function () {
    let product = $("#product_id option:selected").text();
    let room = $("#room_id option:selected").text();
    let purchased_in = $("#purchased_in").val().slice(2, 4);
    let result = product.slice(0, 4);
    $(this).val(result + "-" + purchased_in + "-" + room);
});

let str = "GeeksforGeeks";
let res = str.charAt(str.length - 2);
console.log(res);
