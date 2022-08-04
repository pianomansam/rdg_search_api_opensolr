<?php

namespace Drupal\rdg_search_api_opensolr\Plugin\SolrConnector;

use Drupal\search_api_solr\Plugin\SolrConnector\StandardSolrConnector;
use Drupal\search_api_solr\SolrConnector\BasicAuthTrait;

/**
 * OpenSolr connector.
 *
 * @SolrConnector(
 *   id = "rdg_basic_auth_opensolr",
 *   label = @Translation("RDG Opensolr with Basic Auth"),
 *   description = @Translation("A connector usable for Solr installations managed through opensolr that uses basic auth.")
 * )
 */
class BasicAuthOpensolrSolrConnector extends StandardSolrConnector {

  use BasicAuthTrait;

  /**
   * {@inheritdoc}
   */
  public function pingServer() {
    return $this->pingCore();
  }

}
