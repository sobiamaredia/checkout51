<?php

namespace Container0IPLjql;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getKnpPaginator_Subscriber_SortableService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'knp_paginator.subscriber.sortable' shared service.
     *
     * @return \Knp\Component\Pager\Event\Subscriber\Sortable\SortableSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/Event/Subscriber/Sortable/SortableSubscriber.php';

        return $container->privates['knp_paginator.subscriber.sortable'] = new \Knp\Component\Pager\Event\Subscriber\Sortable\SortableSubscriber();
    }
}
