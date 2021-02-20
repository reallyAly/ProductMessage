# ProductMessage
Magento 2 module to add custom message below products prices

## How to install:

1 => Clone the repository in this path: magento_dir/app/code/Aly/*here*

2 => After clone, in your magento root directory you need run the follow commands:
  bin/magento setup:upgrade
  
  bin/magento setup:di:compile
  
  bin/magento s:s:d (If production mode is active)
  
## How to use:

1 => Go to stores -> configurations -> Product Message -> General

2 => Type your message on the field and click in save.

![Image of settings](https://github.com/reallyAly/ProductMessage/blob/main/images/admin.png)

3 => Flush your cache and you can check the message accessing a product on frontend

![Image of front](https://github.com/reallyAly/ProductMessage/blob/main/images/front.png)
