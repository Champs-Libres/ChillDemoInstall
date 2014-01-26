<?php

namespace CL\CLHistoryBundle\Listener;

use Doctrine\ORM\Event\LifecycleEventArgs;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use CL\CLHistoryBundle\Entity\IsHistoryContainer;
use CL\CLHistoryBundle\Repository\RepositoryInterface;

/**
 * Description of CreationListener
 *
 * @author julien.fastre@champs-libres.coop
 */
class CreationListener implements ContainerAwareInterface {
    
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

    public function prePersist(LifecycleEventArgs $args) {
        
        $entity = $args->getEntity();
        
        if ($entity instanceof IsHistoryContainer) {
            if ($entity->getHistoryId() === null) {
                $id = $this->repository->create($entity);
                $entity->setHistoryId($id);
            }
        }
    }

    

}
