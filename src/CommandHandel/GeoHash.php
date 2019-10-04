<?php
namespace EasySwoole\Redis\CommandHandel;

use EasySwoole\Redis\CommandConst;
use EasySwoole\Redis\Redis;
use EasySwoole\Redis\Response;

class GeoHash extends AbstractCommandHandel
{
	public $commandName = 'GeoHash';


	public function getCommand(...$data)
	{
		$key=array_shift($data);
		$location=array_shift($data);

		$command = [CommandConst::GEOHASH,$key,$location];
		$commandData = array_merge($command,$data);
		return $commandData;
	}


	public function getData(Response $recv)
	{
		return $recv->getData();
	}
}
