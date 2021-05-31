<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>order_confirmation</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=455" />
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,200,600,700" rel="stylesheet" type="text/css" />

        <!--[if mso]>
            <style type=”text/css”>
            td{font-family: Arial, sans-serif !important;}
            </style>
        <![endif]-->
        <style type="text/css">
            a {
                outline: none;
                color: #00baf2;
                text-decoration: none;
            }
            a:hover {
                text-decoration: underline !important;
            }
            .active a:hover {
                text-decoration: none !important;
            }
            .no-link span {
                text-decoration: none !important;
                border: none !important;
                color: #acacac !important;
            }
            a[x-apple-data-detectors] {
                color: inherit !important;
                text-decoration: none !important;
            }
            .active:hover {
                opacity: 0.8;
            }
            .active {
                -webkit-transition: all 0.3s ease;
                -moz-transition: all 0.3s ease;
                -ms-transition: all 0.3s ease;
                transition: all 0.3s ease;
            }
            a img {
                border: none;
            }
            table td {
                mso-line-height-rule: exactly;
            }
            .ExternalClass,
            .ExternalClass a,
            .ExternalClass span,
            .ExternalClass b,
            .ExternalClass br,
            .ExternalClass p,
            .ExternalClass div {
                line-height: inherit;
            }
            ul {
                margin: 0 0 0 20px;
                padding: 0;
            }
            .tpl-content {
                padding: 0 !important;
            }
            .cke_show_borders {
                background: #e4e4e4 !important;
            }
            .tpl-repeatmovewrap > .tpl-repeatmove {
                top: -15px !important;
            }
        </style>
    </head>
    <body style="margin: 0; padding: 0; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; background-color: #edf1f2;">
        <table width="100%" cellspacing="0" cellpadding="0">
            <!-- fix for gmail -->
            <tr>
                <td style="line-height: 0;">
                    <div style="display: none; white-space: nowrap; font: 15px/1px courier;"></div>
                </td>
            </tr>
            <tr>
                <td style="padding: 0px 10px;">
                    <table width="480" align="center" style="margin: 0 auto;" cellpadding="0" cellspacing="0">
                        <!-- fix for gmail -->


                        <!-- content -->
                        <tr>
                            <td bgcolor="#ffffff" style="padding: 0px 0px; background-color: #ffffff;">
                                <table width="100%" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td align="center" colspan="4" style="font: lighter 35px/40px Roboto, Source Sans Pro, Helvetica, Arial, sans-serif; color: #4a4a4a; padding: 0px 50px 40px;">
                                            Đơn hàng của bạn:
                                            <br />

                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="no-link" align="center" width="50"></td>
                                        <td align="left" style="font: 1.4rem Roboto, Source Sans Pro, Helvetica, Arial, sans-serif; color: #5d5d5d; padding: 0rem 1rem 1rem 1rem;">
                                            Tên sản phẩm
                                            <br />
                                            <br />
                                        </td><td align="left" style="font: 1.4rem Roboto, Source Sans Pro, Helvetica, Arial, sans-serif; color: #5d5d5d; padding: 0rem 1rem 1rem 1rem;">
                                            SL
                                            <br />
                                            <br />
                                        </td>
                                        <td align="right" valign="top" style="vertical-align: top; font: 1.4rem Roboto, Source Sans Pro, Helvetica, Arial, sans-serif; color: #5d5d5d; padding: 0rem 1rem 1rem 1rem;">
                                            Giá
                                            <br />
                                        </td>
                                        <td class="no-link" align="center" width="50"></td>
                                    </tr>
                                    <tr>
                                        <td class="no-link" align="center" width="50"></td>
                                        <td
                                            align="left"
                                            style="
                                                font: 400 0px/0px Roboto, Source Sans Pro, Helvetica, Arial, sans-serif;
                                                color: #5d5d5d;
                                                padding: 0px 0px;
                                                border-width: 1px 0px 0px;
                                                border-color: #979797;
                                                border-style: solid none none none;
                                            "
                                        ></td>
                                        <td
                                            align="left"
                                            style="
                                                font: 400 0px/0px Roboto, Source Sans Pro, Helvetica, Arial, sans-serif;
                                                color: #5d5d5d;
                                                padding: 0px 0px;
                                                border-width: 1px 0px 0px;
                                                border-color: #979797;
                                                border-style: solid none none none;
                                            "
                                        ></td>
                                        <td
                                            align="right"
                                            valign="top"
                                            style="
                                                vertical-align: top;
                                                font: 400 0px/0px Roboto, Source Sans Pro, Helvetica, Arial, sans-serif;
                                                color: #5d5d5d;
                                                padding: 0px 0px 40px;
                                                border-width: 1px 0px 0px;
                                                border-color: #979797;
                                                border-style: solid none none none;
                                            "
                                        >
                                            <br />
                                        </td>
                                        <td class="no-link" align="center" width="50"></td>
                                    </tr>

                                    <!-- eero Pro 6 -->
                                    @foreach ($cartcontent as $item )

                                    <tr>
                                        <td class="no-link" align="center" width="50"></td>
                                        <td align="left" style="font: 0.8rem Roboto, Source Sans Pro, Helvetica, Arial, sans-serif; color: #5d5d5d; padding: 0rem 1rem 4rem 1rem;">
                                            {{$item->name}}
                                            <br />
                                            <br />
                                        </td><td align="left" style="font: 0.8rem Roboto, Source Sans Pro, Helvetica, Arial, sans-serif; color: #5d5d5d; padding: 0rem 1rem 4rem 1rem;">
                                            {{$item->qty}}
                                            <br />
                                            <br />
                                        </td>
                                        <td align="right" valign="top" style="vertical-align: top; font: 0.8rem Roboto, Source Sans Pro, Helvetica, Arial, sans-serif; color: #5d5d5d; padding: 0rem 1rem 4rem 1rem;">
                                            {{number_format($item->price)}} VNĐ
                                            <br />
                                        </td>
                                        <td class="no-link" align="center" width="50"></td>
                                    </tr>
                                    @endforeach


                                    <!-- eero 6 2pk CA-->

                                    <!--
                                <tr>
                                    <td mc:edit="block_04" class="no-link" align="center" width="50">
                                    </td>
                                    <td align="left" style="font: 400 24px/29px Roboto, Source Sans Pro, Helvetica, Arial, sans-serif; color: #5D5D5D; padding: 40px 0px;" mc:edit="block_05">(1) Mixed SKU, Retail, AG-AL-AL, 3PK, USA
                                    </td>
                                    <td align="right" valign="top" style="vertical-align: top; font: 400 24px/29px Roboto, Source Sans Pro, Helvetica, Arial, sans-serif; color: #5D5D5D; padding: 40px 0px;" mc:edit="block_55">
                                        $279.00
                                        <br>
                                    </td>
                                    <td mc:edit="block_06" class="no-link" align="center" width="50">
                                    </td>
                                </tr>
                                 -->
                                    <tr>
                                        <td class="no-link" align="center" width="50"></td>
                                        <td
                                            align="left"
                                            style="
                                                vertical-align: top;
                                                font: 1rem Roboto, Source Sans Pro, Helvetica, Arial, sans-serif;
                                                color: #5d5d5d;
                                                padding: 40px 0px 0px;
                                                border-width: 1px 0px 0px;
                                                border-color: #979797;
                                                border-style: solid none none none;
                                            "
                                        >
                                            Tổng tiền (VNĐ):
                                        </td>
                                        <td
                                            align="left"
                                            style="
                                                font: 400 0px/0px Roboto, Source Sans Pro, Helvetica, Arial, sans-serif;
                                                color: #5d5d5d;
                                                padding: 0px 0px;
                                                border-width: 1px 0px 0px;
                                                border-color: #979797;
                                                border-style: solid none none none;
                                            "
                                        ></td>
                                        <td
                                            align="right"
                                            valign="top"
                                            style="
                                                vertical-align: top;
                                                font: 1rem Roboto, Source Sans Pro, Helvetica, Arial, sans-serif;
                                                color: #5d5d5d;
                                                padding: 40px 0px 0px;
                                                border-width: 1px 0px 0px;
                                                border-color: #979797;
                                                border-style: solid none none none;
                                            "
                                        >
                                        {{number_format($total)}}
                                        </td>
                                        <td class="no-link" align="center" width="50"></td>
                                    </tr>

                                    <tr>

                                    </tr>
                                    <tr>
                                        <td class="no-link" align="center" width="50"></td>
                                        <td align="left" colspan="2" bgcolor="#F7F7F7" style="font: lighter 18px/24px Roboto, Source Sans Pro, Helvetica, Arial, sans-serif; color: #5d5d5d; padding: 55px 50px; background-color: #f7f7f7;">
                                            Chúng tôi đã sẵn sàng cho đơn hàng của bạn, vui lòng kiểm tra lại thông tin của mình:
                                            <p style="font: 400 24px/30px Roboto, Source Sans Pro, Helvetica, Arial, sans-serif; color: #4a4a4a; margin: 0px; padding: 20px 0px 0px;">Thông tin đơn hàng:</p>
                                            Anh/Chị: {{$inforCustormer["customer_name"]}}
                                            <br />
                                            SĐT: {{$inforCustormer["customer_phone_number"]}} <br />
                                            Địa chỉ: {{$inforCustormer["customer_address"]}}
                                            <p></p>
                                        </td>
                                        <td class="no-link" align="center" width="50"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" align="center" bgcolor="#fff" style="font: 400 24px/29px Roboto, Source Sans Pro, Helvetica, Arial, sans-serif; color: #4a4a4a; padding: 55px 50px; background-color: #fff;">

                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" style="padding: 0px 0px 0px;">
                                            <table width="100%" cellpadding="0" cellspacing="0">
                                                <tr>
                                                    <td style="padding: 40px 0px;" bgcolor="#001949">
                                                        <table align="center" style="margin: 0 auto;" cellpadding="0" cellspacing="0">
                                                            <tr>
                                                                <td class="active" width="18">
                                                                    <a
                                                                        href="https://www.facebook.com/Hatcafeandtea"
                                                                        target="_blank"
                                                                        style="text-decoration: none; color: #c4c4c4;"
                                                                    >
                                                                        <img
                                                                            src="https://gallery.mailchimp.com/227964591a0bc1283160a5186/images/6aa58872-0c66-4f81-a7db-162e01ab3248.png"
                                                                            alt="fb"
                                                                            style="vertical-align: top; height: 23px; font: 12px/17px Arial, Helvetica, sans-serif;"
                                                                            height="23"
                                                                        />
                                                                    </a>
                                                                </td>
                                                                <td width="30"></td>
                                                                <td class="active" width="18">
                                                                    <a
                                                                        href="http://127.0.0.1:8000/"
                                                                        target="_blank"
                                                                        style="text-decoration: none; color: #c4c4c4;"
                                                                    >
                                                                        <img
                                                                            src="https://scontent-hkt1-2.cdninstagram.com/v/t51.2885-19/s150x150/146566334_123030829628495_3318334775075690121_n.jpg?tp=1&_nc_ht=scontent-hkt1-2.cdninstagram.com&_nc_ohc=vO92e84tB1EAX8jyLzR&edm=ABfd0MgBAAAA&ccb=7-4&oh=7778f8caaca40fa21a752347a4b1cb32&oe=60BAED50&_nc_sid=7bff83"
                                                                            alt="tw"
                                                                            style="vertical-align: top; height: 23px; font: 12px/17px Arial, Helvetica, sans-serif;"
                                                                            height="23"
                                                                        />
                                                                    </a>
                                                                </td>
                                                                <td width="30"></td>
                                                                <td class="active" width="19">
                                                                    <a
                                                                        href="https://www.instagram.com/hatcafe882020/"
                                                                        target="_blank"
                                                                        style="text-decoration: none; color: #c4c4c4;"
                                                                    >
                                                                        <img
                                                                            src="https://gallery.mailchimp.com/227964591a0bc1283160a5186/images/b6208fb3-d9cb-42dc-a2b1-a6bc0d84d03b.png"
                                                                            alt="gp"
                                                                            style="vertical-align: top; height: 23px; font: 12px/17px Arial, Helvetica, sans-serif;"
                                                                            height="23"
                                                                        />
                                                                    </a>
                                                                </td>
                                                                <td width="30"></td>

                                                            </tr>
                                                        </table>
                                                        <table width="100%" cellpadding="0" cellspacing="0">


                                                            <!--
                                                        <tr>
                                                            <td mc:edit="block_36" class="no-link" align="center" width="115">
                                                            </td>
                                                            <td mc:edit="block_37" class="no-link" align="center" width="125" style="padding: 0px;">
                                                                <a href="https://eero.com"><img src="https://gallery.mailchimp.com/227964591a0bc1283160a5186/images/71e19d79-5397-458c-a3a9-d2f2d6b360dc.png" height="9" align="center" style=" height:9px;"></a>
                                                            </td>
                                                            <td mc:edit="block_38" class="no-link" align="center" width="125" style="padding: 0px;">
                                                                <a href="https://eero.com"><img src="https://gallery.mailchimp.com/227964591a0bc1283160a5186/images/5db9ac14-a733-485d-835f-cc9c3f4d7102.png" align="center" height="9" style="height:9px;"></a>
                                                            </td>
                                                            <td mc:edit="block_56" class="no-link" align="center" width="115">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="4" mc:edit="block_39" class="no-link" align="center" bgcolor="#001949" style="padding: 20px 0px 0px;">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td mc:edit="block_40" class="no-link" align="center" width="115">
                                                            </td>
                                                            <td mc:edit="block_41" class="no-link" align="center" width="125" style="padding: 0px;">
                                                                <a href="https://eero.com"><img src="https://gallery.mailchimp.com/227964591a0bc1283160a5186/images/b92e2a21-f92e-464c-a6e9-2c1c0029b39c.png" height="9" align="center" style=" height:9px;"></a>
                                                            </td>
                                                            <td mc:edit="block_42" class="no-link" align="center" width="125px" style="padding: 0px;">
                                                                <a href="https://eero.com"><img src="https://gallery.mailchimp.com/227964591a0bc1283160a5186/images/3cfc1df6-25f0-476c-aa9b-aa3a92a0cab6.png" align="center" height="9" style="height:9px;"></a>
                                                            </td>
                                                            <td mc:edit="block_43" class="no-link" align="center" width="115">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="4" mc:edit="block_44" class="no-link" align="center" bgcolor="#001949" style="padding: 20px 0px 0px;">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td mc:edit="block_45" class="no-link" align="center" width="115">
                                                            </td>
                                                            <td mc:edit="block_46" class="no-link" align="center" width="125" style="padding: 0px;">
                                                                <a href="https://eero.com"><img src="https://gallery.mailchimp.com/227964591a0bc1283160a5186/images/85422dfa-9348-4803-bdbc-e444db7fe793.png" height="9" align="center" style=" height:9px;"></a>
                                                            </td>
                                                            <td mc:edit="block_47" class="no-link" align="center" width="125" style="padding: 0px;">
                                                                <a href="https://eero.com"><img src="https://gallery.mailchimp.com/227964591a0bc1283160a5186/images/2efa877c-2d46-4111-8948-d7de27b7056b.png" align="center" height="9" style="height:9px;"></a>
                                                            </td>
                                                            <td mc:edit="block_48" class="no-link" align="center" width="115">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="4" mc:edit="block_49" class="no-link" align="center" bgcolor="#001949" style="padding: 20px 0px 0px;">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td mc:edit="block_50" class="no-link" align="center" width="115">
                                                            </td>
                                                            <td mc:edit="block_51" class="no-link" align="center" width="125" style="padding: 0px;">
                                                                <a href="https://eero.com"><img src="https://gallery.mailchimp.com/227964591a0bc1283160a5186/images/6248457b-5cd2-45b9-b3cc-616d233e1d9a.png" height="9" align="center" style=" height:9px;"></a>
                                                            </td>
                                                            <td mc:edit="block_52" class="no-link" align="center" width="125" style="padding: 0px;">
                                                                <a href="https://eero.com"><img src="https://gallery.mailchimp.com/227964591a0bc1283160a5186/images/5b7ccbfe-977e-42ef-932a-e36806428be2.png" align="center" height="9" style="height:9px;"></a>
                                                            </td>
                                                            <td mc:edit="block_53" class="no-link" align="center" width="115">
                                                            </td>
                                                        </tr>
                                                         -->
                                                            <tr>
                                                                <td
                                                                    colspan="4"
                                                                    class="no-link"
                                                                    align="center"
                                                                    bgcolor="#001949"
                                                                    style="font: 300 12px/18px Source Sans Pro, Helvetica, Arial, sans-serif; color: #ffffff; padding: 0px 0px 0px;"
                                                                >
                                                                    <a
                                                                        href="http://mail.eero.com/track/click/30727349/eero.com?p=eyJzIjoieFk1MmZRanF6SUpjWjNVNHZJcEl6TVV2MTlvIiwidiI6MSwicCI6IntcInVcIjozMDcyNzM0OSxcInZcIjoxLFwidXJsXCI6XCJodHRwczpcXFwvXFxcL2Vlcm8uY29tXFxcL2xlZ2FsXFxcL3Rvc1wiLFwiaWRcIjpcIjlmZGNhMGM5MTAxMzRjMmU5ODUxZjY0Mzg4ZDY3ZDYwXCIsXCJ1cmxfaWRzXCI6W1wiN2JmOWIyNzlkMjQ5Y2M4ZjBhZmI0NDgzZTMxODAzODk3ODE5Y2Q5YVwiXX0ifQ"
                                                                        style="color: #ffffff;"
                                                                    >

                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>

                        <!-- footer -->
                    </table>
                </td>
            </tr>
        </table>
    </body>
</html>
