'use strict';

/* jasmine specs for controllers go here */

describe('dataListCtrl', function(){

  beforeEach(module('dataApp'));

  it('should create "datas" model with 3 datas', inject(function($controller) {
    var scope = {},
        ctrl = $controller('dataListCtrl', {$scope:scope});

    expect(scope.datas.length).toBe(100);
  }));

  // This Test should Verify 100 Entries from Jsonp Data
  // Before each test we tell Angular to load the datacatApp module.
  // We ask Angular to inject the $controller service into our test function
  // We use $controller to create an instance of the PhoneListCtrl
  // With this instance, we verify that the datas array property on the scope contains three records.

});
