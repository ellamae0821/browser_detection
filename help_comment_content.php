<?php

	ini_set( 'display_errors', 1 );
	ini_set( 'display_startup_errors', 1 );
	error_reporting( E_ALL );

	function print_pre($object) {
	    ?><pre><?php print_r($object); ?></pre><?php
	}

	// require_once("config.php");
	// echo phpversion()."<br>";
	$current_user = wp_get_current_user();
	$user_email = $current_user->data->user_email;
	$user_id = $current_user->ID;
	print_pre($current_user->first_name );

 	require_once( $_SERVER['DOCUMENT_ROOT'] . "/wp-load.php" );
  	require_once( $_SERVER['DOCUMENT_ROOT'] . "/resources/new_browser_detection.php" );
    function get_user_info($email)
    {
        // require_once( $_SERVER['DOCUMENT_ROOT'] . "/resources/browser_detection.php" );
        // require_once( "browser_detection.php" );


        // $account_no = get_user_account_number( $user->ID, $email );
        $account_no = $user_id;
        $browser_number = browser_detection( 'browser_number' );
        $browser_working = browser_detection( 'browser_working' );
        $os = browser_detection( 'os' );
        $os_number = browser_detection( 'os_number' );
        $browser_name = browser_detection( 'browser_name' );
        $mobile_data = browser_detection('mobile_data');
        $run_time = browser_detection('run_time');
        date_default_timezone_set('Pacific/Honolulu');

        $params = array( 
                                  'email' => $email,
                         'account_number' => $account_no,
                         'browser_number' => $browser_number,
                        'browser_working' => $browser_working,
                                     'os' => $os,
                              'os_number' => $os_number,
                             // 'ip_address' => $_SERVER['REMOTE_ADDR'],
                           'browser_name' => $browser_name,
                            'mobile_data' => $mobile_data
                    );
        // print_pre($params);

        // add_sa_log( $params );
        return $params;
    }
    $user_data = get_user_info($user_email);
	// print_pre(get_user_info('earana@staradvertiser.com'));




?>


<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>SA Comments Help Section </title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/help_com.css">
</head>
<body id="h_body">
	<div class="faq-header">Frequently Asked Questions</div>
	<div class="faq-content"> 
	  <div class="faq-question">
	    <input id="q1" type="checkbox" class="panel">
	    <div class="plus">+</div>
	    <label for="q1" class="panel-title">I can't see the comments, Help!</label>
	    <div class="panel-content">
    	<p>If you are unable to load the comments, you will need to clear Star-Advertiser's website data on your browser and log back in. </p>		
			<h3>GOOGLE CHROME:</h3>
				<ol>
					<li>Open Chrome browser and visit chrome://settings/siteData</li>
					<li>On the search bar under <i>Search Settings</i>, type "staradvertiser.com"</li>
					<li>Click on <i>Remove All Shown</i> </li>
					<li>Then confirm by clicking <i>Clear All</i></li>
					<li>Restart browser and try again.</li>
				</ol>
			<h3>SAFARI:</h3>
				<ol>
					<li>Open Safari browser and click on "Safari" found on the upper left Menu. </li>
					<li>Click <i>Preferences</i> > <i>Privacy</i> > <i>Manage Website Data</i> or <i>Details...</i></li>
					<li>Search for "staradvertiser.com" </li>
					<li>Select "staradvertiser.com" and click <i>Remove</i> > Click Done. </li>
					<li>Restart browser and try again.</li>
				</ol>
			<h3>MOZILLA FIREFOX:</h3>
				<ol>
					<li>Open Firefox browser and click <i>Options</i></li>
					<li>Select <i>Privacy &amp; Security.</i> Under Cookies and Site Data, click <i>Manage Data</i></li>
					<li>Search for "staradvertiser.com" </li>
					<li>Select "staradvertiser.com" > <i>Remove Selected</i> then <i>Save Changes</i> . </li>
					<li>Restart browser and try again.</li>
				</ol>
			<h3>INTERNET EXPLORER 10, 11, 12:</h3>
				<ol>
					<li>Open Internet Explorer browser and visit staradvertiser.com</li>
					<li>Press F12 to open the developer tools</li>
					<li>At the bottom panel, click on <i>Cache</i> </li>
					<li>Select <i>Clear browser cache for this domain</i> </li>
					<li>Restart browser and try again.</li>
				</ol>
			<h3>MICROSOFT EDGE:</h3>
			<p>This browser does not let you delete cache or cookies for a particular website, you will have to delete the entire browsing history &amp; cache.</p> <p style="color: #ff4d4d; font-size: 0.7em;">NOTE: Clearing all of your cookies may affect saved login information and user preferences on other websites. You may need to re-login. </p>
				<ol>
					<li>Open Edge browser and click on the 3-lined hub icon at the top right corner.</li>
					<li>Click on the Clock-shaped <i>History</i> button.</li>
					<li>Check <i>"Browsing History", "Cookies and saved website data,"</i> and <i>"Cached data and files"</i></li>
					<li>Select <i>Clear</i></li>
					<li>Restart browser and try again.</li>
				</ol>	
			<h3>SAFARI on Mobile Device (iPad / iPhone):</h3>
				<ol>
					<li>On your iOS device, go to Settings</li>
					<li>Click on Safari > <i>Advanced</i> > <i>Website Data</i></li>
					<li>Search for "staradvertiser.com" </li>
					<li>Select "staradvertiser.com" by sliding it from right to left and tap on <i>Delete</i></li>
					<li>Restart browser and try again.</li>
				</ol>
			<h3>GOOGLE CHROME on Mobile Device:</h3>
				<ol>
					<li>Open the Chrome browser</li>
					<li>Click on the three dot Settings icon </li>
					<li>Select <i>Site Settings</i> > <i>All sites</i> </li>
					<li>Search for "staradvertiser.com" and select it. Then click <i>Clear &amp; Reset</i></li>
					<li>Restart browser and try again.</li>
				</ol>
			</div>
		</div>
	  </div>
	  
	  <div class="faq-question">
	    <input id="q2" type="checkbox" class="panel">
	    <div class="plus">+</div>
	    <label for="q2" class="panel-title">I cleared my cache, and still not able to view the comments?</label>
	    <div class="panel-content">
	    	<?php $mobile_test = browser_detection('mobile_test'); 
							print_pre($mobile_test);
						?>

			<p>Here are the information about your browser that can help our team troubleshoot the issues you are experiencing. </p>
			<?php $mobile_test = browser_detection('mobile_test'); 
				if ($mobile_test) {
					print_pre($mobile_test);?>

				
				<?php }else{ ?>
					Your Browser name &amp; version: <?php echo ucfirst($user_data['browser_name']) . " " . ($user_data['browser_number']); ?><br/>
						Your Operating Sysem : <?php echo ucfirst($user_data['os']) . " " . $user_data['os_number'] ; ?> <br/>
						Javascript Enabled: <br/>
						Cookies Enabled: <br/>
				<?php }
			?>


						
						
					
						<!-- <input type="text" name="description"  style="max-height: 12.5em;"> -->
						<!-- <textarea style="width: 100%" placeholder="Please describe the error you encountered."></textarea> -->

		</div>
	  </div>
	  
	  <div class="faq-question">
	    <input id="q3" type="checkbox" class="panel">
	    <div class="plus">+</div>
	    <label for="q3" class="panel-title"> Why was my comment rejected?</label>
	    <div class="panel-content">Certain questions are better left &nbsp; <a href="https://en.wikipedia.org/wiki/The_Unanswered_Question" target="_blank">unanswered</a></div>
	  </div>
	</div>

	

</body>
</html>