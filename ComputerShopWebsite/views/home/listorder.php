<?php
require_once('views/partials/Headeruser.php');
?>
<!--================Header Menu Area =================-->

<!--================Home Banner Area =================-->

<!--================End Home Banner Area =================-->

<!--================Cart Area =================-->
<section class="cart_area">
    <div class="container">
        <div class="cart_inner">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th> STT</th>
                            <th>Mã đơn hàng</th>
                            <th>Ngày đặt</th>
                            <th>Tổng tiền</th>
                            <th>Tình trạng</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $stt = 1;
                        foreach ($ListOrders as $value) {
                        ?>
                            <tr>
                                <td><?= $stt++ ?></td>
                                <td>
                                    <p><?= $value['id'] ?></p>
                                </td>
                                <td>
                                    <p><?= $value['create_at'] ?></p>
                                </td>
                                <td>
                                    <h5><?= number_format($value['total']) ?> đ</h5>
                                </td>
                                <td>
                                    <?php if ($value['status'] == 'Đang chờ duyệt') {  ?>
                                        <h4><?= $value['status'] ?></h4>
                                    <?php } else if ($value['status'] == 'Đã duyệt') {  ?>
                                        <h4><?= $value['status'] ?></h4>
                                    <?php } else if ($value['status'] == 'Đang giao hàng') {  ?>
                                        <h4><?= $value['status'] ?><p><a href="index.php?mod=home&act=update&id=<?= $value['id'] ?>">( click vào để xác nhận đã nhận)</a></p>
                                        </h4>

                                    <?php } else { ?>
                                        <h4><?= $value['status'] ?></h4>
                                    <?php  } ?>
                                </td>

                                <td>
                                    <a href="index.php?mod=home&act=detailOrder&id=<?= $value['id'] ?>">
                                        Xem sản phẩm
                                    </a>
                                </td>
                            </tr>
                        <?php }  ?>
                        <tr class="out_button_area">
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <div class="checkout_btn_inner">
                                    <a class="gray_btn" href="index.php?mod=home&act=index">Quay lại </a>
                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<!--================End Cart Area =================-->

<!--================ start footer Area  =================-->

<?php
require_once('views/partials/Footeruser.php');
?>