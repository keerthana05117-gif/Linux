jQuery(document).ready(function ($) {
    // Attach click event to the dismiss button
    $(document).on('click', '.notice[data-notice="get-start"] button.notice-dismiss', function () {
        // Dismiss the notice via AJAX
        $.ajax({
            type: 'POST',
            url: ajaxurl,
            data: {
                action: 'chocolate_house_dismissed_notice',
            },
            success: function () {
                // Remove the notice on success
                $('.notice[data-notice="example"]').remove();
            }
        });
    });
});

// Plugin – AI Content Writer plugin activation
document.addEventListener('DOMContentLoaded', function () {
    const chocolate_house_button = document.getElementById('install-activate-button');

    if (!chocolate_house_button) return;

    chocolate_house_button.addEventListener('click', function (e) {
        e.preventDefault();

        const chocolate_house_redirectUrl = chocolate_house_button.getAttribute('data-redirect');

        // Step 1: Check if plugin is already active
        const chocolate_house_checkData = new FormData();
        chocolate_house_checkData.append('action', 'check_plugin_activation');

        fetch(installPluginData.ajaxurl, {
            method: 'POST',
            body: chocolate_house_checkData,
        })
        .then(res => res.json())
        .then(res => {
            if (res.success && res.data.active) {
                // Plugin is already active → just redirect
                window.location.href = chocolate_house_redirectUrl;
            } else {
                // Not active → proceed with install + activate
                chocolate_house_button.textContent = 'Installing & Activating...';

                const chocolate_house_installData = new FormData();
                chocolate_house_installData.append('action', 'install_and_activate_required_plugin');
                chocolate_house_installData.append('_ajax_nonce', installPluginData.nonce);

                fetch(installPluginData.ajaxurl, {
                    method: 'POST',
                    body: chocolate_house_installData,
                })
                .then(res => res.json())
                .then(res => {
                    if (res.success) {
                        window.location.href = chocolate_house_redirectUrl;
                    } else {
                        alert('Activation error: ' + (res.data?.message || 'Unknown error'));
                        chocolate_house_button.textContent = 'Try Again';
                    }
                })
                .catch(error => {
                    alert('Request failed: ' + error.message);
                    chocolate_house_button.textContent = 'Try Again';
                });
            }
        })
        .catch(error => {
            alert('Check request failed: ' + error.message);
        });
    });
});
