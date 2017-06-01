<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://paulpoot.eu
 * @since      1.0.0
 * @since      1.1.0 Added more input fields
 *
 * @package    Freedom_Blackout
 * @subpackage Freedom_Blackout/admin/partials
 */
?>

<div class="wrap">

    <h1><?php echo esc_html(get_admin_page_title()); ?></h1>

    <form method="post" name="blackout_options" action="options.php">

        <?php
            // Retrieve all options
            $options = get_option($this->plugin_name);

            if( isset($options['progress_towards_goal']) ) {
                $progress_towards_goal = $options['progress_towards_goal'];
            }

            if( isset($options['goal']) ) {
                $goal = $options['goal'];
            }

            if( isset($options['goal_text']) ) {
                $goal_text = $options['goal_text'];
            }

            if( isset($options['show_progress']) ) {
                $show_progress = $options['show_progress'];
            }

            if( isset($options['cover_message']) ) {
                $cover_message = $options['cover_message'];
            }
        
            if( isset($options['cover_url']) ) {
                $cover_url = $options['cover_url'];
            }

            if( isset($options['cover_image']) ) {
                $cover_image = $options['cover_image'];
            }

            if( isset($options['cover_percentage']) ) {
                $cover_percentage = $options['cover_percentage'];
                echo '<div class="notice notice-info"><p>' . $cover_percentage . '% of the website is currently hidden.</p></div>';
            }

            settings_fields($this->plugin_name);
            do_settings_sections($this->plugin_name);
        ?>

        <h2><?php esc_attr_e('Goal', $this->plugin_name); ?></h2>

        <fieldset>
            <legend class="screen-reader-text"><span><?php _e('Progress towards your goal', $this->plugin_name); ?></span></legend>
            <label for="<?php echo $this->plugin_name; ?>-progress_towards_goal">
                <h4><?php esc_attr_e('Progress towards your goal', $this->plugin_name); ?></h4>
                <p>
                    Enter a value that represents your current progress towards your goal, followed by the value that represents your goal. <br>
                    For example, if you need 500 signups and currently have 250, the value for progress is 250 and the value for your goal is 500.
                </p>
                <input type="number" id="<?php echo $this->plugin_name;?>-progress_towards_goal" name="<?php echo $this->plugin_name; ?>[progress_towards_goal]" value="<?php if(!empty($progress_towards_goal)) { echo $progress_towards_goal; }?>" placeholder="e.g. 250" />
                <span>/</span>
                <input type="number" id="<?php echo $this->plugin_name;?>-goal" name="<?php echo $this->plugin_name; ?>[goal]" value="<?php if(!empty($goal)) { echo $goal; } ?>" placeholder="e.g. 500"/>
            </label>
        </fieldset>

        <fieldset>
            <legend class="screen-reader-text"><span><?php _e('Enter text that should be displayed next to the progress', $this->plugin_name); ?></span></legend>
            <label for="<?php echo $this->plugin_name; ?>-goal_text">
                <h4><?php esc_attr_e('Goal type', $this->plugin_name); ?></h4>
                <p>For example, if you want to reach a number of benefactors, you could enter 'benefactors'. This is displayed on the overlay as "{progress} / {goal} benefactors"</p>
                <input type="text" class="regular-text" id="<?php echo $this->plugin_name; ?>-goal_text" name="<?php echo $this->plugin_name; ?>[goal_text]" value="<?php if(!empty($goal_text)) { echo $goal_text; } ?>"/>
            </label>
        </fieldset>

        <br>

        <fieldset>
            <legend class="screen-reader-text"><span>Show progress on overlay</span></legend>
            <label for="<?php echo $this->plugin_name; ?>-show_progress">
                <input type="checkbox" id="<?php echo $this->plugin_name; ?>-show_progress" name="<?php echo $this->plugin_name; ?>[show_progress]" value="1" <?php if( isset($show_progress) ) { checked($show_progress, 1); } ?> />
                <span><?php esc_attr_e('Show progress on overlay', $this->plugin_name); ?><span>
            </label>
        </fieldset>

        <br>
        <hr>

        <h2><?php esc_attr_e('Overlay', $this->plugin_name); ?></h2>

        <fieldset>
            <legend class="screen-reader-text"><span><?php _e('Enter a message that should be displayed on the overlay', $this->plugin_name); ?></span></legend>
            <label for="<?php echo $this->plugin_name; ?>-cover_message">
                <h4><?php esc_attr_e('Message to display on the overlay', $this->plugin_name); ?></h4>
                <input type="text" class="regular-text" id="<?php echo $this->plugin_name; ?>-cover_message" name="<?php echo $this->plugin_name; ?>[cover_message]" value="<?php if(!empty($cover_message)) { echo $cover_message; } ?>"/>
            </label>
        </fieldset>

        <fieldset>
            <legend class="screen-reader-text"><span><?php _e('Where should the message on the overlay link to?', $this->plugin_name); ?></span></legend>
            <label for="<?php echo $this->plugin_name; ?>-cover_message">
                <h4><?php esc_attr_e('Where should the message on the overlay link to?', $this->plugin_name); ?></h4>
                <input type="url" class="regular-text" id="<?php echo $this->plugin_name; ?>-cover_url" name="<?php echo $this->plugin_name; ?>[cover_url]" value="<?php if(!empty($cover_url)) { echo $cover_url; } ?>"/>
            </label>
        </fieldset>

        <fieldset>
            <legend class="screen-reader-text"><span><?php _e('Link to an image that will be displayed on the overlay', $this->plugin_name); ?></span></legend>
            <label for="<?php echo $this->plugin_name; ?>-cover_image">
                <h4><?php esc_attr_e('Link to an image that will be displayed on the overlay', $this->plugin_name); ?></h4>
                <?php if(!empty($cover_image)) { ?>
                    <img src="<?php echo $cover_image; ?>" width="100" height="100" style="background-color: #000" /><br>
                <?php } ?>
                <input type="url" class="regular-text" id="<?php echo $this->plugin_name; ?>-cover_image" name="<?php echo $this->plugin_name; ?>[cover_image]" value="<?php if(!empty($cover_image)) { echo $cover_image; } ?>"/>
            </label>
        </fieldset>

        <?php submit_button('Save changes', 'primary','submit', TRUE); ?>

    </form>

</div>