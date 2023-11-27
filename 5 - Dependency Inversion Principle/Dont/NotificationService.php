<?php

class NotificationService {

    private $emailNotification;
    private $smsNotification;

    //KO Dont --- E'sbagliato che la classe NotificationService dipenda da una implementazione concreta

    // Motivo: Se volessimo cambiare o estendere i tipi di notifica,
    // dovremmo modificare direttamente questa classe anziché estendere le astrazioni.
    public function __construct(NotificationInterface $notification) {
        $this->emailNotification = new EmailNotification();
        $this->smsNotification = new SMSNotification();
    }

    public function sendEmailNotification() {
        $this->emailNotification->send();
    }

    public function sendSMSNotification() {
        $this->smsNotification->send();
    }
}