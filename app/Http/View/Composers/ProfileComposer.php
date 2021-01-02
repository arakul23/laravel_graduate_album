<?php


namespace App\Http\View\Composers;

use App\Department;
use App\Faculty;
use Illuminate\View\View;

class ProfileComposer
{
    /**
     * The user repository implementation.
     *
     */
    protected $users;

    /**
     * Create a new profile composer.
     *
     * @return void
     */
    public function __construct()
    {
        // Dependencies automatically resolved by service container...
    }

    /**
     * Bind data to the view.
     *
     * @param View $view
     * @return void
     */
    public function compose(View $view)
    {
        $department = new Department();
        $faculty = new Faculty();

        $facultiesByViews = $faculty->byViews();
        $departmentsByViews = $department->byViews();

        $view->with([
            'facultiesByViews' => $facultiesByViews,
            'departmentsByViews' => $departmentsByViews
        ]);
    }
}
