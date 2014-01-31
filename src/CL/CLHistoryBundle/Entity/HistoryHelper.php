<?php


namespace CL\CLHistoryBundle\Entity;

/**
 * This class may help you in registering 
 * modification inside your HasHistory classes.
 * It contains methods useful for tracking change and
 * produce the array needed for your method HasHistory::getHistory
 *
 * @author julien.fastre@champs-libres.coop
 */
class HistoryHelper {
    
    /**
     *
     * @var string
     */
    private $action = null;
    
    private $changes = array(
       'old' => array(),
       'new' => array()
    );
    
    /**
     * 
     * @param string $action
     */
    public function setAction($action) {
        $this->action = $action;
    }
    
    public function registerChange($propertyName, $oldValue, $newValue) {
        $this->changes['old'][$propertyName] = $oldValue;
        $this->changes['new'][$propertyName] = $newValue;
    }
    
    public function toArray() {
        $this->changes['action'] = $this->action;
        
        return $this->changes;
    }
    
}
