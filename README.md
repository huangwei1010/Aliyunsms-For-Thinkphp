# Aliyunsms-For-Thinkphp
阿里云短信接口集成（Thinkphp)

## 背景
阿里云短信提供了API demo，没有使用命名空间，无法直接拿到框架中使用，为了方便使用，故修改原有API逻辑，使其能集成到Thinkphp中

## 版本使用
本代码适用于Thinkphp 3.0系列版本

## 代码使用
说明: IndexController.php 是测试文件 里面首先是 use Org\Util\AliSms 然后是 sms方法演示了如何发送短信\\
1. 请将 AliSms.class.php 放在 ThinkPHP/Library/Org/Util 下面 \\
2. 请将 AliSms 文件夹 放在 ThinkPHP/Library/Vendor \\
3. 完成上以上步骤后, 参照说明中的IndexController 调用方法，在任意一处调用即可

