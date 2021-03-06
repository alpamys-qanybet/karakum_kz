// Generated by CoffeeScript 1.4.0
(function() {

  angular.module('tmg').controller('MainCtrl', [
    '$scope', '$rootScope', '$cookies', '$locales', function($scope, $rootScope, $cookies, $locales) {
      var langProblem;
      $rootScope.covering = true;
      $locales.changeLang($locales.current());
      $scope.navs = [
        {
          name: 'about',
          url: 'about'
        }, {
          name: 'service',
          url: 'service'
        }, {
          name: 'technology',
          url: 'technology'
        }, {
          name: 'equipment',
          url: 'equipment'
        }, {
          name: 'policy',
          url: 'policy'
        }, {
          name: 'certificate',
          url: 'certificate'
        }, {
          name: 'contact',
          url: 'contact'
        }
      ];
      $rootScope.equipments = [
        {
          product: 'ZJ90',
          titleEn: 'drilling rig - 2 items',
          titleRu: 'буровая установка - 2 шт',
          img: 'eq0.jpg'
        }, {
          product: 'ZJ70',
          titleEn: 'drilling rig – 10 items',
          titleRu: 'буровая установка – 10 шт',
          img: 'eq1.jpg'
        }, {
          product: 'ZJ40',
          titleEn: 'mobile drilling rig – 4 items',
          titleRu: 'мобильная буровая установка – 4 шт',
          img: 'eq2.jpg'
        }, {
          product: 'ZJ30',
          titleEn: 'mobile drilling rig – 2 items',
          titleRu: 'мобильная буровая установка – 2 шт',
          img: 'eq3.jpg'
        }, {
          product: 'ZJ20',
          titleEn: 'mobile drilling rig – 3 items',
          titleRu: 'мобильная буровая установка – 3 шт',
          img: 'eq4.jpg'
/*          
        }, {
          product: 'SPC-600ST',
          titleEn: 'mobile drilling rig',
          titleRu: 'мобильная буровая установка',
          img: 'eq5.jpg'
*/
        }
      ];
      $rootScope.certificates = [];
/*     
      $rootScope.certificates['ru'] = [{
        name: 'ГОСТ Р ИСО 9001-2015 (ISO 9001:2015)'
      }, {
        name: 'ГОСТ 54934-2012 (OHSAS 18001:2007)'
      }, {
        name: 'ГОСТ Р ИСО 14001-2007 (ISO14001:2004)'
      }];
      $rootScope.certificates['en'] = [{
        name: 'GOST R ISO 9001-2015 (ISO 9001:2015)'
      }, {
        name: 'GOST 54934-2012 (OHSAS 18001:2007)'
      }, {
        name: 'ГОСТ Р ИСО 14001-2007 (ISO14001:2004)'
      }];
*/
      $rootScope.certificates['ru'] = [{
        name: 'IADC. QUIPPO OIL & GAS Infrastucture. Свидетельство о членстве 2016'
      }, {
        name: 'IWCF. QUIPPO OIL & GAS Infrastucture. Свидетельство о членстве 2016'
      }, {
        name: 'ГОСТ Р ИСО 9001-2015 (ISO 9001:2015)'
      }, {
        name: 'ГОСТ 54934-2012 (OHSAS 18001:2007)'
      }, {
        name: 'ГОСТ Р ИСО 14001-2007 (ISO 14001:2004)'
      }];
      $rootScope.certificates['en'] = [{
        name: 'IADC. QUIPPO OIL & GAS Infrastucture. Certificate of membership 2016'
      }, {
        name: 'IWCF. QUIPPO OIL & GAS Infrastucture. Certificate of membership 2016'
      }, {
        name: 'GOST R ISO 9001-2015 (ISO 9001:2015)'
      }, {
        name: 'GOST 54934-2012 (OHSAS 18001:2007)'
      }, {
        name: 'GOST R ISO 14001-2007 (ISO 14001:2004)'
      }];
      langProblem = function(lng) {
        if (lng === 'ru') {
          jQuery('.heading h2').css('font-weight', '300');
          jQuery('.header-fixed .header-v5.header-fixed-shrink .navbar-nav > li > a').css('font-weight', '300');
          return jQuery('.header-v5 .navbar-default .navbar-nav > li > a').css('font-weight', '300');
        } else {
          jQuery('.header-v5 .navbar-default .navbar-nav > li > a').css('font-weight', '400');
          jQuery('.header-fixed .header-v5.header-fixed-shrink .navbar-nav > li > a').css('font-weight', '400');
          return jQuery('.heading h2').css('font-weight', '400');
        }
      };
      jQuery(document).ready(function() {
        return langProblem($locales.current());
      });
      $rootScope.currentUrl = function() {
        return document.URL;
      };
      return $scope.$watch(function() {
        return $cookies.get('lng');
      }, function(newvalue, oldvalue) {
        return langProblem(newvalue);
      });
    }
  ]);

}).call(this);
