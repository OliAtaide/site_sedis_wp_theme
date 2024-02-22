<a href="<?= the_permalink() ?>">
    <div class="card card-edital card-edital-aberto">
        <div class="card-body d-flex flex-column">
            <h6 class="mb-0">
                Inscrições Abertas
            </h6>
            <hr>
            <p class="titulo">
                <?php the_title(); ?>
            </p>
            <p class="data mt-auto">
                <?php the_date(); ?>
            </p>
        </div>
    </div>
</a>