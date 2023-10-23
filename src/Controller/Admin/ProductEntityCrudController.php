<?php

namespace App\Controller\Admin;

use App\Entity\Product;
use App\Entity\ProductEntity;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;


class ProductEntityCrudController extends AbstractCrudController
{
    use Trait\ReadOnlyTrait;
    public static function getEntityFqcn(): string
    {
        return ProductEntity::class;
    }
    public  function configureCrud(Crud $crud): Crud
    {
        return $crud->setDefaultSort(['name'=> 'asc'],
           );
    }



    public function configureFields(string $pageName): iterable
    {
        yield TextField::new('name','Название');
        yield TextField::new('type','Тип');
        yield TextField::new('opisanie','Описание');
        yield MoneyField::new('price',"Цена")->setCurrency('BYN');
        yield IntegerField::new('kolvo',"Штук");




    }

}
