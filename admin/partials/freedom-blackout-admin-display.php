<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://paulpoot.eu
 * @since      1.0.0
 *
 * @package    Freedom_Blackout
 * @subpackage Freedom_Blackout/admin/partials
 */
?>

<div class="wrap">

    <h2><?php echo esc_html(get_admin_page_title()); ?></h2>

    <form method="post" name="blackout_options" action="options.php">

        <?php
            // Retrieve all options
            $options = get_option($this->plugin_name);
            $cover_percentage = $options['cover_percentage'];
            $cover_message = $options['cover_message'];
            $cover_url = $options['cover_url'];
        ?>

        <?php
            settings_fields($this->plugin_name);
            do_settings_sections($this->plugin_name);
        ?>

        <fieldset>
            <legend class="screen-reader-text"><span><?php _e('What percentage of the website should be hidden?', $this->plugin_name); ?></span></legend>
            <label for="<?php echo $this->plugin_name; ?>-cover_percentage">
                <span><?php esc_attr_e('What percentage of the website should be hidden?', $this->plugin_name); ?></span>
                <input type="number" id="<?php echo $this->plugin_name;?>-cover_percentage" name="<?php echo $this->plugin_name; ?>[cover_percentage]" value="<?php if(!empty($cover_percentage)) { echo $cover_percentage; } else { echo 100; } ?>" min="0" max="100"/>
                <span>%</span>
            </label>
        </fieldset>

        <fieldset>
            <legend class="screen-reader-text"><span><?php _e('Enter a message that should be displayed on the overlay', $this->plugin_name); ?></span></legend>
            <label for="<?php echo $this->plugin_name; ?>-cover_message">
                <span><?php esc_attr_e('Message to display on the overlay', $this->plugin_name); ?></span>
                <input type="text" class="regular-text" id="<?php echo $this->plugin_name; ?>-cover_message" name="<?php echo $this->plugin_name; ?>[cover_message]" value="<?php if(!empty($cover_message)) { echo $cover_message; } ?>"/>
            </label>
        </fieldset>

        <fieldset>
            <legend class="screen-reader-text"><span><?php _e('Where should the message on the overlay link to?', $this->plugin_name); ?></span></legend>
            <label for="<?php echo $this->plugin_name; ?>-cover_message">
                <span><?php esc_attr_e('Where should the message on the overlay link to?', $this->plugin_name); ?></span>
                <input type="url" class="regular-text" id="<?php echo $this->plugin_name; ?>-cover_url" name="<?php echo $this->plugin_name; ?>[cover_url]" value="<?php if(!empty($cover_url)) { echo $cover_url; } ?>"/>
            </label>
        </fieldset>

        <?php submit_button('Save changes', 'primary','submit', TRUE); ?>

    </form>

</div>