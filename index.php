<!-- index.php -->

<?php
// Get the video URL from the 'v' parameter
$video_url = isset($_GET['v']) ? $_GET['v'] : '';

// Check if video URL is provided
if (!empty($video_url)) {
    // Make API request to drmplayer.php
    $api_url = 'https://studyrays.site/drmplayer.php?v=' . urlencode($video_url);
    $response = file_get_contents($api_url);

    // Display the received HTML response
    echo $response;
} else {
    // If 'v' parameter is not provided, display an error message
    echo "Error: Video URL is missing!";
}
?>
