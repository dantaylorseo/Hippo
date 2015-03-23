<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
    <div class="input-group">
      <input type="text" class="form-control search-field" placeholder="" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>">
      <span class="input-group-btn">
        <button class="search-submit btn btn-default" type="submit"><?php echo esc_attr_x( 'Search', 'submit button' ) ?></button>
      </span>
    </div>
</form>