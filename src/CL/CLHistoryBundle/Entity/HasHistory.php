<?php

namespace CL\CLHistoryBundle\Entity;

/**
 *
 * @author julien.fastre@champs-libres.coop
 */
interface HasHistory {

    /**
     * retrieve the modified params of the
     * entity.
     * 
     * History should be an array with the following scheme :
     * 
     * array (
     *      //history 1
     *      array(
     *          'action' =>  'create', //use the event you want
     *          'old' => array (
     *              'param0' => 'oldValue',
     *              'param1' => 'oldValue'
     *              ),
     *          'new' => array (
     *              'param0' => 'newValue',
     *              'param1' => 'newValue'
     *      )
     * 
     * )
     * 
     * @return array
     */
    public function getHistory();

    /**
     * If the history must be linked in another entity, 
     * this function must return the entity which contains
     * the history.
     * 
     * eg. : an appointment is created, but this should appears in 
     * the person who is concerned with the appointment.
     * 
     * Those containers may be multiple.
     * 
     * Should return an array of one or more container.
     * 
     * @return array of mixed
     */
    public function getParentContainers();

    /**
     * @return string
     */
    public function getEntityName();

    /**
     * @return int
     */
    public function getVersion();
}
