<?php

return [

    'GET:' => 'main/index:main',

    'POST:send/(.*)/(.*)' => 'main/send/$1/$2:main',
    'POST:send/(.*)' => 'main/send/$1:main',

    'GET:update/([0-9]+)' => 'main/update/$1:main',

    'GET:more-messages/([0-9]+)/([0-9]+)' => 'main/moreMessages/$1/$2:main',

    'POST:update-messages-time' => 'main/updateMessagesPostTime:main',
];