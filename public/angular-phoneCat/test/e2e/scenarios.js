'use strict';

/* http://docs.angularjs.org/guide/dev_guide.e2e-testing */
describe('dataApp', function(){

  describe('dataListCtrl', function() {

    beforeEach(function(){
      browser.get('app/index.html');
    });

    it('should filter the data list as a user types into the search box', function(){

      var dataList = element.all(by.repeater('data in datas'));
      var query = element(by.model('query'));

      expect(dataList.count().toBe(101));


    });
  });
});
