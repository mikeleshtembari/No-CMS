<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
echo $output;
?>
<a class="btn btn-primary" href="{{ site_url }}{{ module_path }}/browse_city/index">{{ language:Show Front Page }}</a>
<script type="text/javascript">
    add_delete_all_feature(
        '{{ MODULE_SITE_URL }}Manage_city/delete_selection', // url
        '{{ language:Delete Selected }}', // button caption
        '{{ language:Selected row deleted }}' // notification caption
    );

    $(document).ajaxComplete(function(){
        // TODO: Put your custom code here
    });

    $(document).ready(function(){
        // TODO: Put your custom code here
    });
</script>
