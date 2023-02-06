<?php

namespace Binstellar\CheckoutPageFieldSorting\Plugin\Checkout\Block;

class LayoutProcessor {

  /**
   * Position the telephone field after address fields
   *
   * @param \Magento\Checkout\Block\Checkout\LayoutProcessor $subject
   * @param array $jsLayout
   *
   * @return array
   */
   public function afterProcess(
      \Magento\Checkout\Block\Checkout\LayoutProcessor $subject,
      array  $jsLayout
    ) {

       //Shipping Address
       $jsLayout['components']['checkout']['children']['steps']['children']['shipping-step']
       ['children']['shippingAddress']['children']['shipping-address-fieldset']
       ['children']['street']['sortOrder'] = 65;

       $jsLayout['components']['checkout']['children']['steps']['children']['shipping-step']
       ['children']['shippingAddress']['children']['shipping-address-fieldset']
       ['children']['city']['sortOrder'] = 66;

       $jsLayout['components']['checkout']['children']['steps']['children']['shipping-step']
       ['children']['shippingAddress']['children']['shipping-address-fieldset']
       ['children']['region_id']['sortOrder'] = 67;

       $jsLayout['components']['checkout']['children']['steps']['children']['shipping-step']
       ['children']['shippingAddress']['children']['shipping-address-fieldset']
       ['children']['postcode']['sortOrder'] = 68;



    return $jsLayout;
  }
}