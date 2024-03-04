<?php
get_header();
$theme = get_bloginfo("template_url");
?>
<main>
  <section class="news archive archive-news">
    <div class="container">
      <ul class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="/">Pagina Inicial</a>
        </li>
        <li class="breadcrumb-item active">
          <a href="javascript:void(0)" disabled>
            Notícias
          </a>
        </li>
      </ul>
      <form class="search-form" role="search" method="get" id="searchform">
        <h2 class="mb-5 font-40 font-weight-black text-navi-seventh">
          <strong>
            Últimas novidades
          </strong>
          <?php if (is_search()): ?>
            - Listando por “
            <?php echo get_search_query(); ?>”
          <?php endif ?>
        </h2>
        <div class="d-flex my-5 search-field">
          <div class="cats">
            <?php
            $categories = get_categories();
            ?>
            <?php foreach ($categories as $category): ?>
              <div>
                <input type="checkbox" class="btn-check" id="<?= $category->cat_ID; ?>" name="categories[]"
                  value="<?= $category->cat_ID; ?>">
                <label class="btn cat btn-outline-navi-second" for="<?= $category->cat_ID; ?>"
                  data-url="<?php echo admin_url("admin-ajax.php") ?>" data-type="news" data-posts="6"
                  data-category="<?= $category->cat_ID; ?>">
                  <?= $category->cat_name; ?>
                </label>
              </div>
            <?php endforeach; ?>
          </div>
          <div class="input-group ms-auto">
            <input class="form-control" type="search" placeholder="Pesquise aqui..." aria-label="Search"
              aria-describedby="button-addon2" name="s">
            <button class="btn btn-outline-success" type="submit">
              <i class="fa-solid fa-magnifying-glass"></i>
            </button>
          </div>
        </div>
      </form>

      <?php if (is_search()): ?>
        <?php if (search_result_has_occurency("news", $_GET['s'])): ?>
          <div class="row row-cols-lg-3 events-cards">
            <?php display_post_type_on_search("news", $_GET['s'], 6); ?>
          </div>
          <?= the_posts_pagination(); ?>
        <?php else: ?>
          <div>
            <p class="text-navi-second">
              Não há resultados para esta pesquisa.
            </p>
          </div>
        <?php endif; ?>

      <?php elseif (is_archive()): ?>
        <?php if (post_type_has_occurency("news")): ?>
          <div class="row mb-3 h-50">
            <?php display_post_type_on_windows_reload("news", 6); ?>
          </div>
          <?= the_posts_pagination(); ?>
        <?php else: ?>
          <div>
            <p class="text-navi-second">
              Não há projetos disponíveis no momento.
            </p>
          </div>
        <?php endif; ?>
      <?php endif; ?>

    </div>
  </section>
</main>
<!--rodape-->
<?php
get_footer();
?>