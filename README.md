# Laravel集成阿里百川sdk和淘宝客sdk
> 阿里百川中包含了一些基础的sdk，如阿里云旺，电商sdk等，淘宝客sdk中主要是淘宝客基础api
## 安装
安装有两种方式：
### ① 直接编辑配置文件

将以下内容增加到 composer.json：
````
require: {
    "sixteener/taobaosdk": "~1.0"
}
````
然后运行 `composer update`。

### ② 执行命令安装

运行命令：

```bash
composer require sixteener/taobaosdk:~1.0
```

## 使用
#### 阿里百川sdk的使用方法
>以阿里云旺taobao.openim.users.add (添加用户)为例
````
use Sixteener\TaoBaoSDK\BaiChuan\Top\TopClient;
use Sixteener\TaoBaoSDK\BaiChuan\Top\Request\OpenimUsersAddRequest;
$c = new TopClient;
$c->appkey = $appkey;
$c->secretKey = $secret;
$req = new OpenimUsersAddRequest;
$userinfos = new Userinfos;
$userinfos->nick="king";
$userinfos->icon_url="http://xxx.com/xxx";
$userinfos->email="uid@taobao.com";
$userinfos->mobile="18600000000";
$userinfos->taobaoid="tbnick123";
$userinfos->userid="imuser123";
$userinfos->password="xxxxxx";
$userinfos->remark="demo";
$userinfos->extra="{}";
$userinfos->career="demo";
$userinfos->vip="{}";
$userinfos->address="demo";
$userinfos->name="demo";
$userinfos->age="123";
$userinfos->gender="M";
$userinfos->wechat="demo";
$userinfos->qq="demo";
$userinfos->weibo="demo";
$req->setUserinfos(json_encode($userinfos));
$resp = $c->execute($req);
````
>响应结果
````
{
    "openim_users_add_response":{
        "uid_succ":{
            "string":[
                "uid"
            ]
        },
        "uid_fail":{
            "string":[
                "uid"
            ]
        },
        "fail_msg":{
            "string":[
                "db error"
            ]
        }
    }
}
````
#### 淘宝客sdk的使用方法
>以taobao.tbk.item.info.get (淘宝客商品详情（简版）)为例
````
use Sixteener\TaoBaoSDK\TBK\Top\TopClient;
use Sixteener\TaoBaoSDK\TBK\Top\Request\TbkItemInfoGetRequest;
$c = new TopClient;
$c->appkey = $appkey;
$c->secretKey = $secret;
$req = new TbkItemInfoGetRequest;
$req->setFields("num_iid,title,pict_url,small_images,reserve_price,zk_final_price,user_type,provcity,item_url");
$req->setPlatform("1");
$req->setNumIids("123,456");
$resp = $c->execute($req);
````
>响应结果
````
{
    "tbk_item_info_get_response":{
        "results":{
            "n_tbk_item":[
                {
                    "num_iid":123,
                    "title":"连衣裙",
                    "pict_url":"http:\/\/gi4.md.alicdn.com\/bao\/uploaded\/i4\/xxx.jpg",
                    "small_images":{
                        "string":[
                            "http:\/\/gi4.md.alicdn.com\/bao\/uploaded\/i4\/xxx.jpg"
                        ]
                    },
                    "reserve_price":"102.00",
                    "zk_final_price":"88.00",
                    "user_type":1,
                    "provcity":"杭州",
                    "item_url":"http:\/\/detail.m.tmall.com\/item.htm?id=xxx",
                    "nick":"demo",
                    "seller_id":123,
                    "volume":1,
                    "cat_leaf_name":"内衣",
                    "cat_name":"女装"
                }
            ]
        }
    }
}
````
## 官方SDK / 手册

 - http://open.alimama.com/api/doc.php
 - http://baichuan.taobao.com/portal/newDocIndex.htm
