<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
    <div>

       <?php if(is_category('staff-blog') ) :?>

        <input type="text" value="" name="s" id="s" />
        <button type="submit" id="searchsubmit" value="Search"><i class="fa fa-search"></i></button>

       <?php else :?>

        <label class="screen-reader-text" for="s">サイト内を検索:</label>
        <input type="text" value="" name="s" id="s" />
        <button type="submit" id="searchsubmit" value="Search"><i class="fa fa-search"></i></button>
        <p>例）レスポンシブ、WordPress、等</p>

        <?php endif ;?>

    </div>
</form>
