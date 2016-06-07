# minerstats

Roll your own copy of this -- https://hmage.net/minerstats.php

And this -- https://grafana.hmage.net/dashboard/db/mining-profitability

Requirements:
 * graphite -- https://github.com/graphite-project/graphite-web
 * memcached -- https://github.com/memcached/memcached
 * memcached module for php5 -- http://pecl.php.net/package/memcached

TLDR on Debian:
```bash
sudo apt-get install memcached graphite-carbon php5-memcached
git clone https://github.com/hmage/minerstats
cd minerstats
php tographite.php
```

Put tographite.php into cron to run every minute, boom, you're done.

You'll get per-minute data submissions to minerstats.[pool].[algo] with payrate in mBTC/MH/Day and per-device payrate depending on their hashrate.

Running instance is located here: https://graphite.hmage.net/
