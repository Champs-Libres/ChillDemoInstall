<?php

namespace CL\CLHistoryBundle\Entity;

/**
 *
 * @author julien.fastre@champs-libres.coop
 */
interface IsHistoryContainer {

    /**
     * a string which give information about the domain of an object.
     * 
     * Will be the collection name in the MongoDB driver
     */
    public function getDomain();

    public function getHistoryId();

    public function setHistoryId($id);

}
