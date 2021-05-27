$.ajaxSetup({
    headers: {
          '_token': $('meta[name="csrf-token"]').attr('content')
      }
  });

// Biến lưu các id định xóa
var array = [] ;
// arrayCur là mảng các sản phẩm còn lại trong giỏ hàng
var arrayCur = [] ;
// var arrayQty
// Tham số truyền vào là id của sản phẩm của giỏ hàng, và vị trí của phần tử đó
function deleteProductInCart(id,element){
    // Xóa đi row chứa phần tử này
    $(element).parents().eq(2).remove();
    toastr.success("Xóa thành công vui lòng cập nhật lại giỏ hàng");
    //console.log( $(element).parents().eq(2).find('.update-quantity').val())
    // Lấy giá trị của phần tử xóa bao gồm id của phần tử và số lượng của phần tử
    var elementCart = [id,$(element).parents().eq(2).find('.update-quantity').val()]

    // Thêm các phần tử xóa vào trong giỏ hàng.
    array.push(elementCart);
    console.log(array);
}

$('#cart-client').submit(function(){
    // Chặn ngăn trang chuyển tiếp
    event.preventDefault();
    // Duyệt tất cả các thẻ input trong giỏ hàng
    $("form#cart-client input").each(function(){
        var input = $(this);
        console.log(input);
        console.log(input.attr('name'));
        console.log(input.val());
        // Tìm input có tên là name xong sau đó thêm giá trị của input này vào trong mảng arrayCur
        // Thêm phần tử của arrayCur là 1 mảng gồm 2 phần tử,
        // phần tử đầu tiên là id của hàng trong giỏ hàng thông qua thuộc tính name
        // Phần tử thứ 2 là số lượng của phần tử đó trong giỏ hàng
        var value = arrayCur.push([input.attr('name'),input.val()]);

        // arrayCur.push((input.attr('name')));
       });
       console.log(arrayCur);
       var $data12 = $('#cart-client').serialize();
    // console.log($data);
    // var str = $data;
    // var token = str.replace("_token=", "");
    $('cart-client>input').val()
    console.log($('#cart-client>input').val());
    // Sử dụng ajax
    $.ajax({
        type:'post',
        // là route post của hành động này
        url:'/update-cart-check-out',
        data:{_token: $('#cart-client>input').val(), arrayList : array, dataform : arrayCur},
        success:function(resultController){
            window.location.reload();
            console.log(resultController);
        },
        error:function(resultController){
            console.log(resultController);
        }

    })
})

function add_to_cart(id)
{
    var data = {
        'id':id,
        "_token": $('meta[name="csrf-token"]').attr('content')
    }
    $.ajax({
        type:'post',
        url:'update-cart',
        data: data,
        success:function(resultController){
            $.ajax({
                type:'get',
                url:'get-amout-cart',
                success:function(returnVal){
                    $('#cart-product').html(returnVal)
                    console.log(returnVal);
                },
                error:function(returnVal){
                    console.log(returnVal);
                }
            })
            //console.log(resultController);
           //$(rowTalbe).parent().parent().remove();
            toastr.success("Thêm thành công");
            //window.location.reload();
            console.log(resultController);
        },
        error:function(resultController){
            console.log(resultController);
            // var k=resultController.responseJSON;
            // for(var j in k.errors)
            //toastr.error(k.errors[j][0]);
            toastr.error("Thêm không thành");
        }
    })
}
function updateQty(value, rowTable){

    // var a = rowTable.parent().parent().parent().find('.total-in-product');
    // var b = a.replace(",","");
    // a = (b*value).toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,')
    // rowTable.parent().parent().parent().find('.total-in-product').html(a)

    // // document.getElementById('cart-total_').innerHTML = a;
}
$(".update-quantity").change(function(){
    var qty = $(this).val()
    var price = $(this).parents().eq(2).find('.cash').html();

    //var price = $(this).parents().eq(2).find('.total-in-product').html()
    price = price.replace(",","");
    //var result = (price*qty).toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,')
    var result = String(price*qty).replace(/(.)(?=(\d{3})+$)/g,'$1,')
    $(this).parents().eq(2).find('.total-in-product').html(result)
    console.log(price);

})
// $(document).ready(function() {             $('#loginModal').modal('show');
//   $(function () {
//     $('[data-toggle="tooltip"]').tooltip()
//   })
// });
