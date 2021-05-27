// Định nghĩa form login
$('#form-login').submit(function(){
    // Chặn ngăn trang chuyển tiếp
    event.preventDefault();
    // Lấy tất cả dữ liệu trong from vào trong biến data
    var $data = $('#form-login').serialize();
    // Sử dụng ajax
    $.ajax({
        type:'post',
        url:'/admin.shop/post-login',
        data:$data,
        success:function(resultController){

            //console.log(resultController);
            if(resultController==1){
                window.location.href='/admin.shop'
            }
            else{
                // window.location.href='/admin.shop/register'
                toastr.error("Tài khoản mật khẩu của bạn không chính xác");
            }
        },
        error:function(resultController){
            var k=resultController.responseJSON;
            for(var j in k.errors)
            toastr.error(k.errors[j][0]);
        }

    })
})
//Định nghĩa form thêm danh mục
$('#form-add-category').submit(function(){
    // Chặn ngăn trang chuyển tiếp
    event.preventDefault();
    // Lấy tất cả dữ liệu trong from vào trong biến data
    var $data = $('#form-add-category').serialize();
    // Sử dụng ajax
    $.ajax({
        type:'post',
        // là route post của hành động này
        url:'/admin.shop/category/create',
        data:$data,
        success:function(resultController){

            if(resultController==1){
                toastr.success('Thêm thành công');
            $('#form-add-category')[0].reset();
            }

        },
        error:function(resultController){
            var k=resultController.responseJSON;
            for(var j in k.errors)
                toastr.error(k.errors[j][0]);
            toastr.error("Thêm không thành");
        }

    })
})
$('#form-update-category').submit(function(){
    // Chặn ngăn trang chuyển tiếp
    event.preventDefault();
    // Lấy tất cả dữ liệu trong from vào trong biến data
    var $data = $('#form-update-category').serialize();
    // Sử dụng ajax
    $.ajax({
        type:'post',
        // là route post của hành động này
        url:'/admin.shop/category/update',
        data:$data,
        success:function(resultController){
                toastr.success('Sửa thành công');
            $('#form-update-category')[0].reset();

        },
        error:function(resultController){
            console.log(resultController)
            var k=resultController.responseJSON;
            for(var j in k.errors)
                toastr.error(k.errors[j][0]);
            toastr.error("Sửa không thành");
        }

    })
})
function softDelete(id,rowTalbe){
    var data = {'id':id}
    var table = $('#example').DataTable();
    $.ajax({
        type:'get',
        url:'/admin.shop/category/delete',
        dataType: 'json',
        data:data,
        success:function(resultController){
            table.row($button.parents('tr')).clear().draw();
            //$(rowTalbe).parent().parent().remove();
            toastr.success("Xóa thành công");

        },
        error:function(resultController){
            console.log(resultController);
            // var k=resultController.responseJSON;
            // for(var j in k.errors)
            //toastr.error(k.errors[j][0]);
            toastr.error("Xóa không thành");
        }
    })
}
// Định nghĩa form theem sản phẩm
// $('#form-create-product').submit(function(){
//     // Chặn ngăn trang chuyển tiếp
//     event.preventDefault();
//     // Lấy tất cả dữ liệu trong from vào trong biến data
//     var $data = $('#form-create-product').serialize();
//     // Sử dụng ajax
//     $.ajax({
//         type:'post',
//         url:'/admin.shop/product/create',
//         data:$data,
//         success:function(resultController){
//             console.log(resultController);
//             toastr.success("Thêm thành công");
//             $('#form-create-product')[0].reset();
//         },
//         error:function(resultController){
//             console.log(resultController);
//             // for(var j in k.errors)
//             //toastr.error(k.errors[j][0]);
//             toastr.error("Thêm không thành");
//         }

//     })
// })

// Định nghĩa form sửa sản phẩm
$('#form-update-product').submit(function(){
    // Chặn ngăn trang chuyển tiếp
    event.preventDefault();
    // Lấy tất cả dữ liệu trong from vào trong biến data
    var $data = $('#form-update-product').serialize();
    // Sử dụng ajax
    $.ajax({
        type:'post',
        url:'/admin.shop/product/update',
        data:$data,
        success:function(resultController){
            toastr.success("Sửa thành công");
            $('#form-udpate-product')[0].reset();
        },
        error:function(resultController){
            // var k=resultController.responseJSON;
            // for(var j in k.errors)
            //toastr.error(k.errors[j][0]);
            toastr.error("Thêm không thành");
        }

    })
})
function softDeleteProduct(id,rowTalbe){
    var data = {'id':id}
    $.ajax({
        type:'get',
        url:'/admin.shop/product/delete',
        data:data,
        success:function(resultController){
           //$(rowTalbe).parent().parent().remove();
            toastr.success("Xóa thành công");
            window.location.reload();
        },
        error:function(resultController){
            console.log(resultController);
            // var k=resultController.responseJSON;
            // for(var j in k.errors)
            //toastr.error(k.errors[j][0]);
            toastr.error("Xóa không thành");
        }
    })
}



function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#blah')
                .attr('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
    }
}
