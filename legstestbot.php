<?php

//So the bot doesnt stop.

set_time_limit(0);

$nick = 'legsbot';
$channel = '#thelounge';
//$channel = '#testlounge';
$server = 'ssl://irc.pheonix-rising.nl';

ini_set('display_errors', 'on');

	//Example connection stuff.

	$config = array( 
		'server' => $server,
		//'port' => 6660,
			'port' => 6697,
		'nick' => $nick,
		'name' => $nick,
		'channel' => $channel,
		'pass' => '', 
	);
	  

class IRCBot {

	//This is going to hold our TCP/IP connection

	var $socket;
	var $nick;
	var $channel;

	//This is going to hold all of the messages both server and client

	var $ex = array();

	/*
	 Construct item, opens the server connection, logs the bot in
	 @param array
	*/
	function __construct($config)
	{
		$this->nick = $config['nick'];
		$this->socket = fsockopen($config['server'], $config['port']);
		$this->channel = $config['channel'];

		$this->login($config);


		sleep(7);
		//$this->send_data('JOIN', '#arethusafalls');
		$this->send_data('JOIN', $config['channel']);
		
		$this->main();
		
	}

	/*
	 Logs the bot in on the server
	 @param array
	*/
	function login($config)
	{
		$this->send_data('USER', $config['nick'].' 1.1.1.1 '.$config['nick'].' :'.$config['name']);
		$this->send_data('NICK', $config['nick']);
	}

	/*
	 This is the workhorse function, grabs the data from the server and displays on the browser
	*/
	function main()
	{
		while (1) {
			$data = fgets($this->socket, 128);
			echo nl2br($data);
			flush();
			$this->ex = explode(' ', $data);

			if ($this->ex[0] == 'PING') {
				$this->send_data('PONG', $this->ex[1]); //Plays ping-pong with the server to stay connected.
			}

			if (count($this->ex) >= 2 && $this->ex[1] == 'JOIN') {
				$source_user = explode('!', $this->ex[0]);
				$source_nick = $source_user[0];
				if (strcmp($source_nick, ':' . $this->nick) != 0) {
					$this->send_data('PRIVMSG ' . $this->channel, 'Welcome ' . $source_nick . '!! I am some code that legs wrote, please don\'t mind me.');
				}
				echo 'Someone has joined!!!';
			}

			if (count($this->ex) >= 2 && $this->ex[1] == 'NICK') {
				$source_user = explode('!', $this->ex[0]);
				$source_nick = $source_user[0];
				$dest_nick = $this->ex[2];
				/*
				if (strcmp($source_nick, ':' . $this->nick) != 0) {
					$this->send_data('PRIVMSG ' . $this->channel, 'Having a bit of an identity crisis, are we ' . $dest_nick . '?');
				}
				*/
				echo 'Nicknamed: ' . $source_nick . ' changed to: ' . $dest_nick;
			}

			if (count($this->ex) >= 2 && $this->ex[1] == 'KICK') {
				if (strcmp($this->ex[3], $this->nick) == 0) {
					$this->send_data('PRIVMSG '. $this->channel, 'Ouch!! Bye, bye...');
				}

			}

			if (count($this->ex) >= 4) {

				$command = strtolower(str_replace(array(chr(10), chr(13)), '', $this->ex[3]));
				$arg = count($this->ex) >= 5 ?
						strtolower(str_replace(array(chr(10), chr(13)), '', $this->ex[4]))
						:
						'';

				switch ($command) //List of commands the bot responds to from a user.
				{
					case ':!join':
						$this->join_channel($this->ex[4]);
						break;

					case ':!quit':
						$this->send_data('QUIT', 'Legs4321-made Bot');
						exit;
						break;

					case ':!op':
						$this->op_user();
						break;

					case ':!deop':
						$this->op_user('', '', false);
						break;

					case ':!protect':
						$this->protect_user();
						break;

					case ':hello':
					case ':hi':
					case ':gday':
					case ':yo':
						if (strcmp($arg, $this->nick) == 0)
						{
							$source_user = explode('!', $this->ex[0]);
							//$source_nick = $source_user[count($source_user) - 1];
							$source_nick = $source_user[0];
							$this->send_data('PRIVMSG ' . $this->channel, 'hello ' . $source_nick . '!! How are you??');
						}
						break;

					case ':scram':
						if (strcmp($arg, $this->nick) == 0)
						{
							$this->send_data('PRIVMSG ' . $this->channel, 'Gotta run. Cya all later.');
							$this->send_data('QUIT', 'bye bye legsbot');
							exit;
						}
						break;
				}
			}
		}
	}



	function send_data($cmd, $msg = null) //displays stuff to the broswer and sends data to the server.
	{
		if($msg == null)
		{
			fputs($this->socket, $cmd."\r\n");
			echo '<strong>'.$cmd.'</strong><br />';
		} else {
			fputs($this->socket, $cmd.' '.$msg."\r\n");
			echo '<strong>'.$cmd.' '.$msg.'</strong><br />';
		}
	}



	function join_channel($channel) //Joins a channel, used in the join function.
	{
		if(is_array($channel))
		{
			foreach($channel as $chan)
			{
				$this->send_data('JOIN', $chan);
			}
		} else {
			$this->send_data('JOIN', $channel);
		}
	}

	function protect_user($user = '')
	{
/*
		if($user == '')
		{
if(php_version() >= '5.3.0')
			{
				$user = strstr($this->ex[0], '!', true);
			} else {
				$length = strstr($this->ex[0], '!');
				$user   = substr($this->ex[0], 0, $length);
			}
			}
		}
		$this->send_data('MODE', $this->ex[2] . ' +a ' . $user);
*/
	}

	function op_user($channel = '', $user = '', $op = true)
	{
		if($channel == '' || $user == '')
		{
			if($channel == '')
			{
				$channel = $this->ex[2];
			}
			if($user == '')
			{
if(php_version() >= '5.3.0')
			{
				$user = strstr($this->ex[0], '!', true);
			} else {
				$length = strstr($this->ex[0], '!');
				$user   = substr($this->ex[0], 0, $length);
			}
			}
		}

		if($op)
		{
			$this->send_data('MODE', $channel . ' +o ' . $user);
		} else {
			$this->send_data('MODE', $channel . ' -o ' . $user);
		}
	}
}

$bot = new IRCBot($config);

?>