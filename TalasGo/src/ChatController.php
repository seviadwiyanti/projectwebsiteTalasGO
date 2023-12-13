<?php

require_once 'ChatAI.php';

class ChatController {
    public function index() {
        $user_input = isset($_POST['user_input']) ? $_POST['user_input'] : '';
        $chatai = new ChatAI();
        $chat_output = $chatai->chat($user_input);
        include 'chat_view.php';
    }
}

$chatController = new ChatController();
$chatController->index();
