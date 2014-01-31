<?php


namespace CL\CLHistoryBundle\Entity;

/**
 * If you want to use special user id in your database, you should
 * implements this interface to your User class.
 * 
 * If your user class does not implement this class, the username
 * will be used instead.
 * 
 * @author julien.fastre@champs-libres.coop
 */
interface UserHistory {
    
    /**
     * @return mixed the user id which should be stored in the history db
     */
    public function getUserHistoryId();
    
}
