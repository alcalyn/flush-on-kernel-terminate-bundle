<?php

namespace Alcalyn\FlushOnKernelTerminateBundle\EventListener;

use Doctrine\ORM\EntityManager;

class KernelTerminateListener
{
    /**
     * @var EntityManager
     */
    private $em;
    
    /**
     * @param EntityManager $em
     */
    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }
    
    /**
     * Flush on kernel terminate.
     */
    public function onKernelTerminate()
    {
        if ($this->em->isOpen()) {
            $this->em->flush();
            // That was not so hard... And you need a bundle to do that! Poor guy...
        }
    }
}
