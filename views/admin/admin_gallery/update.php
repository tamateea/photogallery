<?php include ROOT . '/views/layouts/admin_header.php'; ?>
<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <ol class="breadcrumb ">
                    <li><a href="/admin"><i class="fa fa-dashboard"></i> Главная</a></li>
                    <li><a href="/admin/gallery">Галерея</a></li>
                    <li class="active"><a href="#">Редактирование фотографии</a></li>
                </ol>
                <div class="box">
                    <?php if (isset($errors) && is_array($errors)): ?>
                        <div class="box box-solid box-danger">
                            <div class="box-header">Заполните все поля!</div>
                            <div class="box-body">
                                <ul style="list-style-type: none; content: "&nbsp"; ">
                                    <?php foreach ($errors as $error): ?>
                                        <li> - <?php echo $error; ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    <?php endif; ?>
                    <div class="box-header">
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">Редактировать фото - "<?= $photo['name'] ?>"</h3>
                            </div>
                            <form role="form" action="#" method="post">
                                <div class="form-group">
                                    <label>Имя</label>
                                    <input type="text" class="form-control" value="<?= $photo['name'];?>" name="name">
                                </div>
                                <div class="form-group">
                                    <label>Альбом</label>
                                    <select class="form-control" name="category">
                                        <?php foreach ($category as $cat): ?>
                                            <option  value="<?= $cat['id']; ?>"><?= $cat['name']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div> 
                                 <div class="form-group">
                                     <label>Статус</label>
                                    <select class="form-control" name="status">
                                        <option value="1" <?php if ($photo['status'] == 1) echo ' selected="selected"'; ?>>Отображаеться</option>
                                        <option value="0" <?php if ($photo['status'] == 0) echo ' selected="selected"'; ?>>Скрытый</option>
                                    </select>
                                </div>
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary" name="submit"><i class="fa  fa-save"></i>&nbsp;&nbsp;Сохранить</button>
                                </div>
                            </form>
                        </div>
                    </div> 
                </div>                
            </div>
        </div>    
    </section>
</div>
<?php include ROOT . '/views/layouts/admin_footer.php'; ?>
