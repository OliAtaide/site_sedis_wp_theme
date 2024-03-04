<form role="search" method="get" class="ms-auto form search-form" action="<?php echo home_url('/'); ?>">
    <div class="form-control rounded-pill d-flex align-items-center">
        <i class="bi bi-search mx-2"></i>
        <input type="text" class="border-0" placeholder="Buscar notícias" value="<?php echo get_search_query() ?>"
            name="s" title="<?php echo esc_attr_x('Search for:', 'label') ?>">
    </div>
</form>