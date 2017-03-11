<?php

class MainController
{
    public function indexAction()
    {
        // Smarty initialization
        $smarty = SmartyRun::connect();

        $main = new Main();
        $messages = $main->getMessages();

        //>
        $smarty->assign("messagesList", $messages);
        //<

        $smarty->assign('templateContent', 'chat/sendForm.tpl');

        $smarty->display('layouts/main.tpl');

    }

    public function sendAction($message, $nick = "anon")
    {
        $main = new Main();
        $main->postInDataBase($message, $nick);
    }

    public function updateAction($id)
    {
        $main = new Main();

        $result = $main->getNewMessages($id);
        echo json_encode($result);
    }

    public function moreMessagesAction($messagesNumber, $minMessageId)
    {
        $main = new Main();
        $messagesList = $main->getMoreMessages($messagesNumber, $minMessageId);

        echo json_encode($messagesList);
    }

    public function updateMessagesPostTimeAction()
    {
        $idList = $_POST["idList"];
        $main = new Main();

        $updatedMessagesPostTime = $main->updateMessagesPostTime($idList);
        echo json_encode($updatedMessagesPostTime);
    }
}