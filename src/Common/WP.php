<?php

namespace WPHelpers\Common;

class WP
{
    /**
     * Add admin notice
     *
     * @param string $message
     * @param string $status
     * @return void
     */
    public static function adminNotice($message, $status = "success")
    {
        add_action('admin_notices', function () use ($message, $status) {
            ?>
                <div class="notice notice-<?php echo esc_attr($status); ?>">
                    <p><?php echo $message; ?></p>
                </div>
            <?php
        }, 1);
    }
}
