<?php 
$colours = get_field('site_colours', 'options');
$txtCol = getContrastColor($colours['secondary']);
if ( has_block( 'acf/events-information') ) {
    $blocks = parse_blocks( $post->post_content ); 
    foreach($blocks as $block){
        //var_dump($block);
        if($block['blockName'] == 'acf/events-information'){
            if(isset($block['attrs']['data']['date_time_location_start_date_time'])){
                $start = $block['attrs']['data']['date_time_location_start_date_time'];
                $time = new DateTime($start);
                $sdate = $time->format('j/n/Y');
                $stime = $time->format('h:sa');
            }
            if(isset($block['attrs']['data']['date_time_location_end_date_time'])){
                $end = $block['attrs']['data']['date_time_location_end_date_time'];
                $time = new DateTime($end);
                $edate = $time->format('j/n/Y');
                $etime = $time->format('h:sa');
            }
            if(isset($start) && isset($end)){
                $diff = abs(strtotime($start) - strtotime($end));

                $years = floor($diff / (365*60*60*24));
                $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
                $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
                $hours = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
            }
            if(isset($block['attrs']['data']['ticket_information_ticket_prices'])){
                $price = $block['attrs']['data']['ticket_information_ticket_prices'];
            }
            if(isset($block['attrs']['data']['ticket_information_ticket_url'])){
                $url = $block['attrs']['data']['ticket_information_ticket_url'];
            }
        }
    }?>
    <div class="events-template-container">
        <div class="events-content">
            <div class="date-location">
            <?php if(isset($start) || isset($end)){ ?>
                <div class="date-time">
                    <h3>Date & Time</h3>
                    <p class="date"><i class="fa-solid fa-clock"></i> <?= $sdate . ' - ' . $stime; ?></p>
                    <p class="time"><?= $edate . ' - ' . $etime; ?></p>
                    <p class="length"><i class="fa-solid fa-hourglass-start"></i> <?php if($days){}; ?> </p>
                </div>
            <?php 
            } ?>

                <div class="location">
                    <h3>Location</h3>
                    <p class="date"></p>
                    <address></address>
                </div>
            </div>
            <?php the_content(); ?>
        </div>
        <div class="location-ticket">
            <div class="inner">
                <div class="map-container">

                </div>
                <?php 
                if(isset($url) || isset($price)){ ?>
                    <div class="ticket-information">
                        <?php if($price){ ?>
                            <p class="price"><?= $price; ?></p>
                        <?php
                        } ?>
                        <?php if($url){ ?>
                            <p class="btn" style="background-color:<?= $colours['secondary']; ?>">
                                <a target="_blank" href="<?= $url; ?>" style="color:<?= $txtCol; ?>">Get Tickets</a>
                            </p>
                        <?php
                        } ?>
                        
                    </div>
                <?php
                } ?>
                
            </div>
            
        </div>
    </div>
<?php
}
else{
    the_content();
}