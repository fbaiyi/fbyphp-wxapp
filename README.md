## 微信小程序开发组件 for hyperf

### 安装组件:
>composer require firstphp/firstphp-wxapp

### 发布配置:
>php bin/hyperf.php vendor:publish firstphp/firstphp-wxapp

### 编辑.env配置：
```php
WXAPP_APPID=wxda93db123lafdu83d
WXAPP_APPSECRET=87afeef9df90b74g4a8l9ca8d67b5742
WXAPP_KEY=mWm1DkAVBAZD2L5rs3QWKeoWa62wLumjqCXG9HifLdM
WXAPP_URL=https://api.weixin.qq.com/
```

### 示例代码：
```php
use Firstphp\FirstphpWxapp\WxappInterface;

......

/**
 * @Inject
 * @var WxappInterface
 */
protected $wxappInterface;

public function test() {
    $res = $this->wxappInterface->getAccessToken();
    var_dump($res);
}
```