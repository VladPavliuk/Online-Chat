<?php

class Main
{
    public function getMessages()
    {
        $numberOfInitialMessages = 7;

        $db = DataBase::connect();
        $sqlResult = $db->query("SELECT * FROM `message` ORDER BY `id` DESC LIMIT $numberOfInitialMessages");
        $messagesList = $this->createOutputArray($sqlResult);

        return $messagesList;
    }

    public function postInDataBase($message, $nick)
    {
        $nick = $this->validPostNickText($nick);
        $message = $this->validPostMessageText($message);

        $db = DataBase::connect();

        $db->query("INSERT INTO `message` (nick, message) 
                            VALUES ('{$nick}', '{$message}')");
    }

    public function getNewMessages($id)
    {
        $db = DataBase::connect();
        $sqlResult = $db->query("SELECT * FROM `message` WHERE `id`>{$id} ORDER BY `id`");
        $messagesList = $this->createOutputArray($sqlResult);

        return $messagesList;
    }

    public function getMoreMessages($messagesNumber, $minMessageId)
    {
        $messagesNumber = $messagesNumber > 10 ? 10 : $messagesNumber;

        $db = DataBase::connect();
        $sqlResult = $db->query(" SELECT * FROM `message` 
                              WHERE `id`<{$minMessageId} 
                              ORDER BY `id` DESC LIMIT {$messagesNumber}");
        $messagesList = $this->createOutputArray($sqlResult);

       return $messagesList;
    }

    public function updateMessagesPostTime($idList)
    {
        $db = DataBase::connect();
        $updatedMessagesPostTime = [];
        $i = 0;
        foreach($idList as $id) {
            $sqlResult = $db->query("SELECT `post_time` FROM `message` WHERE `id`={$id}");

            $postTime = $sqlResult->fetch()["post_time"];

            $updatedMessagesPostTime[$i]["id"] = $id;
            $updatedMessagesPostTime[$i]["postTime"] = $this->getDisplayTime($postTime);
            $i++;
        }

       return $updatedMessagesPostTime;
    }

    private function validPostMessageText($message)
    {
        $message = strip_tags($message);
        $message = trim($message);
        $message = urldecode($message);

        return $message;
    }

    private function validPostNickText($nick)
    {
        $nick = strip_tags($nick);
        $nick = trim($nick);
        $nick = urldecode($nick);

        return $nick;
    }

    private function createOutputArray($sqlResult)
    {
        $messagesList = [];
        $i = 0;
        while($row = $sqlResult->fetch()) {
            $messagesList[$i]["id"] = $row["id"];
            $messagesList[$i]["nick"] = $row["nick"];
            $messagesList[$i]["message"] = $row["message"];
            $messagesList[$i]["postTime"] = $this->getDisplayTime($row["post_time"]);

            $i++;
        }
        return $messagesList;
    }

    private function getDisplayTime($postTime)
    {
        $secondsFromPostTime = strtotime($postTime);
        $currentTime = strtotime("now");

        $displayTime =  $currentTime - $secondsFromPostTime;

        $displayTime = $this->countPostTime($displayTime);

        return $displayTime;
    }

    private function countPostTime($secondsFromPostTime)
    {
        if($secondsFromPostTime < 4) {
            return 'just';
        } elseif($secondsFromPostTime < 60) {
            return $secondsFromPostTime . ' sec.';
        } elseif($secondsFromPostTime > 60 && $secondsFromPostTime < 3600) {
            return round($secondsFromPostTime / 60) . ' min.';
        } elseif($secondsFromPostTime > 3600 && $secondsFromPostTime < 86400) {
            return round($secondsFromPostTime / 3600) . ' h.';
        } elseif ($secondsFromPostTime > 86400 && $secondsFromPostTime < 604800) {
            return round($secondsFromPostTime / 86400) . ' d';
        } else {
            $secondsFromPostTime = strtotime("now") - $secondsFromPostTime;
            return date('d-m-Y', $secondsFromPostTime);
        }
    }
}