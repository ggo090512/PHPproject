<?php 
require_once('views/partials/Header.php');
?>
<?php 
require_once('views/partials/Sidebar.php');
?>

<?php 
require_once('views/partials/Footertop.php');
?>

<main class="main users chart-page" id="skip-target">

  <form class="sign-up-form form"  action="index.php?mod=product&act=store" method="POST" role="form" enctype="multipart/form-data">
   <p class="form-label" style="font-size: 20px">Tạo sản phẩm mới</p>
   <div class="form-group">
    <label class="form-label-wrapper">
      <p class="form-label">Danh mục</p>
      <select  class="form-input" name="category_id">
        <?php foreach ($categories as  $value) {
         ?>
         <option value="<?= $value['id'] ?>"><?= $value['category_name']  ?></option>
       <?php } ?>
     </select>
   </label>
 </div>

 <div class="form-group">
   <label class="form-label-wrapper">
    <p class="form-label">Tên sản phẩm</p>
    <input class="form-input" type="text" placeholder="Tên địa điểm..." name="product_name" required>
  </label>
</div>


<div class="form-group">
 <label class="form-label-wrapper">

  <p class="form-label">Ảnh 1</p>
  <input type="file" class="form-input" id="" placeholder="" name="image">
</label>
</div>
<div class="form-group">
 <label class="form-label-wrapper">
  <p class="form-label">Ảnh 2</p>
  <input type="file" class="form-input" id="" placeholder="" name="image1">
</label>
</div>
<div class="form-group">
 <label class="form-label-wrapper">

  <p class="form-label">Ảnh 3</p>
  <input type="file" class="form-input" id="" placeholder="" name="image2">
</label>
</div>


<div class="form-group">
   <label class="form-label-wrapper">
    <p class="form-label">Giá</p>

    <input class="form-input" type="text" placeholder="Tên địa điểm..." name="originalprice" required>
  </label>
</div>

<div class="form-group">
   <label class="form-label-wrapper">
    <p class="form-label"> Giá khuyến mãi</p>

    <input class="form-input" type="text" placeholder="Tên địa điểm..." name="promotionalprice" required>
  </label>
</div>

<div class="form-group">
   <label class="form-label-wrapper">
    <p class="form-label">Số lượng</p>
    <input class="form-input" type="text" placeholder="Tên địa điểm..." name="amount" required>
  </label>
</div>


<div class="form-group">
 <label class="form-label-wrapper">
  <p class="form-label">Nội dung</p>
  <textarea name="content" class="form-control" name="content" id="content" cols="40" rows="10"></textarea>
  
</label>
</div>

<button type="submit" style="margin-top: 1%" class="form-btn primary-default-btn transparent-btn">Thêm bài viết</button>

</form>

</main>
<?php 
require_once('views/partials/Footerbottom.php');
?>