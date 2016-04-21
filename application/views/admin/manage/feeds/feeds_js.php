/**
 * Feeds js file.
 *
 * Handles javascript stuff related to feeds function.
 *
 * PHP version 5
 * LICENSE: This source file is subject to LGPL license
 * that is available through the world-wide-web at the following URI:
 * http://www.gnu.org/copyleft/lesser.html
 * @author     Ushahidi Team <team@ushahidi.com>
 * @package    Ushahidi - http://source.ushahididev.com
 * @module     API Controller
 * @copyright  Ushahidi - http://www.ushahidi.com
 * @license    http://www.gnu.org/copyleft/lesser.html GNU Lesser General Public License (LGPL)
 */
// Categories JS
function fillFields(id, feed_name, feed_url,
 feed_visible )
{
	$("#feed_id").val(decodeURIComponent(id));
	$("#feed_name").val(decodeURIComponent(feed_name));
	$("#feed_url").val(decodeURIComponent(feed_url));
	$("#feed_visible").val(decodeURIComponent(feed_visible));

}

// Form Submission
function feedAction ( action, confirmAction, id )
{
	var statusMessage;
	var answer = confirm('<?php echo Kohana::lang('ui_admin.are_you_sure_you_want_to'); ?> ' + confirmAction + '?')
	if (answer){
		// Set Category ID
		$("#feed_id_action").val(id);
		// Set Submit Type
		$("#action").val(action);
		// Submit Form
		$("#feedListing").submit();

	}
//	else{
//		return false;
//	}
}

// Ajax Refresh Feeds
function refreshFeeds()
{
	$('#feeds_loading').html('<img src="<?php echo url::file_loc('img')."media/img/loading_g.gif"; ?>">');
	$("#action").val('r');
	// Submit Form
	$("#feedListing").submit();
}
