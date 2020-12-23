<?php

namespace App\Kafka;

use App\Models\Product;
use PHPEasykafka\KafkaConsumerHandlerInterface;

class ProductHandler implements KafkaConsumerHandlerInterface
{
    public function __invoke(\RdKafka\Message $message, \RdKafka\KafkaConsumer $consumer)
    {
        $payload = json_decode($message->payload);

        $product = Product::firstOrCreate(
            [ 'id' => $payload->id],
            [
                'name' => $payload->name,
                'description' => $payload->description,
                'price' => $payload->price,
                'qtd_available' => $payload->qtd_available,
                'qtd_total' => $payload->qtd_total
            ]
        );
        

        print_r($product->toJson());
    }
}