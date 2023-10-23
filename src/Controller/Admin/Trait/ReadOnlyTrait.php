<?php
namespace App\Controller\Admin\Trait;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;

trait  ReadOnlyTrait
{

    public function configureActions(Actions $actions): Actions
    {
        $actions
            ->setPermission(Action::NEW, 'ROLE_USER')
            ->setPermission(Action::DELETE, 'ROLE_ADMIN');
//        $actions->disable(Action::DELETE);

       return  $actions;
    }
}



