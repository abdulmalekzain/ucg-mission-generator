<?php 
require("header.php");


if(isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql1="SELECT * FROM missions WHERE id =".$id;
    mysqli_query($connection,"set names utf8");
    $result=mysqli_query($connection,$sql1);

    $edit=mysqli_fetch_assoc($result);
}
?>
<body class="inputBody">
    <section class="container formContainer">
        <form action="add.php" method="post">

            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="driver">نوع المهمة: </label>
                <div class="col-sm-10">
                    <?php if(!isset($edit)) {?>
                    
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="type" id="carType" value="1">
                            <label class="form-check-label" for="carType">سيارة + مواد</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="type" id="carType1" value="2">
                            <label class="form-check-label" for="carType1">عمال</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="type" id="carType2" value="3">
                            <label class="form-check-label" for="carType2">سيارة + عمال</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="type" id="carType3" value="4">
                            <label class="form-check-label" for="carType3">سيارة + عمال + مواد</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="type" id="carType4" value="5">
                            <label class="form-check-label" for="carType4">دخول سيارة</label>
                        </div>


                    <?php } else if ($edit['Type'] == 1) {
                        preg_match_all('/<li>(.*?)<\/li>/s', $edit['Items'], $itemsPlain);
                                                ?>
                    
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="type" id="carType" checked value="1">
                            <label class="form-check-label" for="carType">سيارة + مواد</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="type" id="carType1" value="2">
                            <label class="form-check-label" for="carType1">عمال</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="type" id="carType2" value="3">
                            <label class="form-check-label" for="carType2">سيارة + عمال</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="type" id="carType3" value="4">
                            <label class="form-check-label" for="carType3">سيارة + عمال + مواد</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="type" id="carType4" value="5">
                            <label class="form-check-label" for="carType4">دخول سيارة</label>
                        </div>

                    <?php } else if ($edit['Type'] == 2) {
                        
                        preg_match_all('/<li>(.*?)<\/li>/s', $edit['Workers'], $workersPlain);
                        ?>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="type" id="carType" value="1">
                            <label class="form-check-label" for="carType">سيارة + مواد</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="type" id="carType1" checked value="2">
                            <label class="form-check-label" for="carType1">عمال</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="type" id="carType2" value="3">
                            <label class="form-check-label" for="carType2">سيارة + عمال</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="type" id="carType3" value="4">
                            <label class="form-check-label" for="carType3">سيارة + عمال + مواد</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="type" id="carType4" value="5">
                            <label class="form-check-label" for="carType4">دخول سيارة</label>
                        </div>


                        <?php } else if ($edit['Type'] == 3) {
                            preg_match_all('/<li>(.*?)<\/li>/s', $edit['Items'], $itemsPlain);
                            preg_match_all('/<li>(.*?)<\/li>/s', $edit['Workers'], $workersPlain);
                        ?>

                        

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="type" id="carType" value="1">
                            <label class="form-check-label" for="carType">سيارة + مواد</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="type" id="carType1" value="2">
                            <label class="form-check-label" for="carType1">عمال</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="type" id="carType2" checked value="3">
                            <label class="form-check-label" for="carType2">سيارة + عمال</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="type" id="carType3" value="4">
                            <label class="form-check-label" for="carType3">سيارة + عمال + مواد</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="type" id="carType4" value="5">
                            <label class="form-check-label" for="carType4">دخول سيارة</label>
                        </div>


                        <?php } else if ($edit['Type'] == 4){
                            preg_match_all('/<li>(.*?)<\/li>/s', $edit['Items'], $itemsPlain);
                            preg_match_all('/<li>(.*?)<\/li>/s', $edit['Workers'], $workersPlain);
                        ?>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="type" id="carType" value="1">
                            <label class="form-check-label" for="carType">سيارة + مواد</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="type" id="carType1" value="2">
                            <label class="form-check-label" for="carType1">عمال</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="type" id="carType2" value="3">
                            <label class="form-check-label" for="carType2">سيارة + عمال</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="type" id="carType3" checked value="4">
                            <label class="form-check-label" for="carType3">سيارة + عمال + مواد</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="type" id="carType4" value="5">
                            <label class="form-check-label" for="carType4">دخول سيارة</label>
                        </div>

                        <?php } else if ($edit['Type'] == 5) {?>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="type" id="carType" value="1">
                            <label class="form-check-label" for="carType">سيارة + مواد</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="type" id="carType1" value="2">
                            <label class="form-check-label" for="carType1">عمال</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="type" id="carType2" value="3">
                            <label class="form-check-label" for="carType2">سيارة + عمال</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="type" id="carType3" value="4">
                            <label class="form-check-label" for="carType3">سيارة + عمال + مواد</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="type" id="carType4" checked value="5">
                            <label class="form-check-label" for="carType4">دخول سيارة</label>
                        </div>
                    <?php } ?>
                </div>
            </div>

            <div class="form-group row" id="driverNameForm">
                <label class="col-sm-2 col-form-label" for="driver">اسم ورقم هوية السائق: </label>
                <div class="col-sm-10">
                    <?php if(!isset($edit)) {?>
                    <input type="text" required class="form-control" id="driver" name="driver">
                    <?php } else {?>
                    <input type="text" required class="form-control" id="driver" value="<?php echo $edit['Driver']; ?>" name="driver">
                    <?php } ?>
                </div>
            </div>


            <?php if(!isset($edit)) {?>
            <div class="form-group row" id="carTypeForm">
                <label class="col-sm-2 col-form-label" for="car">نوع السيارة: </label>
                <div class="col-sm-10">
                    <select class="form-control" id="car" name="car">
                        <option value="السيارة">السيارة</option>
                        <option value="الفان">الفان</option>
                        <option value="المقطورة">المقطورة</option>
                        <option value="السطحة">السطحة</option>
                    </select>
                </div>
            </div>
            <?php } else { ?>
                <input type="hidden" name="car" value="">
            <?php } ?>


            <div class="form-group row" id="carNameForm">
                <label class="col-sm-2 col-form-label" for="carName">موديل السيارة: </label>
                <div class="col-sm-10">
                    <?php if(!isset($edit)) {?>
                    <input type="text" class="form-control" id="carName" name="carName">
                    <?php } else {?>
                    <input type="text" class="form-control" id="carName" value="<?php echo $edit['Vehicle']; ?>" name="carName">
                    <?php } ?>
                </div>
            </div>

            <div class="form-group row" id="carNumForm">
                <label class="col-sm-2 col-form-label" for="carNum">رقم ومحافظة السيارة: </label>
                <div class="col-sm-10">
                    <?php if(!isset($edit)) {?>
                    <input type="text" required class="form-control" id="carNum" name="carNum">
                    <?php } else {?>
                    <input type="text" required class="form-control" id="carNum" value="<?php echo $edit['VehicleNum']; ?>" name="carNum">
                    <?php } ?>
                </div>
            </div>
            <div class="form-group row" id="itemsForm">
                <label class="col-sm-2 col-form-label" for="item1">المواد: </label>
                <div class="col-sm-10" id="itemContainer">

            <?php if(!isset($edit)) {?>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="item1" name="item1">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" id="remove" type="button">حذف</button>
                        </div>
                    </div>
                <?php $lastItemsKey = 1;} else if(isset($edit) && $edit['Type'] === '1' || $edit['Type'] === '3' || $edit['Type'] === '4') {
                        
                        foreach ($itemsPlain[1] as $key => $value) {
                        
                    ?>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="item<?php echo $key ?>" name="item<?php echo $key+1 ?>" value="<?php echo $value;?>">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" id="remove" type="button">حذف</button>
                            </div>
                        </div>
                    <?php $lastItemsKey = $key+1;}}?>
                </div> 

                <div class="col-2"></div>
                <div class="col-2">
                    <button type="button" id="addMore" class="btn btn-primary btn-lg btn-block">المزيد</button>
                </div>
            </div>

            

            <div class="form-group row" id="workersWorkForm">
                <label class="col-sm-2 col-form-label" for="workersWork">الأشغال:  </label>
                <div class="col-sm-10">
                    <?php if(!isset($edit)) {?>
                    <input type="text" class="form-control" id="workersWork" name="workersWork">
                    <?php } else {?>
                    <input type="text" class="form-control" id="workersWork" value="<?php echo $edit['WorkersWork']; ?>" name="workersWork">
                    <?php } ?>
                </div>
            </div>

            <div class="form-group row" id="workersForm">
                <label class="col-sm-2 col-form-label" for="worker1">العمال: </label>
                <div class="col-sm-10" id="workerContainer">

                <?php if(!isset($edit)) {?>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="worker1" name="worker1">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" id="remove" type="button">حذف</button>
                        </div>
                    </div>
                    <?php $lastWorkerKey = 1;} else if(isset($edit) && $edit['Type'] === '2' || $edit['Type'] === '3' || $edit['Type'] === '4') {
                        
                        foreach ($workersPlain[1] as $key => $value) {
                    ?>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="worker<?php echo $key ?>" name="worker<?php echo $key+1 ?>" value="<?php echo $value;?>">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" id="remove" type="button">حذف</button>
                            </div>
                        </div>
                    <?php $lastWorkerKey = $key+1; }}?>

                  

                </div>

                <div class="col-2"></div>
                <div class="col-2">
                    <button type="button" id="addMoreWorker" class="btn btn-primary btn-lg btn-block">المزيد</button>
                </div>
            </div>

            <div class="form-group row buttonBlock">
                <div class="col-3">
                    <button type="submit" id="submit" class="btn btn-success btn-lg btn-block">إنشاء</button>
                </div>
                <div class="col-6"></div>
                <div class="col-3">
                    <a href="index.php" id="reset" class="btn btn-danger btn-lg btn-block">إعادة</a>
                </div>
            </div>

        </form>
    </section>
    <section class="container formContainer">
    <div class="row">
        <div class="col-12">
            <h4>المهمات السابقة</h4>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <table class="table table-striped table-bordered table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">نوع المهمة</th>
                        <th scope="col">التاريخ</th>
                        <th scope="col">اسم السائق</th>
                        <th scope="col">السيارة</th>
                        <th scope="col">المواد</th>
                        <th scope="col">الأشغال</th>
                        <th scope="col">العمال</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>

                <?php 
                    $sql="SELECT * FROM missions ORDER BY `ID` DESC";
                    mysqli_query($connection,"set names utf8");
                    $result=mysqli_query($connection,$sql);
                    
                    while($item=mysqli_fetch_assoc($result)) {
                ?>
                    <tr>
                        <th scope="row"><?php echo $item['ID'] ?></th>
                        <td><?php 

                        switch($item['Type']) {
                            case '1':
                                echo "سيارة + مواد";
                                break;
                            case '2':
                                echo "عمال";
                                break;
                            case '3':
                                echo "سيارة + عمال";
                                break;
                            case '4':
                                echo "سيارة + عمال + مواد";
                                break;
                            case '5':
                                echo "دخول سيارة";
                                break;

                        }
                        
                        
                        ?></td>
                        <td style="direction: ltr;"><?php echo $item['Date']?></td>
                        <td><?php echo $item['Driver']?></td>
                        <td><?php echo $item['Vehicle']?></td>
                        <td class="smallList"><?php echo $item['Items']?></td>
                        <td><?php echo $item['WorkersWork']?></td>
                        <td class="smallList"><?php echo $item['Workers']?></td>
                        <td><a href="mission.php?id=<?php echo $item['ID'] ?>">عرض</a></td>
                        <td><a href="?id=<?php echo $item['ID'] ?>">تعديل</a></td>
                    </tr>

                    <?php
    }
    
    ?>

                </tbody>
            </table>
        </div>
    </div>

  
    </section>
</body>


<?php require("footer.php")?>

<?php if(isset($edit)){?>

    <script>
    
    $(document).ready(function() {
        var driverNameForm = $("#driverNameForm");
        var driverNumForm = $("#driverNumForm")
        var carTypeForm = $("#carTypeForm")
        var carNameForm = $("#carNameForm")
        var carNumForm = $("#carNumForm")
        var itemsForm = $("#itemsForm")
        var workersForm = $("#workersForm")
        var workersWorkForm = $("#workersWorkForm");
        var submit = $("#submit");
        var reset = $("#reset");

        var driverInput = $("#driver");
        var carNumInput = $("#carNum");

        <?php 
            switch($edit['Type']) {
                case '1':
                    echo "
                    carNumInput.prop('required',true);
                    driverInput.prop('required',true);
                    driverNameForm.show();
                    driverNumForm.show();
                    carNameForm.show();
                    carNumForm.show();
                    carTypeForm.show()
                    itemsForm.show();
                    workersForm.hide();
                    workersWorkForm.hide();
                    submit.show();
                    reset.show();

                    ";
                    break;
                case '2':
                    echo "
                    carNumInput.prop('required',false);
                    driverInput.prop('required',false);
                    driverNameForm.hide();
                    driverNumForm.hide();
                    carNameForm.hide();
                    carNumForm.hide();
                    carTypeForm.hide()
                    itemsForm.hide();
                    workersForm.show();
                    workersWorkForm.show();
                    submit.show();
                    reset.show();

                    ";
                    break;
                case '3':
                    echo "
                    carNumInput.prop('required',true);
                    driverInput.prop('required',true);
                    driverNameForm.show();
                    driverNumForm.show();
                    carNameForm.show();
                    carNumForm.show();
                    carTypeForm.show()
                    itemsForm.hide();
                    workersForm.show();
                    workersWorkForm.show();
                    submit.show();
                    reset.show();

                    ";
                    break;
                case '4':
                    echo "
                    carNumInput.prop('required',true);
                    driverInput.prop('required',true);
                    driverNameForm.show();
                    driverNumForm.show();
                    carNameForm.show();
                    carNumForm.show();
                    carTypeForm.show()
                    itemsForm.show();
                    workersForm.show();
                    workersWorkForm.show();
                    submit.show();
                    reset.show();

                    ";
                    break;
                case '5':
                    echo "
                    carNumInput.prop('required',true);
                    driverInput.prop('required',true);
                    driverNameForm.show();
                    driverNumForm.show();
                    carNameForm.show();
                    carNumForm.show();
                    carTypeForm.show()
                    itemsForm.hide();
                    workersForm.hide();
                    workersWorkForm.hide();
                    submit.show();
                    reset.show();

                    ";
                    break;

                
            }
        
        ?>

        $('input[type=radio][name=type]').prop('disabled',true);
        $('#submit').show();
        carNumInput.prop('required',false);
        driverInput.prop('required',false);
    });
    </script>

<?php }

?>