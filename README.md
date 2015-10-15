### UPYUN PHP 版缓存刷新 SDK

基于又拍云 [缓存刷新 API 接口](http://docs.upyun.com/api/purge/) 开发。

#### 使用说明

```
// 初始化 UpYun
$upyun = new UpYun('bucketname', 'username', 'password');

// 设置要刷的 url
$url = 'http://xxx.b0.upaiyun.com/2.jpeg\n';

// 调用刷新函数
$upyun->purge($url);
```
