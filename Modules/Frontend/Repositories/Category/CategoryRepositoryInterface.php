<?php
namespace Modules\Frontend\Repositories\Category;

interface CategoryRepositoryInterface {

    public function jobsBelongsToCategory($cat_id);

    public function getCateByView();

}