## Magento2 Add new section & attribute for catalog category

> Magento2 an open-source e-commerce platform written in PHP.

> Here in this extension we are going to learn how to Add new section & attribute for catalog category.

> In this extension we have added 3 fields named as Is Homepage Display?(This is used to check if the image needs to be displayed on Home page or not), second field is Category Thumb Image (This is used to upload the thumb image) & last is Category description, this options is self - explainatory.


## Installation Steps

##### Step 1 : Download the Zip file from Github & Unzip it
##### Step 2 : Create a directory under app/code/Binstellar/CheckoutPageFieldSorting
##### Step 3 : Upload the files & folders from extracted package to app/code/Binstellar/CheckoutPageFieldSorting
##### Step 4 : Go to the Magento2 Root directory & run following commands

php bin/magento setup:upgrade

php bin/magento setup:di:compile

php bin/magento setup:static-content:deploy -f

php bin/magento cache:flush


## Note : We have tested this option in Magento ver. 2.4.5-p1