<div class="left_sidebar_area">
    <aside class="left_widgets p_filter_widgets">
        <div class="l_w_title">
            <h3>Danh Mục Sản Phẩm</h3>
        </div>
        <div class="widgets_inner">
            <ul class="list">
                <?php foreach (listcategories() as $category) { ?>
                    <li>
                        <a href="index.php?mod=home&act=productbycategory&id=<?= $category['id'] ?>"><?= $category['category_name'] ?>  (<?= Sum($category['id']) ?>)</a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </aside>
</div>