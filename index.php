<?php

require_once "aws/experiment.php";

$experiment = new aws\Experiment($_REQUEST);

print_r($experiment->get_clean_params());
