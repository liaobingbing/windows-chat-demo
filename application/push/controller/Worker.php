<?php
/**
 * Created by PhpStorm.
 * User: ning
 * Date: 2017/8/25
 * Time: 13:50
 */
namespace app\push\controller;

use think\worker\Server;

class Worker extends Server
{
    protected $socket = 'websocket://192.168.1.127:8080';

    /**
     * 收到信息
     * @Author: 296720094@qq.com chenning
     * @param $connection
     * @param $data
     */
    public function onMessage($connection, $data)
    {	
		echo $data;
		$data=array(
			'data'=>"test"
		);
		$data=json_encode($data);
        $connection->send('{"data":"test"}');
    }

    /**
     * 当连接建立时触发的回调函数
     * @Author: 296720094@qq.com chenning
     * @param $connection
     */
    public function onConnect($connection)
    {
        
    }

    /**
     * 当连接断开时触发的回调函数
     * @Author: 296720094@qq.com chenning
     * @param $connection
     */
    public function onClose($connection)
    {
        
    }

    /**
     * 当客户端的连接上发生错误时触发
     * @Author: 296720094@qq.com chenning
     * @param $connection
     * @param $code
     * @param $msg
     */
    public function onError($connection, $code, $msg)
    {
        echo "error $code $msg\n";
    }

    /**
     * 每个进程启动
     * @Author: 296720094@qq.com chenning
     * @param $worker
     */
    public function onWorkerStart($worker)
    {

    }
}