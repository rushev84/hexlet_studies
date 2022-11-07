<?php

$companies = [{"id":61,"name":"Adams-Reichel","phone":"989.896.1862"},

    $page = $request->getQueryParam('page', 1);
    $per = $request->getQueryParam('per', 5);

    $chunk = array_slice($companies, $page - 1, $per);

    // print_r($chunk);

    return $response->write(json_encode($chunk));