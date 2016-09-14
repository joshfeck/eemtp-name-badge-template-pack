<?php 
$powered_by = sprintf( 
  __( 'Ticketing powered by %sEvent Espresso%s', 'espresso-template-pack-namebadge' ), 
  '<a href="http://eventespresso.com" target="_blank">', 
  '</a>' 
);
?>
<div class="outside">
  <div class="ticket">
    <div class="banner">
      <img src="<?php echo EE_NAMEBADGE_TP_URL . 'images/drop-of-water.jpg' ?>" />
    </div>
    <div class="event">
      <p><span>[EVENT_NAME]</span> <em>[TICKET_NAME]</em></p>
    </div>
    <div class="info-wrap cf">
      <div class="name-wrap">
        <div class="name">
          <h3>[RECIPIENT_FNAME] [RECIPIENT_LNAME]</h3>
        </div>
        <div class="datetime-list">
        </div>
      </div>
      <div class="code">
        [QRCODE_*]
      </div>
    </div>
  </div>
  <div class="footer"><?php echo apply_filters( 'FHEE__badge_html_ticketing_content_template__powered_by', $powered_by ); ?></div>
</div>
