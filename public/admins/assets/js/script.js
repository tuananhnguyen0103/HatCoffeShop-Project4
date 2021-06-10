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
// $('#form-add-category').submit(function(){
//     // Chặn ngăn trang chuyển tiếp
//     event.preventDefault();
//     // Lấy tất cả dữ liệu trong from vào trong biến data
//     var $data = $('#form-add-category').serialize();
//     console.log($data);
//     // Sử dụng ajax
//     $.ajax({
//         type:'post',
//         // là route post của hành động này
//         url:'/admin.shop/category/create',
//         data:$data,
//         success:function(resultController){

//             if(resultController==1){
//                 toastr.success('Thêm thành công');
//             $('#form-add-category')[0].reset();
//             }

//         },
//         error:function(resultController){
//             console.log(resultController);
//             var k=resultController.responseJSON;
//             for(var j in k.errors)
//                 toastr.error(k.errors[j][0]);
//             toastr.error("Thêm không thành, vui lòng điền đầy đủ thông tin");
//         }

//     })
// })
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
