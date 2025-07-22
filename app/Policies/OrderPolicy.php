<?php

namespace App\Policies;

use App\Models\Admin;
use App\Models\Order;
use App\Models\User;

class OrderPolicy
{
    public function viewAny(Admin $admin): bool
    {
        return true;
    }

    public function view(Admin $admin, Order $order): bool
    {
        return true;
    }

    public function update(Admin $admin, Order $order): bool
    {
        return true;
    }
} 