<?php

	namespace Gedcomx\Rs\Client\Options;

	use Guzzle\Http\Message\Request;

	interface StateTransitionOption {

		/**
		 * An option for modifying a state transition.
		 */
		public function apply(Request $request);

	}