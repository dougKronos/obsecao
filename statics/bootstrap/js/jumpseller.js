  // VERSION: 0.4.1 - © Jumpseller

if ("undefined" == typeof Jumpseller) var Jumpseller = {
  countryListenerCallbacks: [],

  isDefined: function(param){
    return "undefined" == typeof param ? !1 : !0
  },

  requiredAttributesChecker: function(selectors, options) {
    // is options.callback defined?
    if(!Jumpseller.isDefined(options.callback)){
      console.log("Undefined callback");
      return false;
    }

    // are the variantSelectors selects?
    $(selectors).each(function(e){
      if(!$(this).is('select') && !$(this).is(':radio') ){
        console.log("Invalid jQuery selector. Please provide only the input(s) element(s). (e.g. select, radio)");
        return false;
      }
    });

    return true;
  },

  paymentMethodListener: function(paymentMethodSelector, options) {
    if(paymentMethodSelector === null || paymentMethodSelector === undefined){
      paymentMethodSelector = '#payments #payments_options ul input[type="radio"]';
    }

    if(Jumpseller.requiredAttributesChecker(paymentMethodSelector, options)){
      $(paymentMethodSelector).on('change', function(event) {
        try { return options.callback(event); } catch (e) { console.log("Could not execute your callback function."); return false; }
      });

      return true
    }
    else {
      return false;
    }
  },

  shippingMethodListener: function(shippingMethodSelector, options) {
    if(shippingMethodSelector === null || shippingMethodSelector === undefined){
      shippingMethodSelector = '#shipping #shipping_options ul input[type="radio"]';
    }

    if(Jumpseller.requiredAttributesChecker(shippingMethodSelector, options)){
      $(shippingMethodSelector).on('change', function(event) {
        try { return options.callback(event); } catch (e) { console.log("Could not execute your callback function."); return false; }
      });

      return true
    }
    else {
      return false;
    }
  },


      // update the Regions select with the current value from the Countries select
      Jumpseller.getRegions(options.regionsSelector, countryCode, selectedRegion, lat, lng);

      try { return options.callback(event, options.regionsSelector); } catch (e) { console.log("Could not execute your callback function."); return false; }
    });
  },

  addRegionListeners: function () {
    if ($('form#checkout').length > 0) {
      Jumpseller.regionListener('#order_shipping_address_region', {callback: function(){}});
      Jumpseller.regionListener('#order_billing_address_region', {callback: function(){}});
    }
    if ($("form#estimate_shipping_form").length > 0) {
      Jumpseller.regionListener('#estimate_shipping_region', {callback: function(){}});
    }
    if ($('form#address').length > 0) {
      Jumpseller.regionListener('#customer_shipping_address_region', {callback: function(){}});
      Jumpseller.regionListener('#customer_billing_address_region', {callback: function(){}});
    }
  },

  regionListener: function(regionsSelector, options) {
    Jumpseller.requiredAttributesChecker(regionsSelector, options);

    $(regionsSelector).on('change', function(event) {
      // check if we should update the Comunas select
      if(!Jumpseller.isDefined(options.updateComunas)){
        // otherwise set it to 'false' as default and inform the user
        options.updateComunas = false;
        console.log("Info: 'options.updateComunas' is not defined. Default: " + options.updateComunas);
      }

      // updating Comunas select
      if(options.updateComunas){
        // check if a jQuery selector is defined for the Comunas select
        if(!Jumpseller.isDefined(options.comunasSelector)){
          // otherwise, use a default selector and inform the user
          options.comunasSelector = regionsSelector.replace('_region','_comuna');
          console.log("Info: 'options.comunasSelector' is not defined. Default: " + options.comunasSelector);
        }

        // update the Comunas select with the current value from the Countries select
        Jumpseller.getComunas(options.comunasSelector, event.target.value, $(options.comunasSelector).find(':selected').val());

        try { return options.callback(event, options.comunasSelector); } catch (e) { console.log("Could not execute your callback function."); return false; }
      }
      else {
        try { return options.callback(event); } catch (e) { console.log("Could not execute your callback function."); return false; }
      }
    });

    return false;
  },

  productVariantListener: function(variantSelectors, options) {
    if(variantSelectors === null || variantSelectors === undefined){
      variantSelectors = '#addtocart select, #product-form select';
    }

    if(Jumpseller.requiredAttributesChecker(variantSelectors, options)){
      $(variantSelectors).each(function(){
        $(this).on('change', function(event) {
          try { return Jumpseller.updateProductInfo(event, variantSelectors, options); } catch (e) { console.log("Could not execute your callback function."); return false; }
        });
      });

      // fire event when document is ready to update product info with default values.
      $(document).ready(function(){Jumpseller.updateProductInfo(null, variantSelectors, options);});

      return true;
    }
    else {
      return false;
    }
  },

  getRegions: function(regionSelectID, countryCode, selectedRegion, lat, lng) {
    var regionsSelect = $(regionSelectID);

    url = '/checkout/regions?country=' + countryCode
    if (selectedRegion == null) {
      url += '&lat=' + lat + '&lng=' + lng
    }

    // get regions for this country code
    $.ajax({
      url: url,
    }).done(function(data, textStatus, jqXHR){
      if (data.length > 0) {
        // erase all previous options
        regionsSelect.empty();

        // show the Regions select in case it was hidden
        regionsSelect.parents('div.field').show();

        // add blank option
        var null_option = new Option('', '');
        regionsSelect.append(null_option);

        for ( var i=data.length-1; i>=0; --i ){
          var newOption = new Option(data[i].name, data[i].code);
          regionsSelect.append(newOption);
          if(data[i].code === selectedRegion || data[i].selected) { regionsSelect.val(data[i].code); }
        }
      }
      else {
        // when there are no regions, hide the Regions select
        regionsSelect.parents('div.field').hide();
      }

      regionsSelect.change();
    });
  },

  getComunas: function(comunaSelectID, regionCode, selectedComuna){
    var comunasSelect = $(comunaSelectID);

    // get regions for this country code
    $.ajax({
      url: '/checkout/comunas?region=' + regionCode,
    }).done(function(data, textStatus, jqXHR){
      if (data.length > 0) {
        // erase all previous options
        comunasSelect.empty();

        // show the Comunas select in case it was hidden
        comunasSelect.show();

        // add blank option
        var null_option = new Option('', '');
        comunasSelect.append(null_option);

        for ( var i=data.length-1; i>=0; --i ){
          // add each region as an option to the Comunas select
          var newOption = new Option(data[i].name, data[i].name);
          newOption.setAttribute('code', data[i].code);
          comunasSelect.append(newOption);

          // if any region code matches our selection, mark it as selected
          if(data[i].name === selectedComuna){
            comunasSelect.prop('selectedIndex', newOption.index);
          }
        }
      }
      else {
        // when there are no regions, hide the Comunas select
        comunasSelect.hide();
      }
    });
  },

  // @todo: rename method.
  updateProductInfo: function(event, variantSelectors, options) {
    // is options.product defined?
    if(!Jumpseller.isDefined(options.product)){
      console.log("Product JSON is not defined");
      return false;
    }

    var productInfo = {};
    var variants;

    // is it valid JSON?
    try {
      // tabs inside values are not allowed, replace them
      variants = JSON.parse(options.product.replace(/\t/g, '&#9;'));
    } catch (e) {
      console.log("Invalid JSON");
      return false;
    }

    var selects = $(variantSelectors);

    // get the IDs from the product variant selects
    var selectValues = [];
    selects.find(':selected').each(function(){ selectValues.push({id: $(this).val()}); });

    for(var i = 0; i < variants.length; i++){
      // extract values data from current variant
      var currentValuesData = []
      variants[i].values.forEach(function(entry){
        var valuesHash = { id: entry.value.id.toString() };
        currentValuesData.push(valuesHash);
      });

      // compare with select values (don't compare text values due to translations)
      var boolObjChecks = [];
      selectValues.forEach(function(entry){
        boolObjChecks.push(currentValuesData.some(function(e) { return e.id == entry.id; }));
      });

      // check if obj matches (no 'false' in array)
      if($.inArray(false, boolObjChecks) == -1){
        // get all product info
        productInfo = $.extend(variants[i].variant, {'price_formatted': variants[i].price_formatted,
                                                    'status': variants[i].status,
                                                    'image' : variants[i].image,
                                                    'price_discount_formatted': variants[i].price_discount_formatted,
                                                    'discount': variants[i].discount,
                                                    'attachments' : variants[i].attachments});
      }
    }

    if(productInfo.stock_unlimited){
      $('.qty').removeAttr('max');
    }else {
      $('.qty').attr('max',productInfo.stock);
    }

    try { return options.callback(event, productInfo); } catch (e) { console.log("Could not execute your callback function."); return false; }
  },

  // save new currency and reload
  setCurrency: function(currency){
    sessionStorage.setItem('global_currency', currency);
    location.reload();
  },

  // activate multiCurrency in this store
  multiCurrency: function(options){
    // is options.token defined?
    if(!Jumpseller.isDefined(options.token) || !options.token){
      console.log("OpenExchangeRates App ID is not defined");
      return false;
    }

    if(sessionStorage.getItem('global_currency') != sessionStorage.getItem('store_currency')){
      // set base currency conversion data
      currency_rates = JSON.parse(localStorage.getItem('currency_rates'));

      // check if exchange rates need to be renewed
      if(currency_rates != null){
        orig_date = new Date(currency_rates['now']);
        orig_date.setDate(orig_date.getDate() + 1);
        if(orig_date < new Date())
          currency_rates = null;
      }

      // check currency rates are available
      if(currency_rates == null){
        $.getJSON(
          'https://openexchangerates.org/api/latest.json?app_id=' + options.token,
           function(data) {
             // save current rates for this session
             data['now'] = new Date();
             localStorage.setItem('currency_rates', JSON.stringify(data));

             // Check money.js has finished loading:
             if ( typeof fx !== "undefined" && fx.rates ) {
               fx.rates = data.rates;
               fx.base = data.base;
             } else {
               // If not, apply to fxSetup global:
               var fxSetup = {
                   rates : data.rates,
                   base : data.base
               }
             }

             try { return options.callback(); } catch (e) { console.log("Could not execute your callback function."); return false; }
           }
        ).error(function() {
          // warning: not using up-to-date exchange rates
          currency_rates = JSON.parse(localStorage.getItem('currency_rates'));
          if(currency_rates != null){
            // use saved object to set conversion rates
            fx.rates = currency_rates.rates;
            fx.base = currency_rates.base;
            try { return options.callback(); } catch (e) { console.log("Could not execute your callback function."); return false; }
          } else {
            // Sorry! No currencies for you...
            console.log("Unable to use multi-currency on this store. Services unavailable.");
            $('#current_currency').parents('li').hide();
          }
        });
      }
      else{
        // use saved object to set conversion rates
        fx.rates = currency_rates.rates;
        fx.base = currency_rates.base;
        try { return options.callback(); } catch (e) { console.log("Could not execute your callback function."); return false; }
      }
    }
  },

  fillWithGeoLocation: function(location) {
    // checkout
    e = $('form#checkout');
    if (e.length) {
      var address_type = ['shipping', 'billing'];
      address_type.forEach(function(type) {
        if (e.find('#order_' + type + '_address_country option[value=' + location.country_code + ']').length != 0 && !e.find('#order_' + type + '_address_region').val()) {
          if (location.type == 'navigator') {
            e.find('#order_' + type + '_address_address').val(location.address);

            e.find('#order_' + type + '_address_postal').val(location.zip_code);
          }

          // city
          e.find('#order_' + type + '_address_city').val(location.city);

          // country
          e.find('#order_' + type + '_address_country').val(location.country_code).change();

          // city
          e.find('#order_' + type + '_address_city').val(location.city)

          // regions
          getRegions('order_' + type + '_address', location.region, location.latitude, location.longitude);
        }
      });
    }

    // estimate shipping
    e = $("form#estimate_shipping_form");
    if (e.length) {
      if (e.find('#estimate_shipping_country option[value=' + location.country_code + ']').length != 0 && !e.find('#estimate_shipping_region').val()) {
        if (location.type == 'navigator') {
          e.find('#estimate_shipping_postal').val(location.zip_code);
        }

        // country
        e.find('#estimate_shipping_country').val(location.country_code).change();

        // regions
        getRegions('estimate_shipping', location.region, location.latitude, location.longitude);
      }
    }
  },

  isMobile: function () {
    var check = false;
    (function(a){if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4)))check = true})(navigator.userAgent||navigator.vendor||window.opera);
    return check;
  },

  getMobileLocation: function() {
    if ("geolocation" in navigator) {
      if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(
          function(position) {
            head.js("//maps.google.com/maps/api/js?sensor=false", function() {
              Jumpseller.geocode(position.coords.latitude, position.coords.longitude);
            });
          },
          function() {
            Jumpseller.getIPLocation();
          });
      }
      else {
        Jumpseller.getIPLocation();
      }
    }
  },

  geocode: function(latitude, longitude) {
    var geocoder = new google.maps.Geocoder();
    var latLng = new google.maps.LatLng(latitude, longitude);
    var geolocation = {'address': '', 'type': 'navigator', 'latitude': latitude, 'longitude': longitude};
    geocoder.geocode({ 'latLng': latLng}, function (results, status) {
       if (status == google.maps.GeocoderStatus.OK) {
         results[0].address_components.forEach(function(element) {
           if (element.types.indexOf('postal_code') >= 0) {
             geolocation['zip_code'] = element.long_name;
           }
           if (element.types.indexOf('country') >= 0) {
             geolocation['country_code'] = element.short_name;
             geolocation['country'] = element.long_name;
           }
           if (element.types.indexOf('locality') >= 0) {
             geolocation['city'] = element.long_name;
           }
           if (element.types.indexOf('route') >= 0) {
             geolocation['address'] = element.long_name + ' ' + geolocation['address'];
           }
           if (element.types.indexOf('street_number') >= 0) {
             geolocation['address'] = geolocation['address'] + ' ' + element.long_name;
           }
         });
         localStorage['geolocation'] = JSON.stringify(geolocation);
         Jumpseller.fillWithGeoLocation(geolocation);
       }
       else {
          Jumpseller.getIPLocation();
       }
    });
  },

  getIPLocation: function() {
    $.getJSON(
      '/geoip/json',
      function(location) {
        localStorage['geolocation'] = JSON.stringify(location);
        Jumpseller.fillWithGeoLocation(location);
      }
    );
  },

  // gets the JSON representation of the current cart in session.
  getCart: function(options) {
    $.ajax({
      url: '/api/cart.json',
      type: 'GET',
      success: function(data) {
        if (Jumpseller.isDefined(options) && Jumpseller.isDefined(options.callback)){ try { return options.callback(data); } catch (e) { console.log("Could not execute your callback function."); return false; }}
      },
      error: function(msg) {
        if (Jumpseller.isDefined(options) && Jumpseller.isDefined(options.callback)){ try { return options.callback(msg); } catch (e) { console.log("Could not execute your callback function."); return false; }}
      }
    });
  },

  // updates the current product's qty in the order.
  updateCart: function(order_product_id, qty, options) {
    var data = {};
    var id = order_product_id;
    data[id] = qty;
    $.ajax({
      url: '/api/cart.json',
      type: 'POST',
      data: data,
      success: function(data) {
        if (Jumpseller.isDefined(options) && Jumpseller.isDefined(options.callback)){ try { return options.callback(data); } catch (e) { console.log("Could not execute your callback function."); return false; }}
      },
      error: function(msg) {
        if (Jumpseller.isDefined(options) && Jumpseller.isDefined(options.callback)){ try { return options.callback(msg); } catch (e) { console.log("Could not execute your callback function."); return false; }}
      }
    });
  },

  // resets all cart values to zero and remmove all products from the cart.
  clearCart: function(options) {
    $.ajax({
      url: '/api/cart.json',
      type: 'DELETE',
      success: function(data) {
        if (Jumpseller.isDefined(options) && Jumpseller.isDefined(options.callback)){ try { return options.callback(data); } catch (e) { console.log("Could not execute your callback function."); return false; }}
      },
      error: function(msg) {
        if (Jumpseller.isDefined(options) && Jumpseller.isDefined(options.callback)){ try { return options.callback(msg); } catch (e) { console.log("Could not execute your callback function."); return false; }}
      }
    });
  },

  // adds a product to the cart (with variant_id = nil) or a product with variants.
  // e.g. Jumpseller.addProductToCart(12345, 1, {"Color":123123, "Size":123123})
  addProductToCart: function(product_id, qty, product_options, options) {
    var data = $.extend({}, { id: product_id, qty: qty}, product_options);
    $.ajax({
      url: '/api/cart/add.json',
      type: 'POST',
      data: data,
      success: function(data) {
       if (Jumpseller.isDefined(options) && Jumpseller.isDefined(options.callback)){ try { return options.callback(data); } catch (e) { console.log("Could not execute your callback function."); return false; }}
      },
      error: function(msg) {
        if (Jumpseller.isDefined(options) && Jumpseller.isDefined(options.callback)){ try { return options.callback(msg); } catch (e) { console.log("Could not execute your callback function."); return false; }}
      }
    });
  },

  //
  addCouponToCart: function(code, options) {
    var data = $.extend({}, { code: code});
    $.ajax({
      url: '/api/cart/coupon.json',
      type: 'POST',
      data: data,
      success: function(data) {
       if (Jumpseller.isDefined(options) && Jumpseller.isDefined(options.callback)){ try { return options.callback(data); } catch (e) { console.log("Could not execute your callback function."); return false; }}
      },
      error: function(msg) {
        if (Jumpseller.isDefined(options) && Jumpseller.isDefined(options.callback)){ try { return options.callback(msg); } catch (e) { console.log("Could not execute your callback function."); return false; }}
      }
    });
  },
};
/* END Jumpseller */


/*! head.load - v1.0.3 */
(function(n,t){"use strict";function w(){}function u(n,t){if(n){typeof n=="object"&&(n=[].slice.call(n));for(var i=0,r=n.length;i<r;i++)t.call(n,n[i],i)}}function it(n,i){var r=Object.prototype.toString.call(i).slice(8,-1);return i!==t&&i!==null&&r===n}function s(n){return it("Function",n)}function a(n){return it("Array",n)}function et(n){var i=n.split("/"),t=i[i.length-1],r=t.indexOf("?");return r!==-1?t.substring(0,r):t}function f(n){(n=n||w,n._done)||(n(),n._done=1)}function ot(n,t,r,u){var f=typeof n=="object"?n:{test:n,success:!t?!1:a(t)?t:[t],failure:!r?!1:a(r)?r:[r],callback:u||w},e=!!f.test;return e&&!!f.success?(f.success.push(f.callback),i.load.apply(null,f.success)):e||!f.failure?u():(f.failure.push(f.callback),i.load.apply(null,f.failure)),i}function v(n){var t={},i,r;if(typeof n=="object")for(i in n)!n[i]||(t={name:i,url:n[i]});else t={name:et(n),url:n};return(r=c[t.name],r&&r.url===t.url)?r:(c[t.name]=t,t)}function y(n){n=n||c;for(var t in n)if(n.hasOwnProperty(t)&&n[t].state!==l)return!1;return!0}function st(n){n.state=ft;u(n.onpreload,function(n){n.call()})}function ht(n){n.state===t&&(n.state=nt,n.onpreload=[],rt({url:n.url,type:"cache"},function(){st(n)}))}function ct(){var n=arguments,t=n[n.length-1],r=[].slice.call(n,1),f=r[0];return(s(t)||(t=null),a(n[0]))?(n[0].push(t),i.load.apply(null,n[0]),i):(f?(u(r,function(n){s(n)||!n||ht(v(n))}),b(v(n[0]),s(f)?f:function(){i.load.apply(null,r)})):b(v(n[0])),i)}function lt(){var n=arguments,t=n[n.length-1],r={};return(s(t)||(t=null),a(n[0]))?(n[0].push(t),i.load.apply(null,n[0]),i):(u(n,function(n){n!==t&&(n=v(n),r[n.name]=n)}),u(n,function(n){n!==t&&(n=v(n),b(n,function(){y(r)&&f(t)}))}),i)}function b(n,t){if(t=t||w,n.state===l){t();return}if(n.state===tt){i.ready(n.name,t);return}if(n.state===nt){n.onpreload.push(function(){b(n,t)});return}n.state=tt;rt(n,function(){n.state=l;t();u(h[n.name],function(n){f(n)});o&&y()&&u(h.ALL,function(n){f(n)})})}function at(n){n=n||"";var t=n.split("?")[0].split(".");return t[t.length-1].toLowerCase()}function rt(t,i){function e(t){t=t||n.event;u.onload=u.onreadystatechange=u.onerror=null;i()}function o(f){f=f||n.event;(f.type==="load"||/loaded|complete/.test(u.readyState)&&(!r.documentMode||r.documentMode<9))&&(n.clearTimeout(t.errorTimeout),n.clearTimeout(t.cssTimeout),u.onload=u.onreadystatechange=u.onerror=null,i())}function s(){if(t.state!==l&&t.cssRetries<=20){for(var i=0,f=r.styleSheets.length;i<f;i++)if(r.styleSheets[i].href===u.href){o({type:"load"});return}t.cssRetries++;t.cssTimeout=n.setTimeout(s,250)}}var u,h,f;i=i||w;h=at(t.url);h==="css"?(u=r.createElement("link"),u.type="text/"+(t.type||"css"),u.rel="stylesheet",u.href=t.url,t.cssRetries=0,t.cssTimeout=n.setTimeout(s,500)):(u=r.createElement("script"),u.type="text/"+(t.type||"javascript"),u.src=t.url);u.onload=u.onreadystatechange=o;u.onerror=e;u.async=!1;u.defer=!1;t.errorTimeout=n.setTimeout(function(){e({type:"timeout"})},7e3);f=r.head||r.getElementsByTagName("head")[0];f.insertBefore(u,f.lastChild)}function vt(){for(var t,u=r.getElementsByTagName("script"),n=0,f=u.length;n<f;n++)if(t=u[n].getAttribute("data-headjs-load"),!!t){i.load(t);return}}function yt(n,t){var v,p,e;return n===r?(o?f(t):d.push(t),i):(s(n)&&(t=n,n="ALL"),a(n))?(v={},u(n,function(n){v[n]=c[n];i.ready(n,function(){y(v)&&f(t)})}),i):typeof n!="string"||!s(t)?i:(p=c[n],p&&p.state===l||n==="ALL"&&y()&&o)?(f(t),i):(e=h[n],e?e.push(t):e=h[n]=[t],i)}function e(){if(!r.body){n.clearTimeout(i.readyTimeout);i.readyTimeout=n.setTimeout(e,50);return}o||(o=!0,vt(),u(d,function(n){f(n)}))}function k(){r.addEventListener?(r.removeEventListener("DOMContentLoaded",k,!1),e()):r.readyState==="complete"&&(r.detachEvent("onreadystatechange",k),e())}var r=n.document,d=[],h={},c={},ut="async"in r.createElement("script")||"MozAppearance"in r.documentElement.style||n.opera,o,g=n.head_conf&&n.head_conf.head||"head",i=n[g]=n[g]||function(){i.ready.apply(null,arguments)},nt=1,ft=2,tt=3,l=4,p;if(r.readyState==="complete")e();else if(r.addEventListener)r.addEventListener("DOMContentLoaded",k,!1),n.addEventListener("load",e,!1);else{r.attachEvent("onreadystatechange",k);n.attachEvent("onload",e);p=!1;try{p=!n.frameElement&&r.documentElement}catch(wt){}p&&p.doScroll&&function pt(){if(!o){try{p.doScroll("left")}catch(t){n.clearTimeout(i.readyTimeout);i.readyTimeout=n.setTimeout(pt,50);return}e()}}()}i.load=i.js=ut?lt:ct;i.test=ot;i.ready=yt;i.ready(r,function(){y()&&u(h.ALL,function(n){f(n)});i.feature&&i.feature("domloaded",!0)})})(window);

head.js("//code.jquery.com/jquery-1.11.1.min.js", function() {
  var j = jQuery.noConflict(true);

  var token = j('meta[name="csrf-token"]').attr('content');
  var param = j('meta[name="csrf-param"]').attr('content');

  j('input[name=authenticity_token]').val(token);

  j.ajaxPrefilter(function(options) {
    if (options.type == 'POST' || options.type == 'PUT' || options.type == 'DELETE') {
      options.data = options.data || {};
      options.data[param] = token;
    }
  });

  j(document).on('submit', 'form', function(e) {
    var form = j(e.target);
    if (form.attr('method')) {
     method = form.attr('method').toUpperCase();
     if (method === 'POST' || method == 'PUT' || method == 'DELETE') {
      form.not(':has(input#' + param + ')').append(
       '<input type="hidden" id="' + param + '" name="' + param + '" value="' + token + '" />'
       );
      }
    }
  });

  j('<input>').attr('type','hidden').attr('value',token).attr('name',param).appendTo('form');

  j(document).ready(function() {
    // Check if it's a page with an address form
    if(j("form#checkout").length != 0 || (j("form#estimate_shipping_form").length != 0 && j('form#estimate_shipping_results').length == 0) || (j('form#address').length != 0)) {
      var geolocation = localStorage['geolocation'];

      if (geolocation) {
        Jumpseller.fillWithGeoLocation(JSON.parse(geolocation));
      }
      else {
        if (Jumpseller.isMobile()) {
          Jumpseller.getMobileLocation();
        }
        else {
          Jumpseller.getIPLocation();
        }
      }
    }
  });
});

// deprecated
function getRegions(select_id, selectedRegion, lat, lng) {
  var select_country = $('#' + select_id + '_country');
  var countryCode = select_country.val();
  var regionSelectID = '#' + select_id + '_region';
  Jumpseller.getRegions(regionSelectID, countryCode, selectedRegion, lat, lng);
}

// DEBOUNCE - Underscore.js
//
// Returns a function, that, as long as it continues to be invoked, will not
// be triggered. The function will be called after it stops being called for
// N milliseconds. If `immediate` is passed, trigger the function on the
// leading edge, instead of the trailing.
function debounce(func, wait, immediate) {
  var timeout;
  return function() {
    var context = this, args = arguments;
    var later = function() {
      timeout = null;
      if (!immediate) func.apply(context, args);
    };
    var callNow = immediate && !timeout;
    clearTimeout(timeout);
    timeout = setTimeout(later, wait);
    if (callNow) func.apply(context, args);
  };
};
