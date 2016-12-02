<?php
namespace Org\Util;
Vendor('AliSms.aliyun-php-sdk-core.Config');

class AliSms
{
    public function send()
    {
        $iClientProfile = \DefaultProfile::getProfile("cn-hangzhou", "LTAI0BJMosewnMvb", "mloqht8iYs5lbFvRzpChS8WtFUicj0");
        $client = new \DefaultAcsClient($iClientProfile);
        $request = new \SingleSendSmsRequest();
        //$request->setSignName("验证测试");/*签名名称*/
        //$request->setTemplateCode("SMS_11111");/*模板code*/
        //$request->setRecNum("13552235032");/*目标手机号*/
        //$request->setParamString("{\"name\":\"sanyou\"}");/*模板变量，数字一定要转换为字符串*/
        $request->setSignName("异趣验证");/*签名名称*/
        $request->setTemplateCode("SMS_23875009");/*模板code*/
        $request->setRecNum("13552235032");/*目标手机号*/
        $request->setParamString("{\"code\":\"123456\",\"product\":\"微信绑定验证\"}");/*模板变量，数字一定要转换为字符串*/
        try {
                $response = $client->getAcsResponse($request);
                    print_r($response);
        }
        catch (ClientException  $e) {
                print_r($e->getErrorCode());
                    print_r($e->getErrorMessage());
        }
        catch (ServerException  $e) {
                print_r($e->getErrorCode());
                    print_r($e->getErrorMessage());
        }
    }
}
