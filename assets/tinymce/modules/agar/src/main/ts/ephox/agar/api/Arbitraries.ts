import Generators from './Generators';
import ArbContent from '../arbitrary/ArbContent';
import { Fun } from '@ephox/katamari';
import Jsc from '@ephox/wrap-jsverify';

var scenario = function (component, overrides, exclusions) {
  // Note, in some environments, scenarios will not work, if setting
  // the arbitrary html involves some normalisation.
  var arbitrary = content(component, overrides);
  var generator = arbitrary.generator.flatMap(function (root) {
    return Generators.selection(root, exclusions).map(function (selection) {
      return {
        root: Fun.constant(root),
        selection: Fun.constant(selection)
      };
    });
  });

  return Jsc.bless({
    generator: generator
  });
};

var content = function (component, overrides?) {
  return ArbContent.arbOf(component, overrides);
};

export default {
  scenario: scenario,
  content: content
};