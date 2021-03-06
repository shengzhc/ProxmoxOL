<?php

/**
 * ProxmoxOL PHP API
 *
 * @license http://opensource.org/licenses/MIT The MIT License.
 */

namespace ProxmoxOL;

// /api2/json/pools
class Pools
{
  /**
    * Read system log
    * GET /api2/json/pools
  */
  public function Pools()
  {
      return Request::Request("/pools");
  }
  /**
    * Read system log
    * GET /api2/json/pools/{poolid}
    * @param string   $poolid
  */
  public function PoolsID($poolid)
  {
      return Request::Request("/pools/$poolid");
  }
}
