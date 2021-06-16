// const { isUndefined } = require("lodash");

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
// Định nghĩa form thêm danh mục
$('#form-add-category').submit(function(){
    // Chặn ngăn trang chuyển tiếp
    event.preventDefault();
    // Lấy tất cả dữ liệu trong from vào trong biến data
    // var $data = $('#form-add-category').serialize();
    var formData = new FormData($('#form-add-category')[0]);
    // Sử dụng ajax
    $.ajax({
        type:'post',
        async: false,
        cache: false,
        processData: false, // important
        contentType: false,
        // là route post của hành động này
        url:'/admin.shop/category/create',
        data:formData,
        success:function(resultController){
            console.log(resultController)
            toastr.success('Thêm thành công');
            window.location.href = '/admin.shop/category'
            $('#form-add-category')[0].reset();


        },
        error:function(resultController){
            console.log(resultController);
            var k=resultController.responseJSON;
            for(var j in k.errors)
                toastr.error(k.errors[j][0]);
            toastr.error("Thêm không thành, vui lòng điền đầy đủ thông tin");
        }

    })
})
$('#form-update-category').submit(function(){
    // Chặn ngăn trang chuyển tiếp
    event.preventDefault();
    // Lấy tất cả dữ liệu trong from vào trong biến data
    // var $data = $('#form-update-category').serialize();
    var formData = new FormData($('#form-update-category')[0]);
    // Sử dụng ajax
    $.ajax({
        type:'post',
        async: false,
        cache: false,
        processData: false, // important
        contentType: false,
        // là route post của hành động này
        url:'/admin.shop/category/update',
        data: formData,
        // dataType: 'json',
        success:function(resultController){
                toastr.success('Sửa thành công');
            window.location.href = '/admin.shop/category'
            console.log(resultController);
            $('#form-update-category')[0].reset();

        },
        error:function(resultController){
            console.log(resultController)
            var k=resultController.responseJSON;
            for(var j in k.errors)
            {
                console.log(k.errors[j][0]);
                toastr.error(k.errors[j][0]);

            }

            toastr.error("Sửa không thành");
        }

    })
})
function softDelete(id,rowTalbe){
    console.log(id);
    var token = '{{ csrf_token() }}';
    event.preventDefault();


    var table = $('#example').DataTable();
            $('#example tbody').on( 'click', '.mdi-trash-can-outline', function () {
                table.row( $(this).parents('tr') ).remove().draw();
            } );
    // $.ajaxSetup({
    //     headers: {
    //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //     }
    // });
    var data = {
        'id':id,
        '_token':$('meta[name="csrf-token"]').attr('content')
    }
    console.log(data);
    $.ajax({
        type:'get',
        // async: false,
        // cache: false,
        // dataType : 'json',
        // processData: false, // important
        // contentType: false,
        url:'/admin.shop/category/delete/'+id,
        // data:data,
        success:function(resultController){
            console.log(resultController)
            // table.row($button.parents('tr')).clear().draw();
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
    event.preventDefault();


    var table = $('#example').DataTable();
            $('#example tbody').on( 'click', '.mdi-trash-can-outline', function () {
                table.row( $(this).parents('tr') ).remove().draw();
            } );
    $.ajax({
        type:'get',
        url:'/admin.shop/product/delete/'+id,
        data:data,
        success:function(resultController){
           //$(rowTalbe).parent().parent().remove();
            toastr.success("Xóa thành công");
            // window.location.reload();
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

$(document).ready(function(){
    var totalList = $('#container').data('total-list');
    var dayList = $('#container').data('day');
    var listOfTotal = [];
    var listOfDay = [];
    totalList.forEach(element => {
        listOfTotal.push(element/1);
    });
    dayList.forEach(element => {
        listOfDay.push(element)
    });
    console.log(listOfTotal);
    var chart =Highcharts.chart('container', {


        chart: {
          type: 'spline'
        },
        title: {
          text: 'Doanh thu của quán'
        },
        subtitle: {
          text: 'Tháng 6'
        },
        xAxis: {
            categories:listOfDay,
            title:{
                text: 'Ngày trong tháng'
            }
            },
        yAxis: {
          title: {
            text: 'Số tiền'
          },
          labels: {
            formatter: function () {
              return Intl.NumberFormat('en-US').format(this.value) + 'VND';
            }
          }
        },
        tooltip: {
          crosshairs: true,
          shared: true
        },
        plotOptions: {
          spline: {
            marker: {
              radius: 4,
              lineColor: '#666666',
              lineWidth: 1
            }
          }
        },
        series: [{
            color: '#333',
            name: 'Số tiền',
            marker: {
            symbol: 'cricle'
          },
          data:listOfTotal

        }]
      });
})
// Start Statistc

// End Statistc

$('#month-for-budget').change(function(){
    event.preventDefault();
    var jsVariable = '<%= Session[\"staff_name\"]%>';
    console.log(jsVariable);
    // console.log(sessionStorage);
    // var value = $(this).val();
    // sessionStorage.setItem("myVar",value);
    // // conssol(value);
    // console.log(sessionStorage.getItem("myVar"));
    var $data = {'month':$(this).val()}
    $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
    $.ajax({
        type:'post',
        url:'/admin.shop/month',
        data:$data,
        success:function(resultController){
           //$(rowTalbe).parent().parent().remove();
            // alert($data['month'])
            toastr.success("Vui lòng đợi");
            console.log($data['month']);
            console.log(resultController);
            // window.location.reload();
            var d = new Date();
            var n = d.getMonth();
            // Start Change
            var totalList = resultController["list_total_of_month"];
            var dayList =resultController["list_day_of_month"];
            var month = resultController["month"];
            // console.log(totalList);
            // var arrayTotalList = Array.from(totalList);
            // console.log(arrayTotalList);
            // console.log(arrayTotalList[12]);
            console.log(dayList[10]);
            var listOfTotal = [];
            var listOfDay = [];
            totalList.forEach(element => {
                listOfTotal.push(element/1);
            });
            dayList.forEach(element => {
                listOfDay.push(element)
            });
            console.log(listOfTotal);

            var chart =Highcharts.chart('container', {


                chart: {
                type: 'spline'
                },
                title: {
                text: 'Doanh thu của quán'
                },
                subtitle: {
                text: 'Tháng '+month
                },
                xAxis: {
                categories:listOfDay,
                title:{
                    text: 'Ngày trong tháng'
                }
                },
                yAxis: {
                title: {
                    text: 'Số tiền'
                },
                labels: {
                    formatter: function () {
                    return Intl.NumberFormat('en-US').format(this.value) + 'VND';
                    }
                }
                },
                tooltip: {
                crosshairs: true,
                shared: true
                },
                plotOptions: {
                spline: {
                    marker: {
                    radius: 4,
                    lineColor: '#666666',
                    lineWidth: 1
                    }
                }
                },
                series: [{
                    color: '#333',
                    name: 'Số tiền',
                    marker: {
                    symbol: 'cricle'
                },
                data:listOfTotal

                }]
            });
            // End Change
        },
        error:function(resultController){
            console.log(resultController);
            // var k=resultController.responseJSON;
            // for(var j in k.errors)
            //toastr.error(k.errors[j][0]);
            toastr.error("Xóa không thành");
        }
    })
});
// window.addEventListener('beforeunload', function (e) {
//     // var value = 0;
//     // alert(sessionStorage.setItem("myVar",value));
//     // sessionStorage.setItem("myVar",value);
// });
// window.onbeforeunload = function(e){
//     var msg = 'Are you sure?';
//     e = e || window.event;

//     if(e)
//         e.returnValue = msg;

//     var value = 0;
//     // alert(sessionStorage.setItem("myVar",value));
//     // sessionStorage.setItem("myVar",value);
//     return msg;
// }



//  Start Stafff
function showProfile(id){
    event.preventDefault();

    $.ajax({
        type:'get',
        url:'/admin.shop/staff/profile/'+id,
        data:data,
        success:function(resultController){
            console.log(resultController);
           //$(rowTalbe).parent().parent().remove();
            // toastr.success("Xóa thành công");
            // window.location.reload();
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

$('#form-create-staff').submit(function(event){
    event.preventDefault();
    var checknumber = 0;
    var vnf_regex = /((09|03|07|08|05)+([0-9]{8})\b)/g;
    var mobile = $('#phone-staff').val();
    if(mobile !==''){
        if (vnf_regex.test(mobile) == false)
        {
            toastr.error("Số điện thoại bạn không đúng định dạng");
            checknumber++;
        }
    }else{
        toastr.error("Bạn vui lòng nhập số điện thoại");
        checknumber++;
    }
    var passRegex = new RegExp("^(((?=.*[a-z])(?=.*[A-Z]))|((?=.*[a-z])(?=.*[0-9]))|((?=.*[A-Z])(?=.*[0-9])))(?=.{6,})");
    var password = $('#password-staff').val();
    if(password !==''){
        if(passRegex.test(password)==false){
            toastr.error("Mật khẩu phải kí tự đặc biệt, chữ in hoa, số và chữ cái viết thường");
            checknumber++;
        }
    }else{
        toastr.error("Bạn vui lòng nhập mật khẩu");
        checknumber++;
    }
    var passcheck = $('#password-check-staff').val();
    if(passcheck !== ''){
        if(passcheck !== password){
            toastr.error("Mật khẩu không trùng nhau");
            checknumber++;
        }
    }
    else{
        toastr.error("Trường Nhập lại mật khẩu không được để trống");
        checknumber++;
    }

    var emailRegex = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    var email = $('#email-staff').val();
    if(email !==''){
        if(emailRegex.test(email)==false){
            toastr.error("Email nhập sai định dạng");
        }
    }else{
        toastr.error("Bạn vui lòng nhập email");
    }
    var accountRegex = /([a-zA-z0-9])/gm;
    var account = $('account-staff').val();
    if(account !== ''){
        if(accountRegex.test(account)==false){
            toastr.error("Tài khoản không được có khoảng trắng");
        }
    }
    else{
        toastr.error("Bạn vui lòng nhập tài khoản");
    }

    var nameRegex =/([a-zA-z0-9 ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼẾỀỂưăạảấầẩẫậắằẳẵặẹẻẽếềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ])/ug;
    var name = $('#name-staff').val();
    if(name !== ''){
        if(nameRegex.test(name)==false){
            toastr.error("Tên không được có khoảng trắng");
            checknumber++;
        }
    }
    else{
        toastr.error("Bạn vui lòng nhập tên");
        checknumber++;
    }
    var image = $('#file').val();
    if(image==''){
        toastr.error("Vui lòng chọn ảnh");
        checknumber++;
    }
    var date = new Date($('#staff-birthdays').val());
    if(date.toString()=="Invalid Date"){
        toastr.error("Bạn vui lòng nhập ngày sinh");
        checknumber++;
    }
    console.log(checknumber)

    if(checknumber===0){
        // Chặn ngăn trang chuyển tiếp
    event.preventDefault();
    // Lấy tất cả dữ liệu trong from vào trong biến data
    // var $data = $('#form-add-category').serialize();
    var formData = new FormData($('#form-create-staff')[0]);



    // Sử dụng ajax
    $.ajax({
        type:'post',
        async: false,
        cache: false,
        processData: false, // important
        contentType: false,
        // là route post của hành động này
        url:'/admin.shop/staff/create',
        data:formData,
        success:function(resultController){
            console.log(resultController)
            toastr.success('Thêm thành công');
            window.location.href = '/admin.shop/staff'
            // $('#form-add-category')[0].reset();


        },
        error:function(resultController){
            console.log(resultController);
            var k=resultController.responseJSON;
            for(var j in k.errors)
                toastr.error(k.errors[j][0]);
            toastr.error("Thêm không thành, vui lòng điền đầy đủ thông tin");
        }

    })
    }
    // Lấy tất cả dữ liệu trong from vào trong biến data

    // console.log(formData);
})
//  End Staff


/// Start Post
$('#form-add-post').submit(function(event){
    var checknumber = 0;
    var image = $('#file').val();
    if(image==''){
        toastr.error("Vui lòng chọn ảnh");
        checknumber++;
    }
    var postdesc = $('#post_desc').val();
    if(postdesc==''){
        toastr.error("Vui lòng điền thông tin");
        checknumber++;
    }
    var postcategories = $('#categories_id').val();
    if(postdesc==0){
        toastr.error("Vui lòng chọn mục");
        checknumber++;
    }
    event.preventDefault();
    if(checknumber===0){
        // Chặn ngăn trang chuyển tiếp
    event.preventDefault();
    // Lấy tất cả dữ liệu trong from vào trong biến data
    // var $data = $('#form-add-category').serialize();
    var formData = new FormData($('#form-add-post')[0]);

    // Sử dụng ajax
    $.ajax({
        type:'post',
        async: false,
        cache: false,
        processData: false, // important
        contentType: false,
        // là route post của hành động này
        url:'/admin.shop/post/create',
        data:formData,
        success:function(resultController){
            console.log(resultController)
            toastr.success('Thêm thành công');
            // window.location.href = '/admin.shop/staff'
            // $('#form-add-category')[0].reset();


        },
        error:function(resultController){
            console.log(resultController);
            var k=resultController.responseJSON;
            for(var j in k.errors)
                toastr.error(k.errors[j][0]);
            toastr.error("Thêm không thành, vui lòng điền đầy đủ thông tin");
        }

    })
    }
})
/// End Post
