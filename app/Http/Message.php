<?php

namespace App\Http;


use Dotenv\Exception\ValidationException;
use http\Env\Request;

class Message {

    public const WHATSAPP_API_URL = "https://www.waboxapp.com/ajax/sandbox/send_chat";

    /**
     * @var string
     * Токен
     */
    private $token;

    /**
     * @var string
     * Текст сообщения
     */
    private $text;

    /**
     * @var string
     * Номер отправителя
     */
    private $phoneFrom;

    /**
     * @var string
     * Номер получателя
     */
    private $phoneTo;

    /**
     * @var string
     * Идентификатор сообщения
     */
    private $custom_uid;


    public function __construct(string $token) {
        $this->token = $token;
    }

    /**
     * @return string
     */
    public function getToken(): string{
        return $this->token;
    }


    /**
     * @return string
     */
    public function getText(): string {
        return $this->text;
    }

    /**
     * @param string $text
     * @return Message
     * @throws ValidationException
     */
    public function setText(string $text): Message{
        Message::validateText($text);
        $this->text = $text;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPhoneFrom(){
        return $this->phoneFrom;
    }

    /**
     * @param string $phoneFrom
     * @return Message
     * @throws ValidationException
     */
    public function setPhoneFrom(string $phoneFrom): Message{
        Message::validatePhone($phoneFrom);
        $this->phoneFrom = $phoneFrom;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhoneTo() : string {
        return $this->phoneTo;
    }

    /**
     * @param string $phoneTo
     * @return Message
     */
    public function setPhoneTo(string $phoneTo): Message{
        Message::validatePhone($phoneTo);
        $this->phoneTo = $phoneTo;
        return $this;
    }

    /**
     * @return string
     */
    public function getCustomUid(): string {
        return $this->custom_uid;
    }

    /**
     * @param string $custom_uid
     * @return mixed
     */
    public function setCustomUid(string $custom_uid){
        $this->custom_uid = strlen(trim($custom_uid))? $custom_uid : uniqid();
        return $this;
    }

    /**
     * @return mixed response
     * Send message by API
     */
    public function send(){
        $ch = curl_init(self::WHATSAPP_API_URL);

        $json = [
            'token'         => $this->getToken(),
            'uid'           => $this->getPhoneFrom(),
            'to'            => $this->getPhoneTo(),
            'custom_uid'    => $this->getCustomUid(),
            'text'          => $this->getText(),
        ];

        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($json));

        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type:application/json']);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);

        curl_close($ch);

        return $response;
    }

    /**
     * @param $phone
     * @throws ValidationException if illegal phone format
     * Validate phone format
     */
    private static function validatePhone(string $phone) {
        if(preg_match("/^\d{10}$/", $phone) == false){
            throw new ValidationException('Invalid phone format');
        }
    }

    /**
     * @param $text
     * @throws ValidationException if length of text less then 4 symbols
     * Check message text length
     */
    private static function validateText(string $text){
        if(strlen(trim($text)) < 4){
            throw new ValidationException("Too short message (at least 4 symblods)");
        }
    }

    /**
     * @param $data
     * @return Message
     * Create message from array
     */
    public static function fromArray($data) : Message{
        $self = new self($data['token']);

        $self->setPhoneFrom($data['phone_from'])
             ->setPhoneTo($data['phone_to'])
             ->setCustomUid($data['custom_uid'])
             ->setText($data['text']);

        return $self;
    }

}
