import template from './hero.html!text';
import controller from './hero.controller';

let heroComponent = function(){
	return {
		template,
		controller,
		restrict: 'E',
		controllerAs: 'vm',
		scope: {},
		bindToController: true
	};
};

export default heroComponent;
