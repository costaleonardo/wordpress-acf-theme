<?php 

// Get Advanced Custom Fields
$text         = get_field('text');
$text_area    = get_field('text_area');
$range        = get_field('range');
$checkboxes   = get_field('checkboxes');
$radio_button = get_field('radio_button');
$select       = get_field('select');
$true_false   = get_field('true_false');
$button_group = get_field('button_group');
$file         = get_field('file');

?>

<?php get_header(); ?>

<div class="container">
  <div class="row">
    <div class="col">
      <p><?php echo $text; ?></p>
    </div>
    <div class="col">
      <p><?php echo $text_area?></p>
    </div>
    <div class="col">
      <p>This is a range field type with the value of <?php echo $range; ?></p>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <p>This is a checkbox field type with options such as </p>
      <?php if( $checkboxes ): ?>
        <ul>
          <?php foreach( $checkboxes as $checkbox ): ?>
            <li><?php echo $checkbox; ?></li>
          <?php endforeach; ?>
        </ul>
      <?php endif; ?>
    </div>
    <div class="col">
      <p>This is a radio button field type with selected option being <?php echo $radio_button; ?></p>
    </div>
    <div class="col">
      <p>This is a select field type with the selected option being <?php echo $select; ?></p>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <?php if (true_false) : ?>
        <p>This is a true / falase field type with boolean set to True</p>
      <?php else : ?>
        <p>This is a true / falase field type with boolean set to False</p>
      <?php endif; ?>
    </div>
    <div class="col">
      <p>This is a group button type field with the button with a value of <?php echo $button_group; ?></p>
    </div>
    <div class="col">
      <p>This is a file type field with the filename as <?php echo $file['filename']; ?></p>
    </div>
  </div>
</div>

<?php get_footer(); ?>