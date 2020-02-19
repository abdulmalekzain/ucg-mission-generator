<?php 
require("header.php");

$id = $_GET['id'];

$sql="SELECT * FROM missions WHERE id =".$id;
mysqli_query($connection,"set names utf8");
$result=mysqli_query($connection,$sql);

$item=mysqli_fetch_assoc($result);
$type = $item['Type'];
?>
<body class="A4">
<section class="sheet">
    <img src="top.png">
    <div class="container">

        <div class="row mt-3">
            <div class="col-12 text-center">
                <h3 class="font-weight-bold">إلى من يهمه الأمر</h3>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-12 text-right px-5">
                <p>
المجموعة المتحدة للإسمنت شركة محدودة المسؤولية تخضع لقانون الاستثمار رقم /10/ لعام  1991 , رقم
السجل التجاري 9661 تاريخ 20/5/2010 , مسجلة بغرفة صناعة دمشق وريفها برقم 17515 بتاريخ
4/11/2010 , تقوم بإنشاء معمل أسمنت في منطقة أبو الشامات بطاقة انتاجية 2.5 مليون طن اسمنت سنويا
</p>
            </div>
        </div>

        <?php if($type === '1') {
?>

        <div class="row mt-4">
            <div class="col-12 text-right px-5">
            <?php if($item['Custom']) {?>
                <p class="editableP" contenteditable="true"><?php echo $item['CustomData'] ?></p>
          <?php  } else { ?>
                <p class="editableP" contenteditable="true">يرجى تسهيل مرور <?php echo $item['Vehicle'] ?> \  <?php echo $item['VehicleNum'] ?>  \ سائقها <?php echo $item['Driver'];?> يحمل التالي:</p>
            <?php } ?>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-12 text-right px-5">
                <ul>
                   <?php echo $item['Items']; ?>
                </ul>
            </div>
        </div>

<?php   } ?>

<?php if($type === '2') {
?>
        <div class="row mt-4">
            <div class="col-12 text-right px-5">

            <?php if($item['Custom']) {?>
                <p class="editableP" contenteditable="true"><?php echo $item['CustomData'] ?></p>
          <?php  } else { ?>
                <p class="editableP" contenteditable="true">يرجى تسهيل مرور العمال التاليين للقيام بأشغال <?php echo $item['WorkersWork'];?> داخل المعمل:</p>
            <?php } ?>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-12 text-right px-5">
                <ul>
                   <?php echo $item['Workers']; ?>
                </ul>
            </div>
        </div>


<?php   } ?>

<?php if($type === '3') {
?>

        <div class="row mt-4">
            <div class="col-12 text-right px-5">
            <?php if($item['Custom']) {?>
                <p class="editableP" contenteditable="true"><?php echo $item['CustomData'] ?></p>
          <?php  } else { ?>
                <p class="editableP" contenteditable="true">يرجى تسهيل مرور <?php echo $item['Vehicle'] ?> \  <?php echo $item['VehicleNum'] ?>  \ سائقها <?php echo $item['Driver'];?> برفقة العمال التاليين للقيام بأعمال  <?php echo $item['WorkersWork'] ?>:</p>
            <?php } ?>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-12 text-right px-5">
                <ul>
                   <?php echo $item['Workers']; ?>
                </ul>
            </div>
        </div>

<?php   } ?>

<?php if($type === '4') {
?>

        <div class="row mt-4">
            <div class="col-12 text-right px-5">
            <?php if($item['Custom']) {?>
                <p class="editableP" contenteditable="true"><?php echo $item['CustomData'] ?></p>
          <?php  } else { ?>
                <p class="editableP" contenteditable="true">يرجى تسهيل مرور <?php echo $item['Vehicle'] ?> \  <?php echo $item['VehicleNum'] ?>  \ سائقها <?php echo $item['Driver'];?> يحمل التالي:</p>
            <?php } ?>

            </div>
        </div>

        <div class="row mt-3">
            <div class="col-12 text-right px-5">
               <p>قائمة العمال: </p>
            </div>
        </div>

        <div class="row">
            <div class="col-12 text-right px-5">
                <ul class="halfList">
                   <?php echo $item['Workers']; ?>
                </ul>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-12 text-right px-5">
               <p>قائمة المواد: </p>
            </div>
        </div>

        <div class="row">
            <div class="col-12 text-right px-5">
                <ul class="halfList">
                   <?php echo $item['Items']; ?>
                </ul>
            </div>
        </div>

<?php   } ?>

<?php if($type === '5') {
?>
        <div class="row mt-4">
            <div class="col-12 text-right px-5">
            <?php if($item['Custom']) {?>
                <p class="editableP" contenteditable="true"><?php echo $item['CustomData'] ?></p>
          <?php  } else { ?>
                <p class="editableP" contenteditable="true">يرجى تسهيل مرور <?php echo $item['Vehicle'] ?> \  <?php echo $item['VehicleNum'] ?>  \  سائقها السيد <?php echo $item['Driver'];?> إلى داخل المعمل المتواجد في أبو الشامات</p>
            <?php } ?>

            </div>
        </div>
<?php   } ?>


    </div>
    <div class="company">
        <h4>شركة المجموعة المتحدة<br> للإسمنت المحدودة المسؤولية</h4>
    </div>
    <form action="custom.php" method="POST">
        <div class="fob">
            <input type="hidden" name="id" value="<?php echo $id ?>">
            <input type="hidden" name="custom" id="customhtml" value="">
            <button type="submit" class="btn btn-primary saveP">حفظ</button>
            <button type="button" class="btn btn-success printMe">طباعة</button>
        </div>
    </form>
    <img src="bottom.png" class="bottom" alt="">
</section>
</body>

<?php require("footer.php")?>