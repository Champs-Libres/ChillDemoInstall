<?php

namespace CL\CLHistoryBundle\Listener;

use Doctrine\ORM\Event\LifecycleEventArgs;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use CL\CLHistoryBundle\Entity\IsHistoryContainer;
use CL\CLHistoryBundle\Repository\RepositoryInterface;
use CL\CLHistoryBundle\Entity\HasHistory;
use CL\CLHistoryBundle\Entity\UserHistory;
use Symfony\Component\Security\Core\User\User;

/**
 * Description of CreationListener
 *
 * @author julien.fastre@champs-libres.coop
 */
class UpdateListener implements ContainerAwareInterface {
    
    /**
     *
     * @var Symfony\Component\DependencyInjection\ContainerInterface 
     */
    private $container;
    
    /**
     *
     * @var CL\CLHistoryBundle\Repository\RepositoryInterface 
     */
    private $repository;
    
    public function __construct(RepositoryInterface $repository) {
        $this->repository = $repository;
    }
    
    public function setContainer(ContainerInterface $container = null) {
        $this->container = $container;
    }

    public function postUpdate(LifecycleEventArgs $args) {
        
        $entity = $args->getEntity();
        
        if ($entity instanceof HasHistory) {
            
            $datetime = new \DateTime();
            $user = $this->container->get('security.token')
                  ->getUser();
            
            if ($user instanceof UserHistory) {
                $userid = $user->getUserHistoryId();
            } elseif ($user instanceof User) {
                $userid = $user->getUsername();
            } else {
                throw new Exception('you should implements either '
                      . 'Symfony\Component\Security\Core\User\User or '
                      . 'CLHistoryBundle\Entity\UserHistory on your '
                      . 'user class');
            }
            
            foreach($entity->getHistory() as $history) {
                
            }
        }
    }

    

}
