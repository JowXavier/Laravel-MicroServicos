<?php

namespace App\Kafka;

use PHPEasykafka\KafkaConsumerHandlerInterface;

class ProductHandler implements KafkaConsumerHandlerInterface
{
    public function __invoke(\RdKafka\Message $message, \RdKafka\KafkaConsumer $consumer)
    {
        print_r($message->payload);
    }
}