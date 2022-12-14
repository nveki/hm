/**
 * 2007-2022 Stripe
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License (AFL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/afl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    202-ecommerce <tech@202-ecommerce.com>
 * @copyright Copyright (c) Stripe
 * @license   Academic Free License (AFL 3.0)
 */

$(function () {
  // Open/close faq items on click.
  $('.faq-item').click(function () {
    const $content = $(this).find('.faq-content');
    const $button = $(this).find('.expand');

    if ($content.is(':visible')) {
      $content.slideUp('fast');
      $button.html('+');
    } else {
      $('.faq-content').hide('fast');
      $('.expand').html('+');
      $content.slideDown('fast');
      $button.html('-');
    }
  });

  // Prevent closing a faq item when clicking on a link inside a it.
  $('.faq-item a').click(function (event) {
    event.stopPropagation();
  });
});
