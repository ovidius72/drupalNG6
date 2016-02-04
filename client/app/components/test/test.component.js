import template from './test.html!text';
import controller from './test.controller';

let testComponent = function(){
	return {
		template,
		controller,
		restrict: 'E',
		controllerAs: 'vm',
		scope: {},
		bindToController: true
	};
};

export default testComponent;
