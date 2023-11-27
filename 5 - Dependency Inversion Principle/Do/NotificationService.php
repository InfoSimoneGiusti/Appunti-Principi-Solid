<?php

class NotificationService {
    private $notification;

    //OK Do --- E'corretto che la classe NotificationService dipenda da una interfaccia
    public function __construct(NotificationInterface $notification) {
        $this->notification = $notification;
    }

    public function sendNotification() {
        $this->notification->send();
    }
}