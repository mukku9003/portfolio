<?php

$curl = curl_init();

curl_setopt_array($curl, [
  CURLOPT_URL => "https://api.sendinblue.com/v3/emailCampaigns?limit=500&offset=0&sort=desc",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
 //CURLOPT_SSL_VERIFYPEE => false,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => [
    "Accept: application/json"
  ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}

?>
<?php 





// # ------------------
// # Create a campaign\
// # ------------------
// # Include the Sendinblue library\
// require_once(__DIR__ . "/sendinblue");
// # Instantiate the client\
// SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey("api-key", "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");
// $api_instance = new SendinBlue\Client\Api\EmailCampaignsApi();
// $emailCampaigns = new \SendinBlue\Client\Model\CreateEmailCampaign();
// # Define the campaign settings\
// $email_campaigns['name'] = "Campaign sent via the API";
// $email_campaigns['subject'] = "My subject";
// $email_campaigns['sender'] = array("name", "From name", "email","myadav00349@gmail.com");
// $email_campaigns['type'] = "classic";
// # Content that will be sent\
// $email_campaigns['htmlContent'] = "Congratulations! You successfully sent this example campaign via the Sendinblue API.";
// # Select the recipients\
// $email_campaigns['recipients']= array("listIds"=> [2, 7]);
// # Schedule the sending in one hour\
// $email_campaigns['scheduledAt']= "2018-01-01 00:00:01";

// # Make the call to the client\
// try {
// $result = $api_instance->createEmailCampaign($emailCampaigns);
// print_r($result);
// } catch (Exception $e) {
// echo 'Exception when calling EmailCampaignsApi->createEmailCampaign: ', $e->getMessage(), PHP_EOL;
// }

?>