<?php

namespace App\Console\Commands;

use App\Models\Product;
use Illuminate\Console\Command;
use PHPEasykafka\KafkaProducer;
use Psr\Container\ContainerInterface;

class KafkaProducerSeeder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'kafka:produce-products';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * handle
     *
     * @param  mixed $container
     * @return void
     */
    public function handle(ContainerInterface $container)
    {
        $topicConf = $container->get("KafkaTopicConfig");
        $brokerCollection = $container->get("KafkaBrokerCollection");

        $product = Product::create([
            'name' => 'Produto de teste',
            'description' => 'descrição de teste',
            'price' => 100.00,
            'qtd_available' => 5,
            'qtd_total' => 10
        ]);

        $producer = new KafkaProducer(
            $brokerCollection,
            "products",
            $topicConf
        );

        $producer->produce($product->toJson());
    }
}
