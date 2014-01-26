<?php

namespace CL\CLHistoryBundle\Repository;

use CL\CLHistoryBundle\Entity\IsHistoryContainer;
use CL\CLHistoryBundle\Entity\HasHistory;

/**
 *
 * @author julien.fastre@champs-libres.coop
 */
interface RepositoryInterface {
    
    /**
     * @return string the id of the new created container
     */
    public function create(IsHistoryContainer $entity) ;
    
    /**
     * @return CL\CLHistoryBundle\Entity\IsHistoryContainer;
     * @param string $domain the domain
     * @param string $id the id of the requested IsHistoryContainer
     */
    public function getContainer($domain, $id);
    
}
