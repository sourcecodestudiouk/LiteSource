<div class="event-card-container">
    <div class="event-card">
        <a href="<?= the_permalink($args['ID']); ?>">
            <div class="image-container">
                <img src="event1.jpg" alt="Event 1">
            </div>
            <div class="card-content">
                <h3><?= get_the_title($args['ID']); ?></h3>
                <p class="location">Location.</p>
            </div>
        </a>
    </div>
</div>