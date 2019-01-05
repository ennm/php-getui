<?php

namespace Getui;

use Getui\Igetui\IGtAppMessage;
use Getui\Igetui\IGtAPNPayload;
use Getui\Igetui\Template;
use Getui\Igetui\Utils\AppConditions;

use Getui\Exception\RequestException;
use Getui\Igetui\IGtListMessage;
use Getui\Igetui\Template\IGtBaseTemplate;
use Getui\IGtBatch;
use Getui\Igetui\SimpleAlertMsg;
use Getui\Igetui\Template\IGtAPNTemplate;
use Getui\Igetui\DictionaryAlertMsg;
use Getui\Igetui\IGtSingleMessage;
use Getui\Igetui\IGtTarget;
use Getui\Igetui\Template\IGtLinkTemplate;
use Getui\Igetui\Template\IGtNotificationTemplate;
use Getui\Igetui\Template\IGtNotyPopLoadTemplate;
use Getui\Igetui\Template\IGtTransmissionTemplate;

class GetuiPush
{

    private $host = 'https://api.getui.com/apiex.htm'; //'http://sdk.open.api.igexin.com/apiex.htm';
    private $appKey;
    private $appId;
    private $appSecret;
    private $masterSecret;

    public function __construct(array $config)
    {

        $conf = $config['getui'];
        $this->appKey = $conf['APPKEY'];
        $this->appId = $conf['APPID'];
        $this->appSecret = $conf['APPSECRET'];
        $this->masterSecret = $conf['MASTERSECRET'];
    }

    public function pushSingle()
    {
        $service = new IGeTuiPush(null, $this->appKey, $this->masterSecret, null);

        $template = $this->Template();
        $message = new IGtAppMessage();
        $message->set_isOffline(true);
        $message->set_offlineExpireTime(10 * 60 * 1000);//离线时间单位为毫秒，例，两个小时离线为3600*1000*2
        $message->set_data($template);

        $appIdList = array($this->appId);
        $phoneTypeList = array('ANDROID');
        $provinceList = array('浙江');
        $tagList = array('haha');
        $message->set_appIdList($appIdList);

        $rep = $service->pushMessageToApp($message, "任务组名");

        var_dump($rep);
    }


    public function Template()
    {
        $template = new IGtNotificationTemplate();
        $template->set_appId($this->appId);                   //应用appid
        $template->set_appkey($this->appKey);                 //应用appkey
        $template->set_transmissionType(1);            //透传消息类型
        $template->set_transmissionContent("测试离线");//透传内容
        $template->set_title("请填写通知标题");      //通知栏标题
        $template->set_text("请填写通知内容");     //通知栏内容
        $template->set_logo("");                       //通知栏logo
        $template->set_logoURL("");                    //通知栏logo链接
        $template->set_isRing(true);                   //是否响铃
        $template->set_isVibrate(true);                //是否震动
        $template->set_isClearable(true);              //通知栏是否可清除

        return $template;
    }
}