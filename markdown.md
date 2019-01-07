#用户注册借口
***
* 用户注册
##接口信息
***
**|** 传入数据验证不重复后注册成功
###请求
 POST/index.php/register
字段|类型|含义
|-|-|-|
jscode|string|jscode
请求实例
     
      {
                "jscode":"string"
      }
###响应
data
字段|类型|含义
|-|-|-|
jscode|string|用户信息
####登录成功

        {
              "status":0,
              "info":"登录成功"，
              "data":{
                    "jscode":"xxxxxx"
                   }
         }