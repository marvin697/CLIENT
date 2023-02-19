<?php 
include_once 'config/dbcon.php';

if(isset($_GET['hub.mode']) || isset($_GET['hub.verify_token']) || isset($_GET['hub.challenge'])){
    $mode = $_GET['hub.mode'];
    $token = $_GET['hub.verify_token'];
    $challenge = $_GET['hub.challenge'];
    
    if ($mode === 'subscribe' && $token === 'my_chat_bot') {
      header('HTTP/1.1 200 OK');
      echo $challenge;
      exit;
    }
}
// header('Content-Type: application/json; charset=utf-8');
    
$access_token = "EAAtFJakQG2MBAJ07vpZAUuZAxZBoWTqZArl3KhEdAC3f3CAxoI9GZAdfNpj4FsDlqMINrlmUAvHAudZAqYWHVu8guzLV3yJW6FpmR36mrzuSZBYZBFG2D97BNyVidxZCJE5fml6AN0ZBZBhgtoANXTPZClFNCzL2zHZA8qHJmGFY07vSiqAheHfcYZCEbr";
            
//Endpoint for retrieving conversations
$url2 = "https://graph.facebook.com/v16.0/me/conversations?access_token=$access_token";
$response2 = file_get_contents($url2);
$data2 = json_decode($response2, true);

foreach ($data2['data'] as $conversation) {
    $id = $conversation['id'];
    $url3 = "https://graph.facebook.com/v16.0/$id/messages?fields=id,created_time,from,to,message&access_token=$access_token";
    $response3 = file_get_contents($url3);
    $data3 = json_decode($response3, true);

    foreach ($data3['data'] as $message) {
        $created_time = $message['created_time'];
        
        // Check the date and the created_time of message!
        $date_today = date("Y-m-d");
        $ct = date("Y-m-d", strtotime($created_time));
        
        if($date_today == $ct){
            
            $id = "";
            $name = "";
            $message_text = "";
    
            if (isset($message['message'])) {
                $message_text = mysqli_real_escape_string($conn, $message['message']);
            }
    
            if (isset($message['from']['name']) && isset($message['from']['id'])) {
                $name = mysqli_real_escape_string($conn, $message['from']['name']);
                $id = mysqli_real_escape_string($conn, $message['from']['id']);
            }
            if (!empty($name) && !empty($id)) {
                if (!empty($message_text)) {
                    echo "<span class='mr-2 text-center'><b>".$name ."</b>" ."      "  .$message_text ."</span><br>";
                    // Check if the user has already sent a message today
                    $date_message = date("Y-m-d");
                    $stmt = $conn->prepare("SELECT * FROM messenger WHERE name = ? AND message_id = ? AND message = ? AND date = ?");
                    $stmt->bind_param("ssss", $name, $id, $message_text, $date_message);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    $count = mysqli_num_rows($result);
    
                    if ($count > 0) {
                        // echo "exist";
                    } else {
                        // Insert new row
                        $stmt = $conn->prepare("INSERT INTO messenger (name, message_id, message) VALUES (?, ?, ?)");
                        $stmt->bind_param("sss", $name, $id, $message_text);
                        if ($stmt->execute()) {
                            // echo "Data inserted successfully!";
                        } else {
                            // echo "Error inserting data: " . mysqli_error($conn);
                        }
                    }
                } else {
                    // echo "Error: message is empty.";
                }
            } else {
                // echo "Error: name or id is empty. Name: $name, ID: $id";
            }
            
        }    
            
            
    }
}

?> 
 
<!-- Messenger Chat Plugin Code -->
<!--    <div id="fb-root"></div>-->

<!-- Your Chat Plugin code -->
<!--<div id="fb-customer-chat" class="fb-customerchat">-->
<!--</div>-->

<!--<script>-->
<!--  var chatbox = document.getElementById('fb-customer-chat');-->
<!--  chatbox.setAttribute("page_id", "105164575832900");-->
<!--  chatbox.setAttribute("attribution", "biz_inbox");-->
<!--</script>-->

<!-- Your SDK code -->
<!--<script>-->
<!--  window.fbAsyncInit = function() {-->
<!--    FB.init({-->
<!--      xfbml            : true,-->
<!--      version          : 'v16.0'-->
<!--    });-->
<!--  };-->

<!--  (function(d, s, id) {-->
<!--    var js, fjs = d.getElementsByTagName(s)[0];-->
<!--    if (d.getElementById(id)) return;-->
<!--    js = d.createElement(s); js.id = id;-->
<!--    js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';-->
<!--    fjs.parentNode.insertBefore(js, fjs);-->
<!--  }(document, 'script', 'facebook-jssdk'));-->
<!--</script>-->


