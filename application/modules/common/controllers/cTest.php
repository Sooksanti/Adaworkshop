<?php
defined('BASEPATH') OR exit('No direct script access allowed');

		require_once (APPPATH.'libraries/rabbitmq/vendor/autoload.php');
		use PhpAmqpLib\Connection\AMQPStreamConnection;
		use PhpAmqpLib\Message\AMQPMessage;
class cTest extends MX_Controller {

	public function index()
	{	
		$this->load->view('common/wTest');
	}

	public function test()
	{	
		$connection = new AMQPStreamConnection('localhost', 5672, 'guest', 'guest', 'Group_01');
		$channel = $connection->channel();
		$channel->queue_declare('hello', false, false, false, false);

		$msg = new AMQPMessage('Hello World!');
		$channel->basic_publish($msg, '', 'hello');

		echo " [x] Sent 'Hello World!'\n";
		// $callback = function ($msg) {
        //     echo ' [/] Received ', $msg->body, "\n";
        //     sleep(substr_count($msg->body, '.'));
        //     echo " [/] Done\n";
        // };

        // $channel->basic_qos(null, 1, null);
        // $channel->basic_consume('hello', '', false, true, false, false, $callback);

        // while (count($channel->callbacks)) {
        //     $channel->wait();
		// }
		
		$channel->queue_delete('hello');

		$channel->close(); 
		$connection->close();
	}

}