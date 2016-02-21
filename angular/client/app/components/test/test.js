import angular from 'angular';
import 'angular-ui-router';
import testComponent from './test.component';

let testModule = angular.module('test', [
    'ui.router'
  ])
  .config(($stateProvider) => {
    $stateProvider
    .state('test', {
      url: '/test',
      template: '<test></test>'
    })
  })
  .directive('test', testComponent);

export default testModule;
