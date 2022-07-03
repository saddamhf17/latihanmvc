<div class="container mt-5">
    <?php foreach($data['project'] as $project) : ?>
        <div class="card mt-5">
            <div class="card-header">
            <h5><?= $project['name'];?></h2>
            </div>
            <div class="card-body">
                <p>Type : <?= $project['type']; ?></p>
                <p>Tools : <?= $project['tools'];?></p>
                <p><?= $project['desk']?></p>
            </div>
        </div>
    <?php endforeach;?>
</div>