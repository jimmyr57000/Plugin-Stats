<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title"><?= $Lang->get('STATS__ADD_STAFF') ?></h3>
                </div>
                <div class="box-body">
                    <form action="" method="post" data-ajax="true" data-redirect-url="<?= $this->Html->url('/admin/stats') ?>">
                        <div class="form-group">
                            <label><?= $Lang->get('GLOBAL__NAME') ?></label>
                            <input name="user_id" type="text" class="form-control" placeholder="Pseudo">
                        </div>
                        <div class="form-group">
                            <label><?= $Lang->get('STATS__RANK') ?></label>
                            <select name="rang" class="form-control form-control-sm">
                                <?php foreach ($staffs as $rang): ?>
                                    <option value="<?= $rang['Staff']['id'] ?>"><?= $rang['Staff']['name'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label><?= $Lang->get('STATS__FONCTION') ?></label>
                            <input name="desc" type="text" class="form-control" placeholder="<?= $Lang->get('STATS__RANK_EXEMPLE') ?>">
                        </div>
                        <div class="pull-right">
                            <a class="btn btn-warning" href="<?= $this->Html->url('/admin/stats') ?>"><?= $Lang->get('GLOBAL__CANCEL') ?></a>
                            <button class="btn btn-success" type="submit"><?= $Lang->get('GLOBAL__SUBMIT') ?></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>