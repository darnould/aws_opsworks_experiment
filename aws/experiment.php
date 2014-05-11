<?php

namespace aws {
    class Experiment {
        private $request;

        function __construct($request) {
            $this->request = $request;
        }

        function get_clean_params() {
            return $this->clean($this->request);
        }

        function clean($array) {
            $clean_request = array();

            foreach ( $array as $key => $value ) {
                $clean_request[htmlspecialchars($key)] = is_array($value) ? $this->clean($value)
                                                                          : htmlspecialchars($value);
            }

            return $clean_request;
        }
    }
}
