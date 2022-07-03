
<div class="container">
    <a href="<?= BASEURL ?>/project/index/">
        <button type="button" class="btn btn-primary mt-2">Kembali</button> 
    </a>
    <div class="card mt-3">
        <div class="card-header">
            <h5><?= $data['project']['name'];?></h2>
        </div>
        <div class="card-body">
            <p>Type : <?= $data['project']['type']; ?></p>
            <p>Tools : <?= $data['project']['tools'];?></p>
            <p><?= $data['project']['desk']?></p>
        </div>
    </div>
</div>