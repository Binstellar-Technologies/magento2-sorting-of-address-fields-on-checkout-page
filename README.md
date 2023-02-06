## Magento2 Sorting of Shipping Address fields on checkout page

> Magento2 an open-source e-commerce platform written in PHP.

> Here in this extension we are going to learn how to sort shipping address fields like Street Address, City, Region, Postcode etc.. on the checkout page.

> In this extension we have sorted the following shipping address fields (Street Address, City, Region, Postcode) on checkout page one after the another as per the need, you can do the same for yourself by changing the sorting number.

> In order to achieve this we have using Plugin method of Magento2, here we have used afterProcess method to sort the shipping address fields. So once the fields are loaded by default process method the afterProcess method will sort it again based on the sorting number added in the function. 


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