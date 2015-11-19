
<!--<div class="search">
    <div class="search-icon">
        <i class="fa fa-search"></i>
    </div>
    <?php get_search_form() ?> 
</div>-->

<div class="sidebar-section">
    <img src="https://prismic-io.s3.amazonaws.com/lavieenjaune/7299080fd2dbfb32cd8cdcfbcf3328745a3ed1e1_logo-ujvf-fond-transparent-1.png"/>
    <h3 class="blog-nav-item"><?= home_link('Home') ?></h3>
</div>

<?php foreach(get_pages() as $page) { ?>
    <div class="sidebar-section">
        <h3><?= page_link($page) ?></h3>
        <ul>
            <?php foreach($page['children'] as $subpage) { ?>
                <li><?= page_link($subpage) ?></li>
            <?php } ?>
        </ul>
    </div>
<?php } ?>

<!-- <div class="sidebar-section">
    <h3>Archives</h3>
    <ul>
        <?php foreach(get_calendar() as $entry) { ?>
            <li><a href="<?= $entry['link'] ?>"><?= $entry['label'] ?></a></li>
        <?php } ?>
    </ul>
</div> -->
